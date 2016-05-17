<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */
return array(
    // Admin section
    'admin' => array(
        'item' => array(
            'label' => _a('Dictionary'),
            'permission' => array(
                'resource' => 'dictionary',
            ),
            'route' => 'admin',
            'module' => 'search',
            'controller' => 'dictionary',
            'action' => 'index',
        ),
    ),
    // Front section
    'front' => array(),
);