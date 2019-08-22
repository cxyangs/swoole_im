<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderBillLogBean extends SplBean
{
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $id;
    
    /**
     * remark 门店id
     * type int(11) unsigned
     */        
    protected $shop_id;
    
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $uid;
    
    /**
     * remark 账单id
     * type int(11) unsigned
     */        
    protected $bid;
    
    /**
     * remark 类型 0=结算 1充值 2提现
     * type tinyint(1) unsigned
     */        
    protected $type;
    
    /**
     * remark 角色:1=用户;2=管理员
     * type tinyint(1) unsigned
     */        
    protected $role;
    
    /**
     * remark 操作人名称
     * type varchar(255)
     */        
    protected $name;
    
    /**
     * remark 店铺余额
     * type decimal(10,2)
     */        
    protected $balance;
    
    /**
     * remark 账单可用金额
     * type decimal(10,2)
     */        
    protected $bill_money;
    
    /**
     * remark 操作内容
     * type varchar(255)
     */        
    protected $content;
    
    /**
     * remark 操作时间
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getBid ()
    {
        return $this->bid;
    }
    
    public function setBid ($value): void
    {
        $this->bid = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getRole ()
    {
        return $this->role;
    }
    
    public function setRole ($value): void
    {
        $this->role = $value;
    }
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getBalance ()
    {
        return $this->balance;
    }
    
    public function setBalance ($value): void
    {
        $this->balance = $value;
    }
    
    public function getBillMoney ()
    {
        return $this->bill_money;
    }
    
    public function setBillMoney ($value): void
    {
        $this->bill_money = $value;
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
    
    
}