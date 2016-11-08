<?php

define('BASE_PATH', realpath(dirname(__FILE__)));
define('BASE_FOLDER', '/src/');
define('PHP_EXTENSION', '.php');

function autoloader($class)
{
    $filename = BASE_PATH . BASE_FOLDER . str_replace('\\', '/', $class) . PHP_EXTENSION;

    require_once($filename);
}

spl_autoload_register('autoloader');
