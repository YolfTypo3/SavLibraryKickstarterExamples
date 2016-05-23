<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_friends',
        'label' => 'friend_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'friend_name',
        'default_sortby' => 'ORDER BY tx_savlibraryexample4_friends.friend_name ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example4/Resources/Public/Icons/icon_tx_savlibraryexample4_friends.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,friend_name,friend_phone,friend_email,friend_preferred_music'
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
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_friends.friend_name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ),
        ),
        'friend_phone' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_friends.friend_phone',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'friend_email' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_friends.friend_email',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'friend_preferred_music' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example4/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample4_friends.friend_preferred_music',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_savlibraryexample4_cat',
                'foreign_table_where' => ' ORDER BY tx_savlibraryexample4_cat.crdate',
                'size' => 4,
                'minitems' => 0,
                'maxitems' => 100000,
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, friend_name, friend_phone, friend_email, friend_preferred_music',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>