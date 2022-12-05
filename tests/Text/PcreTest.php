<?php

namespace Tests\Text;

use PHPUnit\Framework\TestCase;

class PcreTest extends TestCase
{

    public function testReplace()
    {
        $str = '    TAB SPACE';
        $this->assertEquals('TABSPACE', preg_replace('/\s+/', '', $str));
    }
}