<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt New BSD License
 */

/**
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */
return [
    // Admin section
    'admin' => [
        'item' => [
            'label'      => _a('Dictionary'),
            'permission' => [
                'resource' => 'dictionary',
            ],
            'route'      => 'admin',
            'module'     => 'search',
            'controller' => 'dictionary',
            'action'     => 'index',
        ],
    ],
    // Front section
    'front' => [],
];