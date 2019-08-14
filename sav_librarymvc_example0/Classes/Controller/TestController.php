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
use YolfTypo3\SavLibraryMvc\Controller\DefaultController;
use YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table1;
use YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table1Repository;

/**
 * Controller for the form Test
 *
 */
class TestController extends DefaultController
{
    /**
     * Main repository
     *
     * @var Table1Repository
     */
    protected $mainRepository = null;

    /**
     * Injects the repository.
     *
     * @param Table1Repository $repository
     */
    public function injectTable1Repository(Table1Repository $repository)
    {
        $this->mainRepository = $repository;
    }

    /**
     * Subform repository class names
     *
     * @var array
     */
    protected $subforms = [
        [
            'repository' => \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table1Repository::class,
            'fieldName' => 'field19',
            'foreignRepository' => \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table3Repository::class,
        ],
        [
            'repository' => \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table1Repository::class,
            'fieldName' => 'field20',
            'foreignRepository' => \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table4Repository::class,
        ],
        [
            'repository' => \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table1Repository::class,
            'fieldName' => 'field23',
            'foreignRepository' => \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table5Repository::class,
        ],
        [
            'repository' => \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table5Repository::class,
            'fieldName' => 'field2',
            'foreignRepository' => \YolfTypo3\SavLibrarymvcExample0\Domain\Repository\Table6Repository::class,
        ],
    ];
 
    /**
     * Save action for this controller
     *
     * @param Table1 $data
     * @return void
     */
    public function saveAction(Table1 $data)
    {
        $this->save($data);
    }
}
?>

