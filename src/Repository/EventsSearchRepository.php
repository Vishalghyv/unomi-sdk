<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Model\Events\EventsSearchView;
use Dropsolid\UnomiSdkPhp\Request\Events\EventsSearchRequest;
use Http\Client\Exception;

/**
 * Class EventsSearchRepository
 *
 * @package Dropsolid\UnomiSdkPhp\Repository
 */
class EventsSearchRepository extends RepositoryBase
{
    /**
     * @param string $eventType
     * @return EventsSearchView[]
     * @throws Exception
     */
    public function listEvents($eventType)
    {
        if (empty($eventType)) {
            return null;
        }

        $search = (object) [
            'offset' => 0,
            'limit' => 20,
            'condition' => (object) [
                'type' => 'eventPropertyCondition',
                'parameterValues' => (object) [
                    'propertyName' => 'eventType',
                    'comparisonOperator' => 'equals',
                    'propertyValue' => $eventType
                ],
            ],
        ];

        $request = new EventsSearchRequest($search);

        return $this->handleRequest(
            $request,
            EventsSearchView::class
        );
    }
}
