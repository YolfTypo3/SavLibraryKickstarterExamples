<?php

namespace YolfTypo3\SavCalendarMvc\Domain\Model;

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
 * Event model for the extension SavCalendarMvc
 *
 */
use YolfTypo3\SavLibraryMvc\Domain\Model\DefaultModel;

class Event extends DefaultModel
{
    /**
     * The category variable.
     *
     * @var \YolfTypo3\SavCalendarMvc\Domain\Model\Category
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $category;

    /**
     * The title variable.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $title;

    /**
     * The dateBegin variable.
     *
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("DateTime")
     * @TYPO3\CMS\Extbase\Annotation\Validate("YolfTypo3\SavLibraryMvc\Domain\Model\Validator\Empty")
     */
    protected $dateBegin;

    /**
     * The dateEnd variable.
     *
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("DateTime")
     * @TYPO3\CMS\Extbase\Annotation\Validate("YolfTypo3\SavLibraryMvc\Domain\Model\Validator\Empty")
     */
    protected $dateEnd;

    /**
     * The location variable.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $location;

    /**
     * The description variable.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $description;

    /**
     * The link variable.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $link;

    /**
     * The organizedBy variable.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $organizedBy;

    /**
     * The email variable.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("Raw")
     */
    protected $email;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->dateBegin = new \DateTime();
        $this->dateEnd = new \DateTime();
    }

    /**
     * Getter for category.
     *
     * @return \YolfTypo3\SavCalendarMvc\Domain\Model\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter for category.
     *
     * @param \YolfTypo3\SavCalendarMvc\Domain\Model\Category     $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Getter for title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter for title.
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Getter for dateBegin.
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Setter for dateBegin.
     *
     * @param \DateTime $dateBegin
     * @return void
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;
    }

    /**
     * Getter for dateEnd.
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Setter for dateEnd.
     *
     * @param \DateTime $dateEnd
     * @return void
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * Getter for location.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Setter for location.
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Getter for description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description.
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Getter for link.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Setter for link.
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Getter for organizedBy.
     *
     * @return string
     */
    public function getOrganizedBy()
    {
        return $this->organizedBy;
    }

    /**
     * Setter for organizedBy.
     *
     * @param string $organizedBy
     * @return void
     */
    public function setOrganizedBy($organizedBy)
    {
        $this->organizedBy = $organizedBy;
    }

    /**
     * Getter for email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Setter for email.
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
?>

