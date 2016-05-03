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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Plugin 'SAV Filter Mini Calendar' for the 'sav_filter_minicalendar' extension.
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package TYPO3
 * @subpackage tx_savfilterminicalendar
 */
class tx_savfilterminicalendar_pi1 extends \SAV\SavLibraryPlus\Filters\AbstractFilter
{

    public $prefixId = 'tx_savfilterminicalendar_pi1';
 // Same as class name
    public $scriptRelPath = 'Classes/Controller/SavFilterMinicalendarController.php';
 // Path to this script relative to the extension dir.
    public $extKey = 'sav_filter_minicalendar';
 // The extension key.
    public $pi_checkCHash = FALSE;

    // Specific variables for this filter
    protected $template = '';
 // Template
    protected $templateMatches = array();
 // Array of matches extracted from the template
    protected $paramsFromMatches = array();
 // Array of parameters extracted from the template matches
    protected $where = '1';
 // Where clause in session
    protected $addWhere = '';
 // Additionnal where clause in session
    protected $search = FALSE;
 // Search flag
    protected $searchOrder = '';
 // Order clause in session
    protected $day;
 // Current day number
    protected $month;
 // Current month
    protected $year;
 // Currrent year
    protected $tstampFirstDay;
 // First day of the month as a timestamp
    protected $firstDay;
 // First day of the month
    protected $nbDays;
 // Number of days for the month
    protected $tstampLastDay;
 // Last day of the month as a time stamp

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->SPACE = '  ';
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
        $this->sessionFilter[$this->extKeyWithId]['fieldName'] = $this->conf['titleFieldName'];
    }

    /**
     * Setter for addWhere
     *
     * @return void
     */
    protected function SetSessionField_addWhere()
    {
        $this->sessionFilter[$this->extKeyWithId]['addWhere'] = $this->where . $this->addWhere;
    }

    /**
     * Setter for search
     *
     * @return void
     */
    protected function SetSessionField_search()
    {
        $this->sessionFilter[$this->extKeyWithId]['search'] = true;
    }

    /**
     * Setter for order
     *
     * @return void
     */
    protected function SetSessionField_searchOrder()
    {
        $this->sessionFilter[$this->extKeyWithId]['searchOrder'] = $this->searchOrder;
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

        // Read the template
        if ($this->conf['template'] && file_exists(PATH_site . $this->conf['template'])) {
            $this->template = $this->cObj->fileResource($this->conf['template']);
        } elseif (file_exists(ExtensionManagementUtility::extPath($this->extKey) . 'Resources/Private/Templates/' . $this->extKey . '.tmpl')) {
            $this->template = $this->cObj->fileResource('EXT:' . $this->extKey . '/Resources/Private/Templates/' . $this->extKey . '.tmpl');
        } else {
            $this->addError('error.templateNeeded');

            return $this->pi_wrapInBaseClass($this->showErrors());
        }

        $this->initMiniCalendar();
    }

    /**
     * piVars processing
     *
     * @return void
     */
    protected function piVarsProcessing()
    {
        if ($this->piVars['month']) {
            $this->addWhere = ($this->piVars['tstamp'] ? ' AND ' . $this->conf['dateFieldName'] . ' > ' . $this->tstampFirstDay . ' AND ' . $this->conf['dateFieldName'] . ' < ' . $this->tstampLastDay : '');
        } else {
            $this->addWhere = ($this->piVars['tstamp'] ? ' AND DATE(FROM_UNIXTIME(' . $this->conf['dateFieldName'] . '))=DATE(FROM_UNIXTIME(' . $this->piVars['tstamp'] . '))' : '');
        }
    }

    /**
     * Gets the row associated with the page id
     *
     * @return void
     */
    protected function generalProcessing()
    {
        $this->searchOrder = $this->conf['dateFieldName'];
    }

    /**
     * Builds the content
     *
     * @return string (html content)
     */
    protected function buildContent()
    {
        $out = $this->miniCalendar();

        return $out;
    }

    /**
     * Mini Calendar
     *
     * @return string (calendar html code)
     */
    protected function initMiniCalendar()
    {
        // Sets variables
        $time = ($this->conf['timeInit'] ? $this->conf['timeInit'] : time());
        $tstamp = $this->piVars['tstamp'] ? $this->piVars['tstamp'] : $time;
        $this->day = date('j', $tstamp);
        $this->month = date('n', $tstamp);
        $this->year = date('Y', $tstamp);
        $this->tstampFirstDay = mktime(0, 0, 0, $this->month, 1, $this->year);
        $this->firstDay = date('w', $this->tstampFirstDay);
        $this->nbDays = date('t', $this->tstampFirstDay);
        $this->tstampLastDay = mktime(23, 59, 59, $this->month, $this->nbDays, $this->year);
    }

    /**
     * Mini Calendar
     *
     * @return string (calendar html code)
     */
    protected function miniCalendar()
    {
        // html arrays
        $htmlArrayMonthSelect = array();
        $htmlArrayDaysHeader = array();
        $htmlArrayCalendar = array();

        // Gets the events for the month
        $events = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows('uid,' . $this->conf['dateFieldName'] . ' AS _dateFieldName_,' . $this->conf['titleFieldName'] . ' AS _titleFieldName_', $this->conf['tableName'], $this->conf['dateFieldName'] . ' > ' . $this->tstampFirstDay . ' AND ' . $this->conf['dateFieldName'] . ' < ' . $this->tstampLastDay . $this->cObj->enableFields($this->conf['tableName']) . ($this->conf['pidList'] ? ' AND pid IN (' . $this->conf['pidList'] . ')' : ''), '', $this->conf['dateFieldName']);

        if (! is_array($events)) {
            $this->addError('error.incorrectQuery', $this->extKey);
            return '';
        }

        // Arrows for the month
        $htmlArrayMonthSelect[] = '<script type="text/javascript" src="' . ExtensionManagementUtility::siteRelPath($this->extKey) . 'Resources/Public/JavaScript/wz_tooltip.js"></script>';

        $htmlArrayMonthSelect[] = '<div class="monthSelect">';
        $param = array(
            $this->prefixId . '[tstamp]' => mktime(0, 0, 0, $this->month - 1, 1, $this->year),
            $this->prefixId . '[month]' => 1
        );

        // Sets the left and right arrow icons
        if (empty($this->iconRootPath)) {
            $this->iconRootPath = ExtensionManagementUtility::siteRelPath($this->extKey) . 'Resources/Public/Icons';
        }
        if (empty($this->conf['leftArrowIcon'])) {
            $leftArrowIcon = 'leftArrow.gif';
        } else {
            $leftArrowIcon = $this->conf['leftArrowIcon'];
        }
        if (empty($this->conf['rightArrowIcon'])) {
            $rightArrowIcon = 'rightArrow.gif';
        } else {
            $rightArrowIcon = $this->conf['rightArrowIcon'];
        }
        $leftArrowIconPath = substr(GeneralUtility::getFileAbsFileName($this->iconRootPath . '/' . $leftArrowIcon), strlen(PATH_site));
        $rightArrowIconPath = substr(GeneralUtility::getFileAbsFileName($this->iconRootPath . '/' . $rightArrowIcon), strlen(PATH_site));

        $htmlArrayMonthSelect[] = '  ' . $this->pi_linkTP('<img class="leftArrow" src="' . $leftArrowIconPath . '" alt="" />', $param);
        $monthName = ucfirst(strftime('%B %Y', $this->tstampFirstDay));
        $htmlArrayMonthSelect[] = '  <span class="month"> ' . $monthName . '</span>';
        $param = array(
            $this->prefixId . '[tstamp]' => mktime(0, 0, 0, $this->month + 1, 1, $this->year),
            $this->prefixId . '[month]' => 1
        );
        $htmlArrayMonthSelect[] = '  ' . $this->pi_linkTP('<img class="rightArrow" src="' . $rightArrowIconPath . '" alt="" />', $param);
        $htmlArrayMonthSelect[] = '</div>';

        // Days header
        $htmlArrayDaysHeader[] = '<ul class="daysHeader">';
        for ($i = 1; $i < 8; $i ++) {
            $htmlArrayDaysHeader[] = '  <li class="day">' . $this->pi_getLL('miniCalendarDay_' . $i) . '</li>';
        }
        $htmlArrayDaysHeader[] = '</ul>';

        // Calendar y week
        $htmlArrayCalendar[] = '<ul class="week">';
        if ($this->firstDay == 0) {
            $this->firstDay = 7;
        }
        if ($this->firstDay != 1) {
            for ($i = 1; $i < $this->firstDay; $i ++) {
                $htmlArrayCalendar[] = '  <li class="noday">&nbsp;</li>';
            }
        }

        for ($i = 1; $i <= $this->nbDays; $i ++) {

            if (date('w', (mktime(0, 0, 0, $this->month, $i, $this->year))) == 1) {
                $htmlArrayCalendar[] = '</ul>';
                $htmlArrayCalendar[] = '<ul class="week">';
                if ($this->conf['showWeek']) {
                    $htmlArrayCalendar[] = '  <li class="weeknumber">' . date('W', mktime(0, 0, 0, $this->month, $i + 1, $this->year)) . '</li>';
                }
            }

            if (mktime(0, 0, 0, $this->month, $i, $this->year) == mktime(0, 0, 0, date('n', time()), date('j', time()), date('Y', time()))) {
                $htmlDay = '  <li class="today">';
            } elseif (date('w', mktime(0, 0, 0, $this->month, $i, $this->year)) == 0 || date('w', mktime(0, 0, 0, $this->month, $i, $this->year)) == 6) {
                $htmlDay = '  <li class="weekend">';
            } else {
                $htmlDay = '  <li class="weekday">';
            }

            // Searches if an event is defined for the current day
            $dayEvents = '';
            foreach ($events as $key => $event) {
                if (date('j', $event['_dateFieldName_']) == $i) {
                    $dayEvents .= ($dayEvents ? '<br />' . addslashes($event['_titleFieldName_']) : addslashes($event['_titleFieldName_'])) . ' - ' . date('H:i', $event['_dateFieldName_']);
                }
            }

            if ($dayEvents) {
                $param = array(
                    $this->prefixId . '[tstamp]' => mktime(0, 0, 0, $this->month, $i, $this->year)
                );
                $conf['parameter'] = $GLOBALS['TSFE']->id;
                $tips = $dayEvents;
                $tips = mb_convert_encoding($tips, $this->getCharset(), mb_detect_encoding($tips));
                $conf['ATagParams'] = 'onmouseover="Tip(\'' . $tips . '\')" onmouseout="UnTip()"';
                $conf['additionalParams'] = $this->conf['parent.']['addParams'] . GeneralUtility::implodeArrayForUrl('', $param, '', 1);

                $htmlDay .= $this->cObj->typoLink($i, $conf);
            } else {
                $htmlDay .= $i;
            }
            $htmlDay .= '</li>';
            $htmlArrayCalendar[] = $htmlDay;
        }

        $i = $nbDays + 1;
        while (date('w', (mktime(0, 0, 0, $this->month, $i, $this->year))) != 1) {
            $htmlArrayCalendar[] = '  <li class="noday">&nbsp;</li>';
            $i ++;
        }

        $htmlArrayCalendar[] = '</ul>';

        $markerArray['###MONTH_SELECT###'] = $this->arrayToHTML($htmlArrayMonthSelect, $this->SPACE);
        $markerArray['###DAYS_HEADER###'] = $this->arrayToHTML($htmlArrayDaysHeader, $this->SPACE);
        $markerArray['###CALENDAR###'] = $this->arrayToHTML($htmlArrayCalendar, $this->SPACE);

        $out = $this->cObj->substituteMarkerArrayCached($this->cObj->getSubpart($this->template, '###MINI_CALENDAR###'), $markerArray);

        return $out;
    }

    /**
     * Gets the charset
     *
     * @param
     *            none
     * @return string
     */
    protected function getCharset()
    {
        return ($GLOBALS['TYPO3_CONF_VARS']['BE']['forceCharset'] ? $GLOBALS['TYPO3_CONF_VARS']['BE']['forceCharset'] : 'iso-8859-1');
    }
}
?>