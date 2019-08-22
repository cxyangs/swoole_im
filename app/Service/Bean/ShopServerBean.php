<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopServerBean extends SplBean
{
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 店铺ID
     * type int(10) unsigned
     */        
    protected $shop_id;
    
    /**
     * remark 结算描述
     * type mediumtext
     */        
    protected $suppliers_desc;
    
    /**
     * remark 应结百分比
     * type int(10) unsigned
     */        
    protected $suppliers_percent;
    
    /**
     * remark 结算模式 0按店铺商品 1按分类
     * type tinyint(1) unsigned
     */        
    protected $commission_model;
    
    /**
     * remark 账单冻结时间
     * type smallint(5) unsigned
     */        
    protected $bill_freeze_day;
    
    /**
     * remark 账单结算周期
     * type tinyint(1) unsigned
     */        
    protected $cycle;
    
    /**
     * remark 天数
     * type smallint(8) unsigned
     */        
    protected $day_number;
    
    /**
     * remark 开始生产账单时间
     * type int(10) unsigned
     */        
    protected $bill_time;
    
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $createtime;
    
    /**
     * remark 
     * type int(10) unsigned
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
    
    public function getSuppliersDesc ()
    {
        return $this->suppliers_desc;
    }
    
    public function setSuppliersDesc ($value): void
    {
        $this->suppliers_desc = $value;
    }
    
    public function getSuppliersPercent ()
    {
        return $this->suppliers_percent;
    }
    
    public function setSuppliersPercent ($value): void
    {
        $this->suppliers_percent = $value;
    }
    
    public function getCommissionModel ()
    {
        return $this->commission_model;
    }
    
    public function setCommissionModel ($value): void
    {
        $this->commission_model = $value;
    }
    
    public function getBillFreezeDay ()
    {
        return $this->bill_freeze_day;
    }
    
    public function setBillFreezeDay ($value): void
    {
        $this->bill_freeze_day = $value;
    }
    
    public function getCycle ()
    {
        return $this->cycle;
    }
    
    public function setCycle ($value): void
    {
        $this->cycle = $value;
    }
    
    public function getDayNumber ()
    {
        return $this->day_number;
    }
    
    public function setDayNumber ($value): void
    {
        $this->day_number = $value;
    }
    
    public function getBillTime ()
    {
        return $this->bill_time;
    }
    
    public function setBillTime ($value): void
    {
        $this->bill_time = $value;
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