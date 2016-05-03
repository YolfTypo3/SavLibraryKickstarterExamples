<?php

/**
 * Copyright notice
 *
 * (c) 2008 Laurent Foulloy <yolf.typo3@wanadoo.fr>
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Plugin 'SAV Filter Alphabetic' for the 'sav_filter_abc' extension.
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package TYPO3
 * @subpackage tx_savfilterabc
 */
class tx_savfilterabc_pi1 extends \SAV\SavLibraryPlus\Filters\AbstractFilter
{

    public $prefixId = 'tx_savfilterabc_pi1';
    // Same as class name
    public $scriptRelPath = 'Classes/Controller/SavFilterAbcController.php';
    // Path to this script relative to the extension dir.
    public $extKey = 'sav_filter_abc';
    // The extension key.
    public $pi_checkCHash = FALSE;

    // Specific variables for this filter
    protected $debugQuery = FALSE;
    // Debug the query if set to true. FOR DEVELLOPMENT ONLY !!!
    protected $param;
    // Parameter sent by POST
    protected $list;
    // List of items
    protected $addWhere = '';
    // Additionnal where clause
    protected $atoz = array();
    // A to Z array

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
                $groups .= 'find_in_set(' . $allowedGroup . ',fe_users.usergroup)';
            }
        }
        $groups = ($groups ? '(' . $groups . ')' : '1');
        $pageFilter = $this->getPageFilter($this->conf['pageFilter']);
        $where = $groups . ' AND ' . $filter . ' AND ' . $pageFilter;

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

        // Loads the locallang file
        $scriptRelPathSaved = $this->scriptRelPath;
        $this->scriptRelPath = 'Resources/Private/Language/locallang.xlf';
        $this->pi_loadLL();
        $this->scriptRelPath = $scriptRelPathSaved;

        $this->pi_USER_INT_obj = 1; // Configuring so caching is not expected. This value means that no cHash params are ever set. We do this, because it's a USER_INT object!

        // Initialisation
        if (! $this->init()) {
            return $this->pi_wrapInBaseClass($this->showErrors());
        }

        // Special initialization for this filter
        $this->initFilter();

        // Processes piVars
        $this->piVarsProcessing();

        // Processing
        $this->generalProcessing();

        // Builds the content.
        $content = $this->buildContent();

        // Sets the session variables
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

        // Checks if a search was posted
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
     * Gets the row associated with the page id
     *
     * @return void
     */
    protected function generalProcessing()
    {
        $this->initList();

        // Builds the pid list
        $pidList = $this->pi_getPidList('', $this->conf['recursive']);
        if ($pidList) {
            $pidList .= ($this->conf['pidList'] ? ',' . $this->conf['pidList'] : '');
        } else {
            $pidList .= ($this->conf['pidList'] ? $this->conf['pidList'] : '');
        }

        // Builds the enable field from the tablename
        $tables = explode(',', $this->conf['tableName']);
        $enableFields = '';
        foreach ($tables as $table) {
            if (isset($GLOBALS['TCA'][$table])) {
                $enableFields .= $this->cObj->enableFields($table);
            }
        }

        // Sets filter, group and
        $filter = ($this->conf['filter'] ? $this->conf['filter'] : 1);
        $allowedGroups = explode(',', $this->conf['allowedGroups']);
        foreach ($allowedGroups as $allowedGroup) {
            if ($allowedGroup) {
                if ($groups) {
                    $groups .= ' OR ';
                }
                $groups .= 'find_in_set(' . $allowedGroup . ',fe_users.usergroup)';
            }
        }
        $groups = ($groups ? '(' . $groups . ')' : '1');
        $pageFilter = $this->getPageFilter($this->conf['pageFilter']);

        // Executes query for each field
        $fields = explode(';', $this->conf['fieldName']);
        foreach ($fields as $field) {

            // Gets the first letter for the selector
            $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
  			/* SELECT   */	'DISTINCT ' . $field . ' AS Letter',
  			/* FROM     */	$this->conf['tableName'],
   			/* WHERE    */	$tables[0] . '.pid IN (' . $pidList . ')' . $enableFields . ' AND ' . $filter . ' AND ' . $groups . ($pageFilter ? ' AND ' . $pageFilter : ''),
  			/* GROUP BY */ '',
  			/* ORDER BY */ '',
  			/* LIMIT    */ '');

            if ($GLOBALS['TYPO3_DB']->sql_error($res)) {
                $this->addError('error.incorrectQuery', $this->extKey);
                return;
            }

            while ($tempo = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
                $this->atoz[strtoupper($tempo['Letter']{0})] = 1;
            }
        }
        $this->atoz[none] = 1;
    }

    /**
     * Initializes the list of items
     *
     * @return void
     */
    protected function initList()
    {
        $this->pi_loadLL();
        // Builds the list, letters then all
        $this->list = array();

        for ($i = 1; $i <= 26; $i ++) {
            $this->list[] = array(
                'label' => chr($i + 64),
                'value' => chr($i + 64),
                'active' => FALSE
            );
        }
        $this->list[] = array(
            'label' => $this->pi_getLL('all'),
            'value' => 'all',
            'active' => TRUE
        );
    }

    /**
     * Builds the content from the list.
     * Small extension ... no template is used
     *
     * @return string (html content)
     */
    protected function buildContent()
    {
        $htmlArray = array();
        $htmlArray[] = '<ul class="abc">';
        // Processes the list
        foreach ($this->list as $key => $value) {
            $class = ($this->is_selected($value['value']) ? 'aSelected' : 'aRegular');
            if ($this->atoz[$value['label']] || $value['active']) {
                $htmlArray[] = '  <li class="letter">' . $this->add_class($this->pi_linkTP_keepPiVars($value['label'], array(
                    'param' => $value['value']
                ), 1, 1), $class) . '</li>';
            } else {
                $htmlArray[] = '  <li class="letter">' . $value['label'] . '</li>';
            }
        }

        // Search button
        if ($this->conf['searchBox']) {
            if (! $this->conf['searchFields']) {
                $this->addError('error.missingSearchFields');
            }
            // Sets the search icon
            if (empty($this->iconRootPath)) {
                $this->iconRootPath = ExtensionManagementUtility::siteRelPath($this->extKey) . 'Resources/Public/Icons';
            }
            if (empty($this->conf['searchIcon'])) {
                $searchIcon = 'search.gif';
            } else {
                $searchIcon = $this->conf['searchIcon'];
            }
            $searchIconPath = substr(GeneralUtility::getFileAbsFileName($this->iconRootPath . '/' . $searchIcon), strlen(PATH_site));

            $htmlArray[] = '  <li class="search">';
            $htmlArray[] = '    <label for="search_box">' . $this->pi_getLL('pi_form.searchBoxLabel') . '</label>';
            $htmlArray[] = '    <input type="text" name="' . $this->prefixId . '[search]' . '" value="' . $this->piVars['search'] . '" class="search_box_text" id="search_box" title="' . $this->pi_getLL('pi_form.searchBoxLabel') . '" ondblclick="this.value=\'\';" />';
            $htmlArray[] = '    <input type="image" src="' . $searchIconPath . '" name="search_button" class="searchButton" title="' . $this->pi_getLL('pi_form.searchBoxButtonAlt') . '" alt="' . $this->pi_getLL('pi_form.searchBoxButtonAlt') . '" />';
            $htmlArray[] = '  </li>';
        }

        $htmlArray[] = '</ul>';

        return $this->arrayToHTML($htmlArray);
    }

    /**
     * Checks if an item was selected
     *
     * @param string $param
     *            (item to check)
     *
     * @return boolean
     */
    protected function is_selected($param)
    {
        return (($param == $this->param) ? TRUE : FALSE);
    }

    /**
     * Splits the page filter string and set the filter depending on the page id.
     * a cookie $this->extKey is used to keep the filter when shortcut are used.
     *
     * @param string $filter
     *            (filter to be analysed table.field:pageid=numeber; .... pageid=numeber)
     *
     * @return string (page filter)
     */
    protected function getPageFilter($filter)
    {
        // Builds the page filter
        if ($filter) {
            $temp = explode(':', $filter);
            $field = explode('.', $temp[0]);

            $pageslist = explode(';', trim($temp[1]));
            $pages = array();
            foreach ($pageslist as $page) {
                $res = explode('=', trim($page));
                $pages[$res[0]] = $res[1];
            }
            if (isset($pages[GeneralUtility::_GET('id')])) {
                $page = $pages[GeneralUtility::_GET('id')];
                $pageFilter = 'find_in_set(' . $pages[GeneralUtility::_GET('id')] . ',' . $temp[0] . ')>0';
            } else {
                $pageFilter = '1';
            }
        } else {
            $pageFilter = '1';
        }

        return $pageFilter;
    }
}

?>