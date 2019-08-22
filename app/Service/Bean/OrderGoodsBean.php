<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderGoodsBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 订单id
     * type int(11) unsigned
     */        
    protected $order_id;
    
    /**
     * remark 商品id
     * type int(11) unsigned
     */        
    protected $goods_id;
    
    /**
     * remark 用户id
     * type int(11) unsigned
     */        
    protected $uid;
    
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
     * type int(11) unsigned
     */        
    protected $sku_id;
    
    /**
     * remark 规格名称
     * type varchar(255)
     */        
    protected $sku_name;
    
    /**
     * remark 购买数量
     * type int(11) unsigned
     */        
    protected $num;
    
    /**
     * remark 商品价格
     * type decimal(10,2)
     */        
    protected $goods_price;
    
    /**
     * remark 商品运费
     * type decimal(10,2)
     */        
    protected $freight_fee;
    
    /**
     * remark 赠品id
     * type int(11) unsigned
     */        
    protected $gift_goods_id;
    
    /**
     * remark 满减满折优惠金额
     * type decimal(10,2)
     */        
    protected $discount_money;
    
    /**
     * remark 优惠券金额
     * type decimal(10,2)
     */        
    protected $coupons_money;
    
    /**
     * remark 商品总价(不计邮费及优惠券金额)
     * type decimal(10,2)
     */        
    protected $total_money;
    
    /**
     * remark 会员返佣信息
     * type varchar(255)
     */        
    protected $member_commission;
    
    /**
     * remark 商品分类id集合
     * type varchar(255)
     */        
    protected $category_ids;
    
    /**
     * remark 发货状态:0=待发货;1=已发货
     * type tinyint(1) unsigned
     */        
    protected $shipping_status;
    
    /**
     * remark 店铺id
     * type int(11) unsigned
     */        
    protected $shop_id;
    
    /**
     * remark 退款方式 1=我要退款,但不退货 2=我要退款,退货
     * type smallint(4) unsigned
     */        
    protected $refund_type;
    
    /**
     * remark 申请退款金额
     * type decimal(10,2)
     */        
    protected $refund_require_real_money;
    
    /**
     * remark 申请退款余额
     * type decimal(10,2)
     */        
    protected $refund_require_balance_money;
    
    /**
     * remark 退款原因
     * type varchar(255)
     */        
    protected $refund_reason;
    
    /**
     * remark 退款说明
     * type varchar(255)
     */        
    protected $refund_reason_detail;
    
    /**
     * remark 实际退款金额
     * type decimal(10,2)
     */        
    protected $refund_real_money;
    
    /**
     * remark 订单退款余额
     * type decimal(10,2)
     */        
    protected $refund_balance_money;
    
    /**
     * remark 退款状态
     * type tinyint(1) unsigned
     */        
    protected $refund_status;
    
    /**
     * remark 退款时间
     * type int(10)
     */        
    protected $refund_time;
    
    /**
     * remark 申请退款凭证
     * type text
     */        
    protected $refund_img;
    
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
     * remark 买家退货快递公司
     * type varchar(255)
     */        
    protected $refund_shipping_company;
    
    /**
     * remark 买家退货快递号
     * type varchar(255)
     */        
    protected $refund_shipping_code;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
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
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
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
    
    public function getNum ()
    {
        return $this->num;
    }
    
    public function setNum ($value): void
    {
        $this->num = $value;
    }
    
    public function getGoodsPrice ()
    {
        return $this->goods_price;
    }
    
    public function setGoodsPrice ($value): void
    {
        $this->goods_price = $value;
    }
    
    public function getFreightFee ()
    {
        return $this->freight_fee;
    }
    
    public function setFreightFee ($value): void
    {
        $this->freight_fee = $value;
    }
    
    public function getGiftGoodsId ()
    {
        return $this->gift_goods_id;
    }
    
    public function setGiftGoodsId ($value): void
    {
        $this->gift_goods_id = $value;
    }
    
    public function getDiscountMoney ()
    {
        return $this->discount_money;
    }
    
    public function setDiscountMoney ($value): void
    {
        $this->discount_money = $value;
    }
    
    public function getCouponsMoney ()
    {
        return $this->coupons_money;
    }
    
    public function setCouponsMoney ($value): void
    {
        $this->coupons_money = $value;
    }
    
    public function getTotalMoney ()
    {
        return $this->total_money;
    }
    
    public function setTotalMoney ($value): void
    {
        $this->total_money = $value;
    }
    
    public function getMemberCommission ()
    {
        return $this->member_commission;
    }
    
    public function setMemberCommission ($value): void
    {
        $this->member_commission = $value;
    }
    
    public function getCategoryIds ()
    {
        return $this->category_ids;
    }
    
    public function setCategoryIds ($value): void
    {
        $this->category_ids = $value;
    }
    
    public function getShippingStatus ()
    {
        return $this->shipping_status;
    }
    
    public function setShippingStatus ($value): void
    {
        $this->shipping_status = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getRefundType ()
    {
        return $this->refund_type;
    }
    
    public function setRefundType ($value): void
    {
        $this->refund_type = $value;
    }
    
    public function getRefundRequireRealMoney ()
    {
        return $this->refund_require_real_money;
    }
    
    public function setRefundRequireRealMoney ($value): void
    {
        $this->refund_require_real_money = $value;
    }
    
    public function getRefundRequireBalanceMoney ()
    {
        return $this->refund_require_balance_money;
    }
    
    public function setRefundRequireBalanceMoney ($value): void
    {
        $this->refund_require_balance_money = $value;
    }
    
    public function getRefundReason ()
    {
        return $this->refund_reason;
    }
    
    public function setRefundReason ($value): void
    {
        $this->refund_reason = $value;
    }
    
    public function getRefundReasonDetail ()
    {
        return $this->refund_reason_detail;
    }
    
    public function setRefundReasonDetail ($value): void
    {
        $this->refund_reason_detail = $value;
    }
    
    public function getRefundRealMoney ()
    {
        return $this->refund_real_money;
    }
    
    public function setRefundRealMoney ($value): void
    {
        $this->refund_real_money = $value;
    }
    
    public function getRefundBalanceMoney ()
    {
        return $this->refund_balance_money;
    }
    
    public function setRefundBalanceMoney ($value): void
    {
        $this->refund_balance_money = $value;
    }
    
    public function getRefundStatus ()
    {
        return $this->refund_status;
    }
    
    public function setRefundStatus ($value): void
    {
        $this->refund_status = $value;
    }
    
    public function getRefundTime ()
    {
        return $this->refund_time;
    }
    
    public function setRefundTime ($value): void
    {
        $this->refund_time = $value;
    }
    
    public function getRefundImg ()
    {
        return $this->refund_img;
    }
    
    public function setRefundImg ($value): void
    {
        $this->refund_img = $value;
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
    
    public function getRefundShippingCompany ()
    {
        return $this->refund_shipping_company;
    }
    
    public function setRefundShippingCompany ($value): void
    {
        $this->refund_shipping_company = $value;
    }
    
    public function getRefundShippingCode ()
    {
        return $this->refund_shipping_code;
    }
    
    public function setRefundShippingCode ($value): void
    {
        $this->refund_shipping_code = $value;
    }
    
    
}