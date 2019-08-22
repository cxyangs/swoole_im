<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class SmsBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 手机号
     * type varchar(20)
     */        
    protected $mobile;
    
    /**
     * remark 短信内容
     * type varchar(255)
     */        
    protected $content;
    
    /**
     * remark 发送结果
     * type varchar(255)
     */        
    protected $result;
    
    /**
     * remark 
     * type timestamp
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
    
    public function getMobile ()
    {
        return $this->mobile;
    }
    
    public function setMobile ($value): void
    {
        $this->mobile = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
    }
    
    public function getResult ()
    {
        return $this->result;
    }
    
    public function setResult ($value): void
    {
        $this->result = $value;
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