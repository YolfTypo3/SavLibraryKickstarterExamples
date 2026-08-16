<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example6/Resources/Public/Icons/icon_tx_savlibraryexample6.gif',
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
        'name' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'address' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.address',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ],
        ],
        'registration' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration',
            'config' => [
                'type' => 'check',
                'cols' => 4,
                'items' => [
                        [
                        	'label' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.0',
                        	'value' => ''
                        ],
                        [
                        	'label' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.1',
                        	'value' => ''
                        ],
                        [
                        	'label' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.2',
                        	'value' => ''
                        ],
                        [
                        	'label' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.3',
                        	'value' => ''
                        ],
                ],
            ],
        ],
        'email' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email_flag' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_flag',
            'config' => [
                'type' => 'check',
                'default' => 0
            ],
        ],
        'email_language' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language.I.0',
                        'value' => 'default'
                    ],
                    [
                        'label' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language.I.1',
                        'value' => 'fr'
                    ],
                ],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'invoice' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.invoice',
            'config' => [
                'type' => 'link',
                'size' => 20,
                'appearance' => [
                    'enableBrowser' => false,
                    'browserTitle' => 'Browser title',
                ],
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, name, address, registration, email, email_flag, email_language, invoice',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
