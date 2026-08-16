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
 * Event model for the extension SavCalendarMvc
 *
 */
use TYPO3\CMS\Extbase\Annotation\Validate;
use YolfTypo3\SavCalendarMvc\Domain\Model\Category;
use YolfTypo3\SavCalendarMvc\Domain\Repository\EventRepository;
use YolfTypo3\SavLibraryMvc\Domain\Model\DefaultModel;

class Event extends DefaultModel
{
    /**
     * @var EventRepository
     */
    protected $repository = null;

    /**
     * The <category> variable.
     *
     * @var Category
     */
    protected $category;

    #[Validate(validator: 'String')]
    /**
     * The <title> variable.
     *
     * @var string
     */
    protected $title;

    #[Validate(validator: 'DateTime')]
    /**
     * The <dateBegin> variable.
     *
     * @var \DateTime
     */
    protected $dateBegin;

    #[Validate(validator: 'DateTime')]
    /**
     * The <dateEnd> variable.
     *
     * @var \DateTime
     */
    protected $dateEnd;

    #[Validate(validator: 'String')]
    /**
     * The <location> variable.
     *
     * @var string
     */
    protected $location;

    /**
     * The <description> variable.
     *
     * @var string
     */
    protected $description;

    /**
     * The <link> variable.
     *
     * @var string
     */
    protected $link;

    #[Validate(validator: 'String')]
    /**
     * The <organizedBy> variable.
     *
     * @var string
     */
    protected $organizedBy;

    #[Validate(validator: 'String')]
    /**
     * The <email> variable.
     *
     * @var string
     */
    protected $email;

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
        $this->dateBegin = new \DateTime();
        $this->dateEnd = new \DateTime();
    }

    /**
     * Getter for property <category>.
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter for property <category>.
     *
     * @param Category $category
     * @return void
     */
    public function setCategory($category): void
    {
        $this->category = $category;
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

    /**
     * Getter for property <dateBegin>.
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Setter for property <dateBegin>.
     *
     * @param \DateTime $dateBegin
     * @return void
     */
    public function setDateBegin($dateBegin): void
    {
        $this->dateBegin = $dateBegin;
    }

    /**
     * Getter for property <dateEnd>.
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Setter for property <dateEnd>.
     *
     * @param \DateTime $dateEnd
     * @return void
     */
    public function setDateEnd($dateEnd): void
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * Getter for property <location>.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Setter for property <location>.
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }

    /**
     * Getter for property <description>.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for property <description>.
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * Getter for property <link>.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Setter for property <link>.
     *
     * @param string $link
     * @return void
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * Getter for property <organizedBy>.
     *
     * @return string
     */
    public function getOrganizedBy()
    {
        return $this->organizedBy;
    }

    /**
     * Setter for property <organizedBy>.
     *
     * @param string $organizedBy
     * @return void
     */
    public function setOrganizedBy($organizedBy): void
    {
        $this->organizedBy = $organizedBy;
    }

    /**
     * Getter for property <email>.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Setter for property <email>.
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

}