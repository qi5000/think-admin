<?php

declare(strict_types=1);
/**
 * This file is part of ThinkPHP.
 * @link     https://github.com/xiaodit/think-admin
 * @document https://www.kancloud.cn/manual/thinkphp6_0
 * @contact  group@thinkphp.cn
 * @author   XiaoDi 758861884@qq.com
 * @copyright 2019 Xiaodi
 * @license  https://github.com/xiaodit/think-admin/blob/6.0/LICENSE.txt
 */

namespace app\traits;

trait ValidateError
{
    /**
     * 验证错误信息.
     *
     * @var string
     */
    protected $error;

    /**
     * 获取验证错误信息.
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
}