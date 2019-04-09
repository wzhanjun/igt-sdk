<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\PBMessage;

class Target extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
    }
    public function appId()
    {
        return $this->_get_value("1");
    }
    public function set_appId($value)
    {
        return $this->_set_value("1", $value);
    }
    public function clientId()
    {
        return $this->_get_value("2");
    }
    public function set_clientId($value)
    {
        return $this->_set_value("2", $value);
    }
    public function alias()
    {
        return $this->_get_value("3");
    }
    public function set_alias($value)
    {
        return $this->_set_value("3", $value);
    }
}
