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
namespace Module\Search\Controller\Admin;

use Pi;
use Pi\Mvc\Controller\ActionController;
use Module\Guide\Form\SitemapForm;
use Module\Guide\Form\RegenerateImageForm;

class DictionaryController extends ActionController
{
    public function indexAction()
    {
        // Get info from url
        $module = $this->params('module');
        // Get config
        $config = Pi::service('registry')->config->read($module);
        // Set list
        $list = array();
        if ($config['save_log']) {
            $order = array('weight DESC', 'id DESC');
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