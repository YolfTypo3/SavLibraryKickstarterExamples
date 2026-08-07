<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'origUid' => 't3_origuid',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example0/Resources/Public/Icons/icon_tx_savlibraryexample0_table1.gif',
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
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => version_compare(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getVersion(), '11.0', '<') ?
            [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'items' => [
                    [
                    	'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                    	'value' => -1
                    ],
                    [
                    	'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                    	'value' => 0
                    ]
                ],
                'default' => 0,
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
            ] :
            [
          		'type' => 'language'
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                    	'label' => '',
                    	'value' => 0
                    ]
                ],
                'foreign_table' => 'sys_file_collection',
                'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
            'default' => 0,
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],
        't3ver_label' => [
            'displayCond' => 'FIELD:t3ver_label:REQ:true',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type'=>'none',
                'size' => 27
            ]
        ],
        'hidden' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'field1' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field1',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim, required'
            ],
        ],
        'field2' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field2',
            'config' => [
                'type' => 'check',
                'default' => 0
            ],
        ],
        'field8' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field8',
            'config' => [
                'type' => 'text',
                'cols' => 50,
                'rows' => 4,
            ],
        ],
        'field9' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field9',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
                'enableRichtext' => true,
            ],
        ],
        'field4' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field4',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'size' => 20,
                'default' => 0
            ],
        ],
        'field5' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field5',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetime',
                'size' => 20,
                'default' => 0
            ],
        ],
        'field10' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field10',
            'config' => [
                'type'  => 'number',
                'size'  => 4,
                'range' => [
                    'upper'  => 999999,
                    'lower'  => 0
                ],
                'default' => 0
            ],
        ],
        'field7' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field7',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field7.I.0',
                        'value'  => 0
                    ],
                ],
                'foreign_table' => 'tx_savlibraryexample0_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibraryexample0_table2.field1',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'field6' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.1',
                        'value' => '1'
                    ],
                    [
                        'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.2',
                        'value' => '2'
                    ],
                    [
                        'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.3',
                        'value' => '3'
                    ],
                ],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'field12' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field12',
            'config' => [
                'type' => 'link',
                'size' => 20,
                'appearance' => [
                    'enableBrowser' => false,
                    'browserTitle' => 'Browser title',
                ],
            ],
        ],
        'field13' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field13',
            'config' => [
                'type' => 'file',
                'maxitems' => 2,
            ],
        ],
        'field14' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field14',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'field15' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field15',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'field16' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field16',
            'config' => [
                'type' => 'none',
            ],
        ],
        'field17' => [
            'exclude' => true,
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
            'exclude' => true,
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
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field19',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibraryexample0_table3',
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
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field20',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibraryexample0_table4',
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
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3',
            'config' => [
                'type' => 'check',
                'cols' => 4,
                'items' => [
                        [
                        	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.1',
                        	'value' => ''
                        ],
                        [
                        	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.2',
                        	'value' => ''
                        ],
                        [
                        	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.3',
                        	'value' => ''
                        ],
                        [
                        	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.4',
                        	'value' => ''
                        ],
                ],
            ],
        ],
        'field11' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11',
            'config' => [
                'type' => 'radio',
                'items' => [
                    [
                    	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.1',
                    	'value' => ''
                    ],
                    [
                    	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.2',
                    	'value' => '1'
                    ],
                    [
                    	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.3',
                    	'value' => '3'
                    ],
                ],
            ],
        ],
        'field21' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21',
            'config' => [
                'type' => 'radio',
                'items' => [
                    [
                    	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.1',
                    	'value' => ''
                    ],
                    [
                    	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.2',
                    	'value' => '1'
                    ],
                    [
                    	'label' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.3',
                    	'value' => '2'
                    ],
                ],
            ],
        ],
        'field22' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field22',
            'config' => [
                'type' => 'none',
            ],
        ],
        'field23' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field23',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibraryexample0_table5',
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
        'field24' => [
            'exclude' => true,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field24',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size'  => 6,
                'default' => 0
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field1, field2, field8, field9' . ', field4, field5, field10, field7, field6, field12, field13, field14, field15, field16, field17, field18, field19, field20, field3, field11, field21, field22, field23, field24',
            'columnsOverrides' => [
                'field9' => [
                    'defaultExtras' => 'richtext[]:rte_transform[mode=ts]',
                ],
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
