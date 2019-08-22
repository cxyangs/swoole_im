<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderShopReturnBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 商家地址
     * type varchar(255)
     */        
    protected $shop_address;
    
    /**
     * remark 收件人
     * type varchar(50)
     */        
    protected $seller_name;
    
    /**
     * remark 收件人手机号
     * type varchar(11)
     */        
    protected $seller_mobile;
    
    /**
     * remark 邮编
     * type varchar(20)
     */        
    protected $seller_zipcode;
    
    /**
     * remark 创建时间
     * type int(11)
     */        
    protected $create_time;
    
    /**
     * remark 修改时间
     * type int(11)
     */        
    protected $modify_time;
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getShopAddress ()
    {
        return $this->shop_address;
    }
    
    public function setShopAddress ($value): void
    {
        $this->shop_address = $value;
    }
    
    public function getSellerName ()
    {
        return $this->seller_name;
    }
    
    public function setSellerName ($value): void
    {
        $this->seller_name = $value;
    }
    
    public function getSellerMobile ()
    {
        return $this->seller_mobile;
    }
    
    public function setSellerMobile ($value): void
    {
        $this->seller_mobile = $value;
    }
    
    public function getSellerZipcode ()
    {
        return $this->seller_zipcode;
    }
    
    public function setSellerZipcode ($value): void
    {
        $this->seller_zipcode = $value;
    }
    
    public function getCreateTime ()
    {
        return $this->create_time;
    }
    
    public function setCreateTime ($value): void
    {
        $this->create_time = $value;
    }
    
    public function getModifyTime ()
    {
        return $this->modify_time;
    }
    
    public function setModifyTime ($value): void
    {
        $this->modify_time = $value;
    }
    
    
}