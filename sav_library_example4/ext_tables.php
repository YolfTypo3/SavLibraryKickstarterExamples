<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_savlibraryexample4_cds');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_savlibraryexample4_cat');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_savlibraryexample4_friends');

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] = 'layout,select_key';

// Adds flexform field to plugin option
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';

// Adds flexform DataStructure
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $_EXTKEY . '_pi1',
    'FILE:EXT:' . $_EXTKEY . '/Configuration/Flexforms/ExtensionFlexform.xml'
);

// Adds the plugin
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
        $_EXTKEY . '_pi1',
    ],
    'list_type'
);

?>
