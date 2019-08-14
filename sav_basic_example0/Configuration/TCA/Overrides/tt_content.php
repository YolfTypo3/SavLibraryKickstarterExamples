<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['savbasicexample0_test'] = 'layout,select_key';
// Adds the flexform field to plugin option
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['savbasicexample0_test'] = 'pi_flexform';

// Adds the flexform DataStructure
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'savbasicexample0_test',
    'FILE:EXT:sav_basic_example0/Configuration/Flexforms/ExtensionFlexform.xml'
);

// Registers the Plugin to be listed in the Backend.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sav_basic_example0',
	'Test',
	'LLL:EXT:sav_basic_example0/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1'
);

// Adds addToInsertRecords() if any

?>
