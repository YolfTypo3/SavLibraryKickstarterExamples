<?php

defined('TYPO3_MODE') or die();

// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'YolfTypo3.sav_filters_mvc',
    'Default',
    [
        'Default' => 'default',
    ],
    // Non-cachable controller actions
    [
        'Default' => 'default',
    ]
);

// Adds a page module hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['savfiltersmvc_default']['sav_filters_mvc'] =
\YolfTypo3\SavFiltersMvc\Hooks\PageLayoutView::class . '->getExtensionInformation';
?>
