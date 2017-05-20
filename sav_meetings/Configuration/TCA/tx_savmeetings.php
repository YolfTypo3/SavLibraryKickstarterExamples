<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savmeetings.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_meetings/Resources/Public/Icons/icon_tx_savmeetings.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,date,category,participants,rel_item'
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
        'date' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.date',
            'config' => [
                'type' => 'input', 
                'renderType' => 'inputDateTime',    
                'eval' => 'datetime', 
                'default' => '0'      
            ],
        ],
        'category' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.category',
            'config' => [
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.category.I.0', 0],
                ],
                'foreign_table' => 'tx_savmeetings_category',
                'foreign_table_where' => ' ORDER BY tx_savmeetings_category.sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'participants' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.participants',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'fe_users',
                'foreign_table_where' => ' ',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
            ],
        ],
        'rel_item' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.rel_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' =>  'tx_savmeetings_item',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savmeetings_rel_item_mm',
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
            'showitem' => 'hidden, date, category, participants, rel_item',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>