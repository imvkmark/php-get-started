<?php

namespace Tests\VariableType;


use PHPUnit\Framework\TestCase;
use src\Classes\VariableType\ClassChainDemo;

class ClassTest extends TestCase
{
    /**
     * 文字长度处理
     */
    public function testChain()
    {
        $name = (new ClassChainDemo())->setName('duoli')->name();
        $this->assertEquals('duoli', $name);
    }
}