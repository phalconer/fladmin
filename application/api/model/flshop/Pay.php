<?php

namespace app\api\model\flshop;

use think\Model;
use traits\model\SoftDelete;

class Pay extends Model
{

    use SoftDelete;

    

    // 表名
    protected $name = 'flshop_pay';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $created = 'created';
    protected $updateTime = 'updatetime';
    protected $deleted = 'deleted';
	
	//写入 order_pay_no
	protected function setPayNoAttr($value)
	{
		// 高并发有几率重复，暂时不需要
	    return date('YmdHis').substr(strrev($value),-8).substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
	}
}