<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class BargainOrderBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 砍价订单号
     * type varchar(50)
     */        
    protected $bargain_sn;
    
    /**
     * remark 用户id
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 砍价活动id
     * type int(11)
     */        
    protected $bid;
    
    /**
     * remark 商户id
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 砍价成功，bs_order订单主表id
     * type int(11)
     */        
    protected $order_id;
    
    /**
     * remark 商品id
     * type int(10)
     */        
    protected $goods_id;
    
    /**
     * remark 商品名称
     * type varchar(255)
     */        
    protected $goods_name;
    
    /**
     * remark 商品图片
     * type varchar(255)
     */        
    protected $goods_thumb;
    
    /**
     * remark 规格id
     * type int(11)
     */        
    protected $sku_id;
    
    /**
     * remark 规格名称
     * type varchar(100)
     */        
    protected $sku_name;
    
    /**
     * remark 商品销售价
     * type decimal(10,2)
     */        
    protected $sale_price;
    
    /**
     * remark 可砍价
     * type decimal(10,2)
     */        
    protected $bargain_price;
    
    /**
     * remark 运费
     * type decimal(10,2)
     */        
    protected $goods_freight;
    
    /**
     * remark 支付金额
     * type decimal(10,2)
     */        
    protected $pay_amount;
    
    /**
     * remark 剩余砍价金额
     * type decimal(10,2)
     */        
    protected $left_bargain_money;
    
    /**
     * remark 砍价类型:1=随机金额;2=固定金额
     * type tinyint(1)
     */        
    protected $bargain_type;
    
    /**
     * remark 砍价固定金额
     * type decimal(10,2)
     */        
    protected $fixed_money;
    
    /**
     * remark 帮砍人数
     * type int(11)
     */        
    protected $bargain_num;
    
    /**
     * remark 剩余砍价人数
     * type int(11)
     */        
    protected $left_bargain_num;
    
    /**
     * remark 砍价状态:0=待支付;1=砍价中;2=砍价成功;3=砍价失败
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 收货人姓名
     * type varchar(255)
     */        
    protected $consignee;
    
    /**
     * remark 收货人手机号
     * type varchar(255)
     */        
    protected $mobile;
    
    /**
     * remark 收货人省市区地址代码集合
     * type varchar(255)
     */        
    protected $recode;
    
    /**
     * remark 收获地址详情
     * type varchar(255)
     */        
    protected $address;
    
    /**
     * remark 用户订单留言
     * type varchar(255)
     */        
    protected $postscript;
    
    /**
     * remark 支付账户
     * type varchar(200)
     */        
    protected $pay_account;
    
    /**
     * remark 收款账户
     * type varchar(200)
     */        
    protected $collection;
    
    /**
     * remark 第三方交易订单号
     * type varchar(100)
     */        
    protected $out_trade_no;
    
    /**
     * remark 支付方式:1=支付宝;2=微信;3=余额
     * type tinyint(1)
     */        
    protected $pay_type;
    
    /**
     * remark 支付时间
     * type int(11)
     */        
    protected $pay_time;
    
    /**
     * remark 砍价结束时间
     * type int(11)
     */        
    protected $end_time;
    
    /**
     * remark 退款状态:0=未退款;1=退款中;2=退款成功;3=退款失败
     * type tinyint(1)
     */        
    protected $refund_status;
    
    /**
     * remark 退款金额
     * type decimal(10,2)
     */        
    protected $refund_money;
    
    /**
     * remark 退款时间
     * type int(11)
     */        
    protected $refund_time;
    
    /**
     * remark 退款单号
     * type varchar(100)
     */        
    protected $refund_sn;
    
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
    
    public function getBargainSn ()
    {
        return $this->bargain_sn;
    }
    
    public function setBargainSn ($value): void
    {
        $this->bargain_sn = $value;
    }
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getBid ()
    {
        return $this->bid;
    }
    
    public function setBid ($value): void
    {
        $this->bid = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getOrderId ()
    {
        return $this->order_id;
    }
    
    public function setOrderId ($value): void
    {
        $this->order_id = $value;
    }
    
    public function getGoodsId ()
    {
        return $this->goods_id;
    }
    
    public function setGoodsId ($value): void
    {
        $this->goods_id = $value;
    }
    
    public function getGoodsName ()
    {
        return $this->goods_name;
    }
    
    public function setGoodsName ($value): void
    {
        $this->goods_name = $value;
    }
    
    public function getGoodsThumb ()
    {
        return $this->goods_thumb;
    }
    
    public function setGoodsThumb ($value): void
    {
        $this->goods_thumb = $value;
    }
    
    public function getSkuId ()
    {
        return $this->sku_id;
    }
    
    public function setSkuId ($value): void
    {
        $this->sku_id = $value;
    }
    
    public function getSkuName ()
    {
        return $this->sku_name;
    }
    
    public function setSkuName ($value): void
    {
        $this->sku_name = $value;
    }
    
    public function getSalePrice ()
    {
        return $this->sale_price;
    }
    
    public function setSalePrice ($value): void
    {
        $this->sale_price = $value;
    }
    
    public function getBargainPrice ()
    {
        return $this->bargain_price;
    }
    
    public function setBargainPrice ($value): void
    {
        $this->bargain_price = $value;
    }
    
    public function getGoodsFreight ()
    {
        return $this->goods_freight;
    }
    
    public function setGoodsFreight ($value): void
    {
        $this->goods_freight = $value;
    }
    
    public function getPayAmount ()
    {
        return $this->pay_amount;
    }
    
    public function setPayAmount ($value): void
    {
        $this->pay_amount = $value;
    }
    
    public function getLeftBargainMoney ()
    {
        return $this->left_bargain_money;
    }
    
    public function setLeftBargainMoney ($value): void
    {
        $this->left_bargain_money = $value;
    }
    
    public function getBargainType ()
    {
        return $this->bargain_type;
    }
    
    public function setBargainType ($value): void
    {
        $this->bargain_type = $value;
    }
    
    public function getFixedMoney ()
    {
        return $this->fixed_money;
    }
    
    public function setFixedMoney ($value): void
    {
        $this->fixed_money = $value;
    }
    
    public function getBargainNum ()
    {
        return $this->bargain_num;
    }
    
    public function setBargainNum ($value): void
    {
        $this->bargain_num = $value;
    }
    
    public function getLeftBargainNum ()
    {
        return $this->left_bargain_num;
    }
    
    public function setLeftBargainNum ($value): void
    {
        $this->left_bargain_num = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getConsignee ()
    {
        return $this->consignee;
    }
    
    public function setConsignee ($value): void
    {
        $this->consignee = $value;
    }
    
    public function getMobile ()
    {
        return $this->mobile;
    }
    
    public function setMobile ($value): void
    {
        $this->mobile = $value;
    }
    
    public function getRecode ()
    {
        return $this->recode;
    }
    
    public function setRecode ($value): void
    {
        $this->recode = $value;
    }
    
    public function getAddress ()
    {
        return $this->address;
    }
    
    public function setAddress ($value): void
    {
        $this->address = $value;
    }
    
    public function getPostscript ()
    {
        return $this->postscript;
    }
    
    public function setPostscript ($value): void
    {
        $this->postscript = $value;
    }
    
    public function getPayAccount ()
    {
        return $this->pay_account;
    }
    
    public function setPayAccount ($value): void
    {
        $this->pay_account = $value;
    }
    
    public function getCollection ()
    {
        return $this->collection;
    }
    
    public function setCollection ($value): void
    {
        $this->collection = $value;
    }
    
    public function getOutTradeNo ()
    {
        return $this->out_trade_no;
    }
    
    public function setOutTradeNo ($value): void
    {
        $this->out_trade_no = $value;
    }
    
    public function getPayType ()
    {
        return $this->pay_type;
    }
    
    public function setPayType ($value): void
    {
        $this->pay_type = $value;
    }
    
    public function getPayTime ()
    {
        return $this->pay_time;
    }
    
    public function setPayTime ($value): void
    {
        $this->pay_time = $value;
    }
    
    public function getEndTime ()
    {
        return $this->end_time;
    }
    
    public function setEndTime ($value): void
    {
        $this->end_time = $value;
    }
    
    public function getRefundStatus ()
    {
        return $this->refund_status;
    }
    
    public function setRefundStatus ($value): void
    {
        $this->refund_status = $value;
    }
    
    public function getRefundMoney ()
    {
        return $this->refund_money;
    }
    
    public function setRefundMoney ($value): void
    {
        $this->refund_money = $value;
    }
    
    public function getRefundTime ()
    {
        return $this->refund_time;
    }
    
    public function setRefundTime ($value): void
    {
        $this->refund_time = $value;
    }
    
    public function getRefundSn ()
    {
        return $this->refund_sn;
    }
    
    public function setRefundSn ($value): void
    {
        $this->refund_sn = $value;
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