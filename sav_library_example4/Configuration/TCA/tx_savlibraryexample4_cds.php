<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds',
        'label' => 'album_title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample4_cds.album_title ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example4/Resources/Public/Icons/icon_tx_savlibraryexample4_cds.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,artist,album_title,date_of_purchase,link_to_website,coverimage,category,description,rel_lending,rel_friends'
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
        'artist' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.artist',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ],
        ],
        'album_title' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.album_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ],
        ],
        'date_of_purchase' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.date_of_purchase',
            'config' => [
                'type' => 'input', 
                'renderType' => 'inputDateTime',    
                'eval' => 'date',  
                'default' => '0'     
            ],
        ],
        'link_to_website' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.link_to_website',
            'config' => [
                'type'  => 'input',
                'renderType' => 'inputLink',
                'size'  => '15',
                'max' => '255',
                'checkbox'  => '',
                'eval'  => 'trim',
            ],
        ],
        'coverimage' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.coverimage',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savlibraryexample4',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'category' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.category',
            'config' => [
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.category.I.0', 0],
                ],
                'foreign_table' => 'tx_savlibraryexample4_cat',
                'foreign_table_where' => 'AND tx_savlibraryexample4_cat.pid=###CURRENT_PID### ORDER BY tx_savlibraryexample4_cat.crdate',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'description' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.description',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'enableRichtext' => true,
            ],
        ],
        'rel_lending' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.rel_lending',
            'config' => [
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample4_lending',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 5,
                'MM' => 'tx_savlibraryexample4_cds_rel_lending_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'rel_friends' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_cds.rel_friends',
            'config' => [
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample4_friends',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'norelation' => 1,
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, artist, album_title, date_of_purchase, link_to_website, coverimage, category, description' . (version_compare(TYPO3_version, '7.3', '<') ? ';;;richtext[]:rte_transform[mode=ts]' : '') . ', rel_lending, rel_friends',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>