<?php

/**
 * Copyright notice
 *
 * (c) 2008 Yolf <yolf.typo3@orange.fr>
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

/**
 * Plugin 'SAV Filter Page Access' for the 'sav_filter_pageaccess' extension.
 *
 * @author Yolf <yolf.typo3@orange.fr>
 * @package TYPO3
 * @subpackage tx_savfilterpageaccess
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Mail\MailMessage;
use SAV\SavLibraryPlus\Filters\AbstractFilter;

class tx_savfilterpageaccess_pi1 extends AbstractFilter
{

    public $prefixId = 'tx_savfilterpageaccess_pi1';
 // Same as class name
    public $scriptRelPath = 'Classes/Controller/SavFilterPageaccessController.php';
 // Path to this script relative to the extension dir.
    public $extKey = 'sav_filter_pageaccess';
 // The extension key.
    public $pi_checkCHash = FALSE;

    // Specific variables for this filter
    protected $preAuthenticated = FALSE;
 // true if initial phase of authentification succeded
    protected $authenticated = FALSE;
 // true if authentification succeded
    protected $formAction = '';
 // form action for SAV Library
    protected $uid = 0;
 // uid used for authentification
    protected $key = '';
 // key used for authentification

    // Security selector constants
    const SECURITY_DATE_VALIDITY = 0;

    const SECURITY_CAPTCHA = 1;

    const SECURITY_CHECK_FEUSER = 2;

    const SECURITY_CHECK_FROM_TABLE = 3;

    const SECURITY_CHECK_AUTHENTICATED = 4;

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
     * Setter for addWhere
     *
     * @return void
     */
    protected function SetSessionField_addWhere()
    {
        $this->sessionFilter[$this->extKeyWithId]['addWhere'] = $this->addWhere;
    }

    // Special setters for authentication
    /**
     * Setter for uid
     *
     * @return void
     */
    protected function SetSessionField_uid()
    {
        $this->sessionFilter[$this->extKeyWithId]['uid'] = $this->uid;
    }

    /**
     * Setter for formAction
     *
     * @return void
     */
    protected function SetSessionField_formAction()
    {
        $this->sessionFilter[$this->extKeyWithId]['formAction'] = $this->formAction;
    }

    /**
     * Setter for authentication
     *
     * @return void
     */
    protected function SetSessionField_authenticated()
    {
        $this->sessionAuth[$this->extKeyWithId]['authenticated'] = $this->authenticated;
    }

    /**
     * Setter for the authentication from captcha
     *
     * @return void
     */
    protected function SetSessionField_preAuthenticated()
    {
        $this->sessionAuth[$this->extKeyWithId]['preAuthenticated'] = $this->preAuthenticated;
    }

    /**
     * Setter for the authentication key
     *
     * @return void
     */
    protected function SetSessionField_key()
    {
        $this->sessionAuth[$this->extKeyWithId]['key'] = $this->key;
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

        // Add the setter to the list
        $this->setterList[] = 'SetSessionField_uid';
        $this->setterList[] = 'SetSessionField_formAction';
        $this->setterList[] = 'SetSessionField_preAuthenticated';
        $this->setterList[] = 'SetSessionField_authenticated';
        $this->setterList[] = 'SetSessionField_key';

        // Checks if a captcha is used
        if ($this->conf['security']) {
            // Initializes the session default information
            $this->uid = 0;
            $this->formAction = 'noDisplay';
        }
        $this->forceSetSessionFields = TRUE;
    }

    /**
     * piVars processing
     *
     * @return void
     */
    protected function piVarsProcessing()
    {
        if ($this->conf['pageLink']) {
            return;
        }

        switch ($this->conf['security']) {
            case self::SECURITY_DATE_VALIDITY:
                // Checks if the key was received or saved
                if ($this->piVars['key']) {
                    $key = $this->piVars['key'];
                } elseif ($this->isAuthenticated()) {
                    $key = $this->sessionAuth[$this->extKeyWithId]['key'];
                } else {
                    header('Location: ' . GeneralUtility::locationHeaderUrl($this->pi_getPageLink($this->conf['redirectTo'])));
                }

                // Checks the link validity date
                $md5Part = $key;
                $validDate = FALSE;
                for ($i = 0; $i <= $this->conf['linkValidHours']; $i ++) {
                    if (md5($this->conf['key'] . date('dmYH', strtotime('-' . $i . ' hour'))) == $md5Part) {
                        $validDate = TRUE;
                        break;
                    }
                }

                if ($validDate) {
                    $this->authenticated = TRUE;
                    $this->key = $key;
                } else {
                    unset($this->sessionFilter[$this->extKeyWithId]);
                    header('Location: ' . GeneralUtility::locationHeaderUrl($this->pi_getPageLink($this->conf['redirectTo'])));
                }
                break;

            case self::SECURITY_CAPTCHA:
                // Checks if a key parameter was sent
                if ($this->piVars['key']) {

                    // Checks if access is allowed. the md5 concatenation of the uid and fieldname must correspond to the key
                    $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
        			/* SELECT   */	'uid',
        			/* FROM     */	$this->conf['securityTable'],
         			/* WHERE    */	'md5(concat(uid,crdate,' . $this->conf['securityField'] . '))=\'' . $this->piVars['key'] . '\'');
                    $row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res);

                    $this->uid = $row['uid'];
                    if (! $this->uid) {
                        $this->addError('error.forbiddenAccess');
                    } else {
                        $this->authenticated = TRUE;
                        $this->key = $this->piVars['key'];
                        $this->addWhere = $this->conf['securityTable'] . '.uid=' . intval($this->uid);
                        $this->formAction = 'updateForm';
                        $this->addMessage('authenticated', $this->pi_linkTP($this->pi_getLL('logout'), array(
                            $this->prefixId . '[logoutReloadPage]' => 1
                        )));
                    }
                }
                break;

            case self::SECURITY_CHECK_FEUSER:
                // Checks if a key parameter was sent
                if ($this->piVars['key']) {
                    if ($GLOBALS['TSFE']->fe_user->user['uid'] && md5($GLOBALS['TSFE']->fe_user->user['uid'] . $this->conf['key']) == $this->piVars['key']) {

                        // Check if the record exists in the security table
                        $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
          			/* SELECT   */	'uid',
          			/* FROM     */	$this->conf['securityTable'],
           			/* WHERE    */	'md5(concat(cruser_id, \'' . $this->conf['key'] . '\'))=\'' . $this->piVars['key'] . '\'');

                        $row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res);

                        $this->uid = $row['uid'];

                        if (! $this->uid) {
                            // It is the first use of the user link, create the new record in the security table
                            $fields['cruser_id'] = $GLOBALS['TSFE']->fe_user->user['uid'];
                            $fields['pid'] = $GLOBALS['TSFE']->id;
                            $fields['crdate'] = time();
                            $fields['tstamp'] = time();

                            $res = $GLOBALS['TYPO3_DB']->exec_INSERTquery(
        				/* TABLE   */	$this->conf['securityTable'],
        				/* FIELDS  */	$fields);
                            $this->uid = $GLOBALS['TYPO3_DB']->sql_insert_id($res);
                        }

                        $this->authenticated = TRUE;
                        $this->key = $this->piVars['key'];
                        $this->addWhere = $this->conf['securityTable'] . '.uid=' . intval($this->uid);
                        $this->formAction = 'updateForm';
                    } else {
                        unset($this->sessionFilter[$this->extKeyWithId]);
                        header('Location: ' . GeneralUtility::locationHeaderUrl($this->pi_getPageLink($this->conf['redirectTo'])));
                    }
                }
                break;

            case self::SECURITY_CHECK_FROM_TABLE:

                // Checks if a key parameter was sent
                if ($this->piVars['key']) {
                    // Checks if the record exists in the security table
                    $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
          			/* SELECT   */	'*',
          			/* FROM     */	$this->conf['securityTable'],
           			/* WHERE    */	'md5(concat(' . $this->conf['securityField'] . ', \'' . $this->conf['key'] . '\'))=\'' . $this->piVars['key'] . '\'');

                    $row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res);

                    if (! $row) {
                        unset($this->sessionFilter[$this->extKeyWithId]);
                        header('Location: ' . GeneralUtility::locationHeaderUrl($this->pi_getPageLink($this->conf['redirectTo'])));
                    } else {
                        $this->authenticated = TRUE;
                    }
                } elseif (! $this->isAuthenticated()) {
                    unset($this->sessionFilter[$this->extKeyWithId]);
                    header('Location: ' . GeneralUtility::locationHeaderUrl($this->pi_getPageLink($this->conf['redirectTo'])));
                }
                break;

            case self::SECURITY_CHECK_AUTHENTICATED:
                // Checks if the user is authenticated
                if ($GLOBALS['TSFE']->fe_user->user['uid']) {

                    // Checks if the record exists in the security table for this user
                    $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
          	/* SELECT   */	'uid',
          	/* FROM     */	$this->conf['securityTable'],
           	/* WHERE    */	'cruser_id=' . intval($GLOBALS['TSFE']->fe_user->user['uid']) . $this->cObj->enableFields($this->conf['securityTable']));

                    $row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res);

                    $this->uid = $row['uid'];

                    if (! $this->uid) {
                        // It is the first use of the user link, create the new record in the security table
                        $fields['cruser_id'] = $GLOBALS['TSFE']->fe_user->user['uid'];
                        $fields['pid'] = $GLOBALS['TSFE']->id;
                        $fields['crdate'] = time();
                        $fields['tstamp'] = time();

                        $res = $GLOBALS['TYPO3_DB']->exec_INSERTquery(
        			/* TABLE   */	$this->conf['securityTable'],
        			/* FIELDS  */	$fields);
                        $this->uid = $GLOBALS['TYPO3_DB']->sql_insert_id($res);
                    }

                    $this->authenticated = TRUE;

                    $this->addWhere = $this->conf['securityTable'] . '.uid=' . intval($this->uid);
                    $this->formAction = 'showAll';
                } else {
                    $this->formAction = 'noDisplay';
                }
                break;
        }
    }

    /**
     * Gets the row associated with the page id
     *
     * @return void
     */
    protected function generalProcessing()
    {
        if ($this->conf['pageLink']) {
            return;
        }

        // Checks if the captcha authentification was passed through
        if ($this->isPreAuthenticated()) {

            if ($this->conf['securityTable'] && $this->conf['securityField']) {

                // Checks if an email address was provided
                if ($this->piVars['email']) {

                    // Creates the new record
                    $fields['cruser_id'] = $this->conf['captchaCruserId'];
                    $fields['pid'] = $GLOBALS['TSFE']->id;
                    $fields['crdate'] = time();
                    $fields['tstamp'] = time();
                    $fields[$this->conf['securityField']] = $this->piVars['email'];

                    $res = $GLOBALS['TYPO3_DB']->exec_INSERTquery(
    				/* TABLE   */	$this->conf['securityTable'],
    				/* FIELDS  */	$fields);
                    $this->uid = $GLOBALS['TYPO3_DB']->sql_insert_id($res);

                    // Prepares the email
                    $urlParameters = array(
                        $this->prefixId . '[key]' => md5($this->uid . $fields['crdate'] . $this->piVars['email'])
                    );
                    $mA['###LINK###'] = '<a href="http://' . GeneralUtility::getThisURL() . $this->pi_getPageLink($GLOBALS['TSFE']->id, '', $urlParameters) . '">' . $GLOBALS['TSFE']->page['title'] . '</a>';
                    $mailSender = $this->conf['captchaEmailSender'];
                    $mailReceiver = $this->piVars['email'];
                    $mailMessage = $this->cObj->substituteMarkerArrayCached(nl2br($this->pi_getLL('email_template')), $mA);
                    $mailSubject = sprintf($this->pi_getLL('email_subject'), '"' . $GLOBALS['TSFE']->page['title'] . '"');

                    $mail = GeneralUtility::makeInstance(MailMessage::class);
                    $mail->setSubject($mailSubject);
                    $mail->setFrom($mailSender);
                    $mail->setTo($mailReceiver);
                    $mail->setBody($mailMessage, 'text/html');
                    $sentMail = $mail->send();

                    $this->preAuthenticated = FALSE;

                    // Checks if the mail was correctly sent
                    if ($sentMail) {
                        $this->addWhere = $this->conf['securityTable'] . '.uid=' . $this->uid;
                        $this->addMessage('email_succeeded', '', 'email_succeeded');
                    } else {

                        // Remove the record
                        $res = $GLOBALS['TYPO3_DB']->exec_DELETEquery(
    					 /* TABLE   */	$this->conf['securityTable'],
    					 /* WHERE   */	'uid=' . intval($this->uid));
                        $this->addError('email_failed');
                    }
                }
            } else {
                $this->addError('error.incorrectPluginTableField');
            }
        }
    }

    /**
     * Builds the content from the list.
     *
     * @return string (html content)
     */
    protected function buildContent()
    {
        $htmlArray = array();

        switch ($this->conf['security']) {

            case self::SECURITY_DATE_VALIDITY:
                // Check if the link must be displayed
                if ($this->conf['pageLink']) {
                    $keyCode = md5($this->conf['key'] . date('dmYH'));
                    $linkParams = array(
                        $this->prefixId . '[key]' => $keyCode
                    );
                    $htmlArray[] = sprintf($this->pi_getLL('link_message'), $this->pi_linkToPage($this->pi_getLL('link_click'), $this->conf['pageLink'], '', $linkParams));
                    unset($this->sessionFilterSelected);
                    $this->setFilterSelected = FALSE;
                }
                break;

            case self::SECURITY_CAPTCHA:

                if (! $this->piVars['key']) {
                    // Checks the authentication
                    if (! $this->isPreAuthenticated()) {
                        // Loads the captcha
                        $templateArray = array();
                        $templateArray[] = '<!--###CAPTCHA_INSERT### this subpart is removed if CAPTCHA is not enabled! -->';
                        $templateArray[] = '<div class="' . str_replace('_', '-', $this->prefixId) . '-captcha">';
                        $templateArray[] = '  <label for="' . $this->prefixId . '_captcha_response">###SR_FREECAP_NOTICE###</label>';
                        $templateArray[] = '  ###SR_FREECAP_CANT_READ###';
                        $templateArray[] = '  <br />';
                        $templateArray[] = '  <input class="captcha_response" id="' . $this->prefixId . '_captcha_response" type="text" size="15" name="' . $this->prefixId . '[captcha_response]" title="###SR_FREECAP_NOTICE###" value="" />';
                        $templateArray[] = '  <input class="submit_btn" type="submit" value="' . $this->pi_getLL('submit_btn') . '" />';
                        $templateArray[] = '  ###SR_FREECAP_IMAGE###';
                        $templateArray[] = '  ###SR_FREECAP_ACCESSIBLE###';
                        $templateArray[] = '</div>';
                        $templateArray[] = '<!--###CAPTCHA_INSERT###-->';
                        $template = implode($this->EOL, $templateArray);

                        if (ExtensionManagementUtility::isLoaded('sr_freecap')) {
                            require_once (ExtensionManagementUtility::extPath('sr_freecap') . 'pi2/class.tx_srfreecap_pi2.php');
                            $this->freeCap = GeneralUtility::makeInstance('tx_srfreecap_pi2');
                        } else {
                            $this->addError('error.sr_freecapNotLoaded');
                            return '';
                        }

                        // Displays the captcha
                        if (is_object($this->freeCap)) {

                            // Ut8-encode the word if the charset is not utf-8
                            if ($GLOBALS['TSFE']->config['renderCharset'] != 'utf-8') {
                                $word = utf8_encode($this->piVars['captcha_response']);
                            } else {
                                $word = $this->piVars['captcha_response'];
                            }

                            // Checks the word
                            if (! $this->freeCap->checkWord($word)) {
                                $markerArray = array();
                                $markerArray = array_merge($markerArray, $this->freeCap->makeCaptcha());
                                $subpartArray['###CAPTCHA_INSERT###'] = $this->cObj->substituteMarkerArrayCached($this->cObj->getSubpart($template, '###CAPTCHA_INSERT###'), $markerArray);

                                $htmlArray[] = $this->cObj->substituteMarkerArrayCached($template, array(), $subpartArray);
                            } else {
                                $this->preAuthenticated = TRUE;

                                // Asks for an email to receive a link
                                $htmlArray[] = '<label for="' . $this->prefixId . '_email">' . $this->pi_getLL('enter_email') . '</label>';
                                $htmlArray[] = '<br /><br />';
                                $htmlArray[] = '<input class="email" id ="' . $this->prefixId . '_email" type="text" size="50" name="' . $this->prefixId . '[email]" title="' . $this->pi_getLL('enter_email') . '" value="" />';
                                $htmlArray[] = '<input class="submit_btn" type="submit" value="' . $this->pi_getLL('submit_btn') . '" />';
                            }
                        }
                    } else {
                        if (! $this->piVars['email']) {
                            // Asks for an email to receive a link
                            $htmlArray[] = '<label for="' . $this->prefixId . '_email">' . $this->pi_getLL('enter_email') . '</label>';
                            $htmlArray[] = '<br /><br />';
                            $htmlArray[] = '<input class="email" id ="' . $this->prefixId . '_email" type="text" size="50" name="' . $this->prefixId . '[email]" title="' . $this->pi_getLL('enter_email') . '" value="" />';
                            $htmlArray[] = '<input class="submit_btn" type="submit" value="' . $this->pi_getLL('submit_btn') . '" />';
                        }
                    }
                }
                break;

            case self::SECURITY_CHECK_FEUSER:
                // Checks if the link must be displayed
                if ($this->conf['pageLink']) {
                    $keyCode = md5($GLOBALS['TSFE']->fe_user->user['uid'] . $this->conf['key']);
                    $linkParams = array(
                        $this->prefixId . '[key]' => $keyCode
                    );
                    $htmlArray[] = sprintf($this->pi_getLL('link_message'), $this->pi_linkToPage($this->pi_getLL('link_click'), $this->conf['pageLink'], '', $linkParams));
                    unset($this->sessionFilterSelected);
                    $this->setFilterSelected = FALSE;
                }
                break;
        }

        return $this->arrayToHTML($htmlArray);
    }

    /**
     * Checks the pre authentication
     *
     * @return boolean
     */
    protected function isPreAuthenticated()
    {
        return ($this->sessionAuth[$this->extKeyWithId]['preAuthenticated'] ? TRUE : FALSE);
    }

    /**
     * Checks the authentication
     *
     * @return boolean
     */
    protected function isAuthenticated()
    {
        return ($this->sessionAuth[$this->extKeyWithId]['authenticated'] ? TRUE : FALSE);
    }
}
?>
