<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Module\Search\Api;

use Pi;
use Pi\Application\Api\AbstractBreadcrumbs;

class Breadcrumbs extends AbstractBreadcrumbs
{
    /**
     * {@inheritDoc}
     */
    public function load()
    {
        // Get params
        $params = Pi::service('url')->getRouteMatch()->getParams();

        // Set module link
        $moduleData = Pi::registry('module')->read($this->getModule());
        $result     = [
            [
                'label' => $moduleData['title'],
                'href'  => Pi::url(
                    Pi::service('url')->assemble(
                        'search', [
                        'module' => $this->getModule(),
                    ]
                    )
                ),
            ],
        ];

        switch ($params['action']) {
            case 'service':
                $result[] = [
                    'label' => __(ucfirst($params['service'])),
                    'href'  => Pi::url(
                        Pi::service('url')->assemble(
                            'search', [
                            'module'  => $this->getModule(),
                            'service' => $params['service'],
                        ]
                        )
                    ),
                ];
                break;

            case 'module':
                $moduleData = Pi::registry('module')->read($params['m']);
                $result[]   = [
                    'label' => $moduleData['title'],
                    'href'  => Pi::url(
                        Pi::service('url')->assemble(
                            'search', [
                            'module' => $this->getModule(),
                            'm'      => $moduleData['name'],
                        ]
                        )
                    ),
                ];
                break;
        }

        $query = _get('q');
        if (empty($query)) {
            end($result);
            $key = key($result);
            unset($result[$key]['href']);
        } else {
            $result[] = [
                'label' => $query,
            ];
        }

        return $result;
    }
}