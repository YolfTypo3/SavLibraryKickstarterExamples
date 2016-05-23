<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds',
        'label' => 'album_title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample3_cds.album_title ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example3/Resources/Public/Icons/icon_tx_savlibraryexample3_cds.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,artist,album_title,date_of_purchase,link_to_website,coverimage,category,description,rel_lending'
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
        'artist' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.artist',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ),
        ),
        'album_title' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.album_title',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim,required'
            ),
        ),
        'date_of_purchase' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.date_of_purchase',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ),
        ),
        'link_to_website' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.link_to_website',
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
        'coverimage' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.coverimage',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/tx_savlibraryexample3',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'category' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.category',
            'config' => array(
                'type' => 'select',  
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.category.I.0',0),
                ),
                'foreign_table' => 'tx_savlibraryexample3_cat',
                'foreign_table_where' => 'AND tx_savlibraryexample3_cat.pid=###CURRENT_PID### ORDER BY tx_savlibraryexample3_cat.crdate',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'description' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.description',
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
        'rel_lending' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example3/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample3_cds.rel_lending',
            'config' => array(
                'type' => 'inline',
                'foreign_table' =>  'tx_savlibraryexample3_lending',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibraryexample3_cds_rel_lending_mm',
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
            'showitem' => 'hidden, artist, album_title, date_of_purchase, link_to_website, coverimage, category, description' . (version_compare(TYPO3_version, '7.3', '<') ? ';;;richtext[]:rte_transform[mode=ts]' : '') . ', rel_lending',
            'columnsOverrides' => array(
                'description' => array(
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