<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests',
        'label' => 'lastname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample7_guests.lastname ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example7/Resources/Private/Icons/icon_tx_savlibraryexample7_guests.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,firstname,lastname,email,website,message,comment,date'
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
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.firstname',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'lastname' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.lastname',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'email' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.email',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'website' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.website',
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
        'message' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.message',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ),
        ),
        'comment' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example7/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample7_guests.comment',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, firstname, lastname, email, website, message, comment, date',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>