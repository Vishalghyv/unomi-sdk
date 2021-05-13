<?php

namespace Dropsolid\UnomiSdkPhp\Request\Definitions;

use Dropsolid\UnomiSdkPhp\Request\GetRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;

/**
 * Class ActionsRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Definitions
 */
class ActionsRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'cxs/definitions/actions';
    }
}
