<?php
defined('TYPO3_MODE') or die();

// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'YolfTypo3.sav_charts',
    'Default',
    [
        'Default' => 'show',
    ],
    // Non-cachable controller actions
    []
);

// Adds a hook for the query manager
if (version_compare(TYPO3_version, '8.0', '<')) {
    $TYPO3_CONF_VARS['EXTCONF']['sav_charts']['queryManagerClass']['savcharts'] = \YolfTypo3\SavCharts\Hooks\SavChartsQueryManagerForTypo3VersionLowerThan8::class;
} else {
    $TYPO3_CONF_VARS['EXTCONF']['sav_charts']['queryManagerClass']['savcharts'] = \YolfTypo3\SavCharts\Hooks\SavChartsQueryManager::class;
}
?>
