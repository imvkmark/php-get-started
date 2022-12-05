<?php

namespace Tests\VariableType;

use PHPUnit\Framework\TestCase;
use src\Classes\CaseClass;

class ObjectTest extends TestCase
{
    public function testSetGet(): void
    {
        $set = (new CaseClass())->getset();
        $this->assertEquals('getSet', $set);
    }
}