<?php

defined('TYPO3_MODE') or die();

if (version_compare(\YolfTypo3\SavBasicExample0\Controller\TestController::getTypo3Version(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,field1,field2'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_basic_example0/Resources/Private/Language/locallang_db.xlf:tx_savbasicexample0_domain_model_table1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_basic_example0/Resources/Public/Icons/icon_tx_savbasicexample0_domain_model_table1.gif',
    ],
    'interface' => $interface,
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
            'label'  => 'LLL:EXT:sav_basic_example0/Resources/Private/Language/locallang_db.xlf:tx_savbasicexample0_domain_model_table1.field1',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_basic_example0/Resources/Private/Language/locallang_db.xlf:tx_savbasicexample0_domain_model_table1.field2',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'date',
                'default' => '0'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field1, field2',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>