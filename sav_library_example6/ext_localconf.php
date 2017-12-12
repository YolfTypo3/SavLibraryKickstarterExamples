<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    $_EXTKEY,
    'Classes/Controller/SavLibraryExample6Controller.php',
    '_pi1',
    'list_type',
    1
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample6_pi1.userFunc = YolfTypo3\SavLibraryExample6\Controller\SavLibraryExample6Controller->main
'
);

?>
