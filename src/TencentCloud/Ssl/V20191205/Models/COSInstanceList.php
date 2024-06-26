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
 * cos实例详情 - 异步关联云资源数据结构
 *
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceList() 获取实例详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceList(array $InstanceList) 设置实例详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取地域下总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置地域下总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getError() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(string $Error) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class COSInstanceList extends AbstractModel
{
    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array 实例详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceList;

    /**
     * @var integer 地域下总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceList 实例详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 地域下总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Error 错误信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new CosInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
