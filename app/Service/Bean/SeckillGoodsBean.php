<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class SeckillGoodsBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 秒杀活动id
     * type int(11)
     */        
    protected $seckill_id;
    
    /**
     * remark 秒杀时间段id
     * type int(11)
     */        
    protected $time_id;
    
    /**
     * remark 秒杀商品id
     * type int(11)
     */        
    protected $goods_id;
    
    /**
     * remark 店铺id
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 秒杀价
     * type decimal(10,2)
     */        
    protected $seckill_price;
    
    /**
     * remark 秒杀数量
     * type int(11)
     */        
    protected $seckill_num;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $seckill_stock;
    
    /**
     * remark 状态:0=待审核;1=审核通过;2=审核失败
     * type tinyint(1)
     */        
    protected $status;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getSeckillId ()
    {
        return $this->seckill_id;
    }
    
    public function setSeckillId ($value): void
    {
        $this->seckill_id = $value;
    }
    
    public function getTimeId ()
    {
        return $this->time_id;
    }
    
    public function setTimeId ($value): void
    {
        $this->time_id = $value;
    }
    
    public function getGoodsId ()
    {
        return $this->goods_id;
    }
    
    public function setGoodsId ($value): void
    {
        $this->goods_id = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getSeckillPrice ()
    {
        return $this->seckill_price;
    }
    
    public function setSeckillPrice ($value): void
    {
        $this->seckill_price = $value;
    }
    
    public function getSeckillNum ()
    {
        return $this->seckill_num;
    }
    
    public function setSeckillNum ($value): void
    {
        $this->seckill_num = $value;
    }
    
    public function getSeckillStock ()
    {
        return $this->seckill_stock;
    }
    
    public function setSeckillStock ($value): void
    {
        $this->seckill_stock = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    
}