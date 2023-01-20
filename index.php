<?php


include __DIR__ . '/vendor/autoload.php';

use Bramus\Router\Router;

// Create Router instance
$router = new Router();

// Define routes
$router->get('/', '\Php\Http\IndexController@index');
$router->get('output-control/ob-flush', '\Php\Http\OutputControlController@obFlush');

// Run it!
$router->run();