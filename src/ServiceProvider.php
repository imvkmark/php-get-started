<?php

namespace src;

use Poppy\Framework\Exceptions\ModuleNotFoundException;
use Poppy\Framework\Support\PoppyServiceProvider as ModuleServiceProviderBase;
use src\Commands\AlwaysCommand;
use src\Commands\ExamCommand;
use src\Commands\LaravelCommand;
use src\Events\EventRunEvent;
use src\Events\JobSmEvent;
use src\Http\MiddlewareServiceProvider;
use src\Http\RouteServiceProvider;
use src\Listeners\EventRun\FirstListener;
use src\Listeners\EventRun\SecondListener;
use src\Listeners\EventRun\ThirdListener;
use src\Listeners\JobSm\DeletePhpDemoListener;

class ServiceProvider extends ModuleServiceProviderBase
{
    protected array $listens = [
        EventRunEvent::class => [
            FirstListener::class,
            SecondListener::class,
            ThirdListener::class,
        ],
        JobSmEvent::class => [
            DeletePhpDemoListener::class,
        ],
    ];

    /**
     * Bootstrap the module services.
     * @return void
     * @throws ModuleNotFoundException
     */
    public function boot()
    {
        parent::boot('php');
    }

    /**
     * Register the module services.
     * @return void
     */
    public function register()
    {
        $this->app->register(MiddlewareServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);

        $this->commands([
            ExamCommand::class,
            LaravelCommand::class,
            AlwaysCommand::class,
        ]);
    }
}
