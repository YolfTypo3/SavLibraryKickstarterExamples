<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}
// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'YolfTypo3.' . $_EXTKEY,
    'Test',
    [
        'Test' => 'show',
    ],
    // Non-cachable controller actions
    []
);

?>
