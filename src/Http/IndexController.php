<?php

namespace Php\Http;

/**
 * 首页
 */
class IndexController
{
    /**
     * 首页
     */
    public function index()
    {
        echo <<<HTML
<a href="http://0.0.0.0:8074/output-control/ob-flush" target="_blank">output-control/ob-flush: 输出控制->刷新缓存</a> <br>
HTML;
    }

}