<?php

namespace Wzhanjun\Igetui\Sdk\Igetui;

class SimpleAlertMsg implements ApnMsg
{
    public $alertMsg;

    public function get_alertMsg()
    {
        return $this->alertMsg;
    }
}
