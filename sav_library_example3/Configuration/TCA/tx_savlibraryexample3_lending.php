<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending',
        'label' => 'friend_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example3/Resources/Public/Icons/icon_tx_savlibraryexample3_lending.gif',
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
        'friend_name' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.friend_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'friend_phone' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.friend_phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'friend_email' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.friend_email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'lending_date' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.lending_date',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'size' => 20,
                'default' => 0
            ],
        ],
        'return_date' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.return_date',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'size' => 20,
                'default' => 0
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, friend_name, friend_phone, friend_email, lending_date, return_date',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
