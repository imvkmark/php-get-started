<?php

namespace Php\Http;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use src\Http\Middlewares\TestLoginMiddleware;
use src\Http\Middlewares\TestMiddleware;

class MiddlewareServiceProvider extends ServiceProvider
{
	public function boot(Router $router)
	{
		$router->aliasMiddleware('php.test', TestMiddleware::class);
		$router->aliasMiddleware('php.test-login', TestLoginMiddleware::class);
	}
}