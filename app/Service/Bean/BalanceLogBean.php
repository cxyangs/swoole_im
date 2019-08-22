<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class BalanceLogBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 记录来源id
     * type int(11)
     */        
    protected $source_id;
    
    /**
     * remark 交易类型:1=订单返佣;2=提现;3=订单抵扣;4=红包奖励;5=拉粉奖励;6=团队佣金奖励;7=补给包;8=订单超时，余额返回
     * type tinyint(1)
     */        
    protected $type;
    
    /**
     * remark 描述
     * type varchar(255)
     */        
    protected $description;
    
    /**
     * remark 交易金额
     * type decimal(10,2)
     */        
    protected $money;
    
    /**
     * remark 余额变动前金额
     * type decimal(10,2)
     */        
    protected $before_money;
    
    /**
     * remark 余额变动后金额
     * type decimal(10,2)
     */        
    protected $after_money;
    
    /**
     * remark 团队佣金是否已结算
     * type tinyint(1)
     */        
    protected $is_settle;
    
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
    
    public function getSourceId ()
    {
        return $this->source_id;
    }
    
    public function setSourceId ($value): void
    {
        $this->source_id = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getDescription ()
    {
        return $this->description;
    }
    
    public function setDescription ($value): void
    {
        $this->description = $value;
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
    
    public function getIsSettle ()
    {
        return $this->is_settle;
    }
    
    public function setIsSettle ($value): void
    {
        $this->is_settle = $value;
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