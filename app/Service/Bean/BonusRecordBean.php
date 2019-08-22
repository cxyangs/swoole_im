<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class BonusRecordBean extends SplBean
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
     * remark 红包id
     * type int(11)
     */        
    protected $bonus_id;
    
    /**
     * remark 红包类型
     * type tinyint(4)
     */        
    protected $bonus_type;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $order_id;
    
    /**
     * remark 商品id
     * type int(11)
     */        
    protected $goods_id;
    
    /**
     * remark 领取时间
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
    
    public function getBonusId ()
    {
        return $this->bonus_id;
    }
    
    public function setBonusId ($value): void
    {
        $this->bonus_id = $value;
    }
    
    public function getBonusType ()
    {
        return $this->bonus_type;
    }
    
    public function setBonusType ($value): void
    {
        $this->bonus_type = $value;
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
    
    public function getCreatetime ()
    {
        return $this->createtime;
    }
    
    public function setCreatetime ($value): void
    {
        $this->createtime = $value;
    }
    
    
}