<?php

namespace SAV\SavCalendarMvc\Domain\Repository;
/**
*  Copyright notice
*
*  (c) 2017 Laurent Foulloy <yolf.typo3@orange.fr>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script
*/

/**
 * Repository for the Event model in the extension SavCalendarMvc
 *
 */
class EventRepository extends \SAV\SavLibraryMvc\Domain\Repository\DefaultRepository
{

    /**
     * Defines the where clause
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return void
     */
    protected function whereClause1($query)
    {
        $whereClauseConstraints = $query->greaterThanOrEqual('date_end', $this->createQuery()->statement('SELECT UNIX_TIMESTAMP(NOW()) AS date_end')->execute()[0]->getDateEnd());
        return $whereClauseConstraints;
    }

    /**
     * Defines the order by clause
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return void
     */
    protected function orderByClause1($query)
    {
        $query->setOrderings(array('date_begin' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
    }


    /**
     * Defines the order by clause
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return void
     */
    protected function orderByClause2($query)
    {
        $query->setOrderings(array('date_begin' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING));
    }

}
?>

