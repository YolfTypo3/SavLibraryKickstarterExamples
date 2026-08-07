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
 * Table5 model for the extension SavLibrarymvcExample0
 *
 */
use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use YolfTypo3\SavLibraryMvc\Domain\Model\DefaultModel;
use YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6;
use YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table5Repository;

class Table5 extends DefaultModel
{
    /**
     * @var Table5Repository
     */
    protected $repository = null;

    #[Validate(validator: 'String')]
    /**
     * The <field1> variable.
     *
     * @var string
     */
    protected $field1;

    #[Lazy]
    #[Cascade(value: 'remove')]
    /**
     * The <field2> variable.
     *
     * @var ObjectStorage<Table6>
     */
    protected $field2;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->initializeObject();
    }

    /**
     * Object initializer.
     */
    public function initializeObject(): void
    {
        $this->field2 = new ObjectStorage();
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
    public function setField1($field1): void
    {
        $this->field1 = $field1;
    }


    /**
     * Getter for property <field2>.
     *
     * @return ObjectStorage<Table6>
     */
    public function getField2(): ?ObjectStorage
    {
        return $this->field2;
    }

    /**
     * Setter for property <field2>.
     *
     * @param  ObjectStorage<Table6> $field2
     * @return void
     */
    public function setField2(ObjectStorage $field2): void
    {
        $this->field2 = $field2;
    }

    /**
     * Adds a <field2>.
     *
     * @param Table6 $field2
     * @return void
     */
    public function addField2(Table6 $field2)
    {
        $this->field2->attach($field2);
    }

    /**
     * Removes a <field2>.
     *
     * @param Table6 $field2
     * @return void
     */
    public function removeField2(Table6 $field2)
    {
        $this->field2->detach($field2);
    }
}