<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Rules;

use Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class RulesFieldDescriptionBase
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Rules
 */
abstract class RulesListViewFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
        ];
    }
}
