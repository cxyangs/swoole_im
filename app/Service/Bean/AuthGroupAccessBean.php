<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AuthGroupAccessBean extends SplBean
{
    /**
     * remark 会员ID
     * type int(10) unsigned
     */        
    protected $uid;
    
    /**
     * remark 级别ID
     * type int(10) unsigned
     */        
    protected $group_id;
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getGroupId ()
    {
        return $this->group_id;
    }
    
    public function setGroupId ($value): void
    {
        $this->group_id = $value;
    }
    
    
}