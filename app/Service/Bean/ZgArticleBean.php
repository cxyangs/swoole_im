<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ZgArticleBean extends SplBean
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
    protected $cate_id;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 
     * type varchar(255)
     */        
    protected $img;
    
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
    
    public function getCateId ()
    {
        return $this->cate_id;
    }
    
    public function setCateId ($value): void
    {
        $this->cate_id = $value;
    }
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
    }
    
    public function getImg ()
    {
        return $this->img;
    }
    
    public function setImg ($value): void
    {
        $this->img = $value;
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