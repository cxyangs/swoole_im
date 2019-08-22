<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsCommentBean extends SplBean
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
     * remark 
     * type int(11)
     */        
    protected $shop_id;
    
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
     * remark 评分
     * type tinyint(1)
     */        
    protected $score;
    
    /**
     * remark 店铺评分
     * type tinyint(1)
     */        
    protected $shop_score;
    
    /**
     * remark 快递评分
     * type tinyint(1)
     */        
    protected $express_score;
    
    /**
     * remark 评价内容
     * type varchar(255)
     */        
    protected $content;
    
    /**
     * remark 评价图片集合
     * type text
     */        
    protected $img;
    
    /**
     * remark 店铺回答
     * type varchar(255)
     */        
    protected $seller_response;
    
    /**
     * remark 是否有晒图
     * type tinyint(1)
     */        
    protected $has_img;
    
    /**
     * remark 是否展示
     * type tinyint(1)
     */        
    protected $is_show;
    
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
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
    
    public function getScore ()
    {
        return $this->score;
    }
    
    public function setScore ($value): void
    {
        $this->score = $value;
    }
    
    public function getShopScore ()
    {
        return $this->shop_score;
    }
    
    public function setShopScore ($value): void
    {
        $this->shop_score = $value;
    }
    
    public function getExpressScore ()
    {
        return $this->express_score;
    }
    
    public function setExpressScore ($value): void
    {
        $this->express_score = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
    }
    
    public function getImg ()
    {
        return $this->img;
    }
    
    public function setImg ($value): void
    {
        $this->img = $value;
    }
    
    public function getSellerResponse ()
    {
        return $this->seller_response;
    }
    
    public function setSellerResponse ($value): void
    {
        $this->seller_response = $value;
    }
    
    public function getHasImg ()
    {
        return $this->has_img;
    }
    
    public function setHasImg ($value): void
    {
        $this->has_img = $value;
    }
    
    public function getIsShow ()
    {
        return $this->is_show;
    }
    
    public function setIsShow ($value): void
    {
        $this->is_show = $value;
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