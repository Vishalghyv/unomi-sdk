<?php

namespace Dropsolid\UnomiSdkPhp\Request\Rules;

use Dropsolid\UnomiSdkPhp\Request\GetRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;

/**
 * Class RulesStatisticsRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Rules
 */
class RulesStatisticsRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'cxs/rules/statistics';
    }
}
