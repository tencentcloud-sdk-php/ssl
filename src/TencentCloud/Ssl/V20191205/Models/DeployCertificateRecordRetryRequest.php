<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployCertificateRecordRetry请求参数结构体
 *
 * @method integer getDeployRecordId() 获取待重试部署记录ID，通过DeployCertificateInstance获得
 * @method void setDeployRecordId(integer $DeployRecordId) 设置待重试部署记录ID，通过DeployCertificateInstance获得
 * @method integer getDeployRecordDetailId() 获取待重试部署记录详情ID，通过DescribeHostDeployRecordDetail获得
 * @method void setDeployRecordDetailId(integer $DeployRecordDetailId) 设置待重试部署记录详情ID，通过DescribeHostDeployRecordDetail获得
 */
class DeployCertificateRecordRetryRequest extends AbstractModel
{
    /**
     * @var integer 待重试部署记录ID，通过DeployCertificateInstance获得
     */
    public $DeployRecordId;

    /**
     * @var integer 待重试部署记录详情ID，通过DescribeHostDeployRecordDetail获得
     */
    public $DeployRecordDetailId;

    /**
     * @param integer $DeployRecordId 待重试部署记录ID，通过DeployCertificateInstance获得
     * @param integer $DeployRecordDetailId 待重试部署记录详情ID，通过DescribeHostDeployRecordDetail获得
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DeployRecordId",$param) and $param["DeployRecordId"] !== null) {
            $this->DeployRecordId = $param["DeployRecordId"];
        }

        if (array_key_exists("DeployRecordDetailId",$param) and $param["DeployRecordDetailId"] !== null) {
            $this->DeployRecordDetailId = $param["DeployRecordDetailId"];
        }
    }
}
