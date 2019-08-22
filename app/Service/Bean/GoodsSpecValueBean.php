<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsSpecValueBean extends SplBean
{
    /**
     * remark 
     * type mediumint(8) unsigned
     */        
    protected $id;
    
    /**
     * remark 规格id
     * type int(10)
     */        
    protected $spec_id;
    
    /**
     * remark 规格值名称
     * type varchar(100)
     */        
    protected $spec_value_name;
    
    /**
     * remark 排序
     * type mediumint(5) unsigned
     */        
    protected $listorder;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 规格icon图标
     * type varchar(255)
     */        
    protected $spec_img;
    
    /**
     * remark 
     * type int(10) unsigned
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
    
    public function getSpecId ()
    {
        return $this->spec_id;
    }
    
    public function setSpecId ($value): void
    {
        $this->spec_id = $value;
    }
    
    public function getSpecValueName ()
    {
        return $this->spec_value_name;
    }
    
    public function setSpecValueName ($value): void
    {
        $this->spec_value_name = $value;
    }
    
    public function getListorder ()
    {
        return $this->listorder;
    }
    
    public function setListorder ($value): void
    {
        $this->listorder = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getSpecImg ()
    {
        return $this->spec_img;
    }
    
    public function setSpecImg ($value): void
    {
        $this->spec_img = $value;
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