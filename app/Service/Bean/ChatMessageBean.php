<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ChatMessageBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 会话id
     * type varchar(255)
     */        
    protected $chat_id;
    
    /**
     * remark 发送人id
     * type int(11)
     */        
    protected $from_uid;
    
    /**
     * remark 接受人id
     * type int(11)
     */        
    protected $to_uid;
    
    /**
     * remark 会话类型:1=个人聊天;2=群组消息;3=系统消息
     * type tinyint(1)
     */        
    protected $chat_type;
    
    /**
     * remark 消息类型:1=文字;2=图片
     * type tinyint(1)
     */        
    protected $msg_type;
    
    /**
     * remark 消息内容
     * type varchar(255)
     */        
    protected $msg;
    
    /**
     * remark 发送时间
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
    
    public function getChatId ()
    {
        return $this->chat_id;
    }
    
    public function setChatId ($value): void
    {
        $this->chat_id = $value;
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
    
    public function getChatType ()
    {
        return $this->chat_type;
    }
    
    public function setChatType ($value): void
    {
        $this->chat_type = $value;
    }
    
    public function getMsgType ()
    {
        return $this->msg_type;
    }
    
    public function setMsgType ($value): void
    {
        $this->msg_type = $value;
    }
    
    public function getMsg ()
    {
        return $this->msg;
    }
    
    public function setMsg ($value): void
    {
        $this->msg = $value;
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