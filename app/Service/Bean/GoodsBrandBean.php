<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsBrandBean extends SplBean
{
    /**
     * remark 
     * type smallint(5) unsigned
     */        
    protected $id;
    
    /**
     * remark 
     * type varchar(60)
     */        
    protected $brand_name;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $brand_logo;
    
    /**
     * remark 
     * type text
     */        
    protected $brand_desc;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $brand_url;
    
    /**
     * remark 
     * type tinyint(3) unsigned
     */        
    protected $listsort;
    
    /**
     * remark 
     * type tinyint(1) unsigned
     */        
    protected $is_show;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $updatetime;
    
    /**
     * remark 
     * type int(10)
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
    
    public function getBrandName ()
    {
        return $this->brand_name;
    }
    
    public function setBrandName ($value): void
    {
        $this->brand_name = $value;
    }
    
    public function getBrandLogo ()
    {
        return $this->brand_logo;
    }
    
    public function setBrandLogo ($value): void
    {
        $this->brand_logo = $value;
    }
    
    public function getBrandDesc ()
    {
        return $this->brand_desc;
    }
    
    public function setBrandDesc ($value): void
    {
        $this->brand_desc = $value;
    }
    
    public function getBrandUrl ()
    {
        return $this->brand_url;
    }
    
    public function setBrandUrl ($value): void
    {
        $this->brand_url = $value;
    }
    
    public function getListsort ()
    {
        return $this->listsort;
    }
    
    public function setListsort ($value): void
    {
        $this->listsort = $value;
    }
    
    public function getIsShow ()
    {
        return $this->is_show;
    }
    
    public function setIsShow ($value): void
    {
        $this->is_show = $value;
    }
    
    public function getUpdatetime ()
    {
        return $this->updatetime;
    }
    
    public function setUpdatetime ($value): void
    {
        $this->updatetime = $value;
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