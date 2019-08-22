<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class TemplatesBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 模板名称
     * type varchar(255)
     */        
    protected $templates_name;
    
    /**
     * remark 每页显示数
     * type tinyint(4)
     */        
    protected $pagesize;
    
    /**
     * remark 状态:0=未使用;1=使用中
     * type tinyint(1)
     */        
    protected $status;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getTemplatesName ()
    {
        return $this->templates_name;
    }
    
    public function setTemplatesName ($value): void
    {
        $this->templates_name = $value;
    }
    
    public function getPagesize ()
    {
        return $this->pagesize;
    }
    
    public function setPagesize ($value): void
    {
        $this->pagesize = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    
}