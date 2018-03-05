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

use Pi;
use Pi\Mvc\Controller\ActionController;
use Pi\Paginator\Paginator;
use Zend\Db\Sql\Predicate\Expression;

class DictionaryController extends ActionController
{
    public function indexAction()
    {
        // Get info from url
        $module = $this->params('module');
        $page   = $this->params('page', 1);

        // Get config
        $config = Pi::service('registry')->config->read($module);

        // Set list
        $list = [];
        if ($config['save_log']) {

            // Set info
            $limit  = 100;
            $offset = (int)($page - 1) * $limit;
            $order  = ['weight DESC', 'id DESC'];
            $select = $this->getModel('dictionary')->select()->order($order)->offset($offset)->limit($limit);
            $rowset = $this->getModel('dictionary')->selectWith($select);

            // Make list
            foreach ($rowset as $row) {
                $list[$row->id] = $row->toArray();
            }

            // Set count
            $columns = ['count' => new Expression('count(*)')];
            $select  = $this->getModel('dictionary')->select()->columns($columns);
            $count   = $this->getModel('dictionary')->selectWith($select)->current()->count;

            // Set paginator
            $paginator = Paginator::factory(intval($count));
            $paginator->setItemCountPerPage($limit);
            $paginator->setCurrentPageNumber($page);
            $paginator->setUrlOptions([
                'router' => $this->getEvent()->getRouter(),
                'route'  => $this->getEvent()->getRouteMatch()->getMatchedRouteName(),
                'params' => array_filter([
                    'module'     => $this->getModule(),
                    'controller' => 'dictionary',
                    'action'     => 'index',
                ]),
            ]);
        }

        // Set template
        $this->view()->setTemplate('dictionary-index');
        $this->view()->assign('list', $list);
        $this->view()->assign('config', $config);
        $this->view()->assign('paginator', $paginator);
    }
}