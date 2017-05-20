<?php
namespace SAV\SavFiltersMvc\Filters;

/**
 * Copyright notice
 *
 * (c) 2016 Laurent Foulloy <yolf.typo3@orange.fr>
 *
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
 * This copyright notice MUST APPEAR in all copies of the script
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ClassNamingUtility;
use SAV\SavFiltersMvc\Filters\AbstractFilter;

/**
 * Alphabetic filter
 */
class AlphabeticFilter extends AbstractFilter
{

    /**
     * Render
     *
     * @return void
     */
    public function renderFilter()
    {
        // Gets the model class name
        $modelClassName = self::getFilterSetting('modelName');

        // Gets the repository
        $repositoryClassName = ClassNamingUtility::translateModelNameToRepositoryName($modelClassName);
        $repository = $this->objectManager->get($repositoryClassName);

        // Gets the rows
        $rows = $repository->findAll();

        // Inits the letters array
        $values = array();
        foreach (range('A', 'Z') as $letter) {
            $values[$letter] = 0;
        }

        // Sets the letters array from the rows
        $fieldNames = explode(',', self::getFilterSetting('fieldName'));
        foreach ($fieldNames as $fieldName) {
            foreach ($rows as $row) {
                $getter = 'get' . GeneralUtility::underscoredToUpperCamelCase($fieldName);
                if (method_exists($modelClassName, $getter)) {
                    $fieldValue = $row->$getter();
                    $values[strtoupper($fieldValue[0])] = 1;
                } else {
                    //@TODO Add error processing
                }
            }
        }

        // Gets the seachFields and adds a search box if any
        $searchFields = self::getFilterSetting('searchFields');
        if (! empty($searchFields)) {
            $this->controller->getView()->assign('addSearchBox', 1);
        }

        $this->controller->getView()->assign('values', $values);
        $this->controller->getView()->assign('filterContext', self::$filterContext);
        $this->controller->getView()->assign('filterName', $this->getFilterName());
    }

    /**
     * Adds the filter WHERE clause part to the query
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
     */
    public static function filterWhereClause($query)
    {
        // Gets the parameters from the filter context
        $arguments = self::getParameterFromFilterContext('selected');
        $searchValue = self::getParameterFromFilterContext('searchValue');

        // Builds the query constraints
        if (strlen($arguments) == 1 && $arguments >= 'A' && $arguments <= 'Z') {
            // A letter is selected
            $fieldNames = explode(',', self::getFilterSetting('fieldName'));
            $constraints = array();
            foreach ($fieldNames as $fieldName) {
                $constraints[] = $query->like($fieldName, '%' . $arguments . '%');
            }
            return $query->logicalOr($constraints);
        } elseif ($arguments == 'all') {
            // All is selected, return a constraint always true
            $constraints = array();
            $constraints[] = $query->greaterThan('uid', 0);
            return $query->logicalOr($constraints);
        } elseif (! empty($searchValue)) {
            // A search is requested
            $searchFields = explode(',', self::getFilterSetting('searchFields'));
            $constraints = array();
            foreach ($searchFields as $searchField) {
                $constraints[] = $query->like($searchField, '%' . $searchValue . '%');
            }
            return $query->logicalOr($constraints);
        } else {
            return null;
        }
    }
}
?>