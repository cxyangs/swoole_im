<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AuthGroupBean extends SplBean
{
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 父组别
     * type int(10) unsigned
     */        
    protected $pid;
    
    /**
     * remark 组名
     * type varchar(100)
     */        
    protected $name;
    
    /**
     * remark 规则ID
     * type text
     */        
    protected $rules;
    
    /**
     * remark 创建时间
     * type int(10) unsigned
     */        
    protected $createtime;
    
    /**
     * remark 更新时间
     * type int(10) unsigned
     */        
    protected $updatetime;
    
    /**
     * remark 状态
     * type varchar(30)
     */        
    protected $status;
    
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
    
    public function getRules ()
    {
        return $this->rules;
    }
    
    public function setRules ($value): void
    {
        $this->rules = $value;
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
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    
}