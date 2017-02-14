<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link         http://code.pialog.org for the Pi Engine source repository
 * @copyright    Copyright (c) Pi Engine http://pialog.org
 * @license      http://pialog.org/license.txt BSD 3-Clause License
 */
namespace Module\Search\Block;

use Pi;

class Block
{
    public static function search($options)
    {
        $config = Pi::service('registry')->config->read('search');
        
        $formAction = Pi::url(Pi::service('url')->assemble('search'));
        $ajaxAction = Pi::url(Pi::service('url')->assemble('search', array(
            'module' => 'search',
            'controller' => 'index',
            'action' => 'ajax',
        )));

        $list = array();

        if ($options['module'] == 'all' && $options['type'] == 'normal') {
            $module = Pi::service('module')->current();
            $modules = Pi::registry('search')->read();
            if ($module && isset($modules[$module]) && $options['current-module']) {
                $list = array(
                   ''       => _b('Global'),
                   $module  => _b('Current module'),
                );
            }
        }

        $options['delay'] = !empty(intval($options['delay'])) ? intval($options['delay']) : 1000;

        return array(
            'options'   => $options,
            'action'    => $formAction,
            'ajax'      => $ajaxAction,
            'list'      => $list,
            'length'    => $config['min_length']
        );
    }
}