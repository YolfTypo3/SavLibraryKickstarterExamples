<?php

$temporaryColumns = array (
    'tx_savlibraryexample8_special' => array (
        'exclude' => 1,
       'label'  => 'LLL:EXT:sav_library_example8/Resources/Private/Language/locallang_db.xlf:fe_users.tx_savlibraryexample8_special',
        'config' => array (
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $temporaryColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users',', tx_savlibraryexample8_special');

?>