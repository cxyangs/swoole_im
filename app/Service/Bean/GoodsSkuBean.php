<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsSkuBean extends SplBean
{
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $goods_id;
    
    /**
     * remark sku货号
     * type varchar(255)
     */        
    protected $sku_sn;
    
    /**
     * remark 规格名称
     * type varchar(255)
     */        
    protected $sku_name;
    
    /**
     * remark 规格id值(,)
     * type varchar(255)
     */        
    protected $spec_sku_ids;
    
    /**
     * remark 库存
     * type mediumint(8)
     */        
    protected $sku_stock;
    
    /**
     * remark 市场价
     * type decimal(10,2)
     */        
    protected $sku_market_price;
    
    /**
     * remark 销售价
     * type decimal(10,2)
     */        
    protected $sku_sale_price;
    
    /**
     * remark 图片json
     * type varchar(255)
     */        
    protected $sku_img;
    
    /**
     * remark 重量（g）
     * type decimal(10,2)
     */        
    protected $sku_weight;
    
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
    
    public function getGoodsId ()
    {
        return $this->goods_id;
    }
    
    public function setGoodsId ($value): void
    {
        $this->goods_id = $value;
    }
    
    public function getSkuSn ()
    {
        return $this->sku_sn;
    }
    
    public function setSkuSn ($value): void
    {
        $this->sku_sn = $value;
    }
    
    public function getSkuName ()
    {
        return $this->sku_name;
    }
    
    public function setSkuName ($value): void
    {
        $this->sku_name = $value;
    }
    
    public function getSpecSkuIds ()
    {
        return $this->spec_sku_ids;
    }
    
    public function setSpecSkuIds ($value): void
    {
        $this->spec_sku_ids = $value;
    }
    
    public function getSkuStock ()
    {
        return $this->sku_stock;
    }
    
    public function setSkuStock ($value): void
    {
        $this->sku_stock = $value;
    }
    
    public function getSkuMarketPrice ()
    {
        return $this->sku_market_price;
    }
    
    public function setSkuMarketPrice ($value): void
    {
        $this->sku_market_price = $value;
    }
    
    public function getSkuSalePrice ()
    {
        return $this->sku_sale_price;
    }
    
    public function setSkuSalePrice ($value): void
    {
        $this->sku_sale_price = $value;
    }
    
    public function getSkuImg ()
    {
        return $this->sku_img;
    }
    
    public function setSkuImg ($value): void
    {
        $this->sku_img = $value;
    }
    
    public function getSkuWeight ()
    {
        return $this->sku_weight;
    }
    
    public function setSkuWeight ($value): void
    {
        $this->sku_weight = $value;
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