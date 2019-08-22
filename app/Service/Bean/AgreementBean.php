<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AgreementBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 协议分类id
     * type tinyint(1)
     */        
    protected $cate_id;
    
    /**
     * remark 协议编号
     * type varchar(50)
     */        
    protected $number;
    
    /**
     * remark 协议标题
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 协议内容
     * type text
     */        
    protected $content;
    
    /**
     * remark 
     * type tinyint(1)
     */        
    protected $is_del;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $createtime;
    
    /**
     * remark 
     * type int(11)
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
    
    public function getCateId ()
    {
        return $this->cate_id;
    }
    
    public function setCateId ($value): void
    {
        $this->cate_id = $value;
    }
    
    public function getNumber ()
    {
        return $this->number;
    }
    
    public function setNumber ($value): void
    {
        $this->number = $value;
    }
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
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