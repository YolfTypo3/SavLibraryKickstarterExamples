<?php

namespace SAV\SavCalendarMvc\Domain\Model;
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
 * Event model for the extension SavCalendarMvc
 *
 */
class Event extends \SAV\SavLibraryMvc\Domain\Model\DefaultModel
{
    /**
     * The category variable.
     *
     * @var \SAV\SavCalendarMvc\Domain\Model\Category
     * @validate raw
     */
    protected $category;

    /**
     * The title variable.
     *
     * @var string
     * @validate raw
     */
    protected $title;

    /**
     * The dateBegin variable.
     *
     * @var \DateTime
     * @validate (datetime or empty)
     */
    protected $dateBegin;

    /**
     * The dateEnd variable.
     *
     * @var \DateTime
     * @validate (datetime or empty)
     */
    protected $dateEnd;

    /**
     * The location variable.
     *
     * @var string
     * @validate raw
     */
    protected $location;

    /**
     * The description variable.
     *
     * @var string
     * @validate raw
     */
    protected $description;

    /**
     * The link variable.
     *
     * @var string
     * @validate raw
     */
    protected $link;

    /**
     * The organizedBy variable.
     *
     * @var string
     * @validate raw
     */
    protected $organizedBy;

    /**
     * The email variable.
     *
     * @var string
     * @validate raw
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
     * @return \SAV\SavCalendarMvc\Domain\Model\Category    
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter for category.
     *
     * @param \SAV\SavCalendarMvc\Domain\Model\Category     $category
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

