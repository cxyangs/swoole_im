<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderReturnBean extends SplBean
{
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 店铺ID
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 订单ID
     * type int(11)
     */        
    protected $order_id;
    
    /**
     * remark 订单编号
     * type varchar(255)
     */        
    protected $order_no;
    
    /**
     * remark 订单实际付款金额
     * type decimal(10,2)
     */        
    protected $order_pay_money;
    
    /**
     * remark 平台获取金额
     * type decimal(10,2)
     */        
    protected $platform_money;
    
    /**
     * remark 是否发放  0未发放  1 已发放
     * type tinyint(4)
     */        
    protected $is_issue;
    
    /**
     * remark 备注
     * type varchar(255)
     */        
    protected $remark;
    
    /**
     * remark 创建时间
     * type int(11)
     */        
    protected $createtime;
    
    /**
     * remark 更新时间
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
    
    public function getOrderNo ()
    {
        return $this->order_no;
    }
    
    public function setOrderNo ($value): void
    {
        $this->order_no = $value;
    }
    
    public function getOrderPayMoney ()
    {
        return $this->order_pay_money;
    }
    
    public function setOrderPayMoney ($value): void
    {
        $this->order_pay_money = $value;
    }
    
    public function getPlatformMoney ()
    {
        return $this->platform_money;
    }
    
    public function setPlatformMoney ($value): void
    {
        $this->platform_money = $value;
    }
    
    public function getIsIssue ()
    {
        return $this->is_issue;
    }
    
    public function setIsIssue ($value): void
    {
        $this->is_issue = $value;
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