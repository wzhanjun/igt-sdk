<?php

namespace Wzhanjun\Igetui\Sdk\Protobuf\Type;

use Wzhanjun\Igetui\Sdk\Protobuf\PBMessage;

class PBBool extends PBInt
{
    public $wired_type = PBMessage::WIRED_VARINT;

    /**
     * Parses the message for this type
     *
     * @param array
     */
    public function ParseFromArray()
    {
        $this->value = $this->reader->next();
        $this->value = ($this->value != 0) ? 1 : 0;
    }
}
