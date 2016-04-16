<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link         http://code.pialog.org for the Pi Engine source repository
 * @copyright    Copyright (c) Pi Engine http://pialog.org
 * @license      http://pialog.org/license.txt BSD 3-Clause License
 */
return array(
    'search'    => array(
        'name'          => 'search',
        'title'         => _a('Search'),
        'description'   => _a('Search box.'),
        'render'        => array('block', 'search'),
        'template'      => 'search',
        'config'        => array(
            'type' => array(
                'title'         => _a('Search type'),
                'edit'          => array(
                    'type'          => 'select',
                    'options'    => array(
                        'options'   => array(
                            'normal'    => _a('Normal'),
                            'ajax'   => _a('Ajax'),
                        ),
                    ),
                ),
                'value'         => 'normal',
            ),
            'target' => array(
                'title'         => _a('Target'),
                'edit'          => array(
                    'type'          => 'select',
                    'options'    => array(
                        'options'   => array(
                            '_self'    => _a('_self'),
                            '_blank'   => _a('_blank'),
                        ),
                    ),
                ),
                'value'         => '_self',
            ),
            'module' => array(
                'title'         => _a('Module'),
                'description'   => _a('Module for search'),
                'edit'          => array(
                    'type'      => 'Module\Search\Form\Element\Module',
                ),
                'value'         => 'all', 
            ),
            'block-effect' => array(
                'title' => _a('Use block effects'),
                'description' => _a('Use block effects or set custom effect on theme'),
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 1,
            ),
        )
    ),
);