<?php

namespace Dropsolid\UnomiSdkPhp\Request\Profile;

use Dropsolid\UnomiSdkPhp\Request\GetRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;

/**
 * Class ProfileInfoRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Profile
 */
class ProfileInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @var string
     */
    private $id;

    /**
     * ProfileInfoRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'cxs/profiles/' . $this->id;
    }
}
