<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\Type\PBEnum;

class ReqServListResultReqServHostResultCode extends PBEnum
{
    const successed  = 0;
    const failed  = 1;
    const busy  = 2;
}
