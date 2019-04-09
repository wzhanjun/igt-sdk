<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Utils;

class LogUtils
{
    public static $debug = true;
    public static function debug($log)
    {
        if (LogUtils::$debug) {
            echo date('y-m-d h:i:s', time()).($log) . "\r\n";
        }
    }
}
