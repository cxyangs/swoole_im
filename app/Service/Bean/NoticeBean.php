<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class NoticeBean extends SplBean
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
    protected $uid;
    
    /**
     * remark 通知标题
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 通知内容
     * type varchar(255)
     */        
    protected $content;
    
    /**
     * remark 是否已读
     * type tinyint(1)
     */        
    protected $is_read;
    
    /**
     * remark 是否删除
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
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
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
    
    public function getIsRead ()
    {
        return $this->is_read;
    }
    
    public function setIsRead ($value): void
    {
        $this->is_read = $value;
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