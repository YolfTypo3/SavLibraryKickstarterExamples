<?php

defined('TYPO3_MODE') or die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_library_example6',
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
