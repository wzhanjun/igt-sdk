<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\PBMessage;

class InnerFiled extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "InnerFiledType";
        $this->values["3"] = "";
    }
    public function key()
    {
        return $this->_get_value("1");
    }
    public function set_key($value)
    {
        return $this->_set_value("1", $value);
    }
    public function val()
    {
        return $this->_get_value("2");
    }
    public function set_val($value)
    {
        return $this->_set_value("2", $value);
    }
    public function type()
    {
        return $this->_get_value("3");
    }
    public function set_type($value)
    {
        return $this->_set_value("3", $value);
    }
}
