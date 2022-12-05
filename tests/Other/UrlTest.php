<?php

namespace Tests\Other;

use PHPUnit\Framework\TestCase;

class UrlTest extends TestCase
{

    public function testBuild()
    {
        $params = [
            'a' => ['b', 'c', 'd'],
        ];
        $string = urldecode(http_build_query($params));
        $this->assertEquals('a[0]=b&a[1]=c&a[2]=d', $string);
    }

    public function testParseUrl()
    {
        $url    = 'https://test-oss.aliyun.com/uploads/date/time/file.png';
        $parsed = parse_url($url);
        $this->assertEquals('/uploads/date/time/file.png', $parsed['path']);
    }
}