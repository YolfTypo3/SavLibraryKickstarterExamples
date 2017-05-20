<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests',
        'label' => 'lastname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample7_guests.lastname ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example7/Resources/Public/Icons/icon_tx_savlibraryexample7_guests.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,firstname,lastname,email,website,message,comment,date'
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
        'firstname' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.firstname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'lastname' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.lastname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.email',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'website' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.website',
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
        'message' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.message',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'comment' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.comment',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
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

?>