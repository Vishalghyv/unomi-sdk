<?php

namespace Dropsolid\UnomiSdkPhp\Request\Definitions;

use Dropsolid\UnomiSdkPhp\Request\GetRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;

/**
 * Class ValuesRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Definitions
 */
class ValuesRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'cxs/definitions/values';
    }
}
