<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class BonusBean extends SplBean
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
     * remark 红包名称
     * type varchar(255)
     */        
    protected $name;
    
    /**
     * remark 红包金额
     * type decimal(10,2)
     */        
    protected $money;
    
    /**
     * remark 可得红包的最小订单金额；仅在按商品或订单金额发放时有效
     * type decimal(10,2)
     */        
    protected $min_order_money;
    
    /**
     * remark 最大领取数量,0表示不限量
     * type tinyint(4)
     */        
    protected $max_num;
    
    /**
     * remark 红包总数
     * type int(11)
     */        
    protected $total_num;
    
    /**
     * remark 剩余红包数
     * type int(11)
     */        
    protected $left_num;
    
    /**
     * remark 发放类型:1=按用户发放;2=按商品发放;3=按订单金额发放;4=线下发放;5=自行领取,6=系统奖励发放
     * type tinyint(4)
     */        
    protected $give_type;
    
    /**
     * remark 是否显示
     * type tinyint(1)
     */        
    protected $is_show;
    
    /**
     * remark 创建时间
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
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getMoney ()
    {
        return $this->money;
    }
    
    public function setMoney ($value): void
    {
        $this->money = $value;
    }
    
    public function getMinOrderMoney ()
    {
        return $this->min_order_money;
    }
    
    public function setMinOrderMoney ($value): void
    {
        $this->min_order_money = $value;
    }
    
    public function getMaxNum ()
    {
        return $this->max_num;
    }
    
    public function setMaxNum ($value): void
    {
        $this->max_num = $value;
    }
    
    public function getTotalNum ()
    {
        return $this->total_num;
    }
    
    public function setTotalNum ($value): void
    {
        $this->total_num = $value;
    }
    
    public function getLeftNum ()
    {
        return $this->left_num;
    }
    
    public function setLeftNum ($value): void
    {
        $this->left_num = $value;
    }
    
    public function getGiveType ()
    {
        return $this->give_type;
    }
    
    public function setGiveType ($value): void
    {
        $this->give_type = $value;
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