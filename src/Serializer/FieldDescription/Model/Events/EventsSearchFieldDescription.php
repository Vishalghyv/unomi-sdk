<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Events;

use Dropsolid\UnomiSdkPhp\Model\Events\EventsSearchView;

/**
 * Class EventsFieldDescription
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Events
 */
class EventsSearchFieldDescription extends EventsSearchFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return EventsSearchView::class;
    }

    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }
}
