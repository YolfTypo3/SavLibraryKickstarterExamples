<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    $_EXTKEY,
    'Classes/Controller/SavLibraryExample1Controller.php',
    '_pi1',
    'list_type',
    1
);

?>
