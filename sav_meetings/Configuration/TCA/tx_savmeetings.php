<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savmeetings.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_meetings/Resources/Public/Icons/icon_tx_savmeetings.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,date,category,participants,rel_item'
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
        'date' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.date',
            'config' => array(
                'type' => 'input',
                'size' => '12',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            ),
        ),
        'category' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.category',
            'config' => array(
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.category.I.0',0),
                ),
                'foreign_table' => 'tx_savmeetings_category',
                'foreign_table_where' => ' ORDER BY tx_savmeetings_category.sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'participants' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.participants',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'fe_users',
                'foreign_table_where' => ' ',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 100000,
            ),
        ),
        'rel_item' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_meetings/Resources/Private/Language/locallang_db.xlf:tx_savmeetings.rel_item',
            'config' => array(
                'type' => 'inline',
                'foreign_table' =>  'tx_savmeetings_item',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savmeetings_rel_item_mm',
                'appearance' => array(
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ),
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, date, category, participants, rel_item',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>