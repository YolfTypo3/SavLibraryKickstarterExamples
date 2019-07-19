<?php

defined('TYPO3_MODE') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_library_example7',
    'Classes/Controller/SavLibraryExample7Controller.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample7_pi1.userFunc = YolfTypo3\SavLibraryExample7\Controller\SavLibraryExample7Controller->main
'
);

?>
