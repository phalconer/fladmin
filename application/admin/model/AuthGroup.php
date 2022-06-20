<?php

namespace app\admin\model;

use think\Model;

class AuthGroup extends Model
{

    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $created = 'created';
    protected $modified = 'modified';

    public function getNameAttr($value, $data)
    {
        return __($value);
    }

}
