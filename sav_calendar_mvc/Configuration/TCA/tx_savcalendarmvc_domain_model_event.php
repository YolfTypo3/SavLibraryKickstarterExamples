<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event',
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
        'iconfile' => 'EXT:sav_calendar_mvc/Resources/Public/Icons/icon_tx_savcalendarmvc_domain_model_event.gif',
        'EXT' => [
            'sav_calendar_mvc' => [
                'ctrl' => [
                ],
                'columns' => [
                    'category' => [
                        'fieldType' => 'RelationOneToManyAsSelectorbox',
                        'foreignModel' => '\YolfTypo3\SavCalendarMvc\Domain\Model\Category',
                        'config' => [
                            1 => [
                                'selected' => 1,
                             ],
                            2 => [
                                'selected' => 0,
                             ],
                            3 => [
                                'selected' => 0,
                             ],
                            4 => [
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 1,
                            2 => 1,
                            3 => 1,
                            4 => 1,
                            5 => 1,
                        ],
                    ],
                    'title' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'func' => 'makeItemLink',
                                'selected' => 1,
                             ],
                            2 => [
                                'doNotDisplay' => '1',
                                'selected' => 1,
                             ],
                            3 => [
                                'func' => 'makeItemLink',
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 2,
                            2 => 2,
                            3 => 2,
                            4 => 2,
                            5 => 2,
                        ],
                    ],
                    'date_begin' => [
                        'fieldType' => 'DateTime',
                        'config' => [
                            1 => [
                                'format' => '%A %d %B %Y - %Hh %M',
                                'func' => 'makeDateFormat',
                                'selected' => 1,
                             ],
                            2 => [
                                'fusion' => 'begin',
                                'selected' => 1,
                             ],
                            3 => [
                                'format' => '%A %d %B %Y - %Hh %M',
                                'func' => 'makeDateFormat',
                                'selected' => 1,
                             ],
                            4 => [
                                'fusion' => 'begin',
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'fusion' => 'begin',
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 3,
                            2 => 3,
                            3 => 3,
                            4 => 3,
                            5 => 3,
                        ],
                    ],
                    'date_end' => [
                        'fieldType' => 'DateTime',
                        'config' => [
                            1 => [
                                'selected' => 1,
                             ],
                            2 => [
                                'fusion' => 'end',
                                'selected' => 1,
                             ],
                            3 => [
                                'selected' => 0,
                             ],
                            4 => [
                                'fusion' => 'end',
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'fusion' => 'end',
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 4,
                            2 => 4,
                            3 => 4,
                            4 => 4,
                            5 => 4,
                        ],
                    ],
                    'location' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'selected' => 1,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 5,
                            2 => 5,
                            3 => 5,
                            4 => 5,
                            5 => 5,
                        ],
                    ],
                    'description' => [
                        'fieldType' => 'RichTextEditor',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'selected' => 0,
                             ],
                            4 => [
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 6,
                            2 => 6,
                            3 => 6,
                            4 => 6,
                            5 => 6,
                        ],
                    ],
                    'link' => [
                        'fieldType' => 'Link',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'cutIfNull' => '1',
                                'selected' => 1,
                             ],
                            3 => [
                                'selected' => 0,
                             ],
                            4 => [
                                'cutIfNull' => '1',
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'size' => 50,
                                'size' => '60',
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 9,
                            2 => 7,
                            3 => 9,
                            4 => 7,
                            5 => 7,
                        ],
                    ],
                    'organized_by' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'selected' => 0,
                             ],
                            4 => [
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 7,
                            2 => 8,
                            3 => 7,
                            4 => 8,
                            5 => 8,
                        ],
                    ],
                    'email' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'func' => 'makeEmailLink',
                                'selected' => 1,
                             ],
                            3 => [
                                'selected' => 0,
                             ],
                            4 => [
                                'selected' => 1,
                             ],
                            5 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => 8,
                            2 => 9,
                            3 => 8,
                            4 => 9,
                            5 => 9,
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
        'category' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.category.I.0',
                        'value'  => 0
                    ],
                ],
                'foreign_table' => 'tx_savcalendarmvc_domain_model_category',
                'foreign_table_where' => 'AND 1 ',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'title' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ],
        ],
        'date_begin' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.date_begin',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetime',
                'size' => 20,
                'default' => 0
            ],
        ],
        'date_end' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.date_end',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetime',
                'size' => 20,
                'default' => 0
            ],
        ],
        'location' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.location',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.description',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
                'enableRichtext' => true,
            ],
        ],
        'link' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.link',
            'config' => [
                'type' => 'link',
                'size' => 20,
                'appearance' => [
                    'enableBrowser' => false,
                    'browserTitle' => 'Browser title',
                ],
            ],
        ],
        'organized_by' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.organized_by',
            'config' => [
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_event.email',
            'config' => [
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, category, title, date_begin, date_end, location, description' . ', link, organized_by, email',
            'columnsOverrides' => [
                'description' => [
                    'defaultExtras' => 'richtext[]:rte_transform[mode=ts]',
                ],
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
