<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Events;

use Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class EventsFieldDescriptionBase
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Events
 */
abstract class EventsFieldDescriptionBase extends FieldDescriptionBase
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
