<?php

namespace SAV\SavLibrarymvcExample0\Domain\Model;
/**
*  Copyright notice
*
*  (c) 2017  <yolf.typo3@orange.fr>
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
 * Table1 model for the extension SavLibrarymvcExample0
 *
 */
class Table1 extends \SAV\SavLibraryMvc\Domain\Model\DefaultModel
{
    /**
     * The field2 variable.
     *
     * @var boolean
     * @validate raw
     */
    protected $field2;

    /**
     * The field1 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field1;

    /**
     * The field8 variable.
     *
     * @var string
     * @validate text
     */
    protected $field8;

    /**
     * The field9 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field9;

    /**
     * The field4 variable.
     *
     * @var \DateTime
     * @validate (datetime or empty)
     */
    protected $field4;

    /**
     * The field5 variable.
     *
     * @var \DateTime
     * @validate (datetime or empty)
     */
    protected $field5;

    /**
     * The field10 variable.
     *
     * @var integer
     * @validate integer
     */
    protected $field10;

    /**
     * The field7 variable.
     *
     * @var \SAV\SavLibrarymvcExample0\Domain\Model\Table2
     * @validate raw
     */
    protected $field7;

    /**
     * The field6 variable.
     *
     * @var integer
     * @validate raw
     */
    protected $field6;

    /**
     * The field12 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field12;

    /**
     * The field13 variable.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @validate raw
     */
    protected $field13;

    /**
     * The field14 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field14;

    /**
     * The field15 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field15;

    /**
     * The field16 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field16;

    /**
     * The field17 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field17;

    /**
     * The field18 variable.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table2>
     * @validate raw
     */
    protected $field18;

    /**
     * The field19 variable.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table3>
     * @validate raw
     */
    protected $field19;

    /**
     * The field20 variable.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table4>
     * @validate raw
     */
    protected $field20;

    /**
     * The field3 variable.
     *
     * @var integer
     * @validate raw
     */
    protected $field3;

    /**
     * The field11 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field11;

    /**
     * The field21 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field21;

    /**
     * The field22 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field22;

    /**
     * The field23 variable.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table5>
     * @validate raw
     */
    protected $field23;

    /**
     * The field24 variable.
     *
     * @var string
     * @validate raw
     */
    protected $field24;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->field4 = new \DateTime();
        $this->field5 = new \DateTime();
        $this->field13 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->field18 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->field19 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->field20 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->field23 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    /**
     * Getter for field2.
     *
     * @return boolean
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Setter for field2.
     *
     * @param boolean $field2
     * @return void
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
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
     * Getter for field8.
     *
     * @return string
     */
    public function getField8()
    {
        return $this->field8;
    }

    /**
     * Setter for field8.
     *
     * @param string $field8
     * @return void
     */
    public function setField8($field8)
    {
        $this->field8 = $field8;
    }


    /**
     * Getter for field9.
     *
     * @return string
     */
    public function getField9()
    {
        return $this->field9;
    }

    /**
     * Setter for field9.
     *
     * @param string $field9
     * @return void
     */
    public function setField9($field9)
    {
        $this->field9 = $field9;
    }


    /**
     * Getter for field4.
     *
     * @return \DateTime
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * Setter for field4.
     *
     * @param \DateTime $field4
     * @return void
     */
    public function setField4($field4)
    {
        $this->field4 = $field4;
    }


    /**
     * Getter for field5.
     *
     * @return \DateTime
     */
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * Setter for field5.
     *
     * @param \DateTime $field5
     * @return void
     */
    public function setField5($field5)
    {
        $this->field5 = $field5;
    }


    /**
     * Getter for field10.
     *
     * @return integer
     */
    public function getField10()
    {
        return $this->field10;
    }

    /**
     * Setter for field10.
     *
     * @param integer $field10
     * @return void
     */
    public function setField10($field10)
    {
        $this->field10 = $field10;
    }


    /**
     * Getter for field7.
     *
     * @return \SAV\SavLibrarymvcExample0\Domain\Model\Table2    
     */
    public function getField7()
    {
        return $this->field7;
    }

    /**
     * Setter for field7.
     *
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table2     $field7
     * @return void
     */
    public function setField7($field7)
    {
        $this->field7 = $field7;
    }


    /**
     * Getter for field6.
     *
     * @return integer
     */
    public function getField6()
    {
        return $this->field6;
    }

    /**
     * Setter for field6.
     *
     * @param integer $field6
     * @return void
     */
    public function setField6($field6)
    {
        $this->field6 = $field6;
    }


    /**
     * Getter for field12.
     *
     * @return string
     */
    public function getField12()
    {
        return $this->field12;
    }

    /**
     * Setter for field12.
     *
     * @param string $field12
     * @return void
     */
    public function setField12($field12)
    {
        $this->field12 = $field12;
    }


    /**
     * Getter for field13.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getField13()
    {
        return $this->field13;
    }

    /**
     * Setter for field13.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $field13
     * @return void
     */
    public function setField13($field13)
    {
        $this->field13 = $this->updateFileStorage($this->field13, $field13);
    }


    /**
     * Getter for field14.
     *
     * @return string
     */
    public function getField14()
    {
        return $this->field14;
    }

    /**
     * Setter for field14.
     *
     * @param string $field14
     * @return void
     */
    public function setField14($field14)
    {
        $this->field14 = $field14;
    }


    /**
     * Getter for field15.
     *
     * @return string
     */
    public function getField15()
    {
        return $this->field15;
    }

    /**
     * Setter for field15.
     *
     * @param string $field15
     * @return void
     */
    public function setField15($field15)
    {
        $this->field15 = $field15;
    }


    /**
     * Getter for field16.
     *
     * @return string
     */
    public function getField16()
    {
        return $this->field16;
    }

    /**
     * Setter for field16.
     *
     * @param string $field16
     * @return void
     */
    public function setField16($field16)
    {
        $this->field16 = $field16;
    }


    /**
     * Getter for field17.
     *
     * @return array
     */
    public function getField17()
    {
        return \SAV\SavLibraryMvc\Utility\Conversion::commaSeparatedStringToStringArray($this->field17);
    }

    /**
     * Setter for field17.
     *
     * @param string $field17
     * @return void
     */
    public function setField17($field17)
    {
        $this->field17 = $field17;
    }


    /**
     * Getter for field18.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table2>
     */
    public function getField18()
    {
        return $this->field18;
    }

    /**
     * Setter for field18.
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table2> $field18
     * @return void
     */
    public function setField18($field18)
    {
        $this->field18 = $field18;
    }

    /**
     * Adds a field18
     * 
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table2 $field18
     * @return void
     */
    public function addField18(\SAV\SavLibrarymvcExample0\Domain\Model\Table2 $field18)
    {
        $this->field18->attach($field18);
    }

    /**
     * Removes a field18
     * 
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table2 $field18
     * @return void
     */
    public function removeField18(\SAV\SavLibrarymvcExample0\Domain\Model\Table2 $field18)
    {
        $this->field18->detach($field18);
    }

    /**
     * Getter for field19.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table3>
     */
    public function getField19()
    {
        return $this->field19;
    }

    /**
     * Setter for field19.
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table3> $field19
     * @return void
     */
    public function setField19($field19)
    {
        $this->field19 = $field19;
        $this->field19->_memorizeCleanState();
    }

    /**
     * Adds a field19
     * 
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table3 $field19
     * @return void
     */
    public function addField19(\SAV\SavLibrarymvcExample0\Domain\Model\Table3 $field19)
    {
        $this->field19->attach($field19);
    }

    /**
     * Removes a field19
     * 
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table3 $field19
     * @return void
     */
    public function removeField19(\SAV\SavLibrarymvcExample0\Domain\Model\Table3 $field19)
    {
        $this->field19->detach($field19);
    }

    /**
     * Getter for field20.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table4>
     */
    public function getField20()
    {
        return $this->field20;
    }

    /**
     * Setter for field20.
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table4> $field20
     * @return void
     */
    public function setField20($field20)
    {
        $this->field20 = $field20;
        $this->field20->_memorizeCleanState();
    }

    /**
     * Adds a field20
     * 
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table4 $field20
     * @return void
     */
    public function addField20(\SAV\SavLibrarymvcExample0\Domain\Model\Table4 $field20)
    {
        $this->field20->attach($field20);
    }

    /**
     * Removes a field20
     * 
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table4 $field20
     * @return void
     */
    public function removeField20(\SAV\SavLibrarymvcExample0\Domain\Model\Table4 $field20)
    {
        $this->field20->detach($field20);
    }

    /**
     * Getter for field3.
     *
     * @return array
     */
    public function getField3()
    {
        return \SAV\SavLibraryMvc\Utility\Conversion::integerToBooleanArray($this->field3);
    }

    /**
     * Setter for field3.
     *
     * @param integer $field3
     * @return void
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;
    }


    /**
     * Getter for field11.
     *
     * @return string
     */
    public function getField11()
    {
        return $this->field11;
    }

    /**
     * Setter for field11.
     *
     * @param string $field11
     * @return void
     */
    public function setField11($field11)
    {
        $this->field11 = $field11;
    }


    /**
     * Getter for field21.
     *
     * @return string
     */
    public function getField21()
    {
        return $this->field21;
    }

    /**
     * Setter for field21.
     *
     * @param string $field21
     * @return void
     */
    public function setField21($field21)
    {
        $this->field21 = $field21;
    }


    /**
     * Getter for field22.
     *
     * @return string
     */
    public function getField22()
    {
        return $this->field22;
    }

    /**
     * Setter for field22.
     *
     * @param string $field22
     * @return void
     */
    public function setField22($field22)
    {
        $this->field22 = $field22;
    }


    /**
     * Getter for field23.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table5>
     */
    public function getField23()
    {
        return $this->field23;
    }

    /**
     * Setter for field23.
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SAV\SavLibrarymvcExample0\Domain\Model\Table5> $field23
     * @return void
     */
    public function setField23($field23)
    {
        $this->field23 = $field23;
        $this->field23->_memorizeCleanState();
    }

    /**
     * Adds a field23
     * 
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table5 $field23
     * @return void
     */
    public function addField23(\SAV\SavLibrarymvcExample0\Domain\Model\Table5 $field23)
    {
        $this->field23->attach($field23);
    }

    /**
     * Removes a field23
     * 
     * @param \SAV\SavLibrarymvcExample0\Domain\Model\Table5 $field23
     * @return void
     */
    public function removeField23(\SAV\SavLibrarymvcExample0\Domain\Model\Table5 $field23)
    {
        $this->field23->detach($field23);
    }

    /**
     * Getter for field24.
     *
     * @return string
     */
    public function getField24()
    {
        return $this->field24;
    }

    /**
     * Setter for field24.
     *
     * @param string $field24
     * @return void
     */
    public function setField24($field24)
    {
        $this->field24 = $field24;
    }


}
?>

