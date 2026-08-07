<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;

defined('TYPO3') or die();

(function () {

	ExtensionManagementUtility::addTypoScript(
	    'sav_library_example10',
	    'setup',
	    'plugin.tx_savlibraryexample10_pi1 = USER_INT
         plugin.tx_savlibraryexample10_pi1.userFunc = YolfTypo3\SavLibraryExample10\Controller\SavLibraryExample10Controller->main'
	);

	ExtensionManagementUtility::addTypoScriptSetup(
		'tt_content.sav_library_example10_pi1 < plugin.tx_savlibraryexample10_pi1'
	);
})();
