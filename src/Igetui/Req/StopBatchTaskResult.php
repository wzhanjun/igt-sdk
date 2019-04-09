<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\PBMessage;

class StopBatchTaskResult extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBBool";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
    }
    public function result()
    {
        return $this->_get_value("1");
    }
    public function set_result($value)
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
    public function seqId()
    {
        return $this->_get_value("3");
    }
    public function set_seqId($value)
    {
        return $this->_set_value("3", $value);
    }
}
