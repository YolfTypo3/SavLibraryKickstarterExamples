<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'origUid' => 't3_origuid',
        'versioningWS' => TRUE,
        'default_sortby' => 'ORDER BY tx_savlibraryexample0_table1.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example0/Resources/Public/Icons/icon_tx_savlibraryexample0_table1.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,field1,field2,field8,field9,field4,field5,field24,field7,field6,field12,field13,field14,field15,field16,field17,field18,field19,field20,field3,field11,field21,field22,field23,field10'
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
        'field1' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field1',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ],
        ],
        'field2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field2',
            'config' => [
                'type' => 'check',
                'default' => 0
            ],
        ],
        'field8' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field8',
            'config' => [
                'type' => 'text',
                'cols' => '50',
                'rows' => '4',
            ],
        ],
        'field9' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field9',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => [
                    '_PADDING' => 2,
                    'RTE' => [
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type'  => 'script',
                        'title' => 'Full screen Rich Text Editing',
                        'icon'  => (version_compare(TYPO3_version, '7', '<') ? 'wizard_rte2.gif' : 'actions-wizard-rte'),
                        'module' => [
                            'name' => 'wizard_rte',
                        ],
                    ],
                ],
            ],
        ],
        'field4' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field4',
            'config' => [
                'type' => 'input', 
                'renderType' => 'inputDateTime',    
                'eval' => 'date',  
                'default' => '0'     
            ],
        ],
        'field5' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field5',
            'config' => [
                'type' => 'input', 
                'renderType' => 'inputDateTime',    
                'eval' => 'datetime', 
                'default' => '0'      
            ],
        ],
        'field24' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field24',
            'config' => [
                'type'  => 'input',
                'size'  => '13',
                'max' => '13',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ],
        ],
        'field7' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field7',
            'config' => [
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field7.I.0', 0],
                ],
                'foreign_table' => 'tx_savlibraryexample0_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibraryexample0_table2.field1',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'field6' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.1', '1'],
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.2', '2'],
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.3', '3'],
                ],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'field12' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field12',
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
        'field13' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field13',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savlibraryexample0',
                'size' => 2,
                'minitems' => 0,
                'maxitems' => 2,
            ],
        ],
        'field14' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field14',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field15' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field15',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field16' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field16',
            'config' => [
                'type' => 'none',
            ],
        ],
        'field17' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field17',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibraryexample0_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibraryexample0_table2.field1',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
            ],
        ],
        'field18' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field18',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibraryexample0_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibraryexample0_table2.field1',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
                'MM' => 'tx_savlibraryexample0_table1_field18_mm',
            ],
        ],
        'field19' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field19',
            'config' => [
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample0_table3',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample0_table1_field19_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'field20' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field20',
            'config' => [
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample0_table4',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample0_table1_field20_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'field3' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3',
            'config' => [
                'type' => 'check',
                'cols' => 4,
                'items' => [
                        array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.1', ''),
                        array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.2', ''),
                        array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.3', ''),
                        array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.4', ''),
                ],
            ],
        ],
        'field11' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11',
            'config' => [
                'type' => 'radio',
                'items' => [
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.1', ''],
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.2', '1'],
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.3', '3'],
                ],
            ],
        ],
        'field21' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21',
            'config' => [
                'type' => 'radio',
                'items' => [
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.1', ''],
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.2', '1'],
                    ['LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.3', '2'],
                ],
            ],
        ],
        'field23' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field23',
            'config' => [
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample0_table5',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample0_table1_field23_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'field10' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field10',
            'config' => [
                'type'  => 'input',
                'size'  => '4',
                'max' => '6',
                'eval'  => 'int',
                'checkbox'  => '0',
                'range' => [
                    'upper'  => '999999',
                    'lower'  => '0'
                ],
                'default' => 0
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field1, field2, field8, field9' . (version_compare(TYPO3_version, '7.3', '<') ? ';;;richtext[]:rte_transform[mode=ts]' : '') . ', field4, field5, field24, field7, field6, field12, field13, field14, field15, field16, field17, field18, field19, field20, field3, field11, field21, field22, field23, field10',
            'columnsOverrides' => [
                'field9' => [
                    'defaultExtras' => 'richtext[]:rte_transform' . (version_compare(TYPO3_version, '8', '<') ? '[mode=ts]' : ''),
                ],
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>