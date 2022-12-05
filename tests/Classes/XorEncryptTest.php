<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use src\Classes\XorEncrypt;

class XorEncryptTest extends TestCase
{
    public function testEncrypt()
    {
        $xor = new XorEncrypt();
        $val = $xor->xor('abcdefgh');
        $this->assertEquals('abcdefgh', $xor->xor($val));

        $val = $xor->xor('中文');
        $this->assertEquals('中文', $xor->xor($val));
    }

}
