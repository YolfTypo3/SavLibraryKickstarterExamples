<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample6.name ',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_library_example6/Resources/Public/Icons/icon_tx_savlibraryexample6.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,name,address,registration,email,email_flag,email_language,invoice'
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
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'address' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.address',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ),
        ),
        'registration' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration',
            'config' => array(
                'type' => 'check',
                'cols' => 4,
                'items' => array(
                        array('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.0', ''),
                        array('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.1', ''),
                        array('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.2', ''),
                        array('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.registration.I.3', ''),
                ),
            ),
        ),
        'email' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ),
        ),
        'email_flag' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_flag',
            'config' => array(
                'type' => 'check',
                'default' => 0
            ),
        ),
        'email_language' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array (
                    array ('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language.I.0', 'default'),
                    array ('LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.email_language.I.1', 'fr'),
                ),
                'size' => 1,
                'maxitems' => 1,
            ),
        ),
        'invoice' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example6/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample6.invoice',
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
    ),
    'types' => array(
        '0' => array(
            'showitem' => 'hidden, name, address, registration, email, email_flag, email_language, invoice',
            'columnsOverrides' => array(
            ),
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    ),
);

?>