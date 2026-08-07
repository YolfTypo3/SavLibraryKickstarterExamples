<?php
defined('TYPO3') or die();

$typo3Version = new (\TYPO3\CMS\Core\Information\Typo3Version::class);
if ($typo3Version->getMajorVersion() == 13) {
	// Adds the plugin
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	    [
	        'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
	        'sav_library_example6_pi1',
	    ],
	    'CType',
	    'sav_library_example6'
	);
	
	// Activates the display of the FlexForm field
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
		'tt_content',
		'pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,--div--;Configuration,pi_flexform,',
		'sav_library_example6_pi1',
		'after:subheader',
	);
	
	// @extensionScannerIgnoreLine
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
		'*',
	    'FILE:EXT:sav_library_example6/Configuration/Flexforms/ExtensionFlexform.xml',
	    'sav_library_example6_pi1'
	);
} else {
	// Adds the plugin
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	    [
	        'label' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
	        'value' => 'sav_library_example6_pi1',
	        'icon'	=> '',
	        'group'	=> null
	    ],
	    'FILE:EXT:sav_library_example6/Configuration/Flexforms/ExtensionFlexform.xml',
	);
}

// Adds addToInsertRecords() if any
