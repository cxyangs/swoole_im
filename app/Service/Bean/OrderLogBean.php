<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderLogBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 订单id
     * type int(11)
     */        
    protected $order_id;
    
    /**
     * remark 角色:1=用户;2=店铺;0=系统总后台
     * type tinyint(1)
     */        
    protected $role;
    
    /**
     * remark 操作人id
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 操作人名称
     * type varchar(255)
     */        
    protected $name;
    
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
    
    public function getOrderId ()
    {
        return $this->order_id;
    }
    
    public function setOrderId ($value): void
    {
        $this->order_id = $value;
    }
    
    public function getRole ()
    {
        return $this->role;
    }
    
    public function setRole ($value): void
    {
        $this->role = $value;
    }
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
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