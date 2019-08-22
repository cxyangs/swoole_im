<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ExpressTemplateBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 模板名称
     * type varchar(50)
     */        
    protected $name;
    
    /**
     * remark 运费标题
     * type varchar(50)
     */        
    protected $title;
    
    /**
     * remark 计费方式:1=按件;2=按重量;
     * type tinyint(1)
     */        
    protected $type;
    
    /**
     * remark 免邮额度
     * type decimal(10,2)
     */        
    protected $freight_free;
    
    /**
     * remark 免邮区域id
     * type text
     */        
    protected $freight_free_address;
    
    /**
     * remark 
     * type text
     */        
    protected $content;
    
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getFreightFree ()
    {
        return $this->freight_free;
    }
    
    public function setFreightFree ($value): void
    {
        $this->freight_free = $value;
    }
    
    public function getFreightFreeAddress ()
    {
        return $this->freight_free_address;
    }
    
    public function setFreightFreeAddress ($value): void
    {
        $this->freight_free_address = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
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