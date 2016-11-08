<?php

namespace Addresses\Services;

class RouterService
{
    const ROUTES = [
        'GET address' => [
            'controller' => 'AddressController',
            'action' => 'getAddress'
        ],
        'POST address' => [
            'controller' => 'AddressController',
            'action' => 'createAddress'
        ],
        'PUT address' => [
            'controller' => 'AddressController',
            'action' => 'updateAddress'
        ],
        'DELETE address' => [
            'controller' => 'AddressController',
            'action' => 'deleteAddress'
        ]
    ];

    public function handleRoute($method, $url)
    {
        var_dump($url);
        var_dump($method);
        var_dump(self::ROUTES);
    }
}
