<?php

namespace Dropsolid\UnomiSdkPhp\Request\Profile;

use Dropsolid\UnomiSdkPhp\Request\GetRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Offset\OffsetInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Offset\OffsetTrait;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Size\SizeInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Size\SizeTrait;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Sort\SortInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Sort\SortTrait;

/**
 * Class ProfilePropertiesRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Profile
 */
class ProfilePropertiesRequest extends GetRequest implements OffsetInterface, SizeInterface, SortInterface
{
    use MultipleMethodsTrait, OffsetTrait, SizeTrait, SortTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'cxs/profiles/properties';
    }
}
