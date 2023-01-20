<?php

namespace Php\Http;

/**
 * 输出控制
 */
class OutputControlController
{
    /**
     * 刷新
     * @return mixed
     */
    public function obFlush()
    {
        // 关闭 php 缓存，或者在 flush 前 ob_flush();
        ob_end_flush();
        // ie下 需要先发送256个字节, firefox 1024, chrome 2048
        echo str_repeat(' ', 1024);
        set_time_limit(0);
        $i = 0;
        while (true) {
            echo 'Now Index is :' . $i++ . '<br>';
            flush(); // 把缓存推送到浏览器去
            sleep(1);
        }
    }

}