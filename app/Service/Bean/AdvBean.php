<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AdvBean extends SplBean
{
    /**
     * remark 
     * type int(10)
     */        
    protected $id;
    
    /**
     * remark 广告位id
     * type int(11)
     */        
    protected $ap_id;
    
    /**
     * remark 广告标题
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 广告图片
     * type varchar(255)
     */        
    protected $image;
    
    /**
     * remark 广告链接
     * type varchar(255)
     */        
    protected $url;
    
    /**
     * remark 广告开始时间
     * type int(11)
     */        
    protected $start_time;
    
    /**
     * remark 广告结束时间
     * type int(11)
     */        
    protected $end_time;
    
    /**
     * remark 排序
     * type smallint(6)
     */        
    protected $listsort;
    
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
    
    public function getApId ()
    {
        return $this->ap_id;
    }
    
    public function setApId ($value): void
    {
        $this->ap_id = $value;
    }
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
    }
    
    public function getImage ()
    {
        return $this->image;
    }
    
    public function setImage ($value): void
    {
        $this->image = $value;
    }
    
    public function getUrl ()
    {
        return $this->url;
    }
    
    public function setUrl ($value): void
    {
        $this->url = $value;
    }
    
    public function getStartTime ()
    {
        return $this->start_time;
    }
    
    public function setStartTime ($value): void
    {
        $this->start_time = $value;
    }
    
    public function getEndTime ()
    {
        return $this->end_time;
    }
    
    public function setEndTime ($value): void
    {
        $this->end_time = $value;
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