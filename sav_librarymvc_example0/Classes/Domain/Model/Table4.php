<?php

namespace YolfTypo3\SavLibrarymvcExample0\Domain\Model;

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
 * Table4 model for the extension SavLibrarymvcExample0
 *
 */
class Table4 extends \YolfTypo3\SavLibraryMvc\Domain\Model\DefaultModel
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

