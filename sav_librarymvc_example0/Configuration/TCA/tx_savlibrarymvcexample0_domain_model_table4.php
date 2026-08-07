<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table4',
        'label' => 'field1',
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
        'iconfile' => 'EXT:sav_librarymvc_example0/Resources/Public/Icons/icon_tx_savlibrarymvcexample0_domain_model_table4.gif',
        'EXT' => [
            'sav_librarymvc_example0' => [
                'ctrl' => [
                ],
                'columns' => [
                    'field1' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '6',
                            3 => '6',
                        ],
                       'order' => [
                            1 => 1,
                            2 => 1,
                            3 => 1,
                            4 => 1,
                            5 => 1,
                        ],
                    ],
                ],
            ],
        ],
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
        'cruser_id_frontend' => [
            'config'  => [
                'type' => 'passthrough',
            ],
        ],
        'field1' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table4.field1',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field1',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
