<?php

namespace Php\Listeners\EventRun;

use Log;
use Poppy\Framework\Application\Event;
use src\Events\EventRunEvent;
use function Core\Listeners\EventRun\sys_mark;

class FirstListener
{
	/**
	 * Handle the event.
	 *
	 * @param Event|EventRunEvent $event
	 * @return bool
	 */
	public function handle(EventRunEvent $event)
	{
		Log::debug(sys_mark($event, __CLASS__, 'first'));
		return true;
	}
}
