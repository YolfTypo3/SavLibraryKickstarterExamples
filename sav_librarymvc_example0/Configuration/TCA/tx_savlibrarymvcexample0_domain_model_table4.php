<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table4',
        'label' => 'field1',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibrarymvcexample0_domain_model_table4.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_librarymvc_example0/Resources/Public/Icons/icon_tx_savlibrarymvcexample0_domain_model_table4.gif',
        'EXT' => array(
            'sav_library_mvc' => array(
                'ctrl' => array(
                ),
                'columns' => array(
                    'field1' => array(
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
                            2 => '6',
                            3 => '6',
                        ),
                       'order' => array(
                            1 => '1',
                            2 => '1',
                            3 => '1',
                            4 => '1',
                            5 => '1',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,field1'
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
        'field1' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table4.field1',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, field1',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>