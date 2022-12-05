<?php

namespace Php\Listeners\JobSm;

use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Poppy\Framework\Application\Event;
use src\Events\JobSmEvent;
use function Core\Listeners\JobSm\sys_debug;

class DeletePhpDemoListener implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param Event|JobSmEvent $event
     * @throws Exception
     */
    public function handle(JobSmEvent $event)
    {
        $demo = $event->demo;
        $demo->delete();
        sys_debug('php', __CLASS__, $demo->title);
    }
}
