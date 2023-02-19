<?php

defined('TYPO3') or die();

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.saveDocNew.table3=1');

    // Configures the Dispatcher
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
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
        ]
    );
})();

