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
use SAV\SavFiltersMvc\Filters\AbstractFilter;

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