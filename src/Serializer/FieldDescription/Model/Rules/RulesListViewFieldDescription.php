<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Rules;

use Dropsolid\UnomiSdkPhp\Model\Rules\RulesListView;

/**
 * Class RulesListViewFieldDescription
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Rules
 */
class RulesListViewFieldDescription extends RulesListViewFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return RulesListView::class;
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
