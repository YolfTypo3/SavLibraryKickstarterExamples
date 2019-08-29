<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['savcalendarmvc_pi1'] = 'layout,select_key';
// Adds the flexform field to plugin option
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['savcalendarmvc_pi1'] = 'pi_flexform';

// Adds the flexform DataStructure
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'savcalendarmvc_pi1',
    'FILE:EXT:sav_calendar_mvc/Configuration/Flexforms/ExtensionFlexform.xml'
);

// Registers the Plugin to be listed in the Backend.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sav_calendar_mvc',
    'Pi1',
    'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1'
);

// Adds addToInsertRecords() if any

?>
