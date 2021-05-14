<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Rules;

use Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class RulesStatisticsViewFieldDescriptionBase
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Rules
 */
abstract class RulesStatisticsViewFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'itemType',
            'scope',
            'itemId',
            'version',
            'executionCount',
            'localExecutionCount',
            'conditionsTime',
            'localConditionsTime',
            'actionsTime',
            'localActionsTime',
            'lastSyncDate',
        ];
    }
}
