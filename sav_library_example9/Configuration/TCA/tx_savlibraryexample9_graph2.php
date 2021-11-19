<?php

defined('TYPO3_MODE') or die();

if (version_compare(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,label,value1,value2'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph2',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example9/Resources/Public/Icons/icon_tx_savlibraryexample9_graph2.gif',
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
        'label' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph2.label',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'value1' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph2.value1',
            'config' => [
                'type'  => 'input',
                'size'  => '6',
                'max' => '10',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ],
        ],
        'value2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example9/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample9_graph2.value2',
            'config' => [
                'type'  => 'input',
                'size'  => '6',
                'max' => '10',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, label, value1, value2',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

