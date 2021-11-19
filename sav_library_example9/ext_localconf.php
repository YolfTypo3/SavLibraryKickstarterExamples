<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savlibraryexample9=1
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savlibraryexample9_graph1=1
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savlibraryexample9_graph2=1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_library_example9',
    'Classes/Controller/SavLibraryExample9Controller.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savlibraryexample9_pi1.userFunc = YolfTypo3\SavLibraryExample9\Controller\SavLibraryExample9Controller->main
'
);

