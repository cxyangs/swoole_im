<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShareImgBean extends SplBean
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
     * remark 
     * type varchar(255)
     */        
    protected $image;
    
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
    
    public function getImage ()
    {
        return $this->image;
    }
    
    public function setImage ($value): void
    {
        $this->image = $value;
    }
    
    
}