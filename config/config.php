<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

$config = [
    'category' => [
        [
            'title' => _a('Modules'),
            'name'  => 'modules',
        ],
        [
            'title' => _a('Search engines'),
            'name'  => 'search_engine',
        ],
    ],
    'item'     => [
        'leading_limit' => [
            'title'       => _t('Leading search result limit'),
            'description' => _t('Number of found items on leading page.'),
            'value'       => 5,
            'filter'      => 'int',
        ],

        'list_limit' => [
            'title'       => _t('List search result limit'),
            'description' => _t('Number of found items on list page.'),
            'value'       => 20,
            'filter'      => 'int',
        ],

        'min_length' => [
            'title'       => _t('Minimum query'),
            'description' => _t('Minimum length for query term.'),
            'value'       => 3,
            'filter'      => 'int',
        ],

        'separate_query' => [
            'title'       => _t('Separate query'),
            'description' => _t('Separate input keyword by space'),
            'edit'        => 'checkbox',
            'value'       => 1,
            'filter'      => 'int',
        ],

        'localize_query' => [
            'title'       => _t('Localize query'),
            'description' => _t('Localize query by selected language on website'),
            'edit'        => 'checkbox',
            'filter'      => 'number_int',
            'value'       => 1,
        ],

        'save_log' => [
            'title'       => _t('Save search log'),
            'description' => _t('It make your website little slow'),
            'edit'        => 'checkbox',
            'filter'      => 'number_int',
            'value'       => 0,
        ],

        'use_custom_template' => [
            'title'       => _t('Use custom template'),
            'description' => _t('if Check it, on result system use custom template from modules'),
            'edit'        => 'checkbox',
            'filter'      => 'number_int',
            'value'       => 0,
        ],

        'search_interval' => [
            'title'       => _t('Search interval limit'),
            'description' => _t('Limit for search time interval.'),
            'value'       => 0,
            'filter'      => 'int',
        ],

        'search_interval_anonymous' => [
            'title'       => _t('Anonymous interval limit'),
            'description' => _t('Limit for anonymous search time interval.'),
            'value'       => 0,
            'filter'      => 'int',
        ],

        'cache' => [
            'title' => _t('Search result cache'),
            'edit'  => 'cache_ttl',
            'value' => 0,
        ],

        'hot' => [
            'title'       => _t('Hot search'),
            'description' => _t('Hot words for global auto-complete, separated by comma `,`.'),
            'edit'        => 'textarea',
            'value'       => 'pi engine, zend framework, php, search',
        ],

        'search_in' => [
            'title'       => _t('Modules to search'),
            'description' => _t('Only specified modules are allowed to search, separated by ",".'),
            'category'    => 'modules',
        ],

        'search_field' => [
            'title'       => _t('Field to search'),
            'description' => _t('If set field name here, system just search on that fields on your modules but if your set field not exist on module fields search on all module fields, separated by ",".'),
            'category'    => 'modules',
        ],

        'module_link' => [
            'title'    => _t('Module open link type'),
            'edit'     => [
                'type'    => 'select',
                'options' => [
                    'options' => [
                        'search' => _a('Open more result on search'),
                        'module' => _a('Open more result on module'),
                    ],
                ],
            ],
            'value'    => 'search',
            'category' => 'modules',
        ],

        'google_host' => [
            'title'       => _t('Google local host'),
            'description' => _t('Specify a google local host if it is not https://www.google.com'),
            'value'       => 'https://www.google.com',
            'category'    => 'search_engine',
        ],

        'google_enable' => [
            'title'    => _a('Display Google link'),
            'edit'     => 'checkbox',
            'filter'   => 'number_int',
            'value'    => 1,
            'category' => 'search_engine',
        ],

        'google_code' => [
            'title'       => _t('Google custom search code'),
            'description' => _t('Google CSE provided at https://www.google.com/cse/'),
            'value'       => '012766098119240378914:a6l0fuirq4a',
            'category'    => 'search_engine',
        ],

        'bing_enable' => [
            'title'    => _a('Display bing link'),
            'edit'     => 'checkbox',
            'filter'   => 'number_int',
            'value'    => 1,
            'category' => 'search_engine',
        ],

        'baidu_enable' => [
            'title'    => _a('Display Baidu link'),
            'edit'     => 'checkbox',
            'filter'   => 'number_int',
            'value'    => 0,
            'category' => 'search_engine',
        ],

        'baidu_code' => [
            'title'       => _t('Baidu custom search code'),
            'description' => _t('Custom search provided by Baidu at http://zhanzhang.baidu.com/search/'),
            'category'    => 'search_engine',
        ],
    ],
];

return $config;