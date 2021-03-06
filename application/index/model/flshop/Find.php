<?php

namespace app\index\model\flshop;

use think\Model;
use traits\model\SoftDelete;

class Find extends Model
{

    use SoftDelete;

    

    // 表名
    protected $name = 'flshop_find';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $created = 'created';
    protected $updateTime = 'updatetime';
    protected $deleted = 'deleted';

    // 追加属性
    protected $append = [
        'type_text'
    ];
    

    
    public function getTypeList()
    {
        return ['new' => __('Type new'), 'video' => __('Type video'), 'live' => __('Type live'), 'want' => __('Type want'), 'activity' => __('Type activity'), 'show' => __('Type show')];
    }


    public function getTypeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['type']) ? $data['type'] : '');
        $list = $this->getTypeList();
        return isset($list[$value]) ? $list[$value] : '';
    }

	public function setImagesAttr($value)
	{
	    return is_array($value) ? implode(',', $value) : $value;
	}
		
	public function setGoodsIdsAttr($value)
	{
	    return is_array($value) ? implode(',', $value) : $value;
	}
    
	public function shop()
	{
	    return $this->belongsTo('app\index\model\flshop\Shop', 'shop_id', 'id', [], 'LEFT')->setEagerlyType(0);
	}
}
