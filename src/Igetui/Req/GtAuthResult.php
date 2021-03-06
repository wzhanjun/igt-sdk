<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\PBMessage;

class GtAuthResult extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = array();
    }
    public function code()
    {
        return $this->_get_value("1");
    }
    public function set_code($value)
    {
        return $this->_set_value("1", $value);
    }
    public function redirectAddress()
    {
        return $this->_get_value("2");
    }
    public function set_redirectAddress($value)
    {
        return $this->_set_value("2", $value);
    }
    public function seqId()
    {
        return $this->_get_value("3");
    }
    public function set_seqId($value)
    {
        return $this->_set_value("3", $value);
    }
    public function info()
    {
        return $this->_get_value("4");
    }
    public function set_info($value)
    {
        return $this->_set_value("4", $value);
    }
    public function appid($offset)
    {
        $v = $this->_get_arr_value("5", $offset);
        return $v->get_value();
    }
    public function append_appid($value)
    {
        $v = $this->_add_arr_value("5");
        $v->set_value($value);
    }
    public function set_appid($index, $value)
    {
        $v = new $this->fields["5"]();
        $v->set_value($value);
        $this->_set_arr_value("5", $index, $v);
    }
    public function remove_last_appid()
    {
        $this->_remove_last_arr_value("5");
    }
    public function appid_size()
    {
        return $this->_get_arr_size("5");
    }
}
