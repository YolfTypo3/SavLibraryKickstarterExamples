<?php
defined('TYPO3') or die();

$GLOBALS['TCA']['tx_savlibrarymvc_domain_model_configuration']['ctrl']['EXT']['sav_calendar_mvc'] = [
    'controllers' => [
            1 => [
                'name' => 'Default',
                'viewIdentifiers' => [
                    'listView' => 1,
                    'singleView' => 2,
                    'editView' => 0,
                    'specialView' => 0,
                    'viewsWithCondition' => [
                    ],
                ],
                'viewTitleBars' => [
                        1 => '',
                        2 => '###title###',
                        3 => '',
                        4 => '',
                        5 => '',
                ],
                'viewItemTemplates' => [
                    1 => '<ul>
  <li class="title">###title###</li>
  <li class="date">###date_begin###</li>
  <li class="location">###location###</li>
</ul>',
                ],
                'folders' => [
                    1 => [
                    ],
                    2 => [
                    ],
                    3 => [
                    ],
                    4 => [
                    ],
                    5 => [
                    ],
                ],
                'queryIdentifier' => 1,
            ],
            2 => [
                'name' => 'Admin',
                'viewIdentifiers' => [
                    'listView' => 3,
                    'singleView' => 4,
                    'editView' => 5,
                    'specialView' => 0,
                    'viewsWithCondition' => [
                    ],
                ],
                'viewTitleBars' => [
                        1 => '',
                        2 => '###title###',
                        3 => '',
                        4 => '',
                        5 => '',
                ],
                'viewItemTemplates' => [
                    3 => '<ul>
  <li class="title">###title###</li>
  <li class="date">###date_begin###</li>
  <li class="location">###location###</li>
</ul>',
                ],
                'folders' => [
                    1 => [
                    ],
                    2 => [
                    ],
                    3 => [
                    ],
                    4 => [
                    ],
                    5 => [
                    ],
                ],
                'queryIdentifier' => 2,
            ],
    ],
];
