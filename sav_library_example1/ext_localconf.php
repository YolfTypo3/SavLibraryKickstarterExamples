<?php

defined('TYPO3_MODE') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_library_example1',
    'Classes/Controller/SavLibraryExample1Controller.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample1_pi1.userFunc = YolfTypo3\SavLibraryExample1\Controller\SavLibraryExample1Controller->main
'
);

