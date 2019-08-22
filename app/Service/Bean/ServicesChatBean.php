<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ServicesChatBean extends SplBean
{
    /**
     * remark 
     * type bigint(20)
     */        
    protected $id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $from_uid;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $to_uid;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 消息类型:0=文字消息;1=图片
     * type tinyint(1)
     */        
    protected $type;
    
    /**
     * remark 聊天内容
     * type varchar(255)
     */        
    protected $content;
    
    /**
     * remark 消息状态:0=未读;1=已读;-1=删除
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 用户与客服聊天标识
     * type varchar(20)
     */        
    protected $hash;
    
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
    
    public function getFromUid ()
    {
        return $this->from_uid;
    }
    
    public function setFromUid ($value): void
    {
        $this->from_uid = $value;
    }
    
    public function getToUid ()
    {
        return $this->to_uid;
    }
    
    public function setToUid ($value): void
    {
        $this->to_uid = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getContent ()
    {
        return $this->content;
    }
    
    public function setContent ($value): void
    {
        $this->content = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getHash ()
    {
        return $this->hash;
    }
    
    public function setHash ($value): void
    {
        $this->hash = $value;
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