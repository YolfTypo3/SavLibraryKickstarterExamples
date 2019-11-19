<?php

defined('TYPO3_MODE') or die();


// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'YolfTypo3.sav_basic_example0',
    'Test',
    [
        'Test' => 'show',
    ],
    // Non-cachable controller actions
    []
);

?>
