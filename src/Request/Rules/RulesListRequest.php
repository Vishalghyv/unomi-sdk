<?php

namespace Dropsolid\UnomiSdkPhp\Request\Rules;

use Dropsolid\UnomiSdkPhp\Request\GetRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;

/**
 * Class RulesListRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Rules
 */
class RulesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'cxs/rules';
    }
}
