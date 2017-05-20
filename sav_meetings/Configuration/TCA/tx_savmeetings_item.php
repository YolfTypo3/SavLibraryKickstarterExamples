<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savmeetings_item.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_meetings/Resources/Public/Icons/icon_tx_savmeetings_item.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,subject,proposed_by,expected_duration,file,report'
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
        'subject' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.subject',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'proposed_by' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.proposed_by',
            'config' => [
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.proposed_by.I.0', 0],
                ],
                'foreign_table' => 'fe_users',
                'foreign_table_where' => ' ',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'expected_duration' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.expected_duration',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'file' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.file',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => '',
                'disallowed' => 'php,php3',
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savmeetings',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 3,
            ],
        ],
        'report' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings_item.report',
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
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, subject, proposed_by, expected_duration, file, report' . (version_compare(TYPO3_version, '7.3', '<') ? ';;;richtext[]:rte_transform[mode=ts]' : '') . '',
            'columnsOverrides' => [
                'report' => [
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