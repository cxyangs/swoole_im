<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AgreementRecordBean extends SplBean
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
     * remark 签署人账户id
     * type int(11)
     */        
    protected $shop_account_id;
    
    /**
     * remark 协议id
     * type int(11)
     */        
    protected $a_id;
    
    /**
     * remark 协议类型
     * type int(11)
     */        
    protected $cate_id;
    
    /**
     * remark 协议编号
     * type varchar(50)
     */        
    protected $number;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 协议副本内容
     * type text
     */        
    protected $content;
    
    /**
     * remark 补充协议开始时间
     * type int(11)
     */        
    protected $start_time;
    
    /**
     * remark 补充协议结束时间
     * type int(11)
     */        
    protected $end_time;
    
    /**
     * remark 签约时间
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
    
    public function getShopAccountId ()
    {
        return $this->shop_account_id;
    }
    
    public function setShopAccountId ($value): void
    {
        $this->shop_account_id = $value;
    }
    
    public function getAId ()
    {
        return $this->a_id;
    }
    
    public function setAId ($value): void
    {
        $this->a_id = $value;
    }
    
    public function getCateId ()
    {
        return $this->cate_id;
    }
    
    public function setCateId ($value): void
    {
        $this->cate_id = $value;
    }
    
    public function getNumber ()
    {
        return $this->number;
    }
    
    public function setNumber ($value): void
    {
        $this->number = $value;
    }
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
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