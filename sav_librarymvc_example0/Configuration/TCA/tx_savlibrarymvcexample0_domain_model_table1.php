<?php

defined('TYPO3') or die();

$typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
if (version_compare($typo3Version->getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => ''
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_librarymvc_example0/Resources/Public/Icons/icon_tx_savlibrarymvcexample0_domain_model_table1.gif',
        'EXT' => [
            'sav_librarymvc_example0' => [
                'ctrl' => [
                ],
                'columns' => [
                    'field2' => [
                        'fieldType' => 'Checkbox',
                        'config' => [
                            1 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                            2 => [
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ],
                            5 => [
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                            2 => '1',
                            3 => '1',
                            5 => '1',
                        ],
                       'order' => [
                            1 => 19,
                            2 => 2,
                            3 => 1,
                            4 => 2,
                            5 => 2,
                        ],
                    ],
                    'field1' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'func' => 'makeItemLink',
                                'orderLinkInTitle' => '1',
                                'orderLinkInTitleSetup' => ':value:ascdesc',
                                'selected' => 1,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '2',
                            3 => '2',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 1,
                            2 => 1,
                            3 => 2,
                            4 => 1,
                            5 => 1,
                        ],
                    ],
                    'field8' => [
                        'fieldType' => 'Text',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '2',
                            3 => '2',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 7,
                            2 => 3,
                            3 => 3,
                            4 => 4,
                            5 => 3,
                        ],
                    ],
                    'field9' => [
                        'fieldType' => 'RichTextEditor',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'height' => '200',
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '2',
                            3 => '2',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 8,
                            2 => 4,
                            3 => 4,
                            4 => 5,
                            5 => 4,
                        ],
                    ],
                    'field4' => [
                        'fieldType' => 'Date',
                        'config' => [
                            1 => [
                                'selected' => 1,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'noDefault' => '1',
                                'fusion' => 'begin',
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 1,
                             ],
                            5 => [
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                            2 => '3',
                            3 => '3',
                            5 => '2',
                        ],
                       'order' => [
                            1 => 3,
                            2 => 5,
                            3 => 5,
                            4 => 6,
                            5 => 5,
                        ],
                    ],
                    'field5' => [
                        'fieldType' => 'DateTime',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'fusion' => 'end',
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 1,
                             ],
                            5 => [
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                            2 => '3',
                            3 => '3',
                            5 => '2',
                        ],
                       'order' => [
                            1 => 4,
                            2 => 6,
                            3 => 6,
                            4 => 7,
                            5 => 6,
                        ],
                    ],
                    'field10' => [
                        'fieldType' => 'Integer',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '3',
                            3 => '3',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 9,
                            2 => 24,
                            3 => 7,
                            4 => 8,
                            5 => 7,
                        ],
                    ],
                    'field7' => [
                        'fieldType' => 'RelationOneToManyAsSelectorbox',
                        'foreignModel' => '\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table2',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '4',
                            3 => '4',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 6,
                            2 => 8,
                            3 => 8,
                            4 => 9,
                            5 => 8,
                        ],
                    ],
                    'field6' => [
                        'fieldType' => 'Selectorbox',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '4',
                            3 => '4',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 5,
                            2 => 9,
                            3 => 9,
                            4 => 10,
                            5 => 9,
                        ],
                    ],
                    'field12' => [
                        'fieldType' => 'Link',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'message' => 'Click here',
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'size' => 50,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '5',
                            3 => '5',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 11,
                            2 => 10,
                            3 => 10,
                            4 => 11,
                            5 => 10,
                        ],
                    ],
                    'field13' => [
                        'fieldType' => 'Files',
                        'config' => [
                            1 => [
                                'imageFiles' => 1,
                                'selected' => 0,
                             ],
                            2 => [
                                'imageFiles' => 1,
                                'func' => 'makeNewWindowLink',
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'imageFiles' => 1,
                                'selected' => 0,
                             ],
                            5 => [
                                'imageFiles' => 1,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '5',
                            3 => '5',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 12,
                            2 => 11,
                            3 => 11,
                            4 => 12,
                            5 => 11,
                        ],
                    ],
                    'field14' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '7',
                            2 => '7',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 14,
                            2 => 12,
                            3 => 12,
                            4 => 13,
                            5 => 12,
                        ],
                    ],
                    'field15' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '7',
                            2 => '7',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 13,
                            2 => 13,
                            3 => 13,
                            4 => 14,
                            5 => 13,
                        ],
                    ],
                    'field16' => [
                        'fieldType' => 'Graph',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'graphTemplate' => 'typo3conf/ext/sav_charts/Resources/Private/Templates/ChartsExamples/PieChartAdvanced.xml',
                                'tags' => 'marker#title=Graph in SAV Library Plus, data#data=notEmpty[###field14###],
        data#labels=notEmpty[###field15###]',
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 0,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '7',
                            2 => '7',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 15,
                            2 => 14,
                            3 => 14,
                            4 => 15,
                            5 => 14,
                        ],
                    ],
                    'field17' => [
                        'fieldType' => 'RelationManyToManyAsDoubleSelectorbox',
                        'foreignModel' => '\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table2',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '6',
                            2 => '6',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 16,
                            2 => 15,
                            3 => 15,
                            4 => 16,
                            5 => 15,
                        ],
                    ],
                    'field18' => [
                        'fieldType' => 'RelationManyToManyAsDoubleSelectorbox',
                        'foreignModel' => '\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table2',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '6',
                            2 => '6',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 17,
                            2 => 16,
                            3 => 16,
                            4 => 17,
                            5 => 16,
                        ],
                    ],
                    'field19' => [
                        'fieldType' => 'RelationManyToManyAsSubform',
                        'foreignModel' => '\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table3',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'subformKey' => 0,
                                'maxSubformItems' => '2',
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'subformKey' => 0,
                                'maxSubformItems' => '2',
                                'addDelete' => '1',
                                'addUpDown' => '1',
                                'selected' => 1,
                             ],
                            4 => [
                                'subformKey' => 0,
                                'selected' => 0,
                             ],
                            5 => [
                                'subformKey' => 0,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '6',
                            2 => '6',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 18,
                            2 => 17,
                            3 => 17,
                            4 => 18,
                            5 => 17,
                        ],
                    ],
                    'field20' => [
                        'fieldType' => 'RelationManyToManyAsSubform',
                        'foreignModel' => '\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table4',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'subformKey' => 1,
                                'maxSubformItems' => '1',
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'subformKey' => 1,
                                'maxSubformItems' => '1',
                                'selected' => 1,
                             ],
                            4 => [
                                'subformKey' => 1,
                                'selected' => 0,
                             ],
                            5 => [
                                'subformKey' => 1,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '6',
                            2 => '6',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 22,
                            2 => 18,
                            3 => 18,
                            4 => 19,
                            5 => 18,
                        ],
                    ],
                    'field3' => [
                        'fieldType' => 'Checkboxes',
                        'config' => [
                            1 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                            2 => [
                                'displayAsImage' => 1,
                                'cols' => '1',
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ],
                            5 => [
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ],
                        ],
                        'folders' => [
                            2 => '1',
                            3 => '1',
                            5 => '1',
                        ],
                       'order' => [
                            1 => 2,
                            2 => 19,
                            3 => 19,
                            4 => 3,
                            5 => 19,
                        ],
                    ],
                    'field11' => [
                        'fieldType' => 'RadioButtons',
                        'config' => [
                            1 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                            2 => [
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                            5 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            2 => '1',
                            3 => '1',
                            5 => '0',
                        ],
                       'order' => [
                            1 => 10,
                            2 => 20,
                            3 => 20,
                            4 => 20,
                            5 => 20,
                        ],
                    ],
                    'field21' => [
                        'fieldType' => 'RadioButtons',
                        'config' => [
                            1 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                            2 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                            5 => [
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '8',
                            5 => '0',
                            2 => '0',
                        ],
                       'order' => [
                            1 => 20,
                            2 => 21,
                            3 => 21,
                            4 => 21,
                            5 => 21,
                        ],
                    ],
                    'field22' => [
                        'fieldType' => 'ShowOnly',
                        'renderType' => 'Text',
                        'config' => [
                            1 => [
                                'renderType' => 'Text',
                                'selected' => 0,
                             ],
                            2 => [
                                'renderType' => 'Text',
                                'selected' => 0,
                             ],
                            3 => [
                                'renderType' => 'Text',
                                'edit' => '0',
                                'value' => '$$$comment$$$',
                                'selected' => 1,
                             ],
                            4 => [
                                'renderType' => 'Text',
                                'selected' => 0,
                             ],
                            5 => [
                                'renderType' => 'Text',
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '8',
                            2 => '0',
                        ],
                       'order' => [
                            1 => 21,
                            2 => 22,
                            3 => 22,
                            4 => 22,
                            5 => 22,
                        ],
                    ],
                    'field23' => [
                        'fieldType' => 'RelationManyToManyAsSubform',
                        'foreignModel' => '\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table5',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'subformKey' => 2,
                                'maxSubformItems' => '2',
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'subformKey' => 2,
                                'maxSubformItems' => '2',
                                'addDelete' => '1',
                                'selected' => 1,
                             ],
                            4 => [
                                'subformKey' => 2,
                                'selected' => 0,
                             ],
                            5 => [
                                'subformKey' => 2,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '6',
                            2 => '6',
                        ],
                       'order' => [
                            1 => 23,
                            2 => 23,
                            3 => 23,
                            4 => 23,
                            5 => 23,
                        ],
                    ],
                    'field24' => [
                        'fieldType' => 'Currency',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '3',
                            2 => '3',
                        ],
                       'order' => [
                            1 => 24,
                            2 => 7,
                            3 => 24,
                            4 => 24,
                            5 => 24,
                        ],
                    ],
                ],
            ],
        ],
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
        'cruser_id_frontend' => [
            'config'  => [
                'type' => 'passthrough',
            ],
        ],
        'field2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field2',
            'config' => [
                'type' => 'check',
                'default' => 0
            ],
        ],
        'field1' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field1',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ],
        ],
        'field8' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field8',
            'config' => [
                'type' => 'text',
                'cols' => '50',
                'rows' => '4',
            ],
        ],
        'field9' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field9',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'enableRichtext' => true,
            ],
        ],
        'field4' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field4',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'date',
                'default' => '0'
            ],
        ],
        'field5' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field5',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => '0'
            ],
        ],
        'field10' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field10',
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
        'field7' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field7',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field7.I.0', 0],
                ],
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table2',
                'foreign_table_where' => 'AND 1 ',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'field6' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field6',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field6.I.1', '1'],
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field6.I.2', '2'],
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field6.I.3', '3'],
                ],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'field12' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field12',
            'config' => [
                'type'  => 'input',
                'renderType' => 'inputLink',
                'size'  => '15',
                'max' => '255',
                'checkbox'  => '',
                'eval'  => 'trim',
            ],
        ],
        'field13' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field13',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'field13',
                [
                    'maxitems' => 2
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                ''
            ),
        ],
        'field14' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field14',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field15' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field15',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field16' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field16',
            'config' => [
                'type' => 'none',
            ],
        ],
        'field17' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field17',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibrarymvcexample0_domain_model_table2.field1',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
            ],
        ],
        'field18' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field18',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibrarymvcexample0_domain_model_table2.field1',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
                'MM' => 'tx_savlibrarymvcexample0_table1_field18_mm',
            ],
        ],
        'field19' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field19',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table3',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibrarymvcexample0_table1_field19_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'field20' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field20',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table4',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibrarymvcexample0_table1_field20_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'field3' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3',
            'config' => [
                'type' => 'check',
                'cols' => 4,
                'items' => [
                        ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3.I.1', ''],
                        ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3.I.2', ''],
                        ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3.I.3', ''],
                        ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3.I.4', ''],
                ],
            ],
        ],
        'field11' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field11',
            'config' => [
                'type' => 'radio',
                'items' => [
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field11.I.1', ''],
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field11.I.2', '1'],
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field11.I.3', '3'],
                ],
            ],
        ],
        'field21' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field21',
            'config' => [
                'type' => 'radio',
                'items' => [
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field21.I.1', ''],
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field21.I.2', '1'],
                    ['LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field21.I.3', '2'],
                ],
            ],
        ],
        'field22' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field22',
            'config' => [
                'type' => 'none',
            ],
        ],
        'field23' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field23',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table5',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibrarymvcexample0_table1_field23_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'field24' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field24',
            'config' => [
                'type'  => 'input',
                'size'  => '13',
                'max' => '13',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field2, field1, field8, field9' . ', field4, field5, field10, field7, field6, field12, field13, field14, field15, field16, field17, field18, field19, field20, field3, field11, field21, field22, field23, field24',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

