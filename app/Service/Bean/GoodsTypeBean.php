<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsTypeBean extends SplBean
{
    /**
     * remark 
     * type smallint(5) unsigned
     */        
    protected $id;
    
    /**
     * remark 类型名称
     * type varchar(60)
     */        
    protected $type_name;
    
    /**
     * remark 1:正常 0:禁止
     * type tinyint(1) unsigned
     */        
    protected $is_show;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $shop_id;
    
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
    
    public function getTypeName ()
    {
        return $this->type_name;
    }
    
    public function setTypeName ($value): void
    {
        $this->type_name = $value;
    }
    
    public function getIsShow ()
    {
        return $this->is_show;
    }
    
    public function setIsShow ($value): void
    {
        $this->is_show = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
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