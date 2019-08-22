<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ArticleBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 分类id
     * type varchar(200)
     */        
    protected $cate_id;
    
    /**
     * remark 文章标题
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 缩略图
     * type varchar(255)
     */        
    protected $thumb;
    
    /**
     * remark 文章内容
     * type text
     */        
    protected $content;
    
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
    
    /**
     * remark 协议编号
     * type varchar(59)
     */        
    protected $agreement_number;
    
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
    
    public function getThumb ()
    {
        return $this->thumb;
    }
    
    public function setThumb ($value): void
    {
        $this->thumb = $value;
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
    
    public function getAgreementNumber ()
    {
        return $this->agreement_number;
    }
    
    public function setAgreementNumber ($value): void
    {
        $this->agreement_number = $value;
    }
    
    
}