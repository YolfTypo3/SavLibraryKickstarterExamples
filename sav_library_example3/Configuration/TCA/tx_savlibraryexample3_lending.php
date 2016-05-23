<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending',
        'label' => 'friend_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample3_lending.crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example3/Resources/Public/Icons/icon_tx_savlibraryexample3_lending.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,friend_name,friend_phone,friend_email,lending_date,return_date'
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
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.friend_name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'friend_phone' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.friend_phone',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'friend_email' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.friend_email',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'lending_date' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.lending_date',
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
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_lending.return_date',
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
            'showitem' => 'hidden, friend_name, friend_phone, friend_email, lending_date, return_date',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>