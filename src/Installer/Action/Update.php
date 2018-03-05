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

namespace Module\Search\Installer\Action;

use Pi;
use Pi\Application\Installer\Action\Update as BasicUpdate;
use Pi\Application\Installer\SqlSchema;
use Zend\EventManager\Event;
use Zend\Json\Json;

class Update extends BasicUpdate
{
    /**
     * {@inheritDoc}
     */
    protected function attachDefaultListeners()
    {
        $events = $this->events;
        $events->attach('update.pre', [$this, 'updateSchema']);
        parent::attachDefaultListeners();

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function updateSchema(Event $e)
    {
        $moduleVersion = $e->getParam('version');

        // Set item model
        $logModel   = Pi::model('log', $this->module);
        $logTable   = $logModel->getTable();
        $logAdapter = $logModel->getAdapter();

        // Update to version 1.1.5
        if (version_compare($moduleVersion, '1.1.5', '<')) {
            // Alter table : ADD title_long
            $sql = sprintf("ALTER TABLE %s ADD `ip` CHAR(15) NOT NULL DEFAULT ''", $logTable);
            try {
                $logAdapter->query($sql, 'execute');
            } catch (\Exception $exception) {
                $this->setResult('db', [
                    'status'  => false,
                    'message' => 'Table alter query failed: '
                        . $exception->getMessage(),
                ]);
                return false;
            }
        }

        return true;
    }
}