<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ImpactBean extends SplBean
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
     * remark 影响力类型:1=分享;2=拉新粉;3=自购;4=粉丝购;5=每日登陆
     * type tinyint(4)
     */        
    protected $type;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $impact;
    
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
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getImpact ()
    {
        return $this->impact;
    }
    
    public function setImpact ($value): void
    {
        $this->impact = $value;
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