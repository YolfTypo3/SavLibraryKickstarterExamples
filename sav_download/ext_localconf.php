<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savdownload_category=1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_download',
    'Classes/Controller/SavDownloadController.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savdownload_pi1.userFunc = YolfTypo3\SavDownload\Controller\SavDownloadController->main
'
);

?>
