<?php

require 'autoloader.php';

use Addresses\Services\RouterService;

$routes = [
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

$router = new RouterService($routes);
$router->handleRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
