<?php

defined('TYPO3_MODE') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_library_example4',
    'Classes/Controller/SavLibraryExample4Controller.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample4_pi1.userFunc = YolfTypo3\SavLibraryExample4\Controller\SavLibraryExample4Controller->main
'
);

?>
