<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopRuleBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 父级id
     * type int(11)
     */        
    protected $pid;
    
    /**
     * remark vue路由名称
     * type varchar(255)
     */        
    protected $name;
    
    /**
     * remark 标题
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 接口路由
     * type varchar(255)
     */        
    protected $api;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $icon;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $remark;
    
    /**
     * remark 
     * type tinyint(1)
     */        
    protected $is_menu;
    
    /**
     * remark 状态
     * type enum('hidden','normal')
     */        
    protected $status;
    
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
    
    public function getPid ()
    {
        return $this->pid;
    }
    
    public function setPid ($value): void
    {
        $this->pid = $value;
    }
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
    }
    
    public function getApi ()
    {
        return $this->api;
    }
    
    public function setApi ($value): void
    {
        $this->api = $value;
    }
    
    public function getIcon ()
    {
        return $this->icon;
    }
    
    public function setIcon ($value): void
    {
        $this->icon = $value;
    }
    
    public function getRemark ()
    {
        return $this->remark;
    }
    
    public function setRemark ($value): void
    {
        $this->remark = $value;
    }
    
    public function getIsMenu ()
    {
        return $this->is_menu;
    }
    
    public function setIsMenu ($value): void
    {
        $this->is_menu = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
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