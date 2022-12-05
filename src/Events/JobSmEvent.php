<?php

namespace Php\Events;

use Illuminate\Queue\SerializesModels;
use Poppy\Framework\Application\Event;
use src\Models\PhpDemo;

class JobSmEvent extends Event
{
    use SerializesModels;

    public PhpDemo $demo;

    public function __construct($demo)
    {
        $this->demo = $demo;
    }
}
