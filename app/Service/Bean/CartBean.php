<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class CartBean extends SplBean
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
     * remark 商品id
     * type int(11)
     */        
    protected $goods_id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $sku_id;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $sku_name;
    
    /**
     * remark 数量
     * type int(11)
     */        
    protected $num;
    
    /**
     * remark 店铺id
     * type int(11)
     */        
    protected $shop_id;
    
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
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getGoodsId ()
    {
        return $this->goods_id;
    }
    
    public function setGoodsId ($value): void
    {
        $this->goods_id = $value;
    }
    
    public function getSkuId ()
    {
        return $this->sku_id;
    }
    
    public function setSkuId ($value): void
    {
        $this->sku_id = $value;
    }
    
    public function getSkuName ()
    {
        return $this->sku_name;
    }
    
    public function setSkuName ($value): void
    {
        $this->sku_name = $value;
    }
    
    public function getNum ()
    {
        return $this->num;
    }
    
    public function setNum ($value): void
    {
        $this->num = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
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