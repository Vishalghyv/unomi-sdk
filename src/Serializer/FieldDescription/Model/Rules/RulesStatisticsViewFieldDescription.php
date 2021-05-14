<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Rules;

use Dropsolid\UnomiSdkPhp\Model\Rules\RulesStatisticsView;

/**
 * Class RulesStatisticsViewFieldDescription
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Rules
 */
class RulesStatisticsViewFieldDescription extends RulesStatisticsViewFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return RulesStatisticsView::class;
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
