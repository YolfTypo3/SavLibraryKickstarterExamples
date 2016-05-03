<?php

namespace SAV\SavLibrarymvcExample0\Domain\Model;
/**
*  Copyright notice
*
*  (c) 2016  <yolf.typo3@orange.fr>
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
 * Table4 model for the extension SavLibrarymvcExample0
 *
 */
class Table4 extends \SAV\SavLibraryMvc\Domain\Model\DefaultModel
{
    /**
     * The field1 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field1;

    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Getter for field1.
     *
     * @return string
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Setter for field1.
     *
     * @param string $field1
     * @return void
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;
    }


}
?>

