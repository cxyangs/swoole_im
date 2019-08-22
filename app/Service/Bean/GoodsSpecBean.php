<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsSpecBean extends SplBean
{
    /**
     * remark 规格id
     * type mediumint(8) unsigned
     */        
    protected $id;
    
    /**
     * remark 规格名称
     * type varchar(60)
     */        
    protected $spec_name;
    
    /**
     * remark 分类
     * type mediumint(8)
     */        
    protected $cate_id;
    
    /**
     * remark 规格排序
     * type int(8) unsigned
     */        
    protected $listorder;
    
    /**
     * remark 店铺id,0表示总后台添加
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
    
    public function getSpecName ()
    {
        return $this->spec_name;
    }
    
    public function setSpecName ($value): void
    {
        $this->spec_name = $value;
    }
    
    public function getCateId ()
    {
        return $this->cate_id;
    }
    
    public function setCateId ($value): void
    {
        $this->cate_id = $value;
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