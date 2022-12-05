<?php

namespace Php\Listeners\EventRun;

use Log;
use Poppy\Framework\Application\Event;
use src\Events\EventRunEvent;
use function Core\Listeners\EventRun\sys_mark;

class ThirdListener
{
	/**
	 * Handle the event.
	 *
	 * @param Event|EventRunEvent $event
	 * @return void
	 */
	public function handle(EventRunEvent $event)
	{
		Log::debug(sys_mark($event, __CLASS__, 'third'));
	}
}
