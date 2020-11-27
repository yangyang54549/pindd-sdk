<?php

namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;

class PddDdkMemberAuthorityQuery extends PopBaseHttpRequest
{
    public function __construct()
    {

    }

    private $pid;

    private $customParameters;


    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, "custom_parameters", $this->customParameters);
        $this->setUserParam($params, "pid", $this->pid);
    }

    public function getVersion()
    {
        return "V1";
    }

    public function getDataType()
    {
        return "JSON";
    }

    public function getType()
    {
        return "pdd.ddk.member.authority.query";
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

}