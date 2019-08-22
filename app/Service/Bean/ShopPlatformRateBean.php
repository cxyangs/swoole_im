<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopPlatformRateBean extends SplBean
{
    /**
     * remark 店铺id
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 商品分类id
     * type int(11)
     */        
    protected $cate_id;
    
    /**
     * remark 平台抽佣
     * type decimal(10,2)
     */        
    protected $platform_rate;
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getCateId ()
    {
        return $this->cate_id;
    }
    
    public function setCateId ($value): void
    {
        $this->cate_id = $value;
    }
    
    public function getPlatformRate ()
    {
        return $this->platform_rate;
    }
    
    public function setPlatformRate ($value): void
    {
        $this->platform_rate = $value;
    }
    
    
}