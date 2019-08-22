<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsAttributeBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 属性名称
     * type varchar(255)
     */        
    protected $attr_name;
    
    /**
     * remark 商品类型
     * type int(11)
     */        
    protected $type_id;
    
    /**
     * remark 输入方式 1:手动录入 2:复选 3:单选
     * type smallint(4)
     */        
    protected $input_type;
    
    /**
     * remark 列表值 英文(,)号隔开
     * type text
     */        
    protected $input_val;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 0正常 1删除
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
    
    public function getAttrName ()
    {
        return $this->attr_name;
    }
    
    public function setAttrName ($value): void
    {
        $this->attr_name = $value;
    }
    
    public function getTypeId ()
    {
        return $this->type_id;
    }
    
    public function setTypeId ($value): void
    {
        $this->type_id = $value;
    }
    
    public function getInputType ()
    {
        return $this->input_type;
    }
    
    public function setInputType ($value): void
    {
        $this->input_type = $value;
    }
    
    public function getInputVal ()
    {
        return $this->input_val;
    }
    
    public function setInputVal ($value): void
    {
        $this->input_val = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
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