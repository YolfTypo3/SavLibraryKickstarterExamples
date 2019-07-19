<?php
namespace YolfTypo3\SavFiltersMvc\Filters;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with TYPO3 source code.
 *
 * The TYPO3 project - inspiring people to share
 */

use TYPO3\CMS\Core\Utility\ClassNamingUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use YolfTypo3\SavFiltersMvc\Filters\AbstractFilter;

/**
 * Selectors filter
 */
class SelectorsFilter extends AbstractFilter
{
    const SELECTOR_BOX = 1;
    const SEARCH_BOX = 2;
    const SUBMIT_BUTTON = 3;

    /**
     * @var bool
     */
    protected static $keepWhereClause = true;

    /**
     * Render
     *
     * @return void
     */
    public function renderFilter()
    {
        // Initializes the items
        $items = [];

        // Gets the item settings
        $itemSettings = $this->getFilterSettings();
        foreach($itemSettings as $itemSetting) {
            $itemType = $itemSetting['item']['type'];
            $modelClassName = $itemSetting['item']['modelName'];
            $fieldName = $itemSetting['item']['fieldName'];

            switch ($itemType) {
                case self::SELECTOR_BOX:
                    // Gets the table name
                    $tableName = self::translateModelNameToTableName($modelClassName);

                    // Gets the TCA columns for the field name
                    $column = $GLOBALS['TCA'][$tableName]['columns'][$fieldName];

                    // Gets the foreign table if any
                    $foreignTable = $column['config']['foreign_table'];
                    if ($foreignTable) {

                        // Gets the repository
                        $repositoryClassName = ClassNamingUtility::translateModelNameToRepositoryName($modelClassName);
                        $repository = $this->objectManager->get($repositoryClassName);

                        // Gets the first row
                        $rows = $repository->createQuery()->setLimit(1)->execute();

                        // Gets the getter for the foreign field
                        $getter = 'get' . GeneralUtility::underscoredToUpperCamelCase($fieldName);
                        if (! method_exists($modelClassName, $getter)) {
                            $this->addErrorMessage(
                                'error.unknownMethod',
                                [
                                    $this->getFilterName(),
                                    $getter . '()'
                                ]
                            );
                            return;
                        }

                        // Gets the foreign model class name
                        if (isset($rows[0])) {
                            $foreignModelClassName = get_class($rows[0]->$getter());

                            // Gets the foreign repository
                            $repositoryClassName = ClassNamingUtility::translateModelNameToRepositoryName($foreignModelClassName);
                            $repository = $this->objectManager->get($repositoryClassName);

                            // Gets the rows
                            $rows = $repository->findAll();
                        } else {
                            $rows = [];
                        }

                        // Gets the field label
                        $fieldLabel = $GLOBALS['TCA'][$foreignTable]['ctrl']['label'];

                    }

                    $items[] = [
                        'type' => 'SelectorBox',
                        'values' => $rows,
                        'fieldName' => $fieldName,
                        'fieldLabel' => $fieldLabel,
                    ];
                    break;

                case self::SEARCH_BOX:
                    $items[] = [
                        'type' => 'SearchBox',
                        'fieldName' => $fieldName,
                    ];
                    break;

                case self::SUBMIT_BUTTON:
                    $items[] = [
                        'type' => 'SubmitButton',
                    ];
                    break;
            }

        }

        $this->controller->getView()->assign('items', $items);
        $this->controller->getView()->assign('filterContext', self::$filterContext);
        $this->controller->getView()->assign('filterName', $this->getFilterName());
    }

    /**
     * Adds the filter WHERE clause part to the query
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
     */
    public static function getFilterWhereClause($query)
    {

        $selectors = self::getParameterFromFilterContext('selectors');
        $searchValue = self::getParameterFromFilterContext('searchValue');

        $globalConstraints = [];
        if (!empty($selectors)) {
            // Builds the selectors constraints
            $selectorsConstraints = [];
            foreach ($selectors as $selectorKey => $selector) {
                if (!empty($selector)) {
                    $selectorsConstraints[] = $query->equals($selectorKey, $selector);
                }
            }
            if (!empty($selectorsConstraints)) {
                $globalConstraints[] = $query->logicalAnd($selectorsConstraints);
            }
        }

        if (!empty($searchValue)) {
            // Gets the search fields
            $searchFields = explode(',', self::getSearchFields());

            // Builds the search constraints
            $searchConstraints = [];
            foreach ($searchFields as $searchField) {
                $searchConstraints[] = $query->like($searchField, '%' . $searchValue . '%');
            }
            if (!empty($searchConstraints)) {
                $globalConstraints[] = $query->logicalOr($searchConstraints);
            }
        }

        // Builds the final constraints
        if (!empty($globalConstraints)) {
            return $query->logicalAnd($globalConstraints);
        } else {
            return null;
        }
    }

    /**
     * Gets the search fields in the settings
     *
     * @return string
     */
    public static function getSearchFields()  {
        foreach(self::getFilterSettingsFromSession() as $itemSetting) {
            if ($itemSetting['item']['type'] == self::SEARCH_BOX) {
                return $itemSetting['item']['fieldName'];
            }

        }
    }

}
?>