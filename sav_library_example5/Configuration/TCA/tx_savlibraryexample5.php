<?php

defined('TYPO3_MODE') or die();

if (version_compare(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,title,hook_content,field1,field2'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample5.crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example5/Resources/Public/Icons/icon_tx_savlibraryexample5.gif',
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
        'title' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5.title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field1' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5.field1',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5.field2',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, title, hook_content, field1, field2',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

