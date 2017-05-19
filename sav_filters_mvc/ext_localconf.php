<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'SAV.' . $_EXTKEY,
    'Default',
    array (
        'Default' => 'default',
    ),
    // Non-cachable controller actions
    array (
        'Default' => 'default',
    )
);

// Adds a page module hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['savfiltersmvc_default'][$_EXTKEY] =
\SAV\SavFiltersMvc\Hooks\PageLayoutView::class . '->getExtensionInformation';

?>
