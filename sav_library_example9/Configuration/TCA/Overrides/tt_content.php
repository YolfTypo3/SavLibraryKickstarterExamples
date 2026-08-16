<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

$typo3Version = new (Typo3Version::class);
if ($typo3Version->getMajorVersion() == 13) {
	// Adds the plugin
	ExtensionManagementUtility::addPlugin(
	    [
	        'label' => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
	        'value' => 'sav_library_example9_pi1',
	        'icon'	=> 'ext-savlibraryexample9-wizard',
	        'group'	=> 'plugins'
	    ],
	    'CType',
	    'sav_library_example9'
	);
	
	// Activates the display of the FlexForm field
	ExtensionManagementUtility::addToAllTCAtypes(
		'tt_content',
		'pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,--div--;Configuration,pi_flexform,',
		'sav_library_example9_pi1',
		'after:subheader',
	);
	
	// @extensionScannerIgnoreLine
	ExtensionManagementUtility::addPiFlexFormValue(
		'*',
	    'FILE:EXT:sav_library_example9/Configuration/Flexforms/ExtensionFlexform.xml',
	    'sav_library_example9_pi1'
	);
} else {
	// Adds the plugin
	ExtensionManagementUtility::addPlugin(
	    [
	        'label' => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
	        'value' => 'sav_library_example9_pi1',
	        'icon'	=> 'ext-savlibraryexample9-wizard',
	        'group'	=> 'plugins'
	    ],
	    'FILE:EXT:sav_library_example9/Configuration/Flexforms/ExtensionFlexform.xml',
	);
}

// Adds addToInsertRecords() if any
