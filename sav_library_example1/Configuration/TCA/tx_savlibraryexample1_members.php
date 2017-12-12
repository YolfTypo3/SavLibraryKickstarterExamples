<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members',
        'label' => 'lastname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample1_members.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example1/Resources/Public/Icons/icon_tx_savlibraryexample1_members.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,firstname,lastname,street,zipcode,city,image'
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
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.firstname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'lastname' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.lastname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'street' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.street',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'zipcode' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.zipcode',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'city' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.city',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'image' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.image',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savlibraryexample1',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, firstname, lastname, street, zipcode, city, image',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>