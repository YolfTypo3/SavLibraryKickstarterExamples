<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table5',
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
        'iconfile' => 'EXT:sav_library_example0/Resources/Public/Icons/icon_tx_savlibraryexample0_table5.gif',
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
        'field1' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table5.field1',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'field2' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table5.field2',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibraryexample0_table6',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample0_table5_field2_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field1, field2',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
