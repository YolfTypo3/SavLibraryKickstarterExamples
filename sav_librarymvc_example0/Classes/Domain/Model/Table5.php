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
 * Table5 model for the extension SavLibrarymvcExample0
 *
 */
use YolfTypo3\SavLibraryMvc\Domain\Model\DefaultModel;

class Table5 extends DefaultModel
{
    /**
     * The field1 variable.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $field1;

    /**
     * The field2 variable.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6>
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $field2;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->field2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6>
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Setter for field2.
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6> $field2
     * @return void
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
        $this->field2->_memorizeCleanState();
    }

    /**
     * Adds a field2
     *
     * @param \YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6 $field2
     * @return void
     */
    public function addField2(\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6 $field2)
    {
        $this->field2->attach($field2);
    }

    /**
     * Removes a field2
     *
     * @param \YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6 $field2
     * @return void
     */
    public function removeField2(\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6 $field2)
    {
        $this->field2->detach($field2);
    }
}
?>

