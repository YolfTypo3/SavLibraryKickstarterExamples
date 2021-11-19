<?php

defined('TYPO3_MODE') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_library_example3',
    'Classes/Controller/SavLibraryExample3Controller.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample3_pi1.userFunc = YolfTypo3\SavLibraryExample3\Controller\SavLibraryExample3Controller->main
'
);

