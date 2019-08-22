<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class UserLevelBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $name;
    
    /**
     * remark 升级最低粉丝数
     * type int(10)
     */        
    protected $fans_num;
    
    /**
     * remark 升级最低自购数
     * type tinyint(4)
     */        
    protected $self_buy;
    
    /**
     * remark 升级最低粉丝订单总金额
     * type decimal(10,2)
     */        
    protected $fans_order_money;
    
    /**
     * remark 升级最低运营商数
     * type int(11)
     */        
    protected $operator_num;
    
    /**
     * remark 佣金奖励
     * type tinytext
     */        
    protected $commission;
    
    /**
     * remark 是否可领取补给包
     * type tinyint(1)
     */        
    protected $impact_bag;
    
    /**
     * remark 团队佣金奖励
     * type decimal(10,2)
     */        
    protected $fans_order_reward;
    
    /**
     * remark 邀请新粉丝奖励红包金额
     * type decimal(10,2)
     */        
    protected $new_fans_reward;
    
    /**
     * remark 邀请新粉丝奖励红包总金额
     * type decimal(10,2)
     */        
    protected $new_fans_reward_limit;
    
    /**
     * remark 首次拉粉红包
     * type decimal(10,2)
     */        
    protected $first_new_fans_reward;
    
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
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getFansNum ()
    {
        return $this->fans_num;
    }
    
    public function setFansNum ($value): void
    {
        $this->fans_num = $value;
    }
    
    public function getSelfBuy ()
    {
        return $this->self_buy;
    }
    
    public function setSelfBuy ($value): void
    {
        $this->self_buy = $value;
    }
    
    public function getFansOrderMoney ()
    {
        return $this->fans_order_money;
    }
    
    public function setFansOrderMoney ($value): void
    {
        $this->fans_order_money = $value;
    }
    
    public function getOperatorNum ()
    {
        return $this->operator_num;
    }
    
    public function setOperatorNum ($value): void
    {
        $this->operator_num = $value;
    }
    
    public function getCommission ()
    {
        return $this->commission;
    }
    
    public function setCommission ($value): void
    {
        $this->commission = $value;
    }
    
    public function getImpactBag ()
    {
        return $this->impact_bag;
    }
    
    public function setImpactBag ($value): void
    {
        $this->impact_bag = $value;
    }
    
    public function getFansOrderReward ()
    {
        return $this->fans_order_reward;
    }
    
    public function setFansOrderReward ($value): void
    {
        $this->fans_order_reward = $value;
    }
    
    public function getNewFansReward ()
    {
        return $this->new_fans_reward;
    }
    
    public function setNewFansReward ($value): void
    {
        $this->new_fans_reward = $value;
    }
    
    public function getNewFansRewardLimit ()
    {
        return $this->new_fans_reward_limit;
    }
    
    public function setNewFansRewardLimit ($value): void
    {
        $this->new_fans_reward_limit = $value;
    }
    
    public function getFirstNewFansReward ()
    {
        return $this->first_new_fans_reward;
    }
    
    public function setFirstNewFansReward ($value): void
    {
        $this->first_new_fans_reward = $value;
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