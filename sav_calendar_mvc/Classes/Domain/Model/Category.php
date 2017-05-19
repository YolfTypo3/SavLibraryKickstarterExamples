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
 * Category model for the extension SavCalendarMvc
 *
 */
class Category extends \SAV\SavLibraryMvc\Domain\Model\DefaultModel
{
    /**
     * The title variable.
     *
     * @var string
     * @validate raw
     */
    protected $title;

    /**
     * Constructor.
     */
    public function __construct()
    {
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


}
?>

