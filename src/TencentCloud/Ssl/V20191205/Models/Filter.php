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
 * 过滤参数列表
 *
 * @method string getFilterKey() 获取过滤参数key
 * @method void setFilterKey(string $FilterKey) 设置过滤参数key
 * @method string getFilterValue() 获取过滤参数值
 * @method void setFilterValue(string $FilterValue) 设置过滤参数值
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤参数key
     */
    public $FilterKey;

    /**
     * @var string 过滤参数值
     */
    public $FilterValue;

    /**
     * @param string $FilterKey 过滤参数key
     * @param string $FilterValue 过滤参数值
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
        if (array_key_exists("FilterKey",$param) and $param["FilterKey"] !== null) {
            $this->FilterKey = $param["FilterKey"];
        }

        if (array_key_exists("FilterValue",$param) and $param["FilterValue"] !== null) {
            $this->FilterValue = $param["FilterValue"];
        }
    }
}
