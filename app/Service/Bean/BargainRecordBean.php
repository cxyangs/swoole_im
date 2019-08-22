<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class BargainRecordBean extends SplBean
{
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $id;
    
    /**
     * remark 店铺ID
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 砍价订单id
     * type int(11)
     */        
    protected $order_id;
    
    /**
     * remark 用户ID
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 砍价金额
     * type decimal(10,2)
     */        
    protected $bargain_money;
    
    /**
     * remark 描述
     * type varchar(50)
     */        
    protected $content;
    
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getOrderId ()
    {
        return $this->order_id;
    }
    
    public function setOrderId ($value): void
    {
        $this->order_id = $value;
    }
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getBargainMoney ()
    {
        return $this->bargain_money;
    }
    
    public function setBargainMoney ($value): void
    {
        $this->bargain_money = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
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