<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link         http://code.piengine.org for the Pi Engine source repository
 * @copyright    Copyright (c) Pi Engine http://piengine.org
 * @license      http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Module\Search\Block;

use Pi;

class Block
{
    public static function search($options)
    {
        $config = Pi::service('registry')->config->read('search');

        $formAction = Pi::url(Pi::service('url')->assemble('search'));
        $ajaxAction = Pi::url(Pi::service('url')->assemble('search', [
            'module'     => 'search',
            'controller' => 'index',
            'action'     => 'ajax',
        ]));

        $list = [];

        if ($options['module'] == 'all' && $options['type'] == 'normal') {
            $module  = Pi::service('module')->current();
            $modules = Pi::registry('search')->read();
            if ($module && isset($modules[$module]) && $options['current-module']) {
                $list = [
                    ''      => _b('Global'),
                    $module => _b('Current module'),
                ];
            }
        }

        $options['delay'] = !empty(intval($options['delay'])) ? intval($options['delay']) : 1000;

        return [
            'options' => $options,
            'action'  => $formAction,
            'ajax'    => $ajaxAction,
            'list'    => $list,
            'length'  => $config['min_length'],
        ];
    }
}