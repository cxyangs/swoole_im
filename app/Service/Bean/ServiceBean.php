<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ServiceBean extends SplBean
{
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $uid;
    
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $shop_id;
    
    /**
     * remark 客服名称
     * type varchar(50)
     */        
    protected $service_name;
    
    /**
     * remark 开启 0关闭 1开启
     * type tinyint(1)
     */        
    protected $is_online;
    
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getServiceName ()
    {
        return $this->service_name;
    }
    
    public function setServiceName ($value): void
    {
        $this->service_name = $value;
    }
    
    public function getIsOnline ()
    {
        return $this->is_online;
    }
    
    public function setIsOnline ($value): void
    {
        $this->is_online = $value;
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