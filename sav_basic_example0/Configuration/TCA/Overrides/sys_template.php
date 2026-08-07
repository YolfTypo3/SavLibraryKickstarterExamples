<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Default TypoScript
ExtensionManagementUtility::addStaticFile(
    'sav_basic_example0',
    'Configuration/TypoScript',
    'SAV Basic Example0 - Test'
);