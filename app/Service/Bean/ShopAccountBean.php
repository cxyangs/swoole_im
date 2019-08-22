<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopAccountBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 店铺id
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 父级id
     * type int(11)
     */        
    protected $pid;
    
    /**
     * remark 用户名
     * type varchar(255)
     */        
    protected $username;
    
    /**
     * remark 密码
     * type varchar(255)
     */        
    protected $password;
    
    /**
     * remark 加密值
     * type char(6)
     */        
    protected $salt;
    
    /**
     * remark 权限菜单id集合
     * type text
     */        
    protected $permission;
    
    /**
     * remark 状态
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 主账户
     * type varchar(255)
     */        
    protected $remark;
    
    /**
     * remark token
     * type varchar(255)
     */        
    protected $token;
    
    /**
     * remark 登录时间
     * type int(11)
     */        
    protected $logintime;
    
    /**
     * remark 创建时间
     * type int(11)
     */        
    protected $createtime;
    
    /**
     * remark 更新时间
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getPid ()
    {
        return $this->pid;
    }
    
    public function setPid ($value): void
    {
        $this->pid = $value;
    }
    
    public function getUsername ()
    {
        return $this->username;
    }
    
    public function setUsername ($value): void
    {
        $this->username = $value;
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
    
    public function getPermission ()
    {
        return $this->permission;
    }
    
    public function setPermission ($value): void
    {
        $this->permission = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getRemark ()
    {
        return $this->remark;
    }
    
    public function setRemark ($value): void
    {
        $this->remark = $value;
    }
    
    public function getToken ()
    {
        return $this->token;
    }
    
    public function setToken ($value): void
    {
        $this->token = $value;
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
    
    
}