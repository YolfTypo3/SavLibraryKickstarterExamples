<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_savmeetings_category=1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'sav_meetings',
    'Classes/Controller/SavMeetingsController.php',
    '_pi1',
    'list_type',
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
plugin.tx_savmeetings_pi1.userFunc = YolfTypo3\SavMeetings\Controller\SavMeetingsController->main
'
);

