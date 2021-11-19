<?php

defined('TYPO3_MODE') or die();

if (version_compare(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,artist,album_title,date_of_purchase,link_to_website,coverimage,category,description'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds',
        'label' => 'album_title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample2_cds.album_title',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example2/Resources/Public/Icons/icon_tx_savlibraryexample2_cds.gif',
    ],
    'interface' => $interface,
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'artist' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds.artist',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ],
        ],
        'album_title' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds.album_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ],
        ],
        'date_of_purchase' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds.date_of_purchase',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'date',
                'default' => '0'
            ],
        ],
        'link_to_website' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds.link_to_website',
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
            'label'  => 'LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds.coverimage',
            'config' =>	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                	'coverimage',
                	[
                    	'maxitems' => 1,
                    	'uploadfolder' => 'user_upload',
                	],
                	$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                	''
            ),
        ],
        'category' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds.category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds.category.I.0', 0],
                ],
                'foreign_table' => 'tx_savlibraryexample2_cat',
                'foreign_table_where' => 'AND tx_savlibraryexample2_cat.pid=###CURRENT_PID### ORDER BY tx_savlibraryexample2_cat.crdate',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'description' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example2/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample2_cds.description',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'enableRichtext' => true,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, artist, album_title, date_of_purchase, link_to_website, coverimage, category, description' . '',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

