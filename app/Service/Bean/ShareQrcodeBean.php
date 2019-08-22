<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShareQrcodeBean extends SplBean
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
     * type varchar(30)
     */        
    protected $key_map;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $qr_code;
    
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
    
    public function getKeyMap ()
    {
        return $this->key_map;
    }
    
    public function setKeyMap ($value): void
    {
        $this->key_map = $value;
    }
    
    public function getQrCode ()
    {
        return $this->qr_code;
    }
    
    public function setQrCode ($value): void
    {
        $this->qr_code = $value;
    }
    
    
}