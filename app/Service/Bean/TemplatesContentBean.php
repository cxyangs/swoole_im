<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class TemplatesContentBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 模板id
     * type int(11)
     */        
    protected $templates_id;
    
    /**
     * remark 组件类型id
     * type tinyint(4)
     */        
    protected $type_id;
    
    /**
     * remark 排序值
     * type int(11)
     */        
    protected $sort;
    
    /**
     * remark 
     * type text
     */        
    protected $content;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getTemplatesId ()
    {
        return $this->templates_id;
    }
    
    public function setTemplatesId ($value): void
    {
        $this->templates_id = $value;
    }
    
    public function getTypeId ()
    {
        return $this->type_id;
    }
    
    public function setTypeId ($value): void
    {
        $this->type_id = $value;
    }
    
    public function getSort ()
    {
        return $this->sort;
    }
    
    public function setSort ($value): void
    {
        $this->sort = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
    }
    
    
}