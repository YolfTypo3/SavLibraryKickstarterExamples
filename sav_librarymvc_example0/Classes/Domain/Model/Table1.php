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
 * Table1 model for the extension SavLibrarymvcExample0
 *
 */
use TYPO3\CMS\Extbase\Annotation\FileUpload;
use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use YolfTypo3\SavLibraryMvc\Domain\Model\DefaultModel;
use YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table2;
use YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table3;
use YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table4;
use YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table5;
use YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table1Repository;

class Table1 extends DefaultModel
{
    /**
     * @var Table1Repository
     */
    protected $repository = null;

    #[Validate(validator: 'String')]
    /**
     * The <field1> variable.
     *
     * @var string
     */
    protected $field1;

    #[Validate(validator: 'Boolean')]
    /**
     * The <field2> variable.
     *
     * @var bool
     */
    protected $field2;

    #[Validate(validator: 'Text')]
    /**
     * The <field8> variable.
     *
     * @var string
     */
    protected $field8;

    /**
     * The <field9> variable.
     *
     * @var string
     */
    protected $field9;

    #[Validate(validator: 'DateTime')]
    /**
     * The <field4> variable.
     *
     * @var \DateTime
     */
    protected $field4;

    #[Validate(validator: 'DateTime')]
    /**
     * The <field5> variable.
     *
     * @var \DateTime
     */
    protected $field5;

    /**
     * The <field24> variable.
     *
     * @var string
     */
    protected $field24;

    /**
     * The <field7> variable.
     *
     * @var Table2
     */
    protected $field7;

    /**
     * The <field6> variable.
     *
     * @var int
     */
    protected $field6;

    /**
     * The <field12> variable.
     *
     * @var string
     */
    protected $field12;

    #[FileUpload(
        validation: [
            'fileSize' => ['minimum' => '0K', 'maximum' => '2M'],
    		'maxFiles' => 2,
            'mimeType' => [
                'allowedMimeTypes' => ['image/avif','image/gif','image/jpeg','image/tiff','image/bmp','image/x-pcx','image/x-tga','image/png','application/pdf','application/illustrator','image/svg+xml','image/webp'],
                'ignoreFileExtensionCheck' => false,
                'notAllowedMessage' => 'LLL:EXT:sav_library_mvc/Resources/Private/Language/locallang_db.xlf:upload.failed',
                'invalidExtensionMessage' => 'LLL:EXT:sav_library_mvc/Resources/Private/Language/locallang_db.xlf:upload.invalidFileExtension',
            ],
        ],
        uploadFolder: '1:/user_upload/Test',
    )]
    /**
     * The <field13> variable.
     *
     * @var ObjectStorage<FileReference>
     */
    protected $field13;

    #[Validate(validator: 'String')]
    /**
     * The <field14> variable.
     *
     * @var string
     */
    protected $field14;

    #[Validate(validator: 'String')]
    /**
     * The <field15> variable.
     *
     * @var string
     */
    protected $field15;

    /**
     * The <field16> variable.
     *
     * @var string
     */
    protected $field16;

    /**
     * The <field17> variable.
     *
     * @var string
     */
    protected $field17;

    /**
     * The <field18> variable.
     *
     * @var ObjectStorage<Table2>
     */
    protected $field18;

    #[Lazy]
    #[Cascade(value: 'remove')]
    /**
     * The <field19> variable.
     *
     * @var ObjectStorage<Table3>
     */
    protected $field19;

    #[Lazy]
    #[Cascade(value: 'remove')]
    /**
     * The <field20> variable.
     *
     * @var ObjectStorage<Table4>
     */
    protected $field20;

    /**
     * The <field3> variable.
     *
     * @var int
     */
    protected $field3;

    /**
     * The <field11> variable.
     *
     * @var string
     */
    protected $field11;

    /**
     * The <field21> variable.
     *
     * @var string
     */
    protected $field21;

    #[Lazy]
    #[Cascade(value: 'remove')]
    /**
     * The <field23> variable.
     *
     * @var ObjectStorage<Table5>
     */
    protected $field23;

    #[Validate(validator: 'Integer')]
    /**
     * The <field10> variable.
     *
     * @var int
     */
    protected $field10;

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
        $this->field4 = new \DateTime();
        $this->field5 = new \DateTime();
        $this->field13 = $this->field13 ?? new ObjectStorage();
        $this->field18 = new ObjectStorage();
        $this->field19 = new ObjectStorage();
        $this->field20 = new ObjectStorage();
        $this->field23 = new ObjectStorage();
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
     * @return bool
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Setter for property <field2>.
     *
     * @param bool $field2
     * @return void
     */
    public function setField2($field2): void
    {
        $this->field2 = $field2;
    }

    /**
     * Getter for property <field8>.
     *
     * @return string
     */
    public function getField8()
    {
        return $this->field8;
    }

    /**
     * Setter for property <field8>.
     *
     * @param string $field8
     * @return void
     */
    public function setField8($field8): void
    {
        $this->field8 = $field8;
    }

    /**
     * Getter for property <field9>.
     *
     * @return string
     */
    public function getField9()
    {
        return $this->field9;
    }

    /**
     * Setter for property <field9>.
     *
     * @param string $field9
     * @return void
     */
    public function setField9($field9): void
    {
        $this->field9 = $field9;
    }

    /**
     * Getter for property <field4>.
     *
     * @return \DateTime
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * Setter for property <field4>.
     *
     * @param \DateTime $field4
     * @return void
     */
    public function setField4($field4): void
    {
        $this->field4 = $field4;
    }

    /**
     * Getter for property <field5>.
     *
     * @return \DateTime
     */
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * Setter for property <field5>.
     *
     * @param \DateTime $field5
     * @return void
     */
    public function setField5($field5): void
    {
        $this->field5 = $field5;
    }

    /**
     * Getter for property <field24>.
     *
     * @return string
     */
    public function getField24()
    {
        return $this->field24;
    }

    /**
     * Setter for property <field24>.
     *
     * @param string $field24
     * @return void
     */
    public function setField24($field24): void
    {
        $this->field24 = $field24;
    }

    /**
     * Getter for property <field7>.
     *
     * @return Table2
     */
    public function getField7()
    {
        return $this->field7;
    }

    /**
     * Setter for property <field7>.
     *
     * @param Table2 $field7
     * @return void
     */
    public function setField7($field7): void
    {
        $this->field7 = $field7;
    }

    /**
     * Getter for property <field6>.
     *
     * @return int
     */
    public function getField6()
    {
        return $this->field6;
    }

    /**
     * Setter for property <field6>.
     *
     * @param int $field6
     * @return void
     */
    public function setField6($field6): void
    {
        $this->field6 = $field6;
    }

    /**
     * Getter for property <field12>.
     *
     * @return string
     */
    public function getField12()
    {
        return $this->field12;
    }

    /**
     * Setter for property <field12>.
     *
     * @param string $field12
     * @return void
     */
    public function setField12($field12): void
    {
        $this->field12 = $field12;
    }

    /**
     * Getter for property <field13>.
     *
     * @return ObjectStorage
     */
    public function getField13(): ?ObjectStorage
    {
        return $this->field13;
    }

    /**
     * Setter for property <field13>.
     *
     * @param ObjectStorage $field13
     * @return void
     */
    public function setField13(ObjectStorage $field13): void
    {
        $this->field13 = $field13;
    }

    /**
     * Getter for property <field14>.
     *
     * @return string
     */
    public function getField14()
    {
        return $this->field14;
    }

    /**
     * Setter for property <field14>.
     *
     * @param string $field14
     * @return void
     */
    public function setField14($field14): void
    {
        $this->field14 = $field14;
    }

    /**
     * Getter for property <field15>.
     *
     * @return string
     */
    public function getField15()
    {
        return $this->field15;
    }

    /**
     * Setter for property <field15>.
     *
     * @param string $field15
     * @return void
     */
    public function setField15($field15): void
    {
        $this->field15 = $field15;
    }

    /**
     * Getter for property <field16>.
     *
     * @return string
     */
    public function getField16()
    {
        return $this->field16;
    }

    /**
     * Setter for property <field16>.
     *
     * @param string $field16
     * @return void
     */
    public function setField16($field16): void
    {
        $this->field16 = $field16;
    }


    /**
     * Getter for property <field17>.
     *
     * @return string
     */
    public function getField17(): ?string
    {
        return $this->field17;
    }

    /**
     * Setter for property <field17>.
     *
     * @param string
     * @return void
     */
    public function setField17(string $field17): void
    {
        $this->field17 = $field17;
    }

    /**
     * Getter for property <field18>.
     *
     * @return ObjectStorage<Table2>
     */
    public function getField18(): ?ObjectStorage
    {
        return $this->field18;
    }

    /**
     * Setter for property <field18>.
     *
     * @param ObjectStorage<Table2> $field18
     * @return void
     */
    public function setField18(ObjectStorage $field18): void
    {
        $this->field18 = $field18;
    }

    /**
     * Adds a <field18>.
     *
     * @param Table2 $field18
     * @return void
     */
    public function addField18(Table2 $field18)
    {
        $this->field18->attach($field18);
    }

    /**
     * Removes a <field18>.
     *
     * @param Table2 $field18
     * @return void
     */
    public function removeField18(Table2 $field18)
    {
        $this->field18->detach($field18);
    }

    /**
     * Getter for property <field19>.
     *
     * @return ObjectStorage<Table3>
     */
    public function getField19(): ?ObjectStorage
    {
        return $this->field19;
    }

    /**
     * Setter for property <field19>.
     *
     * @param  ObjectStorage<Table3> $field19
     * @return void
     */
    public function setField19(ObjectStorage $field19): void
    {
        $this->field19 = $field19;
    }

    /**
     * Adds a <field19>.
     *
     * @param Table3 $field19
     * @return void
     */
    public function addField19(Table3 $field19)
    {
        $this->field19->attach($field19);
    }

    /**
     * Removes a <field19>.
     *
     * @param Table3 $field19
     * @return void
     */
    public function removeField19(Table3 $field19)
    {
        $this->field19->detach($field19);
    }

    /**
     * Getter for property <field20>.
     *
     * @return ObjectStorage<Table4>
     */
    public function getField20(): ?ObjectStorage
    {
        return $this->field20;
    }

    /**
     * Setter for property <field20>.
     *
     * @param  ObjectStorage<Table4> $field20
     * @return void
     */
    public function setField20(ObjectStorage $field20): void
    {
        $this->field20 = $field20;
    }

    /**
     * Adds a <field20>.
     *
     * @param Table4 $field20
     * @return void
     */
    public function addField20(Table4 $field20)
    {
        $this->field20->attach($field20);
    }

    /**
     * Removes a <field20>.
     *
     * @param Table4 $field20
     * @return void
     */
    public function removeField20(Table4 $field20)
    {
        $this->field20->detach($field20);
    }
    /**
     * Getter for property <field3>.
     *
     * @return int
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Setter for property <field3>.
     *
     * @param int $field3
     * @return void
     */
    public function setField3($field3): void
    {
        $this->field3 = $field3;
    }

    /**
     * Getter for property <field11>.
     *
     * @return string
     */
    public function getField11()
    {
        return $this->field11;
    }

    /**
     * Setter for property <field11>.
     *
     * @param string $field11
     * @return void
     */
    public function setField11($field11): void
    {
        $this->field11 = $field11;
    }

    /**
     * Getter for property <field21>.
     *
     * @return string
     */
    public function getField21()
    {
        return $this->field21;
    }

    /**
     * Setter for property <field21>.
     *
     * @param string $field21
     * @return void
     */
    public function setField21($field21): void
    {
        $this->field21 = $field21;
    }


    /**
     * Getter for property <field23>.
     *
     * @return ObjectStorage<Table5>
     */
    public function getField23(): ?ObjectStorage
    {
        return $this->field23;
    }

    /**
     * Setter for property <field23>.
     *
     * @param  ObjectStorage<Table5> $field23
     * @return void
     */
    public function setField23(ObjectStorage $field23): void
    {
        $this->field23 = $field23;
    }

    /**
     * Adds a <field23>.
     *
     * @param Table5 $field23
     * @return void
     */
    public function addField23(Table5 $field23)
    {
        $this->field23->attach($field23);
    }

    /**
     * Removes a <field23>.
     *
     * @param Table5 $field23
     * @return void
     */
    public function removeField23(Table5 $field23)
    {
        $this->field23->detach($field23);
    }
    /**
     * Getter for property <field10>.
     *
     * @return int
     */
    public function getField10()
    {
        return $this->field10;
    }

    /**
     * Setter for property <field10>.
     *
     * @param int $field10
     * @return void
     */
    public function setField10($field10): void
    {
        $this->field10 = $field10;
    }

}