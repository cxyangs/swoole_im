<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class CouponsRecordBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 用户id
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 优惠券id
     * type int(11)
     */        
    protected $coupons_id;
    
    /**
     * remark 优惠券面值
     * type int(11)
     */        
    protected $coupons_money;
    
    /**
     * remark 订单id
     * type int(11)
     */        
    protected $order_id;
    
    /**
     * remark 使用时间
     * type int(11)
     */        
    protected $use_time;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $createtime;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getCouponsId ()
    {
        return $this->coupons_id;
    }
    
    public function setCouponsId ($value): void
    {
        $this->coupons_id = $value;
    }
    
    public function getCouponsMoney ()
    {
        return $this->coupons_money;
    }
    
    public function setCouponsMoney ($value): void
    {
        $this->coupons_money = $value;
    }
    
    public function getOrderId ()
    {
        return $this->order_id;
    }
    
    public function setOrderId ($value): void
    {
        $this->order_id = $value;
    }
    
    public function getUseTime ()
    {
        return $this->use_time;
    }
    
    public function setUseTime ($value): void
    {
        $this->use_time = $value;
    }
    
    public function getCreatetime ()
    {
        return $this->createtime;
    }
    
    public function setCreatetime ($value): void
    {
        $this->createtime = $value;
    }
    
    
}