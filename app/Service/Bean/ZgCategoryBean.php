<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ZgCategoryBean extends SplBean
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
    protected $pid;
    
    /**
     * remark 
     * type varchar(50)
     */        
    protected $flag;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $name;
    
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
    
    public function getFlag ()
    {
        return $this->flag;
    }
    
    public function setFlag ($value): void
    {
        $this->flag = $value;
    }
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    
}