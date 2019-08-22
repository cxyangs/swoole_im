<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class CouponsBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 
     * type tinyint(1)
     */        
    protected $coupons_type;
    
    /**
     * remark 店铺id
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 优惠券名称
     * type varchar(255)
     */        
    protected $name;
    
    /**
     * remark 优惠券总数
     * type int(11)
     */        
    protected $total_num;
    
    /**
     * remark 优惠券面值
     * type decimal(10,2)
     */        
    protected $money;
    
    /**
     * remark 使用限制:满X元可用，0表示无使用限制
     * type decimal(10,2)
     */        
    protected $man_money;
    
    /**
     * remark 限领
     * type tinyint(4)
     */        
    protected $get_max;
    
    /**
     * remark 可用商品:0=全部商品;1=指定商品;2=指定分类
     * type tinyint(4)
     */        
    protected $goods_limit_type;
    
    /**
     * remark 分类或商品id集合
     * type varchar(255)
     */        
    protected $goods_limit_content;
    
    /**
     * remark 有效期:开始
     * type int(11)
     */        
    protected $start_time;
    
    /**
     * remark 有效期:结束
     * type int(11)
     */        
    protected $end_time;
    
    /**
     * remark 满X元获得
     * type decimal(10,2)
     */        
    protected $get_man;
    
    /**
     * remark 可赠券商品:0=全部商品;1=指定商品:2=指定分类
     * type tinyint(4)
     */        
    protected $give_goods_type;
    
    /**
     * remark 分类或商品id集合
     * type varchar(255)
     */        
    protected $give_goods_content;
    
    /**
     * remark 备注
     * type varchar(255)
     */        
    protected $remark;
    
    /**
     * remark 
     * type int(10)
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
    
    public function getCouponsType ()
    {
        return $this->coupons_type;
    }
    
    public function setCouponsType ($value): void
    {
        $this->coupons_type = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getTotalNum ()
    {
        return $this->total_num;
    }
    
    public function setTotalNum ($value): void
    {
        $this->total_num = $value;
    }
    
    public function getMoney ()
    {
        return $this->money;
    }
    
    public function setMoney ($value): void
    {
        $this->money = $value;
    }
    
    public function getManMoney ()
    {
        return $this->man_money;
    }
    
    public function setManMoney ($value): void
    {
        $this->man_money = $value;
    }
    
    public function getGetMax ()
    {
        return $this->get_max;
    }
    
    public function setGetMax ($value): void
    {
        $this->get_max = $value;
    }
    
    public function getGoodsLimitType ()
    {
        return $this->goods_limit_type;
    }
    
    public function setGoodsLimitType ($value): void
    {
        $this->goods_limit_type = $value;
    }
    
    public function getGoodsLimitContent ()
    {
        return $this->goods_limit_content;
    }
    
    public function setGoodsLimitContent ($value): void
    {
        $this->goods_limit_content = $value;
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
    
    public function getGetMan ()
    {
        return $this->get_man;
    }
    
    public function setGetMan ($value): void
    {
        $this->get_man = $value;
    }
    
    public function getGiveGoodsType ()
    {
        return $this->give_goods_type;
    }
    
    public function setGiveGoodsType ($value): void
    {
        $this->give_goods_type = $value;
    }
    
    public function getGiveGoodsContent ()
    {
        return $this->give_goods_content;
    }
    
    public function setGiveGoodsContent ($value): void
    {
        $this->give_goods_content = $value;
    }
    
    public function getRemark ()
    {
        return $this->remark;
    }
    
    public function setRemark ($value): void
    {
        $this->remark = $value;
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