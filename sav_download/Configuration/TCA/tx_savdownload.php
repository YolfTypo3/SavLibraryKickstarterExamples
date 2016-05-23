<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savdownload.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_download/Resources/Public/Icons/icon_tx_savdownload.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,title,category,date,file'
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
        'title' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.title',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ),
        ),
        'category' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.category',
            'config' => array(
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.category.I.0',0),
                ),
                'foreign_table' => 'tx_savdownload_category',
                'foreign_table_where' => 'AND tx_savdownload_category.pid=###CURRENT_PID### ORDER BY tx_savdownload_category.name',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'date' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.date',
            'config' => array(
                'type' => 'input',
                'size' => '12',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            ),
        ),
        'file' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload.file',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => '',
                'disallowed' => 'php,php3',
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savdownload',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, title, category, date, file',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>