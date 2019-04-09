<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\PBMessage;
use Wzhanjun\Igetui\Sdk\Protobuf\Type\PBBool;

class PushMMPSingleBatchMessage extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PushMMPSingleMessage";
        $this->values["2"] = array();
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->values["3"] = new PBBool();
        $this->values["3"]->value = true;
    }
    public function batchId()
    {
        return $this->_get_value("1");
    }
    public function set_batchId($value)
    {
        return $this->_set_value("1", $value);
    }
    public function batchItem($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    public function add_batchItem()
    {
        return $this->_add_arr_value("2");
    }
    public function set_batchItem($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    public function remove_last_batchItem()
    {
        $this->_remove_last_arr_value("2");
    }
    public function batchItem_size()
    {
        return $this->_get_arr_size("2");
    }
    public function isSync()
    {
        return $this->_get_value("3");
    }
    public function set_isSync($value)
    {
        return $this->_set_value("3", $value);
    }
}
