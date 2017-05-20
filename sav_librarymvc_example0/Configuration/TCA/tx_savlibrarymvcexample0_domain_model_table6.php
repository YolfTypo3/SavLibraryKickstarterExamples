<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table6',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibrarymvcexample0_domain_model_table6.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_librarymvc_example0/Resources/Public/Icons/icon_tx_savlibrarymvcexample0_domain_model_table6.gif',
        'EXT' => [
            'sav_library_mvc' => [
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
                            3 => '6',
                            2 => '6',
                            1 => '',
                        ],
                       'order' => [
                            1 => '1',
                            2 => '1',
                            3 => '1',
                            4 => '1',
                            5 => '1',
                        ],
                    ],
                    'field2' => [
                        'fieldType' => 'Files',
                        'config' => [
                            1 => [
                                'imageFiles' => 1,
                                'selected' => 0,
                             ],
                            2 => [
                                'imageFiles' => 1,
                                'selected' => 0,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 0,
                             ],
                            4 => [
                                'imageFiles' => 1,
                                'selected' => 0,
                             ],
                            5 => [
                                'imageFiles' => 1,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '6',
                        ],
                       'order' => [
                            1 => '2',
                            2 => '2',
                            3 => '2',
                            4 => '2',
                            5 => '2',
                        ],
                    ],
                ],
                'controllers' => [
                ],              
            ],
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,field1,field2'
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
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
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table6.field1',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table6.field2',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'field2',
                [
                    'maxitems' => 3
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                ''
            ),
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

?>