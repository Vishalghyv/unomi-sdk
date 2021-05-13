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
    public function listEventsUsingEventType($eventType)
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

    /**
     * @param string $profileId
     * @return EventsSearchView[]
     * @throws Exception
     */
    public function listEventsUsingProfileId($profileId)
    {
        if (empty($profileId)) {
            return null;
        }

        $profileId = explode("-", $profileId);

        if (empty($profileId)) {
            return null;
        }

        $profileId = $profileId[0];

        $search = (object) [
            'offset' => 0,
            'limit' => 20,
            'condition' => (object) [
                'type' => 'eventPropertyCondition',
                'parameterValues' => (object) [
                    'propertyName' => 'profileId',
                    'comparisonOperator' => 'equals',
                    'propertyValue' => $profileId
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
