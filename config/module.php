<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

return [
    'meta'     => [
        'title'       => _a('Search'),
        'description' => _a('Search service applications.'),
        'version'     => '1.3.0',
        'license'     => 'New BSD',
        'icon'        => 'fa-search',
    ],
    'author'   => [
        'Name'  => 'Taiwen Jiang',
        'Email' => 'taiwenjiang@tsinghua.org.cn',
        'Dev'   => '@lavenderli',
        'UI/UE' => '@zhangsimon, @loidco',
    ],
    'resource' => [
        'database'   => [
            'sqlfile' => 'sql/mysql.sql',
        ],
        'config'     => 'config.php',
        'permission' => 'permission.php',
        'page'       => 'page.php',
        'navigation' => 'navigation.php',
        'block'      => 'block.php',
        'route'      => 'route.php',
    ],
];