<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class CommissionBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 待返佣用户id
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 订单id
     * type int(11)
     */        
    protected $order_id;
    
    /**
     * remark 商品id
     * type int(11)
     */        
    protected $goods_id;
    
    /**
     * remark 可返佣订单总金额
     * type decimal(10,2)
     */        
    protected $goods_money;
    
    /**
     * remark 用户等级返佣比例
     * type decimal(10,2)
     */        
    protected $ratio;
    
    /**
     * remark 用户返佣金额
     * type decimal(10,2)
     */        
    protected $commission_money;
    
    /**
     * remark 返佣级别:0=自购返佣;1=一级粉丝返佣;2=二级粉丝返佣;以此类推
     * type tinyint(4)
     */        
    protected $level;
    
    /**
     * remark 状态:0=订单进行中，待返佣;1=订单已完成，已返佣;2=订单退货,返佣失败
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $createtime;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $updatetime;
    
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
    
    public function getOrderId ()
    {
        return $this->order_id;
    }
    
    public function setOrderId ($value): void
    {
        $this->order_id = $value;
    }
    
    public function getGoodsId ()
    {
        return $this->goods_id;
    }
    
    public function setGoodsId ($value): void
    {
        $this->goods_id = $value;
    }
    
    public function getGoodsMoney ()
    {
        return $this->goods_money;
    }
    
    public function setGoodsMoney ($value): void
    {
        $this->goods_money = $value;
    }
    
    public function getRatio ()
    {
        return $this->ratio;
    }
    
    public function setRatio ($value): void
    {
        $this->ratio = $value;
    }
    
    public function getCommissionMoney ()
    {
        return $this->commission_money;
    }
    
    public function setCommissionMoney ($value): void
    {
        $this->commission_money = $value;
    }
    
    public function getLevel ()
    {
        return $this->level;
    }
    
    public function setLevel ($value): void
    {
        $this->level = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getCreatetime ()
    {
        return $this->createtime;
    }
    
    public function setCreatetime ($value): void
    {
        $this->createtime = $value;
    }
    
    public function getUpdatetime ()
    {
        return $this->updatetime;
    }
    
    public function setUpdatetime ($value): void
    {
        $this->updatetime = $value;
    }
    
    
}