<?php

defined('TYPO3_MODE') or die();

if (version_compare(\YolfTypo3\SavLibraryPlus\Compatibility\Typo3VersionCompatibility::getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => 'hidden,image,poi,description,poi_uid,map'
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY tx_savlibraryexample10.crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_library_example10/Resources/Public/Icons/icon_tx_savlibraryexample10.gif',
    ],
    'interface' => $interface,
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'image' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.image',
            'config' =>	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                	'image',
                	[
                    	'maxitems' => 1,
                    	'uploadfolder' => 'user_upload',
                	],
                	$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                	''
            ),
        ],
        'poi' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.poi',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_maps2_domain_model_poicollection',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'MM' => 'tx_savlibraryexample10_poi_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
        'description' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_library_example10/Resources/Private/Language/locallang_db.xlf:tx_savlibraryexample10.description',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, image, poi, description, poi_uid, map',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];

?>