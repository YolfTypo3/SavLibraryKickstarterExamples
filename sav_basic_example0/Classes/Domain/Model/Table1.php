<?php

namespace YolfTypo3\SavBasicExample0\Domain\Model;

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
 * Table1 model for the extension SavBasicExample0
 *
 */
class Table1 extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * The field1 variable.
     *
     * @var string
     */
    protected $field1;

    /**
     * The field2 variable.
     *
     * @var \DateTime
     */
    protected $field2;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->field2 = new \DateTime();
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

    /**
     * Getter for field2.
     *
     * @return \DateTime
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Setter for field2.
     *
     * @param \DateTime $field2
     * @return void
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
    }

}
?>

