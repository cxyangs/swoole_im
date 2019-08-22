<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ThirdBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 用户id
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 第三方平台:1=微信小程序;2=微信开放平台授权
     * type tinyint(1)
     */        
    protected $platform;
    
    /**
     * remark 
     * type varchar(50)
     */        
    protected $openid;
    
    /**
     * remark 
     * type varchar(50)
     */        
    protected $unionid;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $access_token;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $session_key;
    
    /**
     * remark 过期时间
     * type int(11)
     */        
    protected $expiretime;
    
    /**
     * remark 0
     * type int(11)
     */        
    protected $createtime;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $updatetime;
    
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
    
    public function getPlatform ()
    {
        return $this->platform;
    }
    
    public function setPlatform ($value): void
    {
        $this->platform = $value;
    }
    
    public function getOpenid ()
    {
        return $this->openid;
    }
    
    public function setOpenid ($value): void
    {
        $this->openid = $value;
    }
    
    public function getUnionid ()
    {
        return $this->unionid;
    }
    
    public function setUnionid ($value): void
    {
        $this->unionid = $value;
    }
    
    public function getAccessToken ()
    {
        return $this->access_token;
    }
    
    public function setAccessToken ($value): void
    {
        $this->access_token = $value;
    }
    
    public function getSessionKey ()
    {
        return $this->session_key;
    }
    
    public function setSessionKey ($value): void
    {
        $this->session_key = $value;
    }
    
    public function getExpiretime ()
    {
        return $this->expiretime;
    }
    
    public function setExpiretime ($value): void
    {
        $this->expiretime = $value;
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
    
    
}