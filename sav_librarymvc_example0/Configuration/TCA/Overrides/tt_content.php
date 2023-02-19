<?php
defined('TYPO3') or die();

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['savlibrarymvcexample0_default'] = 'layout,select_key';
// Adds the flexform field to plugin option
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['savlibrarymvcexample0_default'] = 'pi_flexform';

// Adds the flexform DataStructure
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'savlibrarymvcexample0_default',
    'FILE:EXT:sav_librarymvc_example0/Configuration/Flexforms/ExtensionFlexform.xml'
);

// Registers the Plugin to be listed in the Backend.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'SavLibrarymvcExample0',
    'Default',
    'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1'
);

// Adds addToInsertRecords() if any

