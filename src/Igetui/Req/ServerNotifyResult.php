<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\PBMessage;

class ServerNotifyResult extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    public function seqId()
    {
        return $this->_get_value("1");
    }
    public function set_seqId($value)
    {
        return $this->_set_value("1", $value);
    }
    public function info()
    {
        return $this->_get_value("2");
    }
    public function set_info($value)
    {
        return $this->_set_value("2", $value);
    }
}
