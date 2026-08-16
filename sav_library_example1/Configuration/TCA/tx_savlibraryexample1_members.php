<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members',
        'label' => 'lastname',
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
        'iconfile' => 'EXT:sav_library_example1/Resources/Public/Icons/icon_tx_savlibraryexample1_members.gif',
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
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.firstname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'lastname' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.lastname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'street' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.street',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ],
        ],
        'zipcode' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.zipcode',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'city' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.city',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'image' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, firstname, lastname, street, zipcode, city, image',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
