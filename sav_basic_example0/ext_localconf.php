<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(function () {

    // Configures the Dispatcher
    ExtensionUtility::configurePlugin(
        'SavBasicExample0',
        'Default',
        // Cachable controller actions
        [
            \YolfTypo3\SavBasicExample0\Controller\TestController::class => 'show',
        ],
        // Non-cachable controller actions
        [],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
})();
