<?php

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

namespace YolfTypo3\SavLibrarymvcExample0\Domain\Model;

/**
 * Table3 model for the extension SavLibrarymvcExample0
 *
 */
use YolfTypo3\SavLibraryMvc\Domain\Model\DefaultModel;

class Table3 extends DefaultModel
{
    /**
     * @var \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table3Repository
     */
    protected $repository = null;

    /**
     * The <field1> variable.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("String")
     */
    protected $field1;

    /**
     * The <field2> variable.
     *
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("DateTime")
     * @TYPO3\CMS\Extbase\Annotation\Validate("YolfTypo3\SavLibraryMvc\Domain\Model\Validator\Empty")
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
     * Getter for property <field1>.
     *
     * @return string
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Setter for property <field1>.
     *
     * @param string $field1
     * @return void
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;
    }

    /**
     * Getter for property <field2>.
     *
     * @return \DateTime
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Setter for property <field2>.
     *
     * @param \DateTime $field2
     * @return void
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
    }

}

