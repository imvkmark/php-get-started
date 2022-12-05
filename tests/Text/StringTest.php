<?php

namespace Tests\Text;

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{

    public function testExplode()
    {
        $str = 'abc';
        [$arg] = explode('|', $str);
        $this->assertEquals('abc', $arg);
    }
}