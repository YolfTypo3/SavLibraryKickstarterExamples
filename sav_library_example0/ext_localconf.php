<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savlibraryexample0_table1=1
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savlibraryexample0_table3=1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_library_example0',
    'Classes/Controller/SavLibraryExample0Controller.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample0_pi1.userFunc = YolfTypo3\SavLibraryExample0\Controller\SavLibraryExample0Controller->main
'
);

