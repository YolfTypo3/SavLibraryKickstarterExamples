<?php
defined('TYPO3') or die();

// Default TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'sav_calendar_mvc',
    'Configuration/TypoScript',
    'SAV Calendar Mvc'
);