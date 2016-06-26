<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt BSD 3-Clause License
 */

$config = array(
    'leading_limit' => array(
        'title'         => _t('Leading search result limit'),
        'description'   => _t('Number of found items on leading page.'),
        'value'         => 5,
        'filter'        => 'int',
    ),

    'list_limit' => array(
        'title'         => _t('List search result limit'),
        'description'   => _t('Number of found items on list page.'),
        'value'         => 20,
        'filter'        => 'int',
    ),

    'separate_query' => array(
        'title'         => _t('Separate query'),
        'description'   => _t('Separate input keyword by space'),
        'edit'          => 'checkbox',
        'value'         => 0,
        'filter'        => 'int',
    ),

    'min_length' => array(
        'title'         => _t('Minimum query'),
        'description'   => _t('Minimum length for query term.'),
        'value'         => 3,
        'filter'        => 'int',
    ),

    'localize_query' => array(
        'title'         => _t('Localize query'),
        'description'   => _t('Localize query by selected language on website'),
        'edit'          => 'checkbox',
        'filter'        => 'number_int',
        'value'         => 0
    ),

    'search_interval' => array(
        'title'         => _t('Search interval limit'),
        'description'   => _t('Limit for search time interval.'),
        'value'         => 0,
        'filter'        => 'int',
    ),

    'search_interval_anonymous' => array(
        'title'         => _t('Anonymous interval limit'),
        'description'   => _t('Limit for anonymous search time interval.'),
        'value'         => 3,
        'filter'        => 'int',
    ),

    'save_log' => array(
        'title'         => _t('Save search log'),
        'description'   => _t('It make your website little slow'),
        'edit'          => 'checkbox',
        'filter'        => 'number_int',
        'value'         => 0
    ),

    'cache'     => array(
        'title'         => _t('Search result cache'),
        'edit'          => 'cache_ttl',
        'value'         => 0,
    ),

    'hot'       => array(
        'title'         => _t('Hot search'),
        'description'   => _t('Hot words for global auto-complete, separated by comma `,`.'),
        'edit'          => 'textarea',
        'value'         => 'pi engine, zend framework, php, search',
    ),

    'google_host'       => array(
        'title'         => _t('Google local host'),
        'description'   => _t('Specify a google local host if it is not https://www.google.com'),
        'value'         => 'https://www.google.com',
    ),

    'google_code'       => array(
        'title'         => _t('Google custom search code'),
        'description'   => _t('Google CSE provided at https://www.google.com/cse/'),
        'value'         => '012766098119240378914:a6l0fuirq4a',
    ),
    
    'baidu_code'        => array(
        'title'         => _t('Baidu custom search code'),
        'description'   => _t('Custom search provided by Baidu at http://zhanzhang.baidu.com/search/'),
    ),
    
    'search_in'         => array(
        'title'         => _t('Modules to search'),
        'description'   => _t('Only specified modules are allowed to search, separated by ",".'),
    ),
);

return $config;