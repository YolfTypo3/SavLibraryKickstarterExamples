<?php
defined('TYPO3_MODE') or die();

// Default TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'sav_filters_mvc', 
    'Configuration/TypoScript', 
    'SAV Filters Mvc'
);

?>
