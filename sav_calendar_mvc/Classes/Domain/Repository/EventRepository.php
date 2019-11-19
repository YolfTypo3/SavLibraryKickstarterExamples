<?php

namespace YolfTypo3\SavCalendarMvc\Domain\Repository;

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

/**
 * Repository for the Event model in the extension SavCalendarMvc
 *
 */
class EventRepository extends \YolfTypo3\SavLibraryMvc\Domain\Repository\DefaultRepository
{

    /**
     * Defines the where clause
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return void
     */
    protected function whereClause1(\TYPO3\CMS\Extbase\Persistence\QueryInterface $query)
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
    protected function orderByClause1(\TYPO3\CMS\Extbase\Persistence\QueryInterface $query)
    {
        $query->setOrderings(['date_begin' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
    }

    /**
     * Defines the order by clause
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return void
     */
    protected function orderByClause2(\TYPO3\CMS\Extbase\Persistence\QueryInterface $query)
    {
        $query->setOrderings(['date_begin' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING]);
    }
}
?>

