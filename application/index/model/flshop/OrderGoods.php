<?php
namespace app\index\model\flshop;

use think\Model;
use traits\model\SoftDelete;

class OrderGoods extends Model
{

    use SoftDelete;

    

    // 表名
    protected $name = 'flshop_order_goods';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $created = 'created';
    protected $updateTime = 'updatetime';
    protected $deleted = 'deleted';

    // 追加属性
    protected $append = [
        'status_text',
		'refund_status_text'
    ];
    
    public function getStatusList()
    {
        return ['normal' => __('Normal'), 'hidden' => __('Hidden')];
    }
	
	

    public function getStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }
	
	public function getRefundStatusList()
	{
	    return [0 => '', 1 => __('退款中'), 2 => __('待退货'), 3 => __('退款完成'), 4 => __('退款关闭'), 5 => __('退款被拒')];
	}
	
	public function getRefundStatusTextAttr($value, $data)
	{
	    $value = $value ? $value : (isset($data['refund_status']) ? $data['refund_status'] : '');
	    $list = $this->getRefundStatusList();
	    return isset($list[$value]) ? $list[$value] : '';
	}


}
