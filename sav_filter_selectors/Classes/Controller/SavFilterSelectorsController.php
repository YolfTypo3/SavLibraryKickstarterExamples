<?php

/**
 *  Copyright notice
 *
 *  (c) 2008 Yolf <yolf.typo3@orange.fr>
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
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Plugin 'SAV Filter Selectors' for the 'sav_filter_selectors' extension.
 *
 * @author Laurent Foulloy <yolf.typo3@orange.fr>
 * @package TYPO3
 * @subpackage tx_savfilterselectors
 */
class tx_savfilterselectors_pi1 extends \SAV\SavLibraryPlus\Filters\AbstractFilter
{

    public $prefixId = 'tx_savfilterselectors_pi1';
 // Same as class name
    public $scriptRelPath = 'Classes/Controller/SavFilterSelectorsController.php';
 // Path to this script relative to the extension dir.
    public $extKey = 'sav_filter_selectors';
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
    protected $search = false;
 // Search flag
    protected $searchOrder = '';
 // Order clause in session
    protected $miniCalendar;
 // Mini calendar object
    protected $tableName = '';
 // Table name (in case of several tables, they are comma-separated)
    protected $mA = array();
 // Matching array

    /**
     * Setter for tableName
     *
     * @return void
     */
    protected function SetSessionField_tableName()
    {
        $this->sessionFilter[$this->extKeyWithId]['tableName'] = $this->tableName;
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
        $this->sessionFilter[$this->extKeyWithId]['search'] = $this->search;
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

        // Sets the page link
        return $this->pi_wrapInBaseClass($this->wrapForm($content, $hidden, $this->extKey, $this->pi_getPageLink($GLOBALS['TSFE']->id)));
    }

    /**
     * Initialization for the filter
     *
     * @return void
     */
    protected function initFilter()
    {
        // Processes the template
        $this->template = $this->conf['template'];

        // Checks if there are language metatags and replace them in the template
        if (preg_match_all('/\$\$\$([^\$]+)\$\$\$/', $this->template, $matches)) {
            $languageLabels = GeneralUtility::xml2array(html_entity_decode($this->conf['language']));
            if (! is_array($languageLabels)) {
                $this->addError('error.incorrectLanguageConfiguration', $languageLabels);
                return $this->pi_wrapInBaseClass($this->showErrors());
            } else {
                $LLKey = (array_key_exists($this->LLkey, $languageLabels) ? $this->LLkey : 'default');
                foreach ($matches[1] as $keyMatch => $match) {
                    $label = $languageLabels[$LLKey][$match];
                    if ($label) {
                        $this->template = str_replace($matches[0][$keyMatch], $label, $this->template);
                    } else {
                        $label = $languageLabels['default'][$match];
                        if ($label) {
                            $this->template = str_replace($matches[0][$keyMatch], $label, $this->template);
                        }
                    }
                }
            }
        }

        // Checks for special processing
        $cpt = 0;
        while (preg_match_all('/###[^#]*?(\([^#\(\)]*?\))[^#]*###/m', $this->template, $matches)) {
            foreach ($matches[1] as $key => $match) {
                if ($match) {
                    $this->template = str_replace($match, '@' . $cpt . '@', $this->template);
                    $this->mA[$cpt] = $this->cObj->substituteMarkerArray($match, $this->mA, '@|@');
                    $cpt ++;
                }
            }
        }

        preg_match_all('/###([^\[]*)\[[ ]*([^\s\]]*)(?:\sas\s)?([^\]]*?(?=\swhere\s|\saddwhere\s|\sorder\s)|[^\]]*)?(?:\swhere\s|\s(addwhere)\s)?([^\]]*(?=\sorder by\s)|[^\]]*)?(?:\sorder by\s([^\]]*))?\]###/m', $this->template, $this->templateMatches);
        // 3 = alias part
        // 4 = NULL or addwhere
        // 5 = where part
        // 6 = order part
        if (isset($this->templateMatches[2])) {
            foreach ($this->templateMatches[2] as $key => $match) {
                $param = explode('.', $match);
                // Checks if tablename is set
                if (! isset($param[1])) {
                    continue;
                }

                $this->paramsFromMatches[$match]['table'] = $param[0];
                $tableName .= ($tableName ? (strpos($tableName, $param[0]) === false ? ',' . $param[0] : '') : $param[0]);
                $this->paramsFromMatches[$match]['alias'] = $this->cObj->substituteMarkerArray($this->templateMatches[3][$key], $this->mA, '@|@');
                $this->paramsFromMatches[$match]['where'] = $this->cObj->substituteMarkerArray($this->templateMatches[5][$key], $this->mA, '@|@');

                // Checks if a search was posted
                if ($this->templateMatches[1][$key] == 'search' || strtolower($this->templateMatches[1][$key]) == 'searchall') {
                    $this->paramsFromMatches[$param[1]]['search'] = 1;
                    $this->paramsFromMatches[$param[1]]['parent'] = $match;
                    $this->paramsFromMatches[$param[1]]['where'] = $this->cObj->substituteMarkerArray($this->templateMatches[5][$key], $this->mA, '@|@');

                    $this->search = (($this->piVars[$param[1]] && strtolower($this->templateMatches[1][$key]) == 'searchall') ? TRUE : false);
                    $this->searchOrder = $this->templateMatches[6][$key];
                }
            }
        }
    }

