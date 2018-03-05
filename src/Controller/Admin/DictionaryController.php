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

namespace Module\Search\Controller\Admin;

use Module\Guide\Form\RegenerateImageForm;
use Module\Guide\Form\SitemapForm;
use Pi;
use Pi\Mvc\Controller\ActionController;

class DictionaryController extends ActionController
{
    public function indexAction()
    {
        // Get info from url
        $module = $this->params('module');
        // Get config
        $config = Pi::service('registry')->config->read($module);
        // Set list
        $list = [];
        if ($config['save_log']) {
            $order  = ['weight DESC', 'id DESC'];
            $select = $this->getModel('dictionary')->select()->order($order)->limit(100);
            $rowset = $this->getModel('dictionary')->selectWith($select);
            // Make list
            foreach ($rowset as $row) {
                $list[$row->id] = $row->toArray();
            }
        }
        // Set template
        $this->view()->setTemplate('dictionary-index');
        $this->view()->assign('list', $list);
        $this->view()->assign('config', $config);
    }
}