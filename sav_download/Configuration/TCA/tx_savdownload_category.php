<?php

defined('TYPO3_MODE') or die();

if (version_compare(\YolfTypo3\SavLibraryPlus\Compatibility\Typo3VersionCompatibility::getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,name'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload_category',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savdownload_category.name',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_download/Resources/Public/Icons/icon_tx_savdownload_category.gif',
    ],
    'interface' => $interface,
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'name' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload_category.name',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, name',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>