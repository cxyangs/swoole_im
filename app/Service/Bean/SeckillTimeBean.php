<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class SeckillTimeBean extends SplBean
{
    /**
     * remark 自增ID
     * type int(10)
     */        
    protected $id;
    
    /**
     * remark 开始时间段
     * type time
     */        
    protected $start_time;
    
    /**
     * remark 结束时间段
     * type time
     */        
    protected $end_time;
    
    /**
     * remark 秒杀时段标题
     * type varchar(50)
     */        
    protected $title;
    
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
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
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