<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Profile;

use Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ProfileSearchFieldDescriptionBase
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Profile
 */
abstract class ProfileSearchFieldDescriptionBase extends FieldDescriptionBase
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
