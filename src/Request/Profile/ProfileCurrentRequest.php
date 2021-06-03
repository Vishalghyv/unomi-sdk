<?php

namespace Dropsolid\UnomiSdkPhp\Request\Profile;

use Dropsolid\UnomiSdkPhp\Request\PostRequest;
use Dropsolid\UnomiSdkPhp\Request\MultipleMethodsTrait;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Cookie\CookieInterface;
use Dropsolid\UnomiSdkPhp\Request\Attributes\Cookie\CookieTrait;

/**
 * Class ProfileCurrentRequest
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Profile
 */
class ProfileCurrentRequest extends PostRequest implements CookieInterface
{
    use MultipleMethodsTrait, CookieTrait;


    /**
     * ProfileCurrentRequest constructor.
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
        if (empty($this->getCookie())) {
            return 'context.json?sessionId';
        }
        return 'context.json';
    }
}
