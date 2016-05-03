<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample10.crdate ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example10/Resources/Private/Icons/icon_tx_savlibraryexample10.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,image,title,description,address,zip,city,country,map'
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
        'image' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.image',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savlibraryexample10',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'title' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.title',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'description' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.description',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ),
        ),
        'address' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.address',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'zip' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.zip',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'eval' => 'trim'
            ),
        ),
        'city' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.city',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'country' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.country',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, image, title, description, address, zip, city, country, map',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>