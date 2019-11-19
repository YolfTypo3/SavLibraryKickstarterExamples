<?php

namespace YolfTypo3\SavLibrarymvcExample0\Domain\Repository;

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
 * Repository for the Table1 model in the extension SavLibrarymvcExample0
 *
 */
class Table1Repository extends \YolfTypo3\SavLibraryMvc\Domain\Repository\DefaultRepository
{

    /**
     * Defines the order by clause associated with the whereTag "field1+"
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return void
     */
    protected function orderByClauseForWhereTag1(\TYPO3\CMS\Extbase\Persistence\QueryInterface $query)
    {
        $query->setOrderings(['field1' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
    }

    /**
     * Defines the order by clause associated with the whereTag "field1-"
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return void
     */
    protected function orderByClauseForWhereTag2(\TYPO3\CMS\Extbase\Persistence\QueryInterface $query)
    {
        $query->setOrderings(['field1' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING]);
    }

    /**
     * Returns the whereTag key from its title
     *
     * @param string $title
     * @return int
     */
    public function getWhereTagByTitle(string $title) : int
    {
        $whereTags = [
            'field1+' => 1,
            'field1-' => 2,
        ];
        return $whereTags[$title];
    }
}
?>

