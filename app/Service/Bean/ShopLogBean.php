<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopLogBean extends SplBean
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
    protected $shop_id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $admin_id;
    
    /**
     * remark 操作说明
     * type varchar(255)
     */        
    protected $content;
    
    /**
     * remark 请求参数
     * type tinytext
     */        
    protected $params;
    
    /**
     * remark 请求ip
     * type varchar(25)
     */        
    protected $ip;
    
    /**
     * remark 
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
    
    public function getAdminId ()
    {
        return $this->admin_id;
    }
    
    public function setAdminId ($value): void
    {
        $this->admin_id = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
    }
    
    public function getParams ()
    {
        return $this->params;
    }
    
    public function setParams ($value): void
    {
        $this->params = $value;
    }
    
    public function getIp ()
    {
        return $this->ip;
    }
    
    public function setIp ($value): void
    {
        $this->ip = $value;
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