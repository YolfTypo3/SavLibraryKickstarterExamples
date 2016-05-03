<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.saveDocNew.table1=1');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.saveDocNew.table3=1');
// Configures the Dispatcher
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SAV.' . $_EXTKEY,
  'Pi1',
	array(
	 // The first controller and its first action will be the default
    'Test' => 'list,single,edit,save,delete,deleteInSubform,upInSubform,downInSubform',
	),
  // Non-cachable controller actions
  array(
    'Test' => 'edit,save,delete,deleteInSubform,upInSubform,downInSubform',
  )
);

?>
