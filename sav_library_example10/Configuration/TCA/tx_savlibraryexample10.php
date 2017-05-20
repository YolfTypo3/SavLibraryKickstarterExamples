<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample10.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example10/Resources/Public/Icons/icon_tx_savlibraryexample10.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,image,title,description,address,zip,city,country,map'
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
        'image' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.image',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savlibraryexample10',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.description',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'address' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.address',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'zip' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.zip',
            'config' => [
                'type' => 'input',
                'size' => '5',
                'eval' => 'trim'
            ],
        ],
        'city' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.city',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'country' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.country',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, image, title, description, address, zip, city, country, map',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>