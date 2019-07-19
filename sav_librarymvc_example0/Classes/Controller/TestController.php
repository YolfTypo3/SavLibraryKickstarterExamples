<?php

namespace YolfTypo3\SavLibrarymvcExample0\Controller;

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
 * Controller for the form Test
 *
 */
class TestController extends \YolfTypo3\SavLibraryMvc\Controller\DefaultController
{
    /**
     * Main repository
     *
     * @var \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table1Repository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     * @extensionScannerIgnoreLine
     * @inject
     */
    protected $mainRepository = null;

    /**
     * Subform repository class names
     *
     * @var array
     */
    protected $subforms = [
        [
            'repository' => 'YolfTypo3\\SavLibrarymvcExample0\\Domain\\Repository\\Table1Repository',
            'fieldName' => 'field19',
            'foreignRepository' => 'YolfTypo3\\SavLibrarymvcExample0\\Domain\\Repository\\Table3Repository',
        ],
        [
            'repository' => 'YolfTypo3\\SavLibrarymvcExample0\\Domain\\Repository\\Table1Repository',
            'fieldName' => 'field20',
            'foreignRepository' => 'YolfTypo3\\SavLibrarymvcExample0\\Domain\\Repository\\Table4Repository',
        ],
        [
            'repository' => 'YolfTypo3\\SavLibrarymvcExample0\\Domain\\Repository\\Table1Repository',
            'fieldName' => 'field23',
            'foreignRepository' => 'YolfTypo3\\SavLibrarymvcExample0\\Domain\\Repository\\Table5Repository',
        ],
        [
            'repository' => 'YolfTypo3\\SavLibrarymvcExample0\\Domain\\Repository\\Table5Repository',
            'fieldName' => 'field2',
            'foreignRepository' => 'YolfTypo3\\SavLibrarymvcExample0\\Domain\\Repository\\Table6Repository',
        ],
    ];
 
    /**
     * Save action for this controller
     *
     * @param \YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table1 $data
     * @return void
     */
    public function saveAction(\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table1 $data)
    {
        $this->save($data);
    }
}
?>

