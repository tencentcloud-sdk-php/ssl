<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * waf实例详情
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getCertId() 获取证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertId(string $CertId) 设置证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKeepalive() 获取是否保持长连接，1是，0 否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeepalive(integer $Keepalive) 设置是否保持长连接，1是，0 否
注意：此字段可能返回 null，表示取不到有效值。
 */
class WafInstanceDetail extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertId;

    /**
     * @var integer 是否保持长连接，1是，0 否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keepalive;

    /**
     * @param string $Domain 域名
     * @param string $CertId 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Keepalive 是否保持长连接，1是，0 否
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Keepalive",$param) and $param["Keepalive"] !== null) {
            $this->Keepalive = $param["Keepalive"];
        }
    }
}
