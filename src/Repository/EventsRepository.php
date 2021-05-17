<?php

namespace Dropsolid\UnomiSdkPhp\Repository;

use Dropsolid\UnomiSdkPhp\Model\Events\EventsView;
use Dropsolid\UnomiSdkPhp\Request\Events\EventsRequest;
use Http\Client\Exception;

/**
 * Class EventsRepository
 *
 * @package Dropsolid\UnomiSdkPhp\Repository
 */
class EventsRepository extends RepositoryBase
{
    /**
     * @param string $eventType
     * @param int $offset
     * @param int $limit
     *
     * @return EventsView[]
     * @throws Exception
     */
    public function listEventsUsingEventType(string $eventType, int $offset = 0, int $limit = 20)
    {
        if (empty($eventType)) {
            return null;
        }

        $search = (object) [
            'offset' => $offset,
            'limit' => $limit,
            'condition' => (object) [
                'type' => 'eventPropertyCondition',
                'parameterValues' => (object) [
                    'propertyName' => 'eventType',
                    'comparisonOperator' => 'equals',
                    'propertyValue' => $eventType
                ],
            ],
        ];

        $request = new EventsRequest($search);

        return $this->handleRequest(
            $request,
            EventsView::class
        );
    }

    /**
     * @param string $profileId
     * @param int $offset
     * @param int $limit
     *
     * @return EventsView[]
     * @throws Exception
     */
    public function listEventsUsingProfileId(string $profileId, int $offset = 0, int $limit = 20)
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
            'offset' => $offset,
            'limit' => $limit,
            'condition' => (object) [
                'type' => 'eventPropertyCondition',
                'parameterValues' => (object) [
                    'propertyName' => 'profileId',
                    'comparisonOperator' => 'equals',
                    'propertyValue' => $profileId
                ],
            ],
        ];

        $request = new EventsRequest($search);

        return $this->handleRequest(
            $request,
            EventsView::class
        );
    }
}
