<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ChatBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 用户id（uid与shop_id二选一）
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 店铺id
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $chat_id;
    
    /**
     * remark 客户端id
     * type varchar(255)
     */        
    protected $c_id;
    
    /**
     * remark 好友名称
     * type varchar(255)
     */        
    protected $friend_name;
    
    /**
     * remark 好友头像
     * type varchar(255)
     */        
    protected $friend_avatar;
    
    /**
     * remark 最后的一条消息内容
     * type varchar(255)
     */        
    protected $last_msg;
    
    /**
     * remark 最后的发送者id
     * type int(11)
     */        
    protected $to_uid;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $last_time;
    
    /**
     * remark 会话类型:1=个人聊天;2=群组消息;3=系统消息;4=客服消息
     * type tinyint(1)
     */        
    protected $chat_type;
    
    /**
     * remark 消息类型:1=文字;2=图片
     * type tinyint(1)
     */        
    protected $msg_type;
    
    /**
     * remark 未读消息数量
     * type int(11)
     */        
    protected $unread_count;
    
    /**
     * remark 
     * type tinyint(1)
     */        
    protected $is_del;
    
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getChatId ()
    {
        return $this->chat_id;
    }
    
    public function setChatId ($value): void
    {
        $this->chat_id = $value;
    }
    
    public function getCId ()
    {
        return $this->c_id;
    }
    
    public function setCId ($value): void
    {
        $this->c_id = $value;
    }
    
    public function getFriendName ()
    {
        return $this->friend_name;
    }
    
    public function setFriendName ($value): void
    {
        $this->friend_name = $value;
    }
    
    public function getFriendAvatar ()
    {
        return $this->friend_avatar;
    }
    
    public function setFriendAvatar ($value): void
    {
        $this->friend_avatar = $value;
    }
    
    public function getLastMsg ()
    {
        return $this->last_msg;
    }
    
    public function setLastMsg ($value): void
    {
        $this->last_msg = $value;
    }
    
    public function getToUid ()
    {
        return $this->to_uid;
    }
    
    public function setToUid ($value): void
    {
        $this->to_uid = $value;
    }
    
    public function getLastTime ()
    {
        return $this->last_time;
    }
    
    public function setLastTime ($value): void
    {
        $this->last_time = $value;
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
    
    public function getUnreadCount ()
    {
        return $this->unread_count;
    }
    
    public function setUnreadCount ($value): void
    {
        $this->unread_count = $value;
    }
    
    public function getIsDel ()
    {
        return $this->is_del;
    }
    
    public function setIsDel ($value): void
    {
        $this->is_del = $value;
    }
    
    
}