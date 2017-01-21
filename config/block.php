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
        'title'         => _b('Search'),
        'description'   => _b('Search box.'),
        'render'        => array('block', 'search'),
        'template'      => 'search',
        'config'        => array(
            'type' => array(
                'title'         => _b('Search type'),
                'edit'          => array(
                    'type'          => 'select',
                    'options'    => array(
                        'options'   => array(
                            'normal'    => _b('Normal'),
                            'ajax'      => _b('Ajax'),
                        ),
                    ),
                ),
                'value'         => 'normal',
            ),
            'target' => array(
                'title'         => _b('Target'),
                'edit'          => array(
                    'type'          => 'select',
                    'options'    => array(
                        'options'   => array(
                            '_self'    => _b('_self'),
                            '_blank'   => _b('_blank'),
                        ),
                    ),
                ),
                'value'         => '_self',
            ),
            'module' => array(
                'title'         => _b('Module'),
                'description'   => _b('Module for search'),
                'edit'          => array(
                    'type'      => 'Module\Search\Form\Element\Module',
                ),
                'value'         => 'all',
            ),
            'current-module' => array(
                'title' => _b('Search on current module'),
                'description' => _b('Show or hide option for search on current module'),
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 1,
            ),
            'block-effect' => array(
                'title' => _b('Use block effects'),
                'description' => _b('Use block effects or set custom effect on theme'),
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 1,
            ),
            'disable_submit_btn' => array(
                'title' => _b('Disable Submit button'),
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 0,
            ),

            'descriptiontitle' => array(
                'title' => _b('Title field description'),
                'description' => '',
                'edit' => 'text',
                'filter' => 'string',
                'value' => _b('Search'),
            ),
        )
    ),
);