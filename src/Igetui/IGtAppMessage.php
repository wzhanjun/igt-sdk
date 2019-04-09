<?php

namespace Wzhanjun\Igetui\Sdk\Igetui;

class IGtAppMessage extends IGtMessage
{

    //array('','',..)
    public $appIdList;
    //array('','',..)
    public $phoneTypeList;
    //array('','',..)
    public $provinceList;
    public $tagList;
    public $conditions;
    public $speed=0;
    public $pushTime;
    public function __construct()
    {
        parent::__construct();
    }

    public function get_appIdList()
    {
        return $this->appIdList;
    }

    public function set_appIdList($appIdList)
    {
        $this->appIdList = $appIdList;
    }

    /**
     * @deprecated deprecated since version 4.0.0.3
     */
    public function get_phoneTypeList()
    {
        return $this->phoneTypeList;
    }

    /**
     * @deprecated deprecated since version 4.0.0.3
     */
    public function set_phoneTypeList($phoneTypeList)
    {
        $this->phoneTypeList = $phoneTypeList;
    }

    /**
     * @deprecated deprecated since version 4.0.0.3
     */
    public function get_provinceList()
    {
        return $this->provinceList;
    }

    /**
     * @deprecated deprecated since version 4.0.0.3
     */
    public function set_provinceList($provinceList)
    {
        $this->provinceList = $provinceList;
    }

    /**
     * @deprecated deprecated since version 4.0.0.3
     */
    public function get_tagList()
    {
        return $this->tagList;
    }

    /**
     * @deprecated deprecated since version 4.0.0.3
     */
    public function set_tagList($tagList)
    {
        $this->tagList = $tagList;
    }

    public function get_conditions()
    {
        return $this->conditions;
    }

    /**
     * @return mixed
     */
    public function getPushTime()
    {
        return $this->pushTime;
    }

    /**
     * @param mixed $pushTime
     */
    public function setPushTime($pushTime)
    {
        $this->pushTime = $pushTime;
    }


    public function set_conditions($conditions)
    {
        $this->conditions = $conditions;
    }

    public function get_speed()
    {
        return $this->speed;
    }
    public function set_speed($speed)
    {
        $this->speed=$speed;
    }
}
