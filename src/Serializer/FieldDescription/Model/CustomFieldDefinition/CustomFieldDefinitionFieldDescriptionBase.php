<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Model\Aggregate\Configuration;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CustomFieldDefinitionFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition
 */
abstract class CustomFieldDefinitionFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'context',
            'type',
            'label',
            'group',
            'required',
            'configuration' => ['target_class' => Configuration::class],
        ];
    }
}
