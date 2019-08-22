<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopAccountRecordsBean extends SplBean
{
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 店铺ID  0标识平台
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 关联ID
     * type int(11)
     */        
    protected $alis_id;
    
    /**
     * remark 标题
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 店铺的可用余额
     * type decimal(10,2)
     */        
    protected $balance;
    
    /**
     * remark 相关金额
     * type decimal(10,2)
     */        
    protected $money;
    
    /**
     * remark 发生方式1订单结算 2提现 3资金调动 4充值
     * type int(11)
     */        
    protected $account_type;
    
    /**
     * remark 简单描述
     * type varchar(255)
     */        
    protected $remark;
    
    /**
     * remark 创建时间
     * type int(11)
     */        
    protected $createtime;
    
    /**
     * remark 微信回调退款状态
     * type varchar(20)
     */        
    protected $refund_status;
    
    /**
     * remark 退款返回信息
     * type text
     */        
    protected $req_info;
    
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
    
    public function getAlisId ()
    {
        return $this->alis_id;
    }
    
    public function setAlisId ($value): void
    {
        $this->alis_id = $value;
    }
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
    }
    
    public function getBalance ()
    {
        return $this->balance;
    }
    
    public function setBalance ($value): void
    {
        $this->balance = $value;
    }
    
    public function getMoney ()
    {
        return $this->money;
    }
    
    public function setMoney ($value): void
    {
        $this->money = $value;
    }
    
    public function getAccountType ()
    {
        return $this->account_type;
    }
    
    public function setAccountType ($value): void
    {
        $this->account_type = $value;
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
    
    public function getRefundStatus ()
    {
        return $this->refund_status;
    }
    
    public function setRefundStatus ($value): void
    {
        $this->refund_status = $value;
    }
    
    public function getReqInfo ()
    {
        return $this->req_info;
    }
    
    public function setReqInfo ($value): void
    {
        $this->req_info = $value;
    }
    
    
}