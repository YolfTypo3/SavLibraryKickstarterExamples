<?php

namespace YolfTypo3\SavLibrarymvcExample0\Domain\Repository;
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
    protected function orderByClauseForWhereTag1($query)
    {
        $query->setOrderings(array('field1' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
    }

    /**
     * Defines the order by clause associated with the whereTag "field1-"
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return void
     */
    protected function orderByClauseForWhereTag2($query)
    {
        $query->setOrderings(array('field1' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING));
    }

    /**
     * Returns the whereTag from its title
     *
     * @param string $title
     * @return void
     */
    public function getWhereTagByTitle($title) {
        $whereTags = array (
            'field1+' => 1,
            'field1-' => 2,
        );
        return $whereTags[$title];
    }
}
?>

