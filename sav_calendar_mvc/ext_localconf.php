<?php

if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}
// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'SAV.' . $_EXTKEY,
    'Pi1',
    [
    // The first controller and its first action will be the default
    'Default' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform',
    'Admin' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform',
    ],
    // Non-cachable controller actions
    [
    'Default' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform',
    'Admin' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform',
    ]
);

?>
