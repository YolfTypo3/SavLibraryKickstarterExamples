<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_savcharts_domain_model_database');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_savcharts_domain_model_query');

// Registers the icon
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
   \TYPO3\CMS\Core\Imaging\IconRegistry::class
);
$iconRegistry->registerIcon(
   'tx-savcharts-wizard',
   \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
   ['source' => 'EXT:sav_charts/Resources/Public/Icons/ExtensionWizard.svg']
);

// Adds a wizard plugin icon
if (TYPO3_MODE === 'BE') {
    $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['YolfTypo3\\SavCharts\\Controller\\DefaultWizardIcon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('sav_charts') . 'Classes/Controller/DefaultWizardIcon.php';
}

?>
