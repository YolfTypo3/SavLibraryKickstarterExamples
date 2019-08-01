<?php

$temporaryColumns = [
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_maps2_domain_model_poicollection', $temporaryColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_maps2_domain_model_poicollection','');

?>