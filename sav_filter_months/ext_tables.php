<?php
if (! defined('TYPO3_MODE'))
    die('Access denied.');

// Adds a user function for the help in flexforms for extension depending on the SAV Library Plus
if (! function_exists('user_savlibraryFilterHelp')) {

    function user_savlibraryFilterHelp($PA, $fobj)
    {
        return '';
    }
}

// Adds the plugin
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
    'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
    $_EXTKEY . '_pi1'
), 'list_type');

// Adds the flexform DataStructure
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/Flexforms/ExtensionFlexform.xml');

// Adds the context sensitive help (CSH)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content.pi_flexform.' . $_EXTKEY . '_pi1.list', 'EXT:' . $_EXTKEY . '/Resources/Private/Language/ContextSensitiveHelp/locallang_csh_flexform.xlf');

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] = 'layout,select_key';

// Adds the flexform field to plugin options
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';

?>
