<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table6',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibrarymvcexample0_domain_model_table6.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_librarymvc_example0/Resources/Private/Icons/icon_tx_savlibrarymvcexample0_domain_model_table6.gif',
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
                            3 => '6',
                            2 => '6',
                            1 => '',
                        ),
                       'order' => array(
                            1 => '1',
                            2 => '1',
                            3 => '1',
                            4 => '1',
                            5 => '1',
                        ),
                    ),
                    'field2' => array(
                        'fieldType' => 'Files',
                        'config' => array(
                            1 => array (
                                'imageFiles' => 1,
                                'selected' => 0,
                             ),
                            2 => array (
                                'imageFiles' => 1,
                                'selected' => 0,
                             ),
                            3 => array (
                                'edit' => 1,
                                'selected' => 0,
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
                            3 => '6',
                        ),
                       'order' => array(
                            1 => '2',
                            2 => '2',
                            3 => '2',
                            4 => '2',
                            5 => '2',
                        ),
                    ),
                ),
            ),
        ),
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
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table6.field1',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'field2' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table6.field2',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'field2',
                array(
                    'maxitems' => 3
                ),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                ''
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