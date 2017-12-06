<?php
namespace YolfTypo3\SavLibraryPlus\Queriers;

/**
 * Copyright notice
 *
 * (c) 2011 Laurent Foulloy (yolf.typo3@orange.fr)
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use YolfTypo3\SavLibraryPlus\Controller\FlashMessages;
use YolfTypo3\SavLibraryPlus\Controller\AbstractController;
use YolfTypo3\SavLibraryPlus\Managers\UriManager;
use YolfTypo3\SavLibraryPlus\Managers\FieldConfigurationManager;

/**
 * Default update Querier.
 *
 * @package SavLibraryPlus
 * @version $ID:$
 */
class FormAdminUpdateQuerier extends UpdateQuerier
{

    /**
     * The validation array
     *
     * @var array
     */
    protected $validation;

    /**
     * Executes the query
     *
     * @return none
     */
    protected function executeQuery()
    {
        // Gets the library configuration manager
        $libraryConfigurationManager = $this->getController()->getLibraryConfigurationManager();

        // Gets the view configuration
        $viewIdentifier = $libraryConfigurationManager->getViewIdentifier('formView');
        $viewConfiguration = $libraryConfigurationManager->getViewConfiguration($viewIdentifier);

        // Gets the active folder key
        $activeFolderKey = $this->getController()
            ->getUriManager()
            ->getFolderKey();
        if ($activeFolderKey === NULL) {
            reset($viewConfiguration);
            $activeFolderKey = key($viewConfiguration);
        }

        // Sets the active folder
        $activeFolder = $viewConfiguration[$activeFolderKey];

        // Creates the field configuration manager
        $fieldConfigurationManager = GeneralUtility::makeInstance(FieldConfigurationManager::class);
        $fieldConfigurationManager->injectController($this->getController());

        // Gets the fields configuration for the folder
        $folderFieldsConfiguration = $fieldConfigurationManager->getFolderFieldsConfiguration($activeFolder, TRUE);

        // Gets the POST variables
        $postVariables = $this->getController()
            ->getUriManager()
            ->getPostVariables();
        unset($postVariables['formAction']);

        $this->validation = $postVariables['validation'];
        unset($postVariables['validation']);

        // Gets the main table
        $mainTable = $this->getQueryConfigurationManager()->getMainTable();
        $mainTableUid = UriManager::getUid();

        // Initializes special marker array
        $markerItemsManual = array();
        $markerItemsAuto = array();

        // Processes the regular fields. Explode the key to get the table and field names
        $variablesToUpdate = array();
        if (is_array($this->validation)) {
            foreach ($this->validation as $fieldKey => $validated) {
                if ($validated) {
                    // Sets the field configuration
                    $this->fieldConfiguration = $this->searchConfiguration($folderFieldsConfiguration, $fieldKey);

                    $tableName = $this->fieldConfiguration['tableName'];
                    $fieldName = $this->fieldConfiguration['fieldName'];
                    $fieldType = $this->fieldConfiguration['fieldType'];
                    $fullFieldName = $tableName . '.' . $fieldName;

                    // Adds the cryted full field name
                    $this->fieldConfiguration['cryptedFullFieldName'] = $fieldKey;

                    // Checks if the field was posted. It may occurs that a field is not in the _POST variable.
                    // A special case is when double selector boxes are displayed with the attribute singleWindow = 1 which generates a select multiple.
                    if (! is_array($postVariables[$fieldKey])) {
                        continue;
                    }

                    // Gets the field value and uid
                    $uid = key($postVariables[$fieldKey]);
                    $value = current($postVariables[$fieldKey]);

                    // Adds the uid to the configuration
                    $this->fieldConfiguration['uid'] = $uid;

                    // Makes pre-processings.
                    self::$doNotAddValueToUpdateOrInsert = FALSE;
                    $value = $this->preProcessor($value);

                    // Gets the rendered value
                    $fieldConfiguration = $this->fieldConfiguration;
                    $fieldConfiguration['value'] = $value;
                    $className = 'YolfTypo3\\SavLibraryPlus\\ItemViewers\\General\\' . $fieldConfiguration['fieldType'] . 'ItemViewer';
                    $itemViewer = GeneralUtility::makeInstance($className);
                    $itemViewer->injectController($this->getController());
                    $itemViewer->injectItemConfiguration($fieldConfiguration);
                    $renderedValue = $itemViewer->render();
                    if ($renderedValue == $value) {
                        $markerValue = $renderedValue;
                    } else {
                        $markerValue = $renderedValue . ' (' . $value . ')';
                    }

                    // Sets the items markers
                    if ($uid === 0) {
                        $markerItemsManual = array_merge($markerItemsManual, array(
                            $fullFieldName => $markerValue
                        ));
                    } elseif ($uid > 0) {
                        $markerItemsAuto = array_merge($markerItemsAuto, array(
                            $fullFieldName => $markerValue
                        ));
                    } else {
                        self::$doNotAddValueToUpdateOrInsert = TRUE;
                    }

                    // Adds the variables
                    if (self::$doNotAddValueToUpdateOrInsert === FALSE) {
                        $variablesToUpdateOrInsert[$tableName][$uid][$fullFieldName] = $value;
                    }
                }
            }
        }

        // Injects the markers
        $markerContent = '';

        foreach ($markerItemsAuto as $markerKey => $marker) {
            $markerContent .= $markerKey . ' : ' . $marker . chr(10);
        }
        $this->getController()
            ->getQuerier()
            ->injectAdditionalMarkers(array(
            '###ITEMS_AUTO###' => $markerContent
        ));
        $markerContent = '';
        foreach ($markerItemsManual as $markerKey => $marker) {
            $markerContent .= $markerKey . ' : ' . $marker . chr(10);
        }
        $this->getController()
            ->getQuerier()
            ->injectAdditionalMarkers(array(
            '###ITEMS_MANUAL###' => $markerContent
        ));

        // Updates the fields if any
        if (empty($variablesToUpdateOrInsert) === FALSE) {
            $variableToSerialize = array();

            foreach ($variablesToUpdateOrInsert as $tableName => $variableToUpdateOrInsert) {
                if (empty($tableName) === FALSE) {
                    $variableToSerialize = $variableToSerialize + $variableToUpdateOrInsert;

                    // Updates the data
                    $key = key($variableToUpdateOrInsert);
                    $fields = current($variableToUpdateOrInsert);

                    if ($key > 0) {
                        $this->updateFields($tableName, $fields, $key);
                    }
                }
            }

            // Updates the _submitted_data_ field
            $shortFormName = AbstractController::getShortFormName();
            $variableToSerialize = $variableToSerialize + array(
                'validation' => $this->validation
            );
            $serializedVariable = serialize(array(
                $shortFormName => array(
                    'temporary' => $variableToSerialize
                )
            ));
            $this->updateFields($mainTable, array(
                '_submitted_data_' => $serializedVariable,
                '_validated_' => 1
            ), $mainTableUid);
            FlashMessages::addMessage('message.dataSaved');
        }

        if (empty($this->postProcessingList) === FALSE) {
            foreach ($this->postProcessingList as $postProcessingItem) {
                $this->fieldConfiguration = $postProcessingItem['fieldConfiguration'];
                $method = $postProcessingItem['method'];
                $value = $postProcessingItem['value'];
                $this->$method($value);
            }
        }
    }

    /**
     * Pre-processor which calls the method according to the type
     *
     * @param mixed $value
     *            Value to be pre-processed
     *
     * @return mixed
     */
    protected function preProcessor($value)
    {
        // Builds the field type
        $fieldType = $this->getFieldConfigurationAttribute('fieldType');
        if ($fieldType == 'ShowOnly') {
            $renderType = $this->getFieldConfigurationAttribute('renderType');
            $fieldType = (empty($renderType) ? 'String' : $renderType);
        }
        $fieldType = $this->getFieldConfigurationAttribute('fieldType');

        // If a validation is forced and addEdit is not set, a hidden field was added such that the configuration can be processed when saving but the field is not added nor inserted.
        if ($this->getFieldConfigurationAttribute('addvalidationifadmin') && (! $this->getFieldConfigurationAttribute('addedit') || ! $this->getFieldConfigurationAttribute('addeditifadmin'))) {
            self::$doNotAddValueToUpdateOrInsert = TRUE;
        }

        // Calls the verification method for the type if it exists
        $verifierMethod = 'verifierFor' . $fieldType;
        if (method_exists($this, $verifierMethod) && $this->$verifierMethod($value) !== TRUE) {
            self::$doNotAddValueToUpdateOrInsert = TRUE;
            self::$doNotUpdateOrInsert = TRUE;
            return $value;
        }

        // Builds the method name
        $preProcessorMethod = 'preProcessorFor' . $fieldType;

        // Gets the crypted full field name
        $cryptedFullFieldName = $this->fieldConfiguration['cryptedFullFieldName'];

        if (empty($this->validation[$cryptedFullFieldName])) {
            self::$doNotAddValueToUpdateOrInsert = TRUE;
        }

        // Calls the methods if it exists
        if (method_exists($this, $preProcessorMethod)) {
            $newValue = $this->$preProcessorMethod($value);
        } else {
            $newValue = $value;
        }

        // Checks if a required field is not empty
        if ($this->isRequired() && empty($newValue)) {
            self::$doNotUpdateOrInsert = TRUE;
            FlashMessages::addError('error.fieldRequired', array(
                $this->fieldConfiguration['label']
            ));
        }

        // Sets a post-processor for the email if any
        if ($this->getFieldConfigurationAttribute('mail')) {
            // Sets a post processor
            $this->postProcessingList[] = array(
                'method' => 'postProcessorToSendEmail',
                'value' => $value,
                'fieldConfiguration' => $this->fieldConfiguration
            );

            // Gets the row before processing
            $this->rows['before'] = $this->getCurrentRowInEditView();
        }

        // Calls the verifier if it exists
        $verifierMethod = $this->getFieldConfigurationAttribute('verifier');
        if (! empty($verifierMethod)) {
            if (! method_exists($this, $verifierMethod)) {
                self::$doNotAddValueToUpdateOrInsert = TRUE;
                self::$doNotUpdateOrInsert = TRUE;
                FlashMessages::addError('error.verifierUnknown');
            } elseif ($this->$verifierMethod($newValue) !== TRUE) {
                self::$doNotAddValueToUpdateOrInsert = TRUE;
                self::$doNotUpdateOrInsert = TRUE;
            }
        }

        return $newValue;
    }
}
?>
