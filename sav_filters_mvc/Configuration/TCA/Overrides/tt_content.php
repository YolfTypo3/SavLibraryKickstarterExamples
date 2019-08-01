<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['savfiltersmvc_default'] = 'layout,select_key';
// Adds the flexform field to plugin option
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['savfiltersmvc_default'] = 'pi_flexform';

// Adds the flexform DataStructure
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'savfiltersmvc_default',
    'FILE:EXT:sav_filters_mvc/Configuration/Flexforms/ExtensionFlexform.xml'
);

// Registers the Plugin to be listed in the Backend.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sav_filters_mvc',
	'Default',
	'LLL:EXT:sav_filters_mvc/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1'
);


?>
