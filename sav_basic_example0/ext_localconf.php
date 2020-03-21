<?php

defined('TYPO3_MODE') or die();


// Configures the Dispatcher
if (version_compare(\YolfTypo3\SavBasicExample0\Controller\TestController::getTypo3Version(), '10.0', '<')) {
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

?>
