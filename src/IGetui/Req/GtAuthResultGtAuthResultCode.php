<?php

namespace Wzhanjun\Igetui\Sdk\Igetui\Req;

use Wzhanjun\Igetui\Sdk\Protobuf\Type\PBEnum;

class GtAuthResultGtAuthResultCode extends PBEnum
{

    const successed  = 0;
    const failed_noSign  = 1;
    const failed_noAppkey  = 2;
    const failed_noTimestamp  = 3;
    const failed_AuthIllegal  = 4;
    const redirect  = 5;

}