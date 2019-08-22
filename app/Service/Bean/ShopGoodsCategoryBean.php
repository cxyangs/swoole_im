<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopGoodsCategoryBean extends SplBean
{
    /**
     * remark 分类id
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 上级id
     * type int(11)
     */        
    protected $pid;
    
    /**
     * remark 店铺id
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 分类名称
     * type varchar(50)
     */        
    protected $cate_name;
    
    /**
     * remark 关键词
     * type varchar(20)
     */        
    protected $keywords;
    
    /**
     * remark 分类描述
     * type varchar(255)
     */        
    protected $cate_desc;
    
    /**
     * remark 分类图标
     * type varchar(255)
     */        
    protected $cate_logo;
    
    /**
     * remark 是否显示
     * type tinyint(1)
     */        
    protected $is_show;
    
    /**
     * remark 排序
     * type tinyint(1)
     */        
    protected $listsort;
    
    /**
     * remark 
     * type tinyint(1)
     */        
    protected $is_del;
    
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
    
    public function getPid ()
    {
        return $this->pid;
    }
    
    public function setPid ($value): void
    {
        $this->pid = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getCateName ()
    {
        return $this->cate_name;
    }
    
    public function setCateName ($value): void
    {
        $this->cate_name = $value;
    }
    
    public function getKeywords ()
    {
        return $this->keywords;
    }
    
    public function setKeywords ($value): void
    {
        $this->keywords = $value;
    }
    
    public function getCateDesc ()
    {
        return $this->cate_desc;
    }
    
    public function setCateDesc ($value): void
    {
        $this->cate_desc = $value;
    }
    
    public function getCateLogo ()
    {
        return $this->cate_logo;
    }
    
    public function setCateLogo ($value): void
    {
        $this->cate_logo = $value;
    }
    
    public function getIsShow ()
    {
        return $this->is_show;
    }
    
    public function setIsShow ($value): void
    {
        $this->is_show = $value;
    }
    
    public function getListsort ()
    {
        return $this->listsort;
    }
    
    public function setListsort ($value): void
    {
        $this->listsort = $value;
    }
    
    public function getIsDel ()
    {
        return $this->is_del;
    }
    
    public function setIsDel ($value): void
    {
        $this->is_del = $value;
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