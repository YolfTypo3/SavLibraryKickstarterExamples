<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending',
        'label' => 'friend_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample4_lending.crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example4/Resources/Public/Icons/icon_tx_savlibraryexample4_lending.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,friend_name,lending_date,return_date'
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
        'friend_name' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending.friend_name',
            'config' => [
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending.friend_name.I.0', 0],
                ],
                'foreign_table' => 'tx_savlibraryexample4_friends',
                'foreign_table_where' => 'AND tx_savlibraryexample4_friends.pid=###CURRENT_PID### ORDER BY tx_savlibraryexample4_friends.friend_name',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'lending_date' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending.lending_date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'date',
                'default' => '0'     
            ],
        ],
        'return_date' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending.return_date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'date',
                'default' => '0'     
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, friend_name, lending_date, return_date',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>