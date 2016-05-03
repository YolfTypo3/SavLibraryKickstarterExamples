<?php

/**
 * Copyright notice
 *
 * (c) 2008 Laurent Foulloy <yolf.typo3@orange.fr>
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Plugin 'SAV Filter Months' for the 'sav_filter_months' extension.
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package TYPO3
 * @subpackage tx_savfiltermonths
 */
class tx_savfiltermonths_pi1 extends \SAV\SavLibraryPlus\Filters\AbstractFilter
{

    public $prefixId = 'tx_savfiltermonths_pi1';
    // Same as class name
    public $scriptRelPath = 'Classes/Controller/SavFilterMonthsController.php';
    // Path to this script relative to the extension dir.
    public $extKey = 'sav_filter_months';
    // The extension key.
    public $pi_checkCHash = FALSE;

    // Specific variables for this filter
    protected $debugQuery = FALSE;
    // Debug the query if set to tre. FOR DEVELLOPMENT ONLY !!!
    protected $list;
    // List of items
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
        $this->sessionFilter[$this->extKeyWithId]['fieldName'] = $this->conf['fieldName'];
    }

    /**
     * Setter for addWhere
     *
     * @return void
     */
    protected function SetSessionField_addWhere()
    {
        $where = '1';
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
    {
        $this->initList();
    }

    /**
     * piVars processing
     *
     * @return void
     */
    protected function piVarsProcessing()
    {

        // Checks if a search was posted
        $addWhere = '';
        if ($this->piVars['search'] && ! $this->piVars['param']) {
            $addWhere = ' AND (0 ';
            $searchFields = explode(',', $this->conf['searchFields']);
            foreach ($searchFields as $searchField) {
                if ($searchField) {
                    $addWhere .= ' OR (' . $searchField . ' LIKE \'%' . $this->piVars['search'] . '%\')';
                }
            }
            $addWhere .= ')';
        } else {
            unset($this->piVars['search']);
            if (! $this->piVars['param'] || $this->piVars['param'] == $this->list[count($this->list) - 1]['value']) {
                $addWhere = ' AND ' . $this->conf['fieldName'] . '>=UNIX_TIMESTAMP(CONCAT(YEAR(NOW())+' . $this->list[1]['year'] . ',"-",' . $this->list[1]['month'] . ',"-1"))';
                $addWhere .= ' AND ' . $this->conf['fieldName'] . '<=UNIX_TIMESTAMP(CONCAT(YEAR(NOW())+' . $this->list[count($this->list) - 2]['year'] . ',"-",' . $this->list[count($this->list) - 2]['month'] . ',"-31"))';
            } else {
                $addWhere = ' AND month(from_unixtime(' . $this->conf['fieldName'] . '))=' . $this->list[$this->piVars['param']]['month'];
                $addWhere .= ' AND year(from_unixtime(' . $this->conf['fieldName'] . '))=YEAR(NOW())+' . $this->list[$this->piVars['param']]['year'];
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
    {}

    /**
     * Initializes the list of items
     *
     * @return void
     */
    protected function initList()
    {
        $this->pi_loadLL();

        // Builds the list, first the backward months, then regular months, then all
        $backwardMonths = $this->conf['backwardMonths'];
        $forwardMonths = $this->conf['forwardMonths'];

        $where = ' AND ' . $this->conf['fieldName'] . '>=UNIX_TIMESTAMP(CONCAT(YEAR(NOW())-' . ($backwardMonths ? 1 : 0) . ',"-' . ($backwardMonths ? 12 - $backwardMonths : 1) . '-1"))';
        $where .= ' AND ' . $this->conf['fieldName'] . '<=UNIX_TIMESTAMP(CONCAT(YEAR(NOW())+' . ($forwardMonths ? 1 : 0) . ',"-' . ($forwardMonths ? $forwardMonths : 12) . '-31"))';

        $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
			/* SELECT   */	'DISTINCT MONTH(FROM_UNIXTIME(' . $this->conf['fieldName'] . ')) AS month, YEAR(FROM_UNIXTIME(' . $this->conf['fieldName'] . ')) - YEAR(NOW()) AS yeardiff',
			/* FROM     */	$this->conf['tableName'],
 			/* WHERE    */	' 1' . $where . $this->cObj->enableFields($this->conf['tableName']) . ($this->conf['pidList'] ? ' AND pid IN (' . $this->conf['pidList'] . ')' : ''),
			/* GROUP BY */	'',
			/* ORDER BY */	'',
			/* LIMIT    */	'');

        while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
            $rows[$row['yeardiff']][$row['month']] = 1;
        }
        $this->list = array();
        $cpt = 0;
        $this->list[] = array(
            'value' => $cpt ++,
            'label' => ''
        );
        $backwardMonthsStart = min($backwardMonths, 12);
        for ($i = $backwardMonthsStart; $i > 0; $i --) {
            $this->list[] = array(
                'label' => ucfirst(strftime('%b', strtotime(13 - $i . '/01/2000'))),
                'value' => $cpt ++,
                'active' => isset($rows[- 1][13 - $i]),
                'month' => 13 - $i,
                'year' => - 1
            );
        }
        for ($i = 1; $i < 13; $i ++) {
            $this->list[] = array(
                'label' => ucfirst(strftime('%b', strtotime($i . '/01/2000'))),
                'value' => $cpt ++,
                'active' => isset($rows[0][$i]),
                'month' => $i,
                'year' => 0
            );
        }
        $forwardMonthsStop = $i <= min($forwardMonths, 12);
        for ($i = 1; $i <= $forwardMonthsStop; $i ++) {
            $this->list[] = array(
                'label' => ucfirst(strftime('%b', strtotime($i . '/01/2000'))),
                'value' => $cpt ++,
                'active' => isset($rows[1][$i]),
                'month' => $i,
                'year' => 1
            );
        }

        $this->list[] = array(
            'label' => $this->pi_getLL('all'),
            'value' => $cpt ++,
            'active' => TRUE,
            'year' => 0
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

        $htmlArray[] = '<ul class="months">';

        // Process the list
        foreach ($this->list as $key => $value) {
            $class = ($this->is_selected($value['value']) ? 'aSelected' : 'aRegular');

            if ($value['active']) {
                $htmlArray[] = '  <li class="month">' . $this->add_class($this->pi_linkTP_keepPiVars($value['label'], array(
                    'param' => $value['value']
                ), 1, 1), $class) . '</li>';
            } else {
                $htmlArray[] = '  <li class="month">' . $value['label'] . '</li>';
            }
        }

        // Search button
        if ($this->conf['searchBox']) {
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
}
?>
