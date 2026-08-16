<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests',
        'label' => 'lastname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'lastname',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example7/Resources/Public/Icons/icon_tx_savlibraryexample7_guests.gif',
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
        'firstname' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.firstname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'lastname' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.lastname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'website' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.website',
            'config' => [
                'type' => 'link',
                'size' => 20,
                'appearance' => [
                    'enableBrowser' => false,
                    'browserTitle' => 'Browser title',
                ],
            ],
        ],
        'message' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.message',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ],
        ],
        'comment' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.comment',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ],
        ],
        'date' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.date',
            'config' => [
                'type' => 'none',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, firstname, lastname, email, website, message, comment, date',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
