<?php

namespace Dropsolid\UnomiSdkPhp\Request\Attributes\Cookie;

/**
 * Interface CookieInterface
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Attributes\Cookie
 */
interface CookieInterface
{
    /**
     * @param string $Cookie
     */
    public function setCookie(string $Cookie = '');

    /**
     * @return string
     */
    public function getCookie();
}
