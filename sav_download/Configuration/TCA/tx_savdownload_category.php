<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload_category',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savdownload_category.name ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_download/Resources/Private/Icons/icon_tx_savdownload_category.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,name'
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
        'name' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_download/Resources/Private/Language/locallang_db.xlf:tx_savdownload_category.name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, name',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>