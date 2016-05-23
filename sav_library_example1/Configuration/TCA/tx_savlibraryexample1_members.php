<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members',
        'label' => 'lastname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample1_members.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example1/Resources/Public/Icons/icon_tx_savlibraryexample1_members.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,firstname,lastname,street,zipcode,city,image'
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
        'firstname' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.firstname',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'lastname' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.lastname',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'street' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.street',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ),
        ),
        'zipcode' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.zipcode',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'city' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.city',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'image' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example1/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample1_members.image',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savlibraryexample1',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, firstname, lastname, street, zipcode, city, image',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>