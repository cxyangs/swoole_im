<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class AlbumPictureBean extends SplBean
{
    /**
     * remark 
     * type int(10) unsigned
     */        
    protected $id;
    
    /**
     * remark 店铺
     * type int(10) unsigned
     */        
    protected $shop_id;
    
    /**
     * remark 相册id
     * type int(10) unsigned
     */        
    protected $album_id;
    
    /**
     * remark 图片原名
     * type varchar(255)
     */        
    protected $name;
    
    /**
     * remark 图片路径
     * type varchar(255)
     */        
    protected $pic_img;
    
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getAlbumId ()
    {
        return $this->album_id;
    }
    
    public function setAlbumId ($value): void
    {
        $this->album_id = $value;
    }
    
    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($value): void
    {
        $this->name = $value;
    }
    
    public function getPicImg ()
    {
        return $this->pic_img;
    }
    
    public function setPicImg ($value): void
    {
        $this->pic_img = $value;
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