<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savdownload.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_download/Resources/Public/Icons/icon_tx_savdownload.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,title,category,date,file'
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
        'title' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ],
        ],
        'category' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.category',
            'config' => [
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.category.I.0', 0],
                ],
                'foreign_table' => 'tx_savdownload_category',
                'foreign_table_where' => 'AND tx_savdownload_category.pid=###CURRENT_PID### ORDER BY tx_savdownload_category.name',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'date' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => '0'
            ],
        ],
        'file' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.file',
            'config' =>	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                	'file',
                	[
                    	'maxitems' => 1,
                    	'uploadfolder' => 'user_upload',
                	],
                	'',
                	'php,php3'
            ),
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, title, category, date, file',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>