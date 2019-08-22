<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AdvPositionBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 广告位标题
     * type varchar(255)
     */        
    protected $title;
    
    /**
     * remark 广告位描述
     * type varchar(255)
     */        
    protected $description;
    
    /**
     * remark 广告位宽度
     * type int(11)
     */        
    protected $width;
    
    /**
     * remark 广告位高度
     * type int(11)
     */        
    protected $height;
    
    /**
     * remark 广告平台:1=wap;2=pc;3=app
     * type tinyint(1)
     */        
    protected $platform;
    
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
    
    public function getTitle ()
    {
        return $this->title;
    }
    
    public function setTitle ($value): void
    {
        $this->title = $value;
    }
    
    public function getDescription ()
    {
        return $this->description;
    }
    
    public function setDescription ($value): void
    {
        $this->description = $value;
    }
    
    public function getWidth ()
    {
        return $this->width;
    }
    
    public function setWidth ($value): void
    {
        $this->width = $value;
    }
    
    public function getHeight ()
    {
        return $this->height;
    }
    
    public function setHeight ($value): void
    {
        $this->height = $value;
    }
    
    public function getPlatform ()
    {
        return $this->platform;
    }
    
    public function setPlatform ($value): void
    {
        $this->platform = $value;
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