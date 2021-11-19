<?php

defined('TYPO3_MODE') or die();


// Configures the Dispatcher
$typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
if (version_compare($typo3Version->getVersion(), '10.0', '<')) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    	'YolfTypo3.sav_basic_example0',
    	'Test',
    	// Cachable controller actions
    	[
        	'Test' => 'show',
    	],
    	// Non-cachable controller actions
    	[]
	);
} else {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    	'SavBasicExample0',
    	'Test',
    	// Cachable controller actions
    	[
        	\YolfTypo3\SavBasicExample0\Controller\TestController::class => 'show',
    	],
    	// Non-cachable controller actions
    	[]
	);
}

