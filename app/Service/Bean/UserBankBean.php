<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class UserBankBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $realname;
    
    /**
     * remark 银行名称
     * type varchar(255)
     */        
    protected $bank_name;
    
    /**
     * remark 银行卡号
     * type varchar(50)
     */        
    protected $bank_number;
    
    /**
     * remark 银行预留手机号
     * type varchar(11)
     */        
    protected $bank_mobile;
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getRealname ()
    {
        return $this->realname;
    }
    
    public function setRealname ($value): void
    {
        $this->realname = $value;
    }
    
    public function getBankName ()
    {
        return $this->bank_name;
    }
    
    public function setBankName ($value): void
    {
        $this->bank_name = $value;
    }
    
    public function getBankNumber ()
    {
        return $this->bank_number;
    }
    
    public function setBankNumber ($value): void
    {
        $this->bank_number = $value;
    }
    
    public function getBankMobile ()
    {
        return $this->bank_mobile;
    }
    
    public function setBankMobile ($value): void
    {
        $this->bank_mobile = $value;
    }
    
    
}