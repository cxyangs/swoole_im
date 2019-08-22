<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AdminBean extends SplBean
{
    /**
     * remark ID
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 用户名
     * type varchar(20)
     */        
    protected $username;
    
    /**
     * remark 昵称
     * type varchar(50)
     */        
    protected $nickname;
    
    /**
     * remark 密码
     * type varchar(32)
     */        
    protected $password;
    
    /**
     * remark 密码盐
     * type varchar(30)
     */        
    protected $salt;
    
    /**
     * remark 头像
     * type varchar(100)
     */        
    protected $avatar;
    
    /**
     * remark 电子邮箱
     * type varchar(100)
     */        
    protected $email;
    
    /**
     * remark 失败次数
     * type tinyint(1) unsigned
     */        
    protected $loginfailure;
    
    /**
     * remark 登录时间
     * type int(10) unsigned
     */        
    protected $logintime;
    
    /**
     * remark 创建时间
     * type int(10) unsigned
     */        
    protected $createtime;
    
    /**
     * remark 更新时间
     * type int(10) unsigned
     */        
    protected $updatetime;
    
    /**
     * remark Session标识
     * type varchar(59)
     */        
    protected $token;
    
    /**
     * remark 状态
     * type varchar(30)
     */        
    protected $status;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getUsername ()
    {
        return $this->username;
    }
    
    public function setUsername ($value): void
    {
        $this->username = $value;
    }
    
    public function getNickname ()
    {
        return $this->nickname;
    }
    
    public function setNickname ($value): void
    {
        $this->nickname = $value;
    }
    
    public function getPassword ()
    {
        return $this->password;
    }
    
    public function setPassword ($value): void
    {
        $this->password = $value;
    }
    
    public function getSalt ()
    {
        return $this->salt;
    }
    
    public function setSalt ($value): void
    {
        $this->salt = $value;
    }
    
    public function getAvatar ()
    {
        return $this->avatar;
    }
    
    public function setAvatar ($value): void
    {
        $this->avatar = $value;
    }
    
    public function getEmail ()
    {
        return $this->email;
    }
    
    public function setEmail ($value): void
    {
        $this->email = $value;
    }
    
    public function getLoginfailure ()
    {
        return $this->loginfailure;
    }
    
    public function setLoginfailure ($value): void
    {
        $this->loginfailure = $value;
    }
    
    public function getLogintime ()
    {
        return $this->logintime;
    }
    
    public function setLogintime ($value): void
    {
        $this->logintime = $value;
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
    
    public function getToken ()
    {
        return $this->token;
    }
    
    public function setToken ($value): void
    {
        $this->token = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    
}