<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderGoodsReturnBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 店铺id
     * type int(11)
     */        
    protected $shop_id;
    
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
     * remark 商品id
     * type int(11)
     */        
    protected $goods_id;
    
    /**
     * remark 用户等级返佣金额
     * type decimal(10,2)
     */        
    protected $user_return_money;
    
    /**
     * remark 平台分类抽取比例
     * type decimal(10,2)
     */        
    protected $cate_rate;
    
    /**
     * remark 平台分类返佣金额
     * type decimal(10,2)
     */        
    protected $cate_return_money;
    
    /**
     * remark 备注
     * type varchar(255)
     */        
    protected $remake;
    
    /**
     * remark 退款结算状态 0正常 1已退款结算
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $createtime;
    
    /**
     * remark 
     * type int(11)
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
    
    public function getOrderGoodsId ()
    {
        return $this->order_goods_id;
    }
    
    public function setOrderGoodsId ($value): void
    {
        $this->order_goods_id = $value;
    }
    
    public function getGoodsId ()
    {
        return $this->goods_id;
    }
    
    public function setGoodsId ($value): void
    {
        $this->goods_id = $value;
    }
    
    public function getUserReturnMoney ()
    {
        return $this->user_return_money;
    }
    
    public function setUserReturnMoney ($value): void
    {
        $this->user_return_money = $value;
    }
    
    public function getCateRate ()
    {
        return $this->cate_rate;
    }
    
    public function setCateRate ($value): void
    {
        $this->cate_rate = $value;
    }
    
    public function getCateReturnMoney ()
    {
        return $this->cate_return_money;
    }
    
    public function setCateReturnMoney ($value): void
    {
        $this->cate_return_money = $value;
    }
    
    public function getRemake ()
    {
        return $this->remake;
    }
    
    public function setRemake ($value): void
    {
        $this->remake = $value;
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