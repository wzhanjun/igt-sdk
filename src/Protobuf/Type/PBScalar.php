<?php

namespace Wzhanjun\Igetui\Sdk\Protobuf\Type;

use Wzhanjun\Igetui\Sdk\Protobuf\PBMessage;

class PBScalar extends PBMessage
{
    /**
     * Set scalar value
     */
    public function set_value($value)
    {
        $this->value = $value;
    }

    /**
     * Get the scalar value
     */
    public function get_value()
    {
        return $this->value;
    }
}