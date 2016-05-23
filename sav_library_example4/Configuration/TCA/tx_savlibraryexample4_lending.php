<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending',
        'label' => 'friend_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample4_lending.crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example4/Resources/Public/Icons/icon_tx_savlibraryexample4_lending.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,friend_name,lending_date,return_date'
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
        'friend_name' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending.friend_name',
            'config' => array(
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending.friend_name.I.0',0),
                ),
                'foreign_table' => 'tx_savlibraryexample4_friends',
                'foreign_table_where' => 'AND tx_savlibraryexample4_friends.pid=###CURRENT_PID### ORDER BY tx_savlibraryexample4_friends.friend_name',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'lending_date' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending.lending_date',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ),
        ),
        'return_date' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_lending.return_date',
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
            'showitem' => 'hidden, friend_name, lending_date, return_date',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>