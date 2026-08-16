<?php

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(function () {

    // Configures the Dispatcher
    ExtensionUtility::configurePlugin(
        'SavCalendarMvc',
        'Default',
        // Cachable controller actions
        [
            // The first controller and its first action will be the default
            \YolfTypo3\SavCalendarMvc\Controller\DefaultController::class => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile,export,exportSubmit',
            \YolfTypo3\SavCalendarMvc\Controller\AdminController::class => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile,export,exportSubmit',
        ],
            // Non-cachable controller actions
        [
            \YolfTypo3\SavCalendarMvc\Controller\DefaultController::class => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile,export,exportSubmit',
            \YolfTypo3\SavCalendarMvc\Controller\AdminController::class => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform,deleteFile,export,exportSubmit',
        ],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
})();