<?php

namespace Wzhanjun\Igetui\Sdk\Igetui;

class SimpleAlertMsg implements ApnMsg {

    var $alertMsg;

    public function get_alertMsg() {
        return $this->alertMsg;
    }
}