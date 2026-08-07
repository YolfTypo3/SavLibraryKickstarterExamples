<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example5/Resources/Public/Icons/icon_tx_savlibraryexample5.gif',
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
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'title' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'hook_content' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5.hook_content',
            'config' => [
                'type' => 'none',
            ],
        ],
        'field1' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5.field1',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'field2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example5/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample5.field2',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, title, hook_content, field1, field2',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
