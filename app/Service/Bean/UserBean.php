<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class UserBean extends SplBean
{
    /**
     * remark ID
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 组别ID
     * type int(10) unsigned
     */        
    protected $group_id;
    
    /**
     * remark 等级
     * type tinyint(1) unsigned
     */        
    protected $level_id;
    
    /**
     * remark 推荐人id
     * type int(11)
     */        
    protected $pid;
    
    /**
     * remark 用户名
     * type varchar(32)
     */        
    protected $username;
    
    /**
     * remark 昵称
     * type varchar(50)
     */        
    protected $nickname;
    
    /**
     * remark 密码
     * type varchar(32)
     */        
    protected $password;
    
    /**
     * remark 密码盐
     * type varchar(30)
     */        
    protected $salt;
    
    /**
     * remark 余额
     * type decimal(10,2)
     */        
    protected $balance;
    
    /**
     * remark 电子邮箱
     * type varchar(100)
     */        
    protected $email;
    
    /**
     * remark 手机号
     * type varchar(11)
     */        
    protected $mobile;
    
    /**
     * remark 微信号
     * type varchar(255)
     */        
    protected $wechat;
    
    /**
     * remark 头像
     * type varchar(255)
     */        
    protected $avatar;
    
    /**
     * remark 性别
     * type tinyint(1) unsigned
     */        
    protected $gender;
    
    /**
     * remark 生日
     * type date
     */        
    protected $birthday;
    
    /**
     * remark 影响力
     * type int(11)
     */        
    protected $impact;
    
    /**
     * remark 积分
     * type int(10) unsigned
     */        
    protected $score;
    
    /**
     * remark 拉粉总已奖励金额
     * type int(11)
     */        
    protected $total_fans_reward;
    
    /**
     * remark 分享二维码
     * type tinytext
     */        
    protected $share_qr;
    
    /**
     * remark 连续登录天数
     * type int(10) unsigned
     */        
    protected $successions;
    
    /**
     * remark 最大连续登录天数
     * type int(10) unsigned
     */        
    protected $maxsuccessions;
    
    /**
     * remark 上次登录时间
     * type int(10) unsigned
     */        
    protected $prevtime;
    
    /**
     * remark 登录时间
     * type int(10) unsigned
     */        
    protected $logintime;
    
    /**
     * remark 登录IP
     * type varchar(50)
     */        
    protected $loginip;
    
    /**
     * remark 失败次数
     * type tinyint(1) unsigned
     */        
    protected $loginfailure;
    
    /**
     * remark 加入IP
     * type varchar(50)
     */        
    protected $joinip;
    
    /**
     * remark 加入时间
     * type int(10) unsigned
     */        
    protected $jointime;
    
    /**
     * remark 注册来源:0=小程序搜索;1=小程序首页分享;2=商品分享;3=晒梦奇缘;4=砍价
     * type tinyint(1)
     */        
    protected $from_scene;
    
    /**
     * remark 创建时间
     * type int(10) unsigned
     */        
    protected $createtime;
    
    /**
     * remark 更新时间
     * type int(10) unsigned
     */        
    protected $updatetime;
    
    /**
     * remark Token
     * type varchar(50)
     */        
    protected $token;
    
    /**
     * remark 状态:1=正常
     * type tinyint(1)
     */        
    protected $status;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getGroupId ()
    {
        return $this->group_id;
    }
    
    public function setGroupId ($value): void
    {
        $this->group_id = $value;
    }
    
    public function getLevelId ()
    {
        return $this->level_id;
    }
    
    public function setLevelId ($value): void
    {
        $this->level_id = $value;
    }
    
    public function getPid ()
    {
        return $this->pid;
    }
    
    public function setPid ($value): void
    {
        $this->pid = $value;
    }
    
    public function getUsername ()
    {
        return $this->username;
    }
    
    public function setUsername ($value): void
    {
        $this->username = $value;
    }
    
    public function getNickname ()
    {
        return $this->nickname;
    }
    
    public function setNickname ($value): void
    {
        $this->nickname = $value;
    }
    
    public function getPassword ()
    {
        return $this->password;
    }
    
    public function setPassword ($value): void
    {
        $this->password = $value;
    }
    
    public function getSalt ()
    {
        return $this->salt;
    }
    
    public function setSalt ($value): void
    {
        $this->salt = $value;
    }
    
    public function getBalance ()
    {
        return $this->balance;
    }
    
    public function setBalance ($value): void
    {
        $this->balance = $value;
    }
    
    public function getEmail ()
    {
        return $this->email;
    }
    
    public function setEmail ($value): void
    {
        $this->email = $value;
    }
    
    public function getMobile ()
    {
        return $this->mobile;
    }
    
    public function setMobile ($value): void
    {
        $this->mobile = $value;
    }
    
    public function getWechat ()
    {
        return $this->wechat;
    }
    
    public function setWechat ($value): void
    {
        $this->wechat = $value;
    }
    
    public function getAvatar ()
    {
        return $this->avatar;
    }
    
    public function setAvatar ($value): void
    {
        $this->avatar = $value;
    }
    
    public function getGender ()
    {
        return $this->gender;
    }
    
    public function setGender ($value): void
    {
        $this->gender = $value;
    }
    
    public function getBirthday ()
    {
        return $this->birthday;
    }
    
    public function setBirthday ($value): void
    {
        $this->birthday = $value;
    }
    
    public function getImpact ()
    {
        return $this->impact;
    }
    
    public function setImpact ($value): void
    {
        $this->impact = $value;
    }
    
    public function getScore ()
    {
        return $this->score;
    }
    
    public function setScore ($value): void
    {
        $this->score = $value;
    }
    
    public function getTotalFansReward ()
    {
        return $this->total_fans_reward;
    }
    
    public function setTotalFansReward ($value): void
    {
        $this->total_fans_reward = $value;
    }
    
    public function getShareQr ()
    {
        return $this->share_qr;
    }
    
    public function setShareQr ($value): void
    {
        $this->share_qr = $value;
    }
    
    public function getSuccessions ()
    {
        return $this->successions;
    }
    
    public function setSuccessions ($value): void
    {
        $this->successions = $value;
    }
    
    public function getMaxsuccessions ()
    {
        return $this->maxsuccessions;
    }
    
    public function setMaxsuccessions ($value): void
    {
        $this->maxsuccessions = $value;
    }
    
    public function getPrevtime ()
    {
        return $this->prevtime;
    }
    
    public function setPrevtime ($value): void
    {
        $this->prevtime = $value;
    }
    
    public function getLogintime ()
    {
        return $this->logintime;
    }
    
    public function setLogintime ($value): void
    {
        $this->logintime = $value;
    }
    
    public function getLoginip ()
    {
        return $this->loginip;
    }
    
    public function setLoginip ($value): void
    {
        $this->loginip = $value;
    }
    
    public function getLoginfailure ()
    {
        return $this->loginfailure;
    }
    
    public function setLoginfailure ($value): void
    {
        $this->loginfailure = $value;
    }
    
    public function getJoinip ()
    {
        return $this->joinip;
    }
    
    public function setJoinip ($value): void
    {
        $this->joinip = $value;
    }
    
    public function getJointime ()
    {
        return $this->jointime;
    }
    
    public function setJointime ($value): void
    {
        $this->jointime = $value;
    }
    
    public function getFromScene ()
    {
        return $this->from_scene;
    }
    
    public function setFromScene ($value): void
    {
        $this->from_scene = $value;
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
    
    public function getToken ()
    {
        return $this->token;
    }
    
    public function setToken ($value): void
    {
        $this->token = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    
}