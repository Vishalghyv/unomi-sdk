<?php

namespace Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Profile;

use Dropsolid\UnomiSdkPhp\Model\Profile\ProfileSearchView;

/**
 * Class ProfileFieldDescription
 *
 * @package Dropsolid\UnomiSdkPhp\Serializer\FieldDescription\Model\Profile
 */
class ProfileSearchFieldDescription extends ProfileSearchFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return ProfileSearchView::class;
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
