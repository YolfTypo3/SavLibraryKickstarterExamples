<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['sav_meetings_pi1'] = 'layout,select_key';

// Adds the flexform field to plugin option
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['sav_meetings_pi1'] = 'pi_flexform';

// Adds the flexform DataStructure
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'sav_meetings_pi1',
    'FILE:EXT:sav_meetings/Configuration/Flexforms/ExtensionFlexform.xml'
);

// Adds the plugin
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
        'sav_meetings_pi1',
    ],
    'list_type',
    'sav_meetings'
);

// Adds addToInsertRecords() if any

?>
