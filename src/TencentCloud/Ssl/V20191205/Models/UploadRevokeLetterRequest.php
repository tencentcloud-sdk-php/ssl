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
 * UploadRevokeLetter请求参数结构体
 *
 * @method string getCertificateId() 获取证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
 * @method string getRevokeLetter() 获取base64编码后的证书确认函文件，格式应为jpg、jpeg、png、pdf，大小应在1kb与1.4M之间。
 * @method void setRevokeLetter(string $RevokeLetter) 设置base64编码后的证书确认函文件，格式应为jpg、jpeg、png、pdf，大小应在1kb与1.4M之间。
 */
class UploadRevokeLetterRequest extends AbstractModel
{
    /**
     * @var string 证书 ID。
     */
    public $CertificateId;

    /**
     * @var string base64编码后的证书确认函文件，格式应为jpg、jpeg、png、pdf，大小应在1kb与1.4M之间。
     */
    public $RevokeLetter;

    /**
     * @param string $CertificateId 证书 ID。
     * @param string $RevokeLetter base64编码后的证书确认函文件，格式应为jpg、jpeg、png、pdf，大小应在1kb与1.4M之间。
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("RevokeLetter",$param) and $param["RevokeLetter"] !== null) {
            $this->RevokeLetter = $param["RevokeLetter"];
        }
    }
}
