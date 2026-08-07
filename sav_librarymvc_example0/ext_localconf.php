<?php

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(function () {

    // Configures the Dispatcher
    ExtensionUtility::configurePlugin(
        'SavLibrarymvcExample0',
        'Default',
        // Cachable controller actions
        [
            // The first controller and its first action will be the default
            \YolfTypo3\SavLibrarymvcExample0\Controller\TestController::class => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile,export,exportSubmit',
        ],
            // Non-cachable controller actions
        [
            \YolfTypo3\SavLibrarymvcExample0\Controller\TestController::class => 'list,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile,export,exportSubmit',
        ],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
})();