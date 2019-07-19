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

use YolfTypo3\SavFiltersMvc\Filters\AbstractFilter;

/**
 * Search filter
 */
class SearchFilter extends AbstractFilter
{
    /**
     * Render
     *
     * @return void
     */
    public function renderFilter()
    {
        // Gets the seachFields and adds a search box if any
        $searchFields = self::getFilterSetting('searchFields');
        if (! empty($searchFields)) {
            $this->controller->getView()->assign('addSearchBox', 1);
        }

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
        $searchValue = self::getParameterFromFilterContext('searchValue');

        // Builds the query constraints
        if (! empty($searchValue)) {
            // A search was requested
            $searchFields = explode(',', self::getFilterSetting('searchFields'));
            $constraints = [];
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