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

namespace Module\Search\Api;

use Pi;
use Pi\Application\Api\AbstractApi;
use Zend\Db\Sql\Predicate\Expression;

/*
 * Pi::api('log', 'search')->saveLog($terms);
 */

class Log extends AbstractApi
{
    public function saveLog($terms = [])
    {
        if (!empty($terms)) {
            foreach ($terms as $term) {
                // Save user log
                $log       = Pi::model('log', $this->getModule())->createRow();
                $log->term = $term;
                $log->uid  = Pi::user()->getId();
                $log->ip   = Pi::user()->getIp();
                $log->time = time();
                $log->save();
                // Update dictionary
                $columns = ['count' => new Expression('count(*)')];
                $where   = ['term' => $term];
                $select  = Pi::model('dictionary', $this->getModule())->select()->where($where);
                $rowset  = Pi::model('dictionary', $this->getModule())->selectWith($select)->toArray();
                if (!empty($rowset)) {
                    foreach ($rowset as $dictionary) {
                        if ($dictionary['term'] === $term) {
                            Pi::model('dictionary', $this->getModule())->update(
                                ['weight' => $dictionary['weight'] + 1],
                                ['term' => $dictionary['term']]
                            );
                        }
                    }
                } else {
                    $dictionary         = Pi::model('dictionary', $this->getModule())->createRow();
                    $dictionary->weight = 1;
                    $dictionary->term   = $term;
                    $dictionary->save();
                }
            }
        }
    }
}