<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43('sav_library_example5', 'Classes/Controller/SavLibraryExample5Controller.php', '_pi1', 'list_type', 1);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample5_pi1.userFunc = YolfTypo3\SavLibraryExample5\Controller\SavLibraryExample5Controller->main
');

// Adds a hook for SAV Library Plus
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sav_library_plus']['hooks']['SavLibraryExample5'] = \YolfTypo3\SavLibraryExample5\Hooks\SavLibraryPlus::class;

?>
