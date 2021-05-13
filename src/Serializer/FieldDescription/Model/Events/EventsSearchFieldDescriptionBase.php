<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Events;

use Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class EventsSearchFieldDescriptionBase
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Events
 */
abstract class EventsSearchFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'offset',
            'list',
            'pageSize',
            'totalSize',
            'scrollIdentifier',
            'scrollTimeValidity',
            'totalSizeRelation',
        ];
    }
}
