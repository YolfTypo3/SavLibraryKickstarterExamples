<?php

defined('TYPO3_MODE') or die();

if (version_compare(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,name'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_category',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_meetings/Resources/Public/Icons/icon_tx_savmeetings_category.gif',
    ],
    'interface' => $interface,
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'name' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_category.name',
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

