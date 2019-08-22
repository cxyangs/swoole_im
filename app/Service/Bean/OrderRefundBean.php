<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderRefundBean extends SplBean
{
    /**
     * remark id
     * type int(11) unsigned
     */        
    protected $id;
    
    /**
     * remark 订单商品表id
     * type int(11)
     */        
    protected $order_goods_id;
    
    /**
     * remark 操作状态  流程状态(refund_status) 状态名称(refund_status_name) 操作时间  1买家申请 发起了退款申请,等待卖家处理  2 等待买家退货 卖家已同意退款申请,等待买家退货  3 等待卖家确认收货 买家已退货,等待卖家确认收货  4 等待卖家确认退款 卖家同意退款  5 退款已成功 卖家退款给买家，本次维权结束  -1 退款已拒绝 卖家拒绝本次退款，本次维权结束   -2 退款已关闭 主动撤销退款，退款关闭   -3 退款申请不通过 拒绝了本次退款申请,等待买家修改
     * type varchar(255)
     */        
    protected $refund_status;
    
    /**
     * remark 退款操作内容描述
     * type varchar(255)
     */        
    protected $action;
    
    /**
     * remark 操作方 1 买家 2 卖家
     * type tinyint(4) unsigned
     */        
    protected $action_way;
    
    /**
     * remark 操作人id
     * type varchar(255)
     */        
    protected $action_userid;
    
    /**
     * remark 操作人姓名
     * type varchar(255)
     */        
    protected $action_username;
    
    /**
     * remark 操作时间
     * type int(11)
     */        
    protected $action_time;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getOrderGoodsId ()
    {
        return $this->order_goods_id;
    }
    
    public function setOrderGoodsId ($value): void
    {
        $this->order_goods_id = $value;
    }
    
    public function getRefundStatus ()
    {
        return $this->refund_status;
    }
    
    public function setRefundStatus ($value): void
    {
        $this->refund_status = $value;
    }
    
    public function getAction ()
    {
        return $this->action;
    }
    
    public function setAction ($value): void
    {
        $this->action = $value;
    }
    
    public function getActionWay ()
    {
        return $this->action_way;
    }
    
    public function setActionWay ($value): void
    {
        $this->action_way = $value;
    }
    
    public function getActionUserid ()
    {
        return $this->action_userid;
    }
    
    public function setActionUserid ($value): void
    {
        $this->action_userid = $value;
    }
    
    public function getActionUsername ()
    {
        return $this->action_username;
    }
    
    public function setActionUsername ($value): void
    {
        $this->action_username = $value;
    }
    
    public function getActionTime ()
    {
        return $this->action_time;
    }
    
    public function setActionTime ($value): void
    {
        $this->action_time = $value;
    }
    
    
}