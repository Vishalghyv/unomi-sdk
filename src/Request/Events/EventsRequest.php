<?php

namespace Dropsolid\UnomiSdkPhp\Request\Events;

use Dropsolid\UnomiSdkPhp\Request\PostRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Offset\OffsetInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Offset\OffsetTrait;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Size\SizeInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Size\SizeTrait;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Sort\SortInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Sort\SortTrait;

/**
 * Class EventsRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Events
 */
class EventsRequest extends PostRequest implements OffsetInterface, SizeInterface, SortInterface
{
    use MultipleMethodsTrait, OffsetTrait, SizeTrait, SortTrait;

    /**
     * EventsRequest constructor.
     *
     * @param array $body
     */
    public function __construct($body)
    {
        $this->body = $body;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'cxs/events/search';
    }
}
