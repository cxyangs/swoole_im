<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class SeckillBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 秒杀活动名称
     * type varchar(255)
     */        
    protected $name;
    
    /**
     * remark 秒杀开始时间
     * type int(10)
     */        
    protected $start_time;
    
    /**
     * remark 秒杀结束时间
     * type int(10)
     */        
    protected $end_time;
    
    /**
     * remark 状态:0=下架;1=上架
     * type tinyint(1)
     */        
    protected $status;
    
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
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
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
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
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