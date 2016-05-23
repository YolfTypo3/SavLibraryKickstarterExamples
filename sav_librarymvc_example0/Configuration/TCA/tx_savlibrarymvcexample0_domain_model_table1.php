<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'origUid' => 't3_origuid',
        'versioningWS' => TRUE,
        'default_sortby' => 'ORDER BY tx_savlibrarymvcexample0_domain_model_table1.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_librarymvc_example0/Resources/Public/Icons/icon_tx_savlibrarymvcexample0_domain_model_table1.gif',
        'EXT' => array(
            'sav_library_mvc' => array(
                'ctrl' => array(
                    'saveAndNew' => 1,
                ),
                'columns' => array(
                    'field2' => array(
                        'fieldType' => 'Checkbox',
                        'config' => array(
                            1 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                            2 => array (
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ),
                            5 => array (
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ),
                        ),
                        'folders' => array(
                            2 => '1',
                            3 => '1',
                            5 => '1',
                        ),
                       'order' => array(
                            1 => '19',
                            2 => '2',
                            3 => '1',
                            4 => '2',
                            5 => '2',
                        ),
                    ),
                    'field1' => array(
                        'fieldType' => 'String',
                        'config' => array(
                            1 => array (
                                'func' => 'makeItemLink',
                                'orderLinkInTitle' => '1',
                                'orderLinkInTitleSetup' => ':value:ascdesc',
                                'selected' => 1,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '2',
                            3 => '2',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '1',
                            2 => '1',
                            3 => '2',
                            4 => '1',
                            5 => '1',
                        ),
                    ),
                    'field8' => array(
                        'fieldType' => 'Text',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '2',
                            3 => '2',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '7',
                            2 => '3',
                            3 => '3',
                            4 => '4',
                            5 => '3',
                        ),
                    ),
                    'field9' => array(
                        'fieldType' => 'RichTextEditor',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'height' => '200',
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '2',
                            3 => '2',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '8',
                            2 => '4',
                            3 => '4',
                            4 => '5',
                            5 => '4',
                        ),
                    ),
                    'field4' => array(
                        'fieldType' => 'Date',
                        'config' => array(
                            1 => array (
                                'selected' => 1,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'noDefault' => '1',
                                'fusion' => 'begin',
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 1,
                             ),
                            5 => array (
                                'selected' => 1,
                             ),
                        ),
                        'folders' => array(
                            2 => '3',
                            3 => '3',
                            5 => '2',
                        ),
                       'order' => array(
                            1 => '3',
                            2 => '5',
                            3 => '5',
                            4 => '6',
                            5 => '5',
                        ),
                    ),
                    'field5' => array(
                        'fieldType' => 'DateTime',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'fusion' => 'end',
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 1,
                             ),
                            5 => array (
                                'selected' => 1,
                             ),
                        ),
                        'folders' => array(
                            2 => '3',
                            3 => '3',
                            5 => '2',
                        ),
                       'order' => array(
                            1 => '4',
                            2 => '6',
                            3 => '6',
                            4 => '7',
                            5 => '6',
                        ),
                    ),
                    'field10' => array(
                        'fieldType' => 'Integer',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '3',
                            3 => '3',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '9',
                            2 => '24',
                            3 => '7',
                            4 => '8',
                            5 => '7',
                        ),
                    ),
                    'field7' => array(
                        'fieldType' => 'RelationOneToManyAsSelectorbox',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '4',
                            3 => '4',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '6',
                            2 => '8',
                            3 => '8',
                            4 => '9',
                            5 => '8',
                        ),
                    ),
                    'field6' => array(
                        'fieldType' => 'Selectorbox',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '4',
                            3 => '4',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '5',
                            2 => '9',
                            3 => '9',
                            4 => '10',
                            5 => '9',
                        ),
                    ),
                    'field12' => array(
                        'fieldType' => 'Link',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'message' => 'Click here',
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'size' => 50,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '5',
                            3 => '5',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '11',
                            2 => '10',
                            3 => '10',
                            4 => '11',
                            5 => '10',
                        ),
                    ),
                    'field13' => array(
                        'fieldType' => 'Files',
                        'config' => array(
                            1 => array (
                                'imageFiles' => 1,
                                'selected' => 0,
                             ),
                            2 => array (
                                'imageFiles' => 1,
                                'func' => 'makeNewWindowLink',
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'imageFiles' => 1,
                                'selected' => 0,
                             ),
                            5 => array (
                                'imageFiles' => 1,
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '5',
                            3 => '5',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '12',
                            2 => '11',
                            3 => '11',
                            4 => '12',
                            5 => '11',
                        ),
                    ),
                    'field14' => array(
                        'fieldType' => 'String',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '7',
                            2 => '7',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '14',
                            2 => '12',
                            3 => '12',
                            4 => '13',
                            5 => '12',
                        ),
                    ),
                    'field15' => array(
                        'fieldType' => 'String',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '7',
                            2 => '7',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '13',
                            2 => '13',
                            3 => '13',
                            4 => '14',
                            5 => '13',
                        ),
                    ),
                    'field16' => array(
                        'fieldType' => 'Graph',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'graphTemplate' => 'typo3conf/ext/sav_jpgraph/Resources/Private/Templates/pieex4.xml',
                                'markers' => 'data#data=notEmpty[###field14###],data#legend=notEmpty[###field15###]',
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 0,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '7',
                            2 => '7',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '15',
                            2 => '14',
                            3 => '14',
                            4 => '15',
                            5 => '14',
                        ),
                    ),
                    'field17' => array(
                        'fieldType' => 'RelationManyToManyAsDoubleSelectorbox',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '6',
                            2 => '6',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '16',
                            2 => '15',
                            3 => '15',
                            4 => '16',
                            5 => '15',
                        ),
                    ),
                    'field18' => array(
                        'fieldType' => 'RelationManyToManyAsDoubleSelectorbox',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '6',
                            2 => '6',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '17',
                            2 => '16',
                            3 => '16',
                            4 => '17',
                            5 => '16',
                        ),
                    ),
                    'field19' => array(
                        'fieldType' => 'RelationManyToManyAsSubform',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'subformKey' => 0,
                                'maxSubformItems' => '2',
                                'selected' => 1,
                             ),
                            3 => array (
                                'truc' => 'field19',
                                'edit' => 1,
                                'subformKey' => 0,
                                'maxSubformItems' => '2',
                                'addDelete' => '1',
                                'addUpDown' => '1',
                                'selected' => 1,
                             ),
                            4 => array (
                                'subformKey' => 0,
                                'selected' => 0,
                             ),
                            5 => array (
                                'subformKey' => 0,
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '6',
                            2 => '6',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '18',
                            2 => '17',
                            3 => '17',
                            4 => '18',
                            5 => '17',
                        ),
                    ),
                    'field20' => array(
                        'fieldType' => 'RelationManyToManyAsSubform',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'subformKey' => 1,
                                'maxSubformItems' => '1',
                                'selected' => 1,
                             ),
                            3 => array (
                                'truc' => 'field20',
                                'edit' => 1,
                                'subformKey' => 1,
                                'maxSubformItems' => '1',
                                'selected' => 1,
                             ),
                            4 => array (
                                'subformKey' => 1,
                                'selected' => 0,
                             ),
                            5 => array (
                                'subformKey' => 1,
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '6',
                            2 => '6',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '22',
                            2 => '18',
                            3 => '18',
                            4 => '19',
                            5 => '18',
                        ),
                    ),
                    'field3' => array(
                        'fieldType' => 'Checkboxes',
                        'config' => array(
                            1 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                            2 => array (
                                'displayAsImage' => 1,
                                'cols' => '1',
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ),
                            5 => array (
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ),
                        ),
                        'folders' => array(
                            2 => '1',
                            3 => '1',
                            5 => '1',
                        ),
                       'order' => array(
                            1 => '2',
                            2 => '19',
                            3 => '19',
                            4 => '3',
                            5 => '19',
                        ),
                    ),
                    'field11' => array(
                        'fieldType' => 'RadioButtons',
                        'config' => array(
                            1 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                            2 => array (
                                'displayAsImage' => 1,
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                            5 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            2 => '1',
                            3 => '1',
                            5 => '0',
                        ),
                       'order' => array(
                            1 => '10',
                            2 => '20',
                            3 => '20',
                            4 => '20',
                            5 => '20',
                        ),
                    ),
                    'field21' => array(
                        'fieldType' => 'RadioButtons',
                        'config' => array(
                            1 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                            2 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                            5 => array (
                                'displayAsImage' => 1,
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '8',
                            5 => '0',
                            2 => '0',
                        ),
                       'order' => array(
                            1 => '20',
                            2 => '21',
                            3 => '21',
                            4 => '21',
                            5 => '21',
                        ),
                    ),
                    'field22' => array(
                        'fieldType' => 'ShowOnly',
                        'config' => array(
                            1 => array (
                                'renderType' => 'Text',
                                'selected' => 0,
                             ),
                            2 => array (
                                'renderType' => 'Text',
                                'selected' => 0,
                             ),
                            3 => array (
                                'renderType' => 'Text',
                                'edit' => '0',
                                'value' => '$$$comment$$$',
                                'selected' => 1,
                             ),
                            4 => array (
                                'renderType' => 'Text',
                                'selected' => 0,
                             ),
                            5 => array (
                                'renderType' => 'Text',
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '8',
                            2 => '0',
                        ),
                       'order' => array(
                            1 => '21',
                            2 => '22',
                            3 => '22',
                            4 => '22',
                            5 => '22',
                        ),
                    ),
                    'field23' => array(
                        'fieldType' => 'RelationManyToManyAsSubform',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'subformKey' => 2,
                                'maxSubformItems' => '2',
                                'selected' => 1,
                             ),
                            3 => array (
                                'truc' => 'field23',
                                'edit' => 1,
                                'subformKey' => 2,
                                'maxSubformItems' => '2',
                                'addDelete' => '1',
                                'selected' => 1,
                             ),
                            4 => array (
                                'subformKey' => 2,
                                'selected' => 0,
                             ),
                            5 => array (
                                'subformKey' => 2,
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '6',
                            2 => '6',
                        ),
                       'order' => array(
                            1 => '23',
                            2 => '23',
                            3 => '23',
                            4 => '23',
                            5 => '23',
                        ),
                    ),
                    'field24' => array(
                        'fieldType' => 'Currency',
                        'config' => array(
                            1 => array (
                                'selected' => 0,
                             ),
                            2 => array (
                                'selected' => 1,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 1,
                             ),
                            4 => array (
                                'selected' => 0,
                             ),
                            5 => array (
                                'selected' => 0,
                             ),
                        ),
                        'folders' => array(
                            3 => '3',
                            2 => '3',
                        ),
                       'order' => array(
                            1 => '24',
                            2 => '7',
                            3 => '24',
                            4 => '24',
                            5 => '24',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,field2,field1,field8,field9,field4,field5,field10,field7,field6,field12,field13,field14,field15,field16,field17,field18,field19,field20,field3,field11,field21,field22,field23,field24'
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type'  => 'check',
                'default' => 0,
            )
        ),
        'field2' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field2',
            'config' => array(
                'type' => 'check',
                'default' => 0
            ),
        ),
        'field1' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field1',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ),
        ),
        'field8' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field8',
            'config' => array(
                'type' => 'text',
                'cols' => '50',
                'rows' => '4',
            ),
        ),
        'field9' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field9',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => array(
                    '_PADDING' => 2,
                    'RTE' => array(
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type'  => 'script',
                        'title' => 'Full screen Rich Text Editing',
                        'icon'  => (version_compare(TYPO3_version, '7', '<') ? 'wizard_rte2.gif' : 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_rte.gif'),
                        'module' => array(
                            'name' => 'wizard_rte',
                        ),
                    ),
                ),
            ),
        ),
        'field4' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field4',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ),
        ),
        'field5' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field5',
            'config' => array(
                'type' => 'input',
                'size' => '12',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            ),
        ),
        'field10' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field10',
            'config' => array(
                'type'  => 'input',
                'size'  => '4',
                'max' => '6',
                'eval'  => 'int',
                'checkbox'  => '0',
                'range' => array(
                    'upper'  => '999999',
                    'lower'  => '0'
                ),
                'default' => 0
            ),
        ),
        'field7' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field7',
            'config' => array(
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field7.I.0',0),
                ),
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table2',
                'foreign_table_where' => 'AND 1 ',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'field6' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field6',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array (
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field6.I.1', '1'),
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field6.I.2', '2'),
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field6.I.3', '3'),
                ),
                'size' => 1,
                'maxitems' => 1,
            ),
        ),
        'field12' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field12',
            'config' => array (
                'type'  => 'input',
                'size'  => '15',
                'max' => '255',
                'checkbox'  => '',
                'eval'  => 'trim',
                'wizards' => array(
                    '_PADDING'  => 2,
                    'link'  => array(
                        'type'  => 'popup',
                        'title' => 'Link',
                        'icon'  => (version_compare(TYPO3_version, '7', '<') ? 'link_popup.gif' : 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif'),           
                        'module' => array(
                            'name' => (version_compare(TYPO3_version, '7', '<') ? 'wizard_element_browser' : 'wizard_link'),
                            'urlParameters' => array(             
                                'mode' => 'wizard',
                            )
                        ),    
                        'JSopenParams'  => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                    )
                ),
            ),
        ),
        'field13' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field13',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'field13',
                array(
                    'maxitems' => 2
                ),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                ''
            ),
        ),
        'field14' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field14',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'field15' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field15',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'field16' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field16',
            'config' => array(
                'type' => 'none',
            ),
        ),
        'field17' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field17',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibrarymvcexample0_domain_model_table2.field1',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
            ),
        ),
        'field18' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field18',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibrarymvcexample0_domain_model_table2.field1',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
                'MM' => 'tx_savlibrarymvcexample0_domain_model_table1_field18_mm',
            ),
        ),
        'field19' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field19',
            'config' => array(
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibrarymvcexample0_domain_model_table3',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibrarymvcexample0_domain_model_table1_field19_mm',
                'appearance' => array(
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ),
            ),
        ),
        'field20' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field20',
            'config' => array(
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibrarymvcexample0_domain_model_table4',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibrarymvcexample0_domain_model_table1_field20_mm',
                'appearance' => array(
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ),
            ),
        ),
        'field3' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3',
            'config' => array(
                'type' => 'check',
                'cols' => 4,
                'items' => array(
                        array('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3.I.1', ''),
                        array('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3.I.2', ''),
                        array('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3.I.3', ''),
                        array('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field3.I.4', ''),
                ),
            ),
        ),
        'field11' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field11',
            'config' => array (
                'type' => 'radio',
                'items' => array (
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field11.I.1', ''),
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field11.I.2', '1'),
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field11.I.3', '3'),
                ),
            ),
        ),
        'field21' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field21',
            'config' => array (
                'type' => 'radio',
                'items' => array (
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field21.I.1', ''),
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field21.I.2', '1'),
                    array ('LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field21.I.3', '2'),
                ),
            ),
        ),
        'field23' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field23',
            'config' => array(
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibrarymvcexample0_domain_model_table5',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibrarymvcexample0_domain_model_table1_field23_mm',
                'appearance' => array(
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ),
            ),
        ),
        'field24' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table1.field24',
            'config' => array(
                'type'  => 'input',
                'size'  => '13',
                'max' => '13',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, field2, field1, field8, field9' . (version_compare(TYPO3_version, '7.3', '<') ? ';;;richtext[]:rte_transform[mode=ts]' : '') . ', field4, field5, field10, field7, field6, field12, field13, field14, field15, field16, field17, field18, field19, field20, field3, field11, field21, field22, field23, field24',
            'columnsOverrides' => array(
                'field9' => array(
                    'defaultExtras' => 'richtext[]:rte_transform' . (version_compare(TYPO3_version, '8', '<') ? '[mode=ts]' : ''),
                ),
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>