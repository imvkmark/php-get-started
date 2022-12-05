<?php


include __DIR__ . '/vendor/autoload.php';

use Bramus\Router\Router;

// Create Router instance
$router = new Router();

// Define routes
$router->get('output-control/ob-flush', '\Php\Http\Request\Web\OutputControlController@obFlush');

// Run it!
$router->run();