<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

/**
 * Route specs
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
return [
    // Search route
    'search' => [
        'name'     => 'search',
        'type'     => 'Module\Search\Route\Search',
        'priority' => 5,
        'options'  => [
            'route' => '/search',
        ],
    ],
];
