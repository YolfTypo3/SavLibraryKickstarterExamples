<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table2',
        'label' => 'field1',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'field1',
        'delete' => 'deleted',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example0/Resources/Public/Icons/icon_tx_savlibraryexample0_table2.gif',
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
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table2.field1',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field1',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
