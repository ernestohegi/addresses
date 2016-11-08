<?php

namespace Addresses\Services;

class RouterService
{
    const INVALID_URL_MESSAGE = '404 Invalid URL';

    private $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function handleRoute($method, $url)
    {
        $route = '';
        $urlElements = explode('/', $url);

        if ($this->checkRouteExists($method, $urlElements) === false) {
            var_dump(self::INVALID_URL_MESSAGE);
            return false;
        }

        $this->callController($this->routes[$method . ' '. $urlElements[1]]);
    }

    private function callController($route)
    {
        $namespacedController = "Addresses\Controllers\\" . $route['controller'];
        $controller = new $namespacedController();
        $controller->$route['action'](1);
    }

    private function checkRouteExists($method, $urlElements)
    {
        return (
            count($urlElements) > 0
            && empty($method) === false
            && isset($this->routes[$method . ' '. $urlElements[1]])
        );
    }
}
