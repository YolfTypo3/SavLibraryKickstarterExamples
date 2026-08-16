<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9',
        'label' => 'title',
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
        'iconfile' => 'EXT:sav_library_example9/Resources/Public/Icons/icon_tx_savlibraryexample9.gif',
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
            'exclude' => true,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'title' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'graph1' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9.graph1',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibraryexample9_graph1',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'MM' => 'tx_savlibraryexample9_graph1_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'graph2' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9.graph2',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibraryexample9_graph2',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample9_graph2_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'graph' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9.graph',
            'config' => [
                'type' => 'none',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, title, graph1, graph2, graph',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
