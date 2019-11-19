<?php

defined('TYPO3_MODE') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_library_example10',
    'Classes/Controller/SavLibraryExample10Controller.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample10_pi1.userFunc = YolfTypo3\SavLibraryExample10\Controller\SavLibraryExample10Controller->main
'
);

?>
