<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AlbumItemBean extends SplBean
{
    /**
     * remark 相册id
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 店铺id
     * type int(10)
     */        
    protected $shop_id;
    
    /**
     * remark 相册名称
     * type varchar(100)
     */        
    protected $album_name;
    
    /**
     * remark 是否为默认相册,1代表默认
     * type tinyint(1) unsigned
     */        
    protected $is_default;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $sort;
    
    /**
     * remark 创建时间
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getAlbumName ()
    {
        return $this->album_name;
    }
    
    public function setAlbumName ($value): void
    {
        $this->album_name = $value;
    }
    
    public function getIsDefault ()
    {
        return $this->is_default;
    }
    
    public function setIsDefault ($value): void
    {
        $this->is_default = $value;
    }
    
    public function getSort ()
    {
        return $this->sort;
    }
    
    public function setSort ($value): void
    {
        $this->sort = $value;
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