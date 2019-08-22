<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AddressBean extends SplBean
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
     * remark 收货人姓名
     * type varchar(255)
     */        
    protected $name;
    
    /**
     * remark 收货人手机号
     * type varchar(11)
     */        
    protected $mobile;
    
    /**
     * remark 省
     * type varchar(6)
     */        
    protected $province;
    
    /**
     * remark 
     * type varchar(6)
     */        
    protected $city;
    
    /**
     * remark 区
     * type varchar(6)
     */        
    protected $district;
    
    /**
     * remark 详细地址
     * type varchar(255)
     */        
    protected $address;
    
    /**
     * remark 是否默认
     * type tinyint(1)
     */        
    protected $is_default;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $createtime;
    
    /**
     * remark 
     * type int(10)
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
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getMobile ()
    {
        return $this->mobile;
    }
    
    public function setMobile ($value): void
    {
        $this->mobile = $value;
    }
    
    public function getProvince ()
    {
        return $this->province;
    }
    
    public function setProvince ($value): void
    {
        $this->province = $value;
    }
    
    public function getCity ()
    {
        return $this->city;
    }
    
    public function setCity ($value): void
    {
        $this->city = $value;
    }
    
    public function getDistrict ()
    {
        return $this->district;
    }
    
    public function setDistrict ($value): void
    {
        $this->district = $value;
    }
    
    public function getAddress ()
    {
        return $this->address;
    }
    
    public function setAddress ($value): void
    {
        $this->address = $value;
    }
    
    public function getIsDefault ()
    {
        return $this->is_default;
    }
    
    public function setIsDefault ($value): void
    {
        $this->is_default = $value;
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