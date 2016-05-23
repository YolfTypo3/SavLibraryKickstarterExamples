<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'origUid' => 't3_origuid',
        'versioningWS' => TRUE,
        'default_sortby' => 'ORDER BY tx_savlibraryexample0_table1.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example0/Resources/Public/Icons/icon_tx_savlibraryexample0_table1.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,field1,field2,field8,field9,field4,field5,field24,field7,field6,field12,field13,field14,field15,field16,field17,field18,field19,field20,field3,field11,field21,field22,field23,field10'
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
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field1',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ),
        ),
        'field2' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field2',
            'config' => array(
                'type' => 'check',
                'default' => 0
            ),
        ),
        'field8' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field8',
            'config' => array(
                'type' => 'text',
                'cols' => '50',
                'rows' => '4',
            ),
        ),
        'field9' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field9',
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
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field4',
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
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field5',
            'config' => array(
                'type' => 'input',
                'size' => '12',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            ),
        ),
        'field24' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field24',
            'config' => array(
                'type'  => 'input',
                'size'  => '13',
                'max' => '13',
                'eval'  => 'double2',
                'checkbox'  => '0',
                'default' => 0
            ),
        ),
        'field7' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field7',
            'config' => array(
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field7.I.0',0),
                ),
                'foreign_table' => 'tx_savlibraryexample0_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibraryexample0_table2.field1',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'field6' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array (
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.1', '1'),
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.2', '2'),
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field6.I.3', '3'),
                ),
                'size' => 1,
                'maxitems' => 1,
            ),
        ),
        'field12' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field12',
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
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field13',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savlibraryexample0',
                'size' => 2,
                'minitems' => 0,
                'maxitems' => 2,
            ),
        ),
        'field14' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field14',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'field15' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field15',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'field16' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field16',
            'config' => array(
                'type' => 'none',
            ),
        ),
        'field17' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field17',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibraryexample0_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibraryexample0_table2.field1',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
            ),
        ),
        'field18' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field18',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibraryexample0_table2',
                'foreign_table_where' => 'AND 1 ORDER BY tx_savlibraryexample0_table2.field1',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
                'MM' => 'tx_savlibraryexample0_table1_field18_mm',
            ),
        ),
        'field19' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field19',
            'config' => array(
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample0_table3',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample0_table1_field19_mm',
                'appearance' => array(
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ),
            ),
        ),
        'field20' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field20',
            'config' => array(
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample0_table4',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample0_table1_field20_mm',
                'appearance' => array(
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ),
            ),
        ),
        'field3' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3',
            'config' => array(
                'type' => 'check',
                'cols' => 4,
                'items' => array(
                        array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.1', ''),
                        array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.2', ''),
                        array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.3', ''),
                        array('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field3.I.4', ''),
                ),
            ),
        ),
        'field11' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11',
            'config' => array (
                'type' => 'radio',
                'items' => array (
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.1', ''),
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.2', '1'),
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field11.I.3', '3'),
                ),
            ),
        ),
        'field21' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21',
            'config' => array (
                'type' => 'radio',
                'items' => array (
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.1', ''),
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.2', '1'),
                    array ('LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field21.I.3', '2'),
                ),
            ),
        ),
        'field23' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field23',
            'config' => array(
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample0_table5',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample0_table1_field23_mm',
                'appearance' => array(
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ),
            ),
        ),
        'field10' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample0_table1.field10',
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
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, field1, field2, field8, field9' . (version_compare(TYPO3_version, '7.3', '<') ? ';;;richtext[]:rte_transform[mode=ts]' : '') . ', field4, field5, field24, field7, field6, field12, field13, field14, field15, field16, field17, field18, field19, field20, field3, field11, field21, field22, field23, field10',
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