<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Events;

use Dropsolid\UnomiSdkPhp\Model\Events\EventsView;

/**
 * Class EventsFieldDescription
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Events
 */
class EventsFieldDescription extends EventsFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return EventsView::class;
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
