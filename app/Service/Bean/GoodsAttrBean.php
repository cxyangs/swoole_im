<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsAttrBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 
     * type mediumint(8) unsigned
     */        
    protected $goods_id;
    
    /**
     * remark 
     * type smallint(5) unsigned
     */        
    protected $attr_id;
    
    /**
     * remark 
     * type text
     */        
    protected $attr_value;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getGoodsId ()
    {
        return $this->goods_id;
    }
    
    public function setGoodsId ($value): void
    {
        $this->goods_id = $value;
    }
    
    public function getAttrId ()
    {
        return $this->attr_id;
    }
    
    public function setAttrId ($value): void
    {
        $this->attr_id = $value;
    }
    
    public function getAttrValue ()
    {
        return $this->attr_value;
    }
    
    public function setAttrValue ($value): void
    {
        $this->attr_value = $value;
    }
    
    
}