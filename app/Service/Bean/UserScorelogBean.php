<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class UserScorelogBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 用户id
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 积分变动值
     * type int(11)
     */        
    protected $score;
    
    /**
     * remark 变动类型:1=增加;2=减少
     * type tinyint(4)
     */        
    protected $type;
    
    /**
     * remark 记录来源id
     * type int(11)
     */        
    protected $source_id;
    
    /**
     * remark 积分来源类型:1=用户投票;2=网红得票;3=分享;4=分享注册
     * type tinyint(1)
     */        
    protected $source_type;
    
    /**
     * remark 描述
     * type varchar(255)
     */        
    protected $description;
    
    /**
     * remark 
     * type int(11)
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
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getScore ()
    {
        return $this->score;
    }
    
    public function setScore ($value): void
    {
        $this->score = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getSourceId ()
    {
        return $this->source_id;
    }
    
    public function setSourceId ($value): void
    {
        $this->source_id = $value;
    }
    
    public function getSourceType ()
    {
        return $this->source_type;
    }
    
    public function setSourceType ($value): void
    {
        $this->source_type = $value;
    }
    
    public function getDescription ()
    {
        return $this->description;
    }
    
    public function setDescription ($value): void
    {
        $this->description = $value;
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