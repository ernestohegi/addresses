<?php

namespace Addresses\Services;

class RouterService
{
    const ROUTES = [
        'GET home' => [
            'controller' => 'HomeController',
            'action' => 'Index'
        ],
        'POST home' => [
            'controller' => 'HomeController',
            'action' => 'Create'
        ],
        'PUT home' => [
            'controller' => 'HomeController',
            'action' => 'Update'
        ],
        'DELETE home' => [
            'controller' => 'HomeController',
            'action' => 'Delete'
        ]
    ];

    public function handleRoute($method, $url)
    {
        var_dump($url);
        var_dump($method);
        var_dump(self::ROUTES);
    }
}
