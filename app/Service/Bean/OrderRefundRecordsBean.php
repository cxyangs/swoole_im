<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderRefundRecordsBean extends SplBean
{
    /**
     * remark 主键id
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 订单id
     * type int(11)
     */        
    protected $order_id;
    
    /**
     * remark 订单商品id
     * type int(11)
     */        
    protected $order_goods_id;
    
    /**
     * remark 退款交易号
     * type varchar(55)
     */        
    protected $refund_trade_no;
    
    /**
     * remark 退款金额
     * type decimal(10,2)
     */        
    protected $refund_money;
    
    /**
     * remark 退款方式（1：微信，2：支付宝，10：线下）
     * type int(11)
     */        
    protected $refund_way;
    
    /**
     * remark 买家id
     * type int(11)
     */        
    protected $buyer_id;
    
    /**
     * remark 退款时间
     * type int(11)
     */        
    protected $refund_time;
    
    /**
     * remark 备注
     * type varchar(255)
     */        
    protected $remark;
    
    /**
     * remark 微信退款回调状态
     * type varchar(20)
     */        
    protected $refund_status;
    
    /**
     * remark 退款回调数据
     * type text
     */        
    protected $req_info;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getOrderId ()
    {
        return $this->order_id;
    }
    
    public function setOrderId ($value): void
    {
        $this->order_id = $value;
    }
    
    public function getOrderGoodsId ()
    {
        return $this->order_goods_id;
    }
    
    public function setOrderGoodsId ($value): void
    {
        $this->order_goods_id = $value;
    }
    
    public function getRefundTradeNo ()
    {
        return $this->refund_trade_no;
    }
    
    public function setRefundTradeNo ($value): void
    {
        $this->refund_trade_no = $value;
    }
    
    public function getRefundMoney ()
    {
        return $this->refund_money;
    }
    
    public function setRefundMoney ($value): void
    {
        $this->refund_money = $value;
    }
    
    public function getRefundWay ()
    {
        return $this->refund_way;
    }
    
    public function setRefundWay ($value): void
    {
        $this->refund_way = $value;
    }
    
    public function getBuyerId ()
    {
        return $this->buyer_id;
    }
    
    public function setBuyerId ($value): void
    {
        $this->buyer_id = $value;
    }
    
    public function getRefundTime ()
    {
        return $this->refund_time;
    }
    
    public function setRefundTime ($value): void
    {
        $this->refund_time = $value;
    }
    
    public function getRemark ()
    {
        return $this->remark;
    }
    
    public function setRemark ($value): void
    {
        $this->remark = $value;
    }
    
    public function getRefundStatus ()
    {
        return $this->refund_status;
    }
    
    public function setRefundStatus ($value): void
    {
        $this->refund_status = $value;
    }
    
    public function getReqInfo ()
    {
        return $this->req_info;
    }
    
    public function setReqInfo ($value): void
    {
        $this->req_info = $value;
    }
    
    
}