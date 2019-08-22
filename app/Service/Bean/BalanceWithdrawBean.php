<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class BalanceWithdrawBean extends SplBean
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
     * remark 提现金额
     * type decimal(10,2)
     */        
    protected $money;
    
    /**
     * remark 提现前余额
     * type decimal(10,2)
     */        
    protected $before_money;
    
    /**
     * remark 提现后余额
     * type decimal(10,2)
     */        
    protected $after_money;
    
    /**
     * remark 支付状态:0=申请中;1=审核通过;2=提现完成
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 支付账户
     * type varchar(255)
     */        
    protected $pay_account;
    
    /**
     * remark 收款账户
     * type varchar(255)
     */        
    protected $collection;
    
    /**
     * remark 第三方支付流水
     * type varchar(255)
     */        
    protected $out_trade_no;
    
    /**
     * remark 提现到账时间
     * type int(11)
     */        
    protected $pay_time;
    
    /**
     * remark 提现方式:1=微信;2=支付宝;3=余额
     * type tinyint(1)
     */        
    protected $type;
    
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
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getMoney ()
    {
        return $this->money;
    }
    
    public function setMoney ($value): void
    {
        $this->money = $value;
    }
    
    public function getBeforeMoney ()
    {
        return $this->before_money;
    }
    
    public function setBeforeMoney ($value): void
    {
        $this->before_money = $value;
    }
    
    public function getAfterMoney ()
    {
        return $this->after_money;
    }
    
    public function setAfterMoney ($value): void
    {
        $this->after_money = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getPayAccount ()
    {
        return $this->pay_account;
    }
    
    public function setPayAccount ($value): void
    {
        $this->pay_account = $value;
    }
    
    public function getCollection ()
    {
        return $this->collection;
    }
    
    public function setCollection ($value): void
    {
        $this->collection = $value;
    }
    
    public function getOutTradeNo ()
    {
        return $this->out_trade_no;
    }
    
    public function setOutTradeNo ($value): void
    {
        $this->out_trade_no = $value;
    }
    
    public function getPayTime ()
    {
        return $this->pay_time;
    }
    
    public function setPayTime ($value): void
    {
        $this->pay_time = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
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