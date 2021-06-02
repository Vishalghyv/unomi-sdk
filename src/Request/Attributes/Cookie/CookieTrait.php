<?php

namespace Dropsolid\UnomiSdkPhp\Request\Attributes\Cookie;

/**
 * Trait CookieTrait
 *
 * @package Dropsolid\UnomiSdkPhp\Request\Attributes\Cookie
 */
trait CookieTrait
{
    /**
     * @var string
     */
    protected $Cookie;

    /**
     * @return string
     */
    public function getCookie()
    {
        return $this->Cookie;
    }

    /**
     * @param string $Cookie
     */
    public function setCookie(string $Cookie = '')
    {
        $this->Cookie = $Cookie;
    }
}
