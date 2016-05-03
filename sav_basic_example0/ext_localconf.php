<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}
// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'SAV.' . $_EXTKEY,
    'Test',
    array (
        'Test' => 'show',
    ),
    // Non-cachable controller actions
    array (
    )
);

?>
