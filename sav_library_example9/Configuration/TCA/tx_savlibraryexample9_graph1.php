<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example9/Resources/Public/Icons/icon_tx_savlibraryexample9_graph1.gif',
    ],
    'interface' => [],
    'columns' => [
        'cruser_id' => [
            'exclude' => true,
            'label' => 'cruser_id',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'default' => 0
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'sun' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph1.sun',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size'  => 6,
                'default' => 0
            ],
        ],
        'cloud' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph1.cloud',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size'  => 6,
                'default' => 0
            ],
        ],
        'rain' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph1.rain',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size'  => 6,
                'default' => 0
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, sun, cloud, rain',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