    /**
     * piVars processing
     *
     * @return void
     */
    protected function piVarsProcessing()
    {
        if (is_array($this->piVars)) {
            foreach ($this->piVars as $key => $param) {

                if (! isset($this->paramsFromMatches[$key])) {
                    // Processes grouping begin if any
                    if ($this->piVars[$key] == 'beginGroup') {
                        $groupBegin = 1;
                        $keepAddWhere = $this->addWhere;
                    }
                    // Processes grouping end if any
                    if ($this->piVars[$key] == 'endGroup') {
                        if ($this->addWhere != $keepAddWhere) {
                            if ($keepAddWhere) {
                                $this->addWhere = str_replace($keepAddWhere, $keepAddWhere . ' AND (0', $this->addWhere);
                            } else {
                                $this->addWhere = ' AND (0' . $this->addWhere;
                            }
                            $this->addWhere .= ')';
                        }
                    }
                    continue;
                }

                // Checks if a search was posted
                if ($this->paramsFromMatches[$key]['search']) {

                    if (! $param) {
                        continue;
                    }

                    $this->where .= ($this->paramsFromMatches[$key]['where'] ? ' AND (' . $this->paramsFromMatches[$key]['where'] . ')' : '');
                    // Checks if a list of fields was given
                    $alias = $this->paramsFromMatches[$this->paramsFromMatches[$key]['parent']]['alias'];
                    if ($alias) {
                        $fields = explode(',', $alias);
                        $this->addWhere .= ' AND (0';
                        foreach ($fields as $field) {
                            if ($field) {
                                $this->addWhere .= ' OR ' . $field . ' LIKE \'%' . str_replace('*', '', $this->piVars[$key]) . '%\'';
                            }
                        }
                        $this->addWhere .= ')';
                        continue;
                    } else {
                        $this->addWhere .= ' AND ' . $this->paramsFromMatches[$key]['parent'] . ' LIKE \'%' . str_replace('*', '', $this->piVars[$key]) . '%\'';
                        continue;
                    }
                }

                $config = $this->getConfig($key);

                if (is_array($param)) {

                    $this->where .= ($this->paramsFromMatches[$key]['where'] ? ' AND (' . $this->paramsFromMatches[$key]['where'] . ')' : '');
                    $this->addWhere .= ($groupBegin ? ' OR (' : ' AND (');
                    $ope = ($this->piVars[$key . '_ope'] == 'equal' ? '=' : '&');
                    foreach ($param as $k => $v) {
                        if ($v) {
                            $this->addWhere .= $config['_field'] . $ope . $v . ' OR ';
                        }
                    }
                    $this->addWhere .= '0)';
                } elseif ($param) {
                    $this->where .= ($this->paramsFromMatches[$key]['where'] ? ' AND (' . $this->paramsFromMatches[$key]['where'] . ')' : '');
                    // Checks if it's an alias and get the value
                    if ($this->paramsFromMatches[$key]['alias']) {
                        $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
				      /* SELECT   */	$this->paramsFromMatches[$key]['alias'] . ' AS ' . $config['field'],
				      /* FROM     */	$config['table'],
				      /* WHERE    */	'uid =' . intval($param),
				      /* GROUP BY */  '',
				      /* ORDER BY */  $config['field']);
                        $row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res);
                        $this->addWhere .= ' AND ' . $this->paramsFromMatches[$key]['alias'] . '="' . $row[$config['field']] . '"';
                    } else {
                        if ($config['type'] == 'select' && $config['MM']) {
                            $this->addWhere .= ' AND ' . $config['foreign_table'] . '.uid=' . intval($param);
                        } else {
                            $this->addWhere .= ' AND ' . $config['_field'] . '=' . $param;
                        }
                    }
                }
            }
        }
    }

    /**
     * Gets the row associated with the page id
     *
     * @return void
     */
    protected function generalProcessing()
    {}

    /**
     * Builds the content
     *
     * @return string (html content)
     */
    protected function buildContent()
    {
        $htmlArray = array();

        $out = $this->template;

        if (isset($this->templateMatches[2])) {
            foreach ($this->templateMatches[2] as $key => $match) {
                $groupBy = '';
                $order = '';

                switch (strtolower($this->templateMatches[1][$key])) {
                    case 'checkbegingroup':
                        $beginGroup = '<input type="hidden" name="' . $this->prefixId . '[' . $match . '_group]' . '" value="beginGroup" />';
                    case 'checkendgroup':
                        $endGroup = '<input type="hidden" name="' . $this->prefixId . '[' . $match . '_group]' . '" value="endGroup" />';
                    case 'check':
                        $config = $this->getConfig($match);
                        switch ($config['type']) {
                            case 'check':
                                $ope = '<input type="hidden" name="' . $this->prefixId . '[' . $match . '_ope]' . '" value="and" />';
                                foreach ($config['items'] as $k => $v) {
                                    $config['items'][$k]['value'] = (is_array($this->piVars[$config['_field']]) ? $this->piVars[$config['_field']][$k] : 0);
                                    $config['items'][$k][1] = 1 << $k;
                                }
                                $config['cols'] = 1;
                                $out = str_replace($this->templateMatches[0][$key], ($beginGroup ? $beginGroup : '') . $this->viewCheckEditMode($config) . $ope . ($endGroup ? $endGroup : ''), $out);
                                break;
                            case 'select':
                                $ope = '<input type="hidden" name="' . $this->prefixId . '[' . $match . '_ope]' . '" value="equal" />';
                                foreach ($config['items'] as $k => $v) {
                                    $config['items'][$k]['label'] = $GLOBALS['TSFE']->sL($v[0]);
                                    $config['items'][$k]['value'] = (is_array($this->piVars[$config['_field']]) ? $this->piVars[$config['_field']][$k] : 0);

                                    // Discards items with no label
                                    if (! $config['items'][$k]['label']) {
                                        unset($config['items'][$k]);
                                    }
                                }

                                $out = str_replace($this->templateMatches[0][$key], ($beginGroup ? $beginGroup : '') . $this->viewCheckEditMode($config) . $ope . ($endGroup ? $endGroup : ''), $out);
                                break;
                        }
                        break;

                    case 'selectfromquery':
                        // Executes the query
                        $query = $this->cObj->substituteMarkerArrayCached($this->templateMatches[2][$key], $this->mA);

                        // Checks if the query is a SELECT query
                        if (! preg_match('/^\([ \r\t\n]*(?i)select /', $query)) {
                            $this->addError('error.onlySelectQueryAllowed', $this->extKey);
                            return;
                        }
                        $res = $GLOBALS['TYPO3_DB']->sql_query($query);
                        if ($GLOBALS['TYPO3_DB']->sql_error($res)) {
                            $this->addError('error.incorrectQuery', $this->extKey);
                            return;
                        }

                        // Prepares the configuration
                        $config['size'] = 1;
                        $config['field'] = trim($this->templateMatches[3][$key]);
                        $config['_field'] = trim($this->templateMatches[3][$key]);

                        $config['items'] = array();
                        // Add a blank item
                        $config['items'][0] = array();

                        $cpt = 1;
                        $selected = 0;
                        $rowSelected = array();
                        while ($rows = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {

                            if ($rows['uid']) {
                                if ($rows['uid'] == $this->piVars[trim($this->templateMatches[3][$key])]) {
                                    $selected = 1;
                                    $rowSelected = $rows;
                                }
                                $config['items'] = $config['items'] + array(
                                    $rows['uid'] => array(
                                        'label' => $rows['label'],
                                        'selected' => $selected
                                    )
                                );
                                $selected = 0;
                            } else {
                                if ($cpt == $this->piVars[trim($this->templateMatches[3][$key])]) {
                                    $selected = 1;
                                    $rowSelected = $rows;
                                }
                                $config['items'][$cpt] = array(
                                    'label' => $rows['label'],
                                    'selected' => $selected
                                );
                                $selected = 0;
                                $cpt ++;
                            }
                        }

                        // Creates the markers
                        foreach ($rowSelected as $fieldName => $fieldValue) {
                            $lA['###' . $fieldName . '###'] = '"' . $fieldValue . '"';
                        }

                        $temp = $this->cObj->substituteMarkerArrayCached($this->templateMatches[5][$key], $lA);
                        $this->addWhere .= ' AND ' . ($this->piVars[trim($this->templateMatches[3][$key])] ? $temp : '1');

                        $out = str_replace($this->templateMatches[0][$key], $this->viewDbRelationSingleSelectorEditMode($config), $out);
                        break;
                    case 'selectdistinctsearchall':
                        $this->search = TRUE;
                    case 'selectdistinct':
                        $config = $this->getConfig($match);
                        $groupBy = $config['field'];
                        $order = $config['field'];

                    case 'selectsearchall':
                    case 'select':
                        if (strtolower($this->templateMatches[1][$key]) == 'selectsearchall') {
                            $this->search = TRUE;
                        }

                        $config = $this->getConfig($match);
                        $config['groupBy'] = $groupBy;
                        $config['order'] = ($this->templateMatches[6][$key] ? $this->templateMatches[6][$key] : ($config['order'] ? $config['order'] : $order));
                        $config['where'] = ($this->templateMatches[4][$key] == 'addwhere' ? '' : $this->cObj->substituteMarkerArray($this->templateMatches[5][$key], $this->mA, '@|@'));
                        $config['alias'] = $this->cObj->substituteMarkerArray($this->templateMatches[3][$key], $this->mA, '@|@');

                        switch ($config['type']) {
                            case 'select':
                                $param = explode('.', $match);
                                $config['selected'] = $this->piVars[$match];

                                if ($config['foreign_table']) {
                                    $out = str_replace($this->templateMatches[0][$key], $this->viewDbRelationSelectorGlobal($config), $out);
                                } else {
                                    $config['value'] = $config['selected'];
                                    $out = str_replace($this->templateMatches[0][$key], $this->viewSelectorboxEditMode($config), $out);
                                }
                                break;
                            default:
                                unset($config['size']);

                                $config['selected'] = $this->piVars[$match];
                                $config['type'] = 'select';
                                $config['foreign_table'] = $config['table'];
                                $config['label_field'] = $config['field'];

                                $out = str_replace($this->templateMatches[0][$key], $this->viewDbRelationSelectorGlobal($config), $out);
                                break;
                        }
                        break;
                    case 'radiolist':
                        if ($this->piVars['radiolist'] == $match) {
                            $checked = ' checked="checked" ';
                            $this->addWhere .= ' AND ' . $this->cObj->substituteMarkerArrayCached($this->templateMatches[3][$key], $this->mA);
                        } else {
                            $checked = '';
                        }

                        $elementName = $this->prefixId . '[radiolist]';
                        $out = str_replace($this->templateMatches[0][$key], '<input type="radio" name="' . $elementName . '" value="' . $match . '"' . $checked . ' />', $out);
                        break;
                    case 'button':
                        $func = $match . 'Button';
                        $out = str_replace($this->templateMatches[0][$key], $this->$func(), $out);
                        break;
                    case 'searchall':
                    case 'search':
                        $param = explode('.', $match);
                        $out = str_replace($this->templateMatches[0][$key], '<input type="text" name="' . $this->prefixId . '[' . $param[1] . ']' . '" id="' . $param[1] . '" value="' . $this->piVars[$param[1]] . '" size="15" ondblclick="this.value=\'\';" />', $out);
                        break;
                    case 'label':
                        $out = str_replace($this->templateMatches[0][$key], $GLOBALS['TSFE']->sL($this->templateMatches[2][$key]), $out);
                        break;
                    case 'where':
                        $this->addWhere .= ' AND ' . $this->templateMatches[2][$key];
                        $out = str_replace($this->templateMatches[0][$key], '', $out);
                        break;
                    case 'calendar':
                        if (ExtensionManagementUtility::isLoaded('sav_filter_minicalendar')) {
                            require_once (ExtensionManagementUtility::extPath('sav_filter_minicalendar') . 'Classes/Controller/SavFilterMinicalendarController.php');
                            $this->miniCalendar = GeneralUtility::makeInstance('tx_savfilterminicalendar_pi1');
                            $this->miniCalendar->cObj = $this->cObj;
                            $this->miniCalendar->cObj->conf = array();
                        } else {
                            $this->addError('error.extensionNotLoaded', 'sav_filter_minicalendar');
                            return $this->pi_wrapInBaseClass($this->showErrors());
                        }

                        $conf = array(
                            'tableName' => $this->templateMatches[2][$key],
                            'dateFieldName' => $this->templateMatches[6][$key],
                            'titleFieldName' => $this->templateMatches[3][$key],
                            'timeInit' => ($this->sessionFilter[$this->miniCalendar->extKey . '_' . $this->cObj->data['uid']]['piVars']['tstamp'] ? $this->sessionFilter[$this->miniCalendar->extKey . '_' . $this->cObj->data['uid']]['piVars']['tstamp'] : ''),
                            'noForm' => TRUE
                        );
                        $conf = array_merge($conf, $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_savfilterminicalendar_pi1.']);

                        $out = str_replace($this->templateMatches[0][$key], $this->miniCalendar->main('', $conf), $out);

                        // Reloads session information
                        $this->sessionFilterTemp = $GLOBALS['TSFE']->fe_user->getKey('ses', 'filters');
                        $this->sessionFilterSelectedTemp = $GLOBALS['TSFE']->fe_user->getKey('ses', 'selectedFilterKey');

                        // Keeps the result of the search with the minicalendar
                        if ($this->sessionFilterTemp[$this->miniCalendar->extKeyWithId]['addWhere']) {

                            // Checks if other selector items where used
                            if ($this->sessionFilterTemp[$this->extKeyWithId]['piVars']) {
                                $this->piVars = $this->sessionFilterTemp[$this->extKeyWithId]['piVars'];
                                $this->piVarsProcessing();
                            }

                            $this->search = TRUE;
                            $this->searchOrder = $this->templateMatches[6][$key] . ' ASC';
                            $this->addWhere .= ' AND ' . $this->sessionFilterTemp[$this->miniCalendar->extKeyWithId]['addWhere'];
                            $this->forceSetSessionFields = 1;
                        }

                        break;
                }

                // Adds the table to the list
                if ($this->tableName) {
                    $tempTable = explode(',', $this->tableName);
                } else {
                    $tempTable = array();
                }
                if ($config['table'] && ! in_array($config['table'], $tempTable)) {
                    $tempTable[] = $config['table'];
                }
                $this->tableName = implode(',', $tempTable);
            }
        }

        return $out;
    }

    /**
     * Search button
     *
     * @return string (item to display)
     */
    protected function searchButton()
    {
        $htmlArray = array();

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

        $htmlArray[] = '<input type="image" class="c-searchButton" name="' . $this->prefixId . '[searchButton]" src="' . $searchIconPath . '" title="' . $this->pi_getLL('button.searchButtonLabel') . '" alt="' . $this->pi_getLL('button.searchButtonLabel') . '" />';

        return $this->arrayToHTML($htmlArray, $this->SPACE);
    }

    /**
     * Check viewers
     *
     * @param $config array
     *            (Configuration array)
     *
     * @return string (item to display)
     */
    protected function viewCheckEditMode(&$config)
    {
        $htmlArray = array();
        $elementName = $this->prefixId . '[' . $config['_field'] . ']';

        if (is_array($config['items'])) {
            $cols = ($config['cols'] ? $config['cols'] : 1);
            $cpt = 0;
            $val = $config['value'];
            foreach ($config['items'] as $key => $value) {
                $checked = ($value['value'] ? 'checked="checked"' : '');
                $val = $val >> 1;
                $htmlArray[] = '<input type="checkbox" name="' . $elementName . '[' . $key . ']"  value="' . $value[1] . '" ' . $checked . ' />
        ' . stripslashes($GLOBALS['TSFE']->sL($value[0])) . '
        ';
                $cpt ++;
                if ($cpt == $cols) {
                    $htmlArray[] = '<br />';
                    $cpt = 0;
                }
            }
        } else {
            // Only one checkbox
            if ($config['value'] == 1) {
                $checked = 'checked="checked"';
            } else {
                if ($config['uid']) {
                    $checked = '';
                } else {
                    $checked = ($config['default'] ? 'checked="checked"' : '');
                }
            }
            $htmlArray[] = '<input type="hidden" name="' . $elementName . '" value="0" />';
            $htmlArray[] = '<input type="checkbox" name="' . $elementName . '"  value="1"' . $checked . ' />';
        }

        return $this->arrayToHTML($htmlArray, $this->SPACE);
    }

    /**
     * SelectSingle viewers
     *
     * @param $config array
     *            (Configuration array)
     *
     * @return string (item to display)
     */
    protected function viewSelectorboxEditMode(&$config)
    {
        $htmlArray = array();
        $elementName = $this->prefixId . '[' . $config['_field'] . ']';

        $htmlArray[] = '<select name="' . $elementName . '" size="' . $config['size'] . '" id="' . $config['field'] . '">';

        foreach ($config['items'] as $item) {
            $sel = ((string) $item[1] == (string) $config['value']) ? ' selected="selected"' : '';
            $htmlArray[] = '  <option ' . $sel . ' value="' . $item[1] . '">' . stripslashes($GLOBALS['TSFE']->sL($item[0])) . '</option>';
        }
        $htmlArray[] = '</select>';

        return $this->arrayToHTML($htmlArray, $this->SPACE);
    }

    /**
     * Single db relation selector box viewer
     *
     * @param $config array
     *            (Configuration array)
     *
     * @return string (item to display)
     */
    protected function viewDbRelationSingleSelectorEditMode(&$config)
    {
        $htmlArray = array();
        $elementName = $this->prefixId . '[' . $config['_field'] . ']';
        $htmlArray[] = '<select name="' . $elementName . '" size="' . '1' . '" id="' . $config['field'] . '">';
        foreach ($config['items'] as $key => $item) {
            $sel = (($item['selected'] == 1) ? ' selected="selected"' : '');
            $style = ($item['style'] ? 'style="' . $item['style'] . '"' : '');
            $htmlArray[] = '  <option ' . $sel . ' ' . $style . ' value="' . $key . '">' . stripslashes($item['label']) . '</option>';
        }
        $htmlArray[] = '</select>';

        return $this->arrayToHTML($htmlArray, $this->SPACE);
    }

    /**
     * Database Relation with Selectorbox Global
     *
     * @param $config array
     *            (Configuration array)
     *
     * @return string (item to display)
     */
    protected function viewDbRelationSelectorGlobal(&$config)
    {
        $htmlArray = array();

        $foreign_table = $config['foreign_table'];
        $MM_table = $config['MM'];
        $table = $config['table'];

        $selected = array();

        if (isset($config['selected'])) {
            $selected = $selected + array(
                $config['selected'] => 1
            );
        }

        // Gets the label of the allowed_table
        $label = ($config['label_field'] ? $config['label_field'] : $GLOBALS['TCA'][$foreign_table]['ctrl']['label']);
        $order = ($GLOBALS['TCA'][$foreign_table]['ctrl']['sortby'] ? $GLOBALS['TCA'][$foreign_table]['ctrl']['sortby'] : str_replace('ORDER BY', '', $GLOBALS['TCA'][$foreign_table]['ctrl']['default_sortby']));

        // Adds the starting points to the pid list
        if ($this->cObj->data['pages']) {
            $this->conf['pidList'] = ($this->conf['pidList'] ? $this->conf['pidList'] . ',' . $this->cObj->data['pages'] : $this->cObj->data['pages']);
        }

        $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
				/* SELECT   */	'*' . ($config['label_field'] ? ($config['alias'] ? ',' . $config['alias'] . ' AS ' . $config['label_field'] : '') : '') . '',
				/* FROM     */	$foreign_table . '',
				/* WHERE    */	'1' . $this->cObj->enableFields($foreign_table) . ($this->conf['pidList'] ? ' AND pid IN (' . $this->conf['pidList'] . ')' : '') . ($config['where'] ? ' AND ' . $config['where'] : '') . '',
				/* GROUP BY */
						$config['groupBy'],
				/* ORDER BY */
				    ($config['order'] ? $config['order'] : $order) . '',
				/* LIMIT    */	'');

        if ($GLOBALS['TYPO3_DB']->sql_error($res)) {
            $this->addError('error.incorrectQuery', $this->extKey);
            return;
        }

        if (! isset($config['items'])) {
            $config['items'] = array();
        }

        while ($rows = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
            if ($rows[$label]) {
                $config['items'] = $config['items'] + array(
                    $rows['uid'] => array(
                        'label' => $rows[$label],
                        'selected' => $selected[$rows['uid']],
                        'code' => $rows[$config['code']],
                        'style' => (($config['optionCond'] && $rows[$config['optionCond']]) ? $config['optionStyle'] : '')
                    )
                );
                if ($config['code']) {
                    $config['codeArray'][$rows[$config['code']]] = $rows['uid'];
                }
            }
        }

        // Adds a blank selector if necessary
        if (! isset($config['items'][0])) {
            $config['items'] = array(
                0 => array()
            ) + $config['items'];
        }

        $viewItem = 'viewDbRelationSingleSelectorEditMode';

        $htmlArray[] = $this->$viewItem($config);

        return $this->arrayToHTML($htmlArray, $this->SPACE);
    }

    /**
     * Updates TCA and Generate the config parameters from a field
     *
     *
     * @param string $_field (field)
     *
     * @return array (configuration for the given field)
     */
    protected function getConfig($_field)
    {
        // Checks if the field is an array
        $configField = $_field;
        if (is_array($_field)) {
            $configField = $_field[key($_field)];
            $_field = key($_field);
        } else {
            $configField = $_field;
        }

        // Gets the table name
        $pos = strpos($_field, '.');
        if ($pos === FALSE) {
            $this->addError('error.missingDot', $_field);
        } else {
            $temp[0] = trim(substr($_field, 0, $pos));
            $temp[1] = trim(substr($_field, $pos + 1));
        }
        // Gets the table
        $table = $temp[0];

        // Gets the parameters
        $pos = strpos($temp[1], ':');
        if ($pos === FALSE) {
            $config = $GLOBALS['TCA'][$table]['columns'][$temp[1]]['config'];
            $config['table'] = $table;
            $config['_field'] = $configField;
            $config['field'] = $temp[1];
            return $config;
        } else {
            $temp1[0] = trim(substr($temp[1], 0, $pos));
            $temp1[1] = trim(substr($temp[1], $pos + 1));

            // Gets the field
            $field = $temp1[0];

            // Checks if the table attribute is set
            if (preg_match('/table=([^;]+)/', $temp1[1], $matches)) {
                $table = $matches[1];
            }

            $params = explode(';', $temp1[1]);
            $config = $GLOBALS['TCA'][$table]['columns'][$field]['config'];
            $config['table'] = $table;
            $config['_field'] = $configField;
            foreach ($params as $param) {
                if ($param) {
                    $pos = strpos($param, '=');
                    if ($pos === FALSE) {
                        $this->addError('error.missingEqualSign', $param);
                    } else {
                        $exp = trim(substr($param, 0, $pos));
                        $config[$exp] = trim(substr($param, $pos + 1));
                    }
                }
            }
            $config['field'] = $field;
            return $config;
        }
    }
}
?>
