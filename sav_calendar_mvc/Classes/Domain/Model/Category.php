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

namespace YolfTypo3\SavCalendarMvc\Domain\Model;

/**
 * Category model for the extension SavCalendarMvc
 *
 */
use TYPO3\CMS\Extbase\Annotation\Validate;
use YolfTypo3\SavCalendarMvc\Domain\Repository\CategoryRepository;
use YolfTypo3\SavLibraryMvc\Domain\Model\DefaultModel;

class Category extends DefaultModel
{
    /**
     * @var CategoryRepository
     */
    protected $repository = null;

    #[Validate(validator: 'String')]
    /**
     * The <title> variable.
     *
     * @var string
     */
    protected $title;

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
    }

    /**
     * Getter for property <title>.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter for property <title>.
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

}