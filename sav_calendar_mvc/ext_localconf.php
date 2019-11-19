<?php

defined('TYPO3_MODE') or die();


// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'YolfTypo3.sav_calendar_mvc',
    'Pi1',
    [
    // The first controller and its first action will be the default
    'Default' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile',
    'Admin' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile',
    ],
    // Non-cachable controller actions
    [
    'Default' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile',
    'Admin' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile',
    ]
);

?>
