<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class DistrictBean extends SplBean
{
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $id;
    
    /**
     * remark 
     * type int(7)
     */        
    protected $code;
    
    /**
     * remark 
     * type varchar(50)
     */        
    protected $name;
    
    /**
     * remark 
     * type tinyint(1) unsigned
     */        
    protected $level;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getCode ()
    {
        return $this->code;
    }
    
    public function setCode ($value): void
    {
        $this->code = $value;
    }
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getLevel ()
    {
        return $this->level;
    }
    
    public function setLevel ($value): void
    {
        $this->level = $value;
    }
    
    
}