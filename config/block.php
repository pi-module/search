<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link         http://code.piengine.org for the Pi Engine source repository
 * @copyright    Copyright (c) Pi Engine http://piengine.org
 * @license      http://piengine.org/license.txt BSD 3-Clause License
 */
return [
    'search' => [
        'name'        => 'search',
        'title'       => _a('Search'),
        'description' => _a('Search box.'),
        'render'      => ['block', 'search'],
        'template'    => 'search',
        'config'      => [
            'type'               => [
                'title' => _a('Search type'),
                'edit'  => [
                    'type'    => 'select',
                    'options' => [
                        'options' => [
                            'normal' => _a('Normal'),
                            'ajax'   => _a('Ajax'),
                        ],
                    ],
                ],
                'value' => 'normal',
            ],

            'target'             => [
                'title' => _a('Target'),
                'edit'  => [
                    'type'    => 'select',
                    'options' => [
                        'options' => [
                            '_self'  => _a('_self'),
                            '_alank' => _a('_blank'),
                        ],
                    ],
                ],
                'value' => '_self',
            ],

            'module'             => [
                'title'       => _a('Module'),
                'description' => _a('Module for search'),
                'edit'        => [
                    'type' => 'Module\Search\Form\Element\Module',
                ],
                'value'       => 'all',
            ],

            'current-module'     => [
                'title'       => _a('Search on current module'),
                'description' => _a('Show or hide option for search on current module'),
                'edit'        => 'checkbox',
                'filter'      => 'number_int',
                'value'       => 0,
            ],

            'descriptiontitle'   => [
                'title'       => _a('Title field description'),
                'description' => '',
                'edit'        => 'text',
                'filter'      => 'string',
                'value'       => _a('Search'),
            ],

            'disable_submit_atn' => [
                'title'  => _a('Disable Submit button'),
                'edit'   => 'checkbox',
                'filter' => 'number_int',
                'value'  => 0,
            ],

            'delay'              => [
                'title'       => _a('Ajax search delay'),
                'description' => _a('Set delay by milliseconds'),
                'edit'        => 'text',
                'filter'      => 'number_int',
                'value'       => 1000,
            ],

            'block-effect'       => [
                'title'       => _a('Use block effects'),
                'description' => _a('Use block effects or set custom effect on theme'),
                'edit'        => 'checkbox',
                'filter'      => 'number_int',
                'value'       => 1,
            ],
        ],
    ],
];