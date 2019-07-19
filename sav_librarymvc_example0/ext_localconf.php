<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.saveDocNew.table3=1');

// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'YolfTypo3.sav_librarymvc_example0',
    'Pi1',
    [
    // The first controller and its first action will be the default
    'Test' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile',
    ],
    // Non-cachable controller actions
    [
    'Test' => 'edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile',
    ]
);

?>
