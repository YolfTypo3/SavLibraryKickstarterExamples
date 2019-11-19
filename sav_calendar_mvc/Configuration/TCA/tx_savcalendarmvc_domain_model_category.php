<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_category',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_calendar_mvc/Resources/Public/Icons/icon_tx_savcalendarmvc_domain_model_category.gif',
        'EXT' => [
            'sav_library_mvc' => [
                'ctrl' => [
                ],
                'columns' => [
                    'title' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 0,
                             ],
                            3 => [
                                'selected' => 0,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'edit' => 1,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                        ],
                       'order' => [
                            1 => '1',
                            2 => '1',
                            3 => '1',
                        ],
                    ],
                ],
                'controllers' => [
                ],
            ],
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,title'
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
        'title' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_calendar_mvc/Resources/Private/Language/locallang_db.xlf:tx_savcalendarmvc_domain_model_category.title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, title',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>