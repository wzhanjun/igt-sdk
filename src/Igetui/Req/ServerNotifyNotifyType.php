<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\Type\PBEnum;

class ServerNotifyNotifyType extends PBEnum
{
    const normal  = 0;
    const serverListChanged  = 1;
    const exception  = 2;
}
