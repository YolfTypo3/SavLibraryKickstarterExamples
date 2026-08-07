<?php
defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example10/Resources/Public/Icons/icon_tx_savlibraryexample10.gif',
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
        'image' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types',
            ],
        ],
        'poi' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.poi',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_maps2_domain_model_poicollection',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'MM' => 'tx_savlibraryexample10_poi_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'description' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.description',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ],
        ],
        'poi_uid' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.poi_uid',
            'config' => [
                'type' => 'none',
            ],
        ],
        'map' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.map',
            'config' => [
                'type' => 'none',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, image, poi, description, poi_uid, map',
            'columnsOverrides' => [
            ],
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];
