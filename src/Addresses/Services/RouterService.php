<?php

namespace Addresses\Services;

class RouterService
{
    private $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function handleRoute($method, $url)
    {
        var_dump($url);
        var_dump($method);
        var_dump($this->routes);
    }
}
