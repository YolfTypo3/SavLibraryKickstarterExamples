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
use TYPO3\CMS\Core\Utility\ClassNamingUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use SAV\SavFiltersMvc\Filters\AbstractFilter;

/**
 * Alphabetic filter
 */
class MonthsFilter extends AbstractFilter
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

        // Inits the months array
        $values = array();
        $backwardMonths = self::getFilterSetting('backwardMonths');
        $forwardMonths = self::getFilterSetting('forwardMonths');
        for ($i = - $backwardMonths; $i < 12 + $forwardMonths; $i ++) {
            $monthName = ucfirst(strftime('%b', strtotime($i . 'months 01/01/2000')));
            $values[$i] = array(
                'label' => $monthName,
                'active' => 0,
            );
        }

        // Gets the rows
        $rows = $repository->findAll();

        // Gets the getter for the field
        $fieldName = self::getFilterSetting('fieldName');
        $getter = 'get' . GeneralUtility::underscoredToUpperCamelCase($fieldName);
        if (! method_exists($modelClassName, $getter)) {
            $this->addErrorMessage('error.unknownMethod', array(
                $this->getFilterName(),
                $fieldName . '()'
            ));
            return;
        }

        // Checks if the type of the field is \DateTime
        if ($rows->count() > 0 && ! $rows[0]->_getProperty($fieldName) instanceof \DateTime) {
            $this->addErrorMessage('error.typeMustBe', array(
                $this->getFilterName(),
                $fieldName,
                '\DateTime'
            ));
            return;
        }

        // Sets months from the rows
        foreach ($rows as $row) {
            // Gets the field value
            $fieldValue = $row->$getter();

            // Computes the interval in months from the begining of the year
            $differenceFromFirstDayOfYear = (new \DateTime('first day of January this year'))->diff($fieldValue);
            $intervalInMonths = (int) $differenceFromFirstDayOfYear->format('%R%m');

            // Marks the month as active if in the allowed range
            if ($intervalInMonths >= - $backwardMonths && $intervalInMonths < 12 + $forwardMonths) {
                $values[$intervalInMonths]['active'] = (new \DateTime('first day of January this year ' . $intervalInMonths . 'month'))->format('Y-m');
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
        $selected = self::getParameterFromFilterContext('selected');
        $searchValue = self::getParameterFromFilterContext('searchValue');

        // Builds the query constraints
        if ($selected !== null) {
            if ($selected == 'all') {
                // All is selected, return a constraint always true
                $constraints = array();
                $constraints[] = $query->greaterThan('uid', 0);
                return $query->logicalOr($constraints);
            } else {
                // A month is selected
                $currentMonthName = \DateTime::createFromFormat('Y-m', $selected)->format('F Y');

                $fieldName = self::getFilterSetting('fieldName');
                $constraints = array();
                $constraints[] = $query->logicalAnd(
                    $query->greaterThanOrEqual($fieldName, new \DateTime('first day of ' . $currentMonthName)),
                    $query->lessThan($fieldName, new \DateTime('first day of ' . $currentMonthName . ' 1 month'))
                );

                return $query->logicalOr($constraints);
            }

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