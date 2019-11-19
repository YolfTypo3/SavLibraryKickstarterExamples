<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample9_graph1.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example9/Resources/Public/Icons/icon_tx_savlibraryexample9_graph1.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,sun,cloud,rain'
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
        'sun' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph1.sun',
            'config' => [
                'type'  => 'input',
                'size'  => '6',
                'max' => '10',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ],
        ],
        'cloud' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph1.cloud',
            'config' => [
                'type'  => 'input',
                'size'  => '6',
                'max' => '10',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ],
        ],
        'rain' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph1.rain',
            'config' => [
                'type'  => 'input',
                'size'  => '6',
                'max' => '10',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, sun, cloud, rain',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>