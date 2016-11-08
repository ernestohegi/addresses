<?php

define('BASE_PATH', realpath(dirname(__FILE__)));
define('PHP_EXTENSION', '.php');

function autoloader($class)
{
    $directories = [
        'src',
        'framework',
        'app'
    ];

    foreach ($directories as $directory) {
        $filePath = $directory . '/' . str_replace('\\', '/', $class) . PHP_EXTENSION;

        var_dump($filePath);

        if(file_exists($filePath))
        {
            require_once($filePath);
        }
    }
}

spl_autoload_register('autoloader');
