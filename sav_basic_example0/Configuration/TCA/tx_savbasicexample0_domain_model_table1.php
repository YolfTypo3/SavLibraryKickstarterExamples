<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_basic_example0/Resources/Private/Language/locallang_db.xlf:tx_savbasicexample0_domain_model_table1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savbasicexample0_domain_model_table1.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_basic_example0/Resources/Public/Icons/icon_tx_savbasicexample0_domain_model_table1.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,field1,field2'
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
            'label'  => 'LLL:EXT:sav_basic_example0/Resources/Private/Language/locallang_db.xlf:tx_savbasicexample0_domain_model_table1.field1',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'field2' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_basic_example0/Resources/Private/Language/locallang_db.xlf:tx_savbasicexample0_domain_model_table1.field2',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, field1, field2',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>