<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class BargainBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 店铺ID
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 商品id
     * type int(11)
     */        
    protected $goods_id;
    
    /**
     * remark 砍价商品库存
     * type int(11)
     */        
    protected $bargain_stock;
    
    /**
     * remark 可砍价格
     * type decimal(10,2)
     */        
    protected $bargain_bottom_price;
    
    /**
     * remark 开始时间
     * type int(10)
     */        
    protected $start_time;
    
    /**
     * remark 结束时间
     * type int(10)
     */        
    protected $end_time;
    
    /**
     * remark 砍价开始后有效期,默认为24小时
     * type tinyint(4)
     */        
    protected $bargain_time;
    
    /**
     * remark 帮砍金额：1随机金额，2固定金额
     * type tinyint(1)
     */        
    protected $type;
    
    /**
     * remark 固定砍价金额
     * type decimal(10,2)
     */        
    protected $bargain_money;
    
    /**
     * remark 帮砍人数
     * type int(11)
     */        
    protected $bargain_number;
    
    /**
     * remark 浏览量
     * type int(11)
     */        
    protected $views;
    
    /**
     * remark 发起量
     * type int(11)
     */        
    protected $launch_number;
    
    /**
     * remark 帮砍量
     * type int(11)
     */        
    protected $bargain_total_number;
    
    /**
     * remark 砍价成功数
     * type int(11)
     */        
    protected $bargain_success_number;
    
    /**
     * remark 固定运费
     * type decimal(10,2)
     */        
    protected $freight_fee;
    
    /**
     * remark 活动状态，0默认，1开启，2停止
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 审核不通过原因
     * type varchar(255)
     */        
    protected $reason;
    
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
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getGoodsId ()
    {
        return $this->goods_id;
    }
    
    public function setGoodsId ($value): void
    {
        $this->goods_id = $value;
    }
    
    public function getBargainStock ()
    {
        return $this->bargain_stock;
    }
    
    public function setBargainStock ($value): void
    {
        $this->bargain_stock = $value;
    }
    
    public function getBargainBottomPrice ()
    {
        return $this->bargain_bottom_price;
    }
    
    public function setBargainBottomPrice ($value): void
    {
        $this->bargain_bottom_price = $value;
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
    
    public function getBargainTime ()
    {
        return $this->bargain_time;
    }
    
    public function setBargainTime ($value): void
    {
        $this->bargain_time = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getBargainMoney ()
    {
        return $this->bargain_money;
    }
    
    public function setBargainMoney ($value): void
    {
        $this->bargain_money = $value;
    }
    
    public function getBargainNumber ()
    {
        return $this->bargain_number;
    }
    
    public function setBargainNumber ($value): void
    {
        $this->bargain_number = $value;
    }
    
    public function getViews ()
    {
        return $this->views;
    }
    
    public function setViews ($value): void
    {
        $this->views = $value;
    }
    
    public function getLaunchNumber ()
    {
        return $this->launch_number;
    }
    
    public function setLaunchNumber ($value): void
    {
        $this->launch_number = $value;
    }
    
    public function getBargainTotalNumber ()
    {
        return $this->bargain_total_number;
    }
    
    public function setBargainTotalNumber ($value): void
    {
        $this->bargain_total_number = $value;
    }
    
    public function getBargainSuccessNumber ()
    {
        return $this->bargain_success_number;
    }
    
    public function setBargainSuccessNumber ($value): void
    {
        $this->bargain_success_number = $value;
    }
    
    public function getFreightFee ()
    {
        return $this->freight_fee;
    }
    
    public function setFreightFee ($value): void
    {
        $this->freight_fee = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getReason ()
    {
        return $this->reason;
    }
    
    public function setReason ($value): void
    {
        $this->reason = $value;
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
    
    public function getIsDel ()
    {
        return $this->is_del;
    }
    
    public function setIsDel ($value): void
    {
        $this->is_del = $value;
    }
    
    
}