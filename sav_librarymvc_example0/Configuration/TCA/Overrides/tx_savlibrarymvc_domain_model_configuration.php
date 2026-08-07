<?php
defined('TYPO3') or die();

$GLOBALS['TCA']['tx_savlibrarymvc_domain_model_configuration']['ctrl']['EXT']['sav_librarymvc_example0'] = [
    'controllers' => [
            1 => [
                'name' => 'Test',
                'viewIdentifiers' => [
                    'listView' => 1,
                    'singleView' => 2,
                    'editView' => 3,
                    'specialView' => 0,
                    'viewsWithCondition' => [
                        'singleView' => [
                            4 => [
                                'config' => [
                                    'showIf' => 'field21 = 1',
                                ],
                            ],
                            5 => [
                                'config' => [
                                    'showIf' => 'field21 = 2',
                                ],
                            ],
                        ],
                    ],
                ],
                'viewTitleBars' => [
                        1 => '<ul>
  <li>###field1###</li>
  <li>###field4###</li>
</ul>',
                        2 => '###field1###',
                        3 => '###field1###',
                        4 => '$$$View1$$$',
                        5 => '$$$View2$$$',
                ],
                'viewItemTemplates' => [
                    1 => '<ul>
  <li>###field1###</li>
  <li>###field4###</li>
</ul>',
                ],
                'folders' => [
                    1 => [
                    ],
                    2 => [
                        1 => [
                            'label' => 'Checkboxes and radio',
                            'configuration' => [
                            ],
                            'order' => 2,
                        ],
                        2 => [
                            'label' => 'String, Text, Rte',
                            'configuration' => [
                            ],
                            'order' => 1,
                        ],
                        3 => [
                            'label' => 'Dates and integer',
                            'configuration' => [
                            ],
                            'order' => 3,
                        ],
                        4 => [
                            'label' => 'Selectorbox',
                            'configuration' => [
                            ],
                            'order' => 4,
                        ],
                        5 => [
                            'label' => 'Links and files',
                            'configuration' => [
                            ],
                            'order' => 5,
                        ],
                        6 => [
                            'label' => 'Relations',
                            'configuration' => [
                            ],
                            'order' => 6,
                        ],
                        7 => [
                            'label' => 'Graphs',
                            'configuration' => [
                            ],
                            'order' => 7,
                        ],
                    ],
                    3 => [
                        1 => [
                            'label' => 'Checkboxes and radio',
                            'configuration' => [
                            ],
                            'order' => 2,
                        ],
                        2 => [
                            'label' => 'String, Text, Rte',
                            'configuration' => [
                            ],
                            'order' => 1,
                        ],
                        3 => [
                            'label' => 'Dates and integer',
                            'configuration' => [
                            ],
                            'order' => 3,
                        ],
                        4 => [
                            'label' => 'Selectorbox',
                            'configuration' => [
                            ],
                            'order' => 4,
                        ],
                        5 => [
                            'label' => 'Links and files',
                            'configuration' => [
                            ],
                            'order' => 5,
                        ],
                        6 => [
                            'label' => 'Relations',
                            'configuration' => [
                            ],
                            'order' => 6,
                        ],
                        7 => [
                            'label' => 'Graphs',
                            'configuration' => [
                            ],
                            'order' => 7,
                        ],
                        8 => [
                            'label' => 'Changing the view',
                            'configuration' => [
                                'cutIf' => 'field3 = 0',
                            ],
                            'order' => 8,
                        ],
                    ],
                    4 => [
                    ],
                    5 => [
                        1 => [
                            'label' => 'Checkboxes',
                            'configuration' => [
                            ],
                            'order' => 1,
                        ],
                        2 => [
                            'label' => 'Dates',
                            'configuration' => [
                            ],
                            'order' => 2,
                        ],
                    ],
                ],
                'queryIdentifier' => 1,
            ],
    ],
];
