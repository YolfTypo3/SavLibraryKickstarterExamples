<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph2',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example9/Resources/Public/Icons/icon_tx_savlibraryexample9_graph2.gif',
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
        'label' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph2.label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'value1' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph2.value1',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size'  => 6,
                'default' => 0
            ],
        ],
        'value2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph2.value2',
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
            'showitem' => 'hidden, label, value1, value2',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
