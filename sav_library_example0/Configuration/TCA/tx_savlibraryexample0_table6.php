<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table6',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample0_table6.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example0/Resources/Public/Icons/icon_tx_savlibraryexample0_table6.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,field1'
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
        'field1' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table6.field1',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field1',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>