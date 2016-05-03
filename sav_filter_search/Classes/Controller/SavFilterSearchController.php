<?php

/**
 *  Copyright notice
 *
 *  (c) 2008 Laurent Foulloy <yolf.typo3@orange.fr>
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
 *  This copyright notice MUST APPEAR in all copies of the script!
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Plugin 'SAV Filter Search' for the 'sav_filter_search' extension.
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package TYPO3
 * @subpackage tx_savfiltersearch
 */
class tx_savfiltersearch_pi1 extends \SAV\SavLibraryPlus\Filters\AbstractFilter
{

    public $prefixId = 'tx_savfiltersearch_pi1';
 // Same as class name
    public $scriptRelPath = 'Classes/Controller/SavFilterSearchController.php';
 // Path to this script relative to the extension dir.
    public $extKey = 'sav_filter_search';
 // The extension key.
    public $pi_checkCHash = FALSE;

    // Specific variables for this filter
    protected $debugQuery = FALSE;
 // Debug the query if set to tre. FOR DEVELLOPMENT ONLY !!!
    protected $param;
 // Parameter sent by POST
    protected $addWhere = '';
 // Additionnal where clause

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->SPACE = '    ';
    }

    /**
     * Setter for tableName
     *
     * @return void
     */
    protected function SetSessionField_tableName()
    {
        $this->sessionFilter[$this->extKeyWithId]['tableName'] = $this->conf['tableName'];
    }

    /**
     * Setter for fieldName
     *
     * @return void
     */
    protected function SetSessionField_fieldName()
    {
        // Change ; into , to have a correct field list
        $this->sessionFilter[$this->extKeyWithId]['fieldName'] = str_replace(';', ',', $this->conf['fieldName']);
    }

    /**
     * Setter for addWhere
     *
     * @return void
     */
    protected function SetSessionField_addWhere()
    {
        $fields = explode(';', $this->conf['fieldName']);

        $filter = ($this->conf['filter'] ? $this->conf['filter'] : 1);
        $allowedGroups = explode(',', $this->conf['allowedGroups']);
        foreach ($allowedGroups as $allowedGroup) {
            if ($allowedGroup) {
                if ($groups) {
                    $groups .= ' OR ';
                }
                $groups .= 'FIND_IN_SET(' . $allowedGroup . ',fe_users.usergroup)';
            }
        }
        $groups = ($groups ? '(' . $groups . ')' : '1');
        $where = $groups . ' AND ' . $filter;

        $this->sessionFilter[$this->extKeyWithId]['addWhere'] = $where . $this->addWhere;
    }

    /**
     * The main method of the PlugIn
     *
     * @param string $content:
     *            The PlugIn content
     * @param array $conf:
     *            The PlugIn configuration
     * @return The content that is displayed on the website
     */
    public function main($content, $conf)
    {
        $this->conf = $conf;
        $this->pi_setPiVarDefaults();
        $this->pi_loadLL();
        $this->pi_USER_INT_obj = 1; // Configuring so caching is not expected. This value means that no cHash params are ever set. We do this, because it's a USER_INT object!

        // Initialisation
        if (! $this->init()) {
            return $this->pi_wrapInBaseClass($this->showErrors());
        }

        // Special initialization for this filter
        $this->initFilter();

        // Process piVars
        $this->piVarsProcessing();

        // Processing
        $this->generalProcessing();

        // Build the content.
        $content = $this->buildContent();

        // Set the session variables
        $this->SetSessionFields();

        return $this->pi_wrapInBaseClass($this->wrapForm($content, $hidden, $this->extKey, $this->pi_getPageLink($GLOBALS['TSFE']->id)));
    }

    /**
     * Initialization for the filter
     *
     * @return void
     */
    protected function initFilter()
    {}

    /**
     * piVars processing
     *
     * @return void
     */
    protected function piVarsProcessing()
    {
        // Check if a search was posted
        if ($this->piVars['search'] && $this->conf['searchFields']) {
            $addWhere = ' AND (';
            $fields = explode(';', $this->conf['searchFields']);
            foreach ($fields as $field) {
                $addWhere .= $field . ' LIKE ' . $GLOBALS['TYPO3_DB']->fullQuoteStr('%' . $this->piVars['search'] . '%', '') . ' OR ';
            }
            $addWhere .= '0)';
        } else {
            $this->param = $this->piVars['param'];
            unset($this->piVars['search']);
            if ($this->param == 'all') {
                $addWhere = '';
            } else {
                $addWhere = ' AND (';
                $tables = explode(',', $this->conf['tableName']);
                $fields = explode(';', $this->conf['fieldName']);
                foreach ($fields as $field) {
                    $addWhere .= 'substring(' . $field . ',1,1)="' . $this->param . '" OR ';
                }
                $addWhere .= '0)';
            }
        }
        $this->addWhere = $addWhere;
    }

    /**
     * Get the row associated with the page id
     *
     * @return void
     */
    protected function generalProcessing()
    {}

    /**
     * Build the content from the list.
     * Small extension ... no template is used
     *
     * @return string (html content)
     */
    protected function buildContent()
    {
        $htmlArray = array();

        // Search button
        if (! $this->conf['searchFields']) {
            $this->addError('error.missingSearchFields');
        }
        $htmlArray[] = '<ul class="search">';
        $htmlArray[] = '  <li class="search">';
        $htmlArray[] = '    <label for="search_box">' . $this->pi_getLL('pi_form.searchBoxLabel') . '</label>';
        $htmlArray[] = '    <input type="text" name="' . $this->prefixId . '[search]' . '" value="' . $this->piVars['search'] . '" class="search_box_text" id="search_box" title="' . $this->pi_getLL('pi_form.searchBoxLabel') . '" ondblclick="this.value=\'\';" />';
        $htmlArray[] = '    <input type="image" src="' . ExtensionManagementUtility::siteRelPath($this->extKey) . 'Resources/Public/Icons/search.gif" name="search_button" class="searchButton" title="' . $this->pi_getLL('pi_form.searchBoxButtonAlt') . '" alt="' . $this->pi_getLL('pi_form.searchBoxButtonAlt') . '" />';
        $htmlArray[] = '  </li>';
        $htmlArray[] = '</ul>';

        return $this->arrayToHTML($htmlArray);
    }
}

?>
