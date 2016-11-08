<?php

require 'autoloader.php';

use Addresses\Services\RouterService;

$router = new RouterService();
$router->handleRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
