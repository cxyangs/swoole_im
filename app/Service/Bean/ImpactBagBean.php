<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ImpactBagBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 周期内影响力
     * type int(11)
     */        
    protected $impact;
    
    /**
     * remark 补给包金额
     * type decimal(10,2)
     */        
    protected $bag_money;
    
    /**
     * remark 订单总金额
     * type decimal(10,2)
     */        
    protected $order_total_money;
    
    /**
     * remark 交易总金额占比
     * type decimal(10,2)
     */        
    protected $order_percent;
    
    /**
     * remark 奖励开始时间
     * type int(11)
     */        
    protected $start_time;
    
    /**
     * remark 奖励结束时间
     * type int(11)
     */        
    protected $end_time;
    
    /**
     * remark 状态:0=待领取;1=已领取;2=已过期
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $create_time;
    
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
    
    public function getImpact ()
    {
        return $this->impact;
    }
    
    public function setImpact ($value): void
    {
        $this->impact = $value;
    }
    
    public function getBagMoney ()
    {
        return $this->bag_money;
    }
    
    public function setBagMoney ($value): void
    {
        $this->bag_money = $value;
    }
    
    public function getOrderTotalMoney ()
    {
        return $this->order_total_money;
    }
    
    public function setOrderTotalMoney ($value): void
    {
        $this->order_total_money = $value;
    }
    
    public function getOrderPercent ()
    {
        return $this->order_percent;
    }
    
    public function setOrderPercent ($value): void
    {
        $this->order_percent = $value;
    }
    
    public function getStartTime ()
    {
        return $this->start_time;
    }
    
    public function setStartTime ($value): void
    {
        $this->start_time = $value;
    }
    
    public function getEndTime ()
    {
        return $this->end_time;
    }
    
    public function setEndTime ($value): void
    {
        $this->end_time = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getCreateTime ()
    {
        return $this->create_time;
    }
    
    public function setCreateTime ($value): void
    {
        $this->create_time = $value;
    }
    
    
}