<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ConfigBean extends SplBean
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
     * remark 
     * type text
     */        
    protected $configs;
    
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
    
    public function getConfigs ()
    {
        return $this->configs;
    }
    
    public function setConfigs ($value): void
    {
        $this->configs = $value;
    }
    
    
}