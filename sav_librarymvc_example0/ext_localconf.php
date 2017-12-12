<?php

if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.saveDocNew.table3=1');
// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'YolfTypo3.' . $_EXTKEY,
    'Pi1',
    [
    // The first controller and its first action will be the default
    'Test' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile',
    ],
    // Non-cachable controller actions
    [
    'Test' => 'edit,save,delete,deleteInSubform,upInSubform,downInSubform,,deleteFile',
    ]
);

?>
