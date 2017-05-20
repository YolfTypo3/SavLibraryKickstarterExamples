<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample6.name ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example6/Resources/Public/Icons/icon_tx_savlibraryexample6.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,name,address,registration,email,email_flag,email_language,invoice'
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
        'name' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.name',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'address' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.address',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'registration' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration',
            'config' => [
                'type' => 'check',
                'cols' => 4,
                'items' => [
                        array('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.0', ''),
                        array('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.1', ''),
                        array('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.2', ''),
                        array('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.3', ''),
                ],
            ],
        ],
        'email' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'email_flag' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_flag',
            'config' => [
                'type' => 'check',
                'default' => 0
            ],
        ],
        'email_language' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language.I.0', 'default'],
                    ['LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language.I.1', 'fr'],
                ],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'invoice' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.invoice',
            'config' => [
                'type'  => 'input',
                'size'  => '15',
                'max' => '255',
                'checkbox'  => '',
                'eval'  => 'trim',
                'wizards' => [
                    '_PADDING'  => 2,
                    'link'  => [
                        'type'  => 'popup',
                        'title' => 'Link',         
                        'icon'  => 'actions-wizard-link',           
                        'module' => [
                            'name' => 'wizard_link',
                            'urlParameters' => [             
                                'mode' => 'wizard',
                            ]
                        ],    
                        'JSopenParams'  => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                    ]
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

?>