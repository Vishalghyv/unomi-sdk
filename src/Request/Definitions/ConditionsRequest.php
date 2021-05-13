<?php

namespace Dropsolid\UnomiSdkPhp\Request\Definitions;

use Dropsolid\UnomiSdkPhp\Request\GetRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;

/**
 * Class ConditionsRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Definitions
 */
class ConditionsRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'cxs/definitions/conditions';
    }
}
