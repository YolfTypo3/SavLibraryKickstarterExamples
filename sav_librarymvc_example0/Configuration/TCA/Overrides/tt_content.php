<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

// Registers the Plugin to be listed in the Backend.
$pluginSignature = ExtensionUtility::registerPlugin(
    'SavLibrarymvcExample0',
	'Default',
	'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
	null,
	'plugins',
	'',
	'FILE:EXT:sav_librarymvc_example0/Configuration/Flexforms/ExtensionFlexform.xml'
);

// Adds addToInsertRecords() if any