<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savlibraryexample0_table1=1
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savlibraryexample0_table3=1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    $_EXTKEY,
    'Classes/Controller/SavLibraryExample0Controller.php',
    '_pi1',
    'list_type',
    1
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample0_pi1.userFunc = YolfTypo3\SavLibraryExample0\Controller\SavLibraryExample0Controller->main
'
);

?>
