<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class QueueBean extends SplBean
{
    /**
     * remark 
     * type bigint(10)
     */        
    protected $id;
    
    /**
     * remark 队列名称
     * type varchar(50)
     */        
    protected $name;
    
    /**
     * remark 类名
     * type varchar(50)
     */        
    protected $class;
    
    /**
     * remark 方法
     * type varchar(50)
     */        
    protected $method;
    
    /**
     * remark 参数
     * type text
     */        
    protected $params;
    
    /**
     * remark 失败次数
     * type tinyint(1)
     */        
    protected $fail_num;
    
    /**
     * remark 失败原因
     * type varchar(255)
     */        
    protected $fail_reason;
    
    /**
     * remark 消费进程名称
     * type varchar(255)
     */        
    protected $comsumer_name;
    
    /**
     * remark 状态:1=进行中;2=完成;3=失败
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $updatetime;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $createtime;
    
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
    
    public function getClass ()
    {
        return $this->class;
    }
    
    public function setClass ($value): void
    {
        $this->class = $value;
    }
    
    public function getMethod ()
    {
        return $this->method;
    }
    
    public function setMethod ($value): void
    {
        $this->method = $value;
    }
    
    public function getParams ()
    {
        return $this->params;
    }
    
    public function setParams ($value): void
    {
        $this->params = $value;
    }
    
    public function getFailNum ()
    {
        return $this->fail_num;
    }
    
    public function setFailNum ($value): void
    {
        $this->fail_num = $value;
    }
    
    public function getFailReason ()
    {
        return $this->fail_reason;
    }
    
    public function setFailReason ($value): void
    {
        $this->fail_reason = $value;
    }
    
    public function getComsumerName ()
    {
        return $this->comsumer_name;
    }
    
    public function setComsumerName ($value): void
    {
        $this->comsumer_name = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getUpdatetime ()
    {
        return $this->updatetime;
    }
    
    public function setUpdatetime ($value): void
    {
        $this->updatetime = $value;
    }
    
    public function getCreatetime ()
    {
        return $this->createtime;
    }
    
    public function setCreatetime ($value): void
    {
        $this->createtime = $value;
    }
    
    
}