<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 订单类型:0=普通订单;1=砍价订单
     * type tinyint(4)
     */        
    protected $type;
    
    /**
     * remark 订单号
     * type varchar(50)
     */        
    protected $order_sn;
    
    /**
     * remark 用户id
     * type int(11) unsigned
     */        
    protected $uid;
    
    /**
     * remark 订单状态:0=默认状态;1=订单进行中;2=用户取消;3=管理员取消;4=已作废;5=已完成
     * type tinyint(4) unsigned
     */        
    protected $order_status;
    
    /**
     * remark 省市区id集合
     * type varchar(50)
     */        
    protected $recode;
    
    /**
     * remark 收货人
     * type varchar(50)
     */        
    protected $consignee;
    
    /**
     * remark 省
     * type varchar(255)
     */        
    protected $province;
    
    /**
     * remark 市
     * type varchar(255)
     */        
    protected $city;
    
    /**
     * remark 区
     * type varchar(255)
     */        
    protected $district;
    
    /**
     * remark 详细地址
     * type varchar(255)
     */        
    protected $address;
    
    /**
     * remark 手机号
     * type varchar(11)
     */        
    protected $mobile;
    
    /**
     * remark 支付方式:0=未支付;1=已支付
     * type tinyint(1) unsigned
     */        
    protected $pay_status;
    
    /**
     * remark 支付方式:1=支付宝;2=微信;3=余额
     * type tinyint(1) unsigned
     */        
    protected $pay_type;
    
    /**
     * remark 支付时间
     * type int(11) unsigned
     */        
    protected $pay_time;
    
    /**
     * remark 发货状态:0=未发货;1=部分发货;2=发货完成
     * type tinyint(1) unsigned
     */        
    protected $shipping_status;
    
    /**
     * remark 快递公司编号
     * type varchar(255)
     */        
    protected $express;
    
    /**
     * remark 快递单号
     * type varchar(50)
     */        
    protected $shipping_no;
    
    /**
     * remark 发货时间
     * type int(10) unsigned
     */        
    protected $shipping_time;
    
    /**
     * remark 运费
     * type decimal(10,2)
     */        
    protected $shipping_money;
    
    /**
     * remark 收货时间
     * type int(11)
     */        
    protected $receipt_time;
    
    /**
     * remark 优惠券抵扣
     * type decimal(10,2)
     */        
    protected $coupons_money;
    
    /**
     * remark 使用优惠券id
     * type int(11)
     */        
    protected $coupons_record_id;
    
    /**
     * remark 订单留言
     * type varchar(255)
     */        
    protected $postscript;
    
    /**
     * remark 发票类型:0=不需要发票;1=个人;2=公司
     * type tinyint(1) unsigned
     */        
    protected $inv_type;
    
    /**
     * remark 发票抬头
     * type varchar(50)
     */        
    protected $inv_payee;
    
    /**
     * remark 纳税人识别号
     * type varchar(100)
     */        
    protected $inv_number;
    
    /**
     * remark 商品总金额
     * type decimal(10,2)
     */        
    protected $goods_amount;
    
    /**
     * remark 订单总金额
     * type decimal(10,2)
     */        
    protected $order_amount;
    
    /**
     * remark 余额支付金额
     * type decimal(10,2)
     */        
    protected $balance_pay_amount;
    
    /**
     * remark 现金支付总金额
     * type decimal(10,2)
     */        
    protected $pay_amount;
    
    /**
     * remark 系统交易流水号(非唯一）
     * type varchar(255)
     */        
    protected $order_pay_sn;
    
    /**
     * remark 第三方支付交易流水号
     * type varchar(100)
     */        
    protected $out_trade_no;
    
    /**
     * remark 第三方支付收款账户
     * type varchar(255)
     */        
    protected $collection;
    
    /**
     * remark 支付账户
     * type varchar(255)
     */        
    protected $pay_account;
    
    /**
     * remark 店铺id
     * type int(11) unsigned
     */        
    protected $shop_id;
    
    /**
     * remark 是否删除:0=未删;1=已删
     * type tinyint(1) unsigned
     */        
    protected $is_del;
    
    /**
     * remark 账单状态 0=未出 1已出
     * type tinyint(1) unsigned
     */        
    protected $bill_status;
    
    /**
     * remark 退款状态 0=无退款 1=退款中 2=已退款
     * type tinyint(1) unsigned
     */        
    protected $order_refund_status;
    
    /**
     * remark 订单退款金额
     * type decimal(10,2)
     */        
    protected $refund_money;
    
    /**
     * remark 订单退款余额
     * type decimal(10,2)
     */        
    protected $refund_balance_money;
    
    /**
     * remark 是否评论
     * type tinyint(1)
     */        
    protected $is_comment;
    
    /**
     * remark 订单备注
     * type text
     */        
    protected $desc;
    
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $createtime;
    
    /**
     * remark 
     * type int(11) unsigned
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
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getOrderSn ()
    {
        return $this->order_sn;
    }
    
    public function setOrderSn ($value): void
    {
        $this->order_sn = $value;
    }
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getOrderStatus ()
    {
        return $this->order_status;
    }
    
    public function setOrderStatus ($value): void
    {
        $this->order_status = $value;
    }
    
    public function getRecode ()
    {
        return $this->recode;
    }
    
    public function setRecode ($value): void
    {
        $this->recode = $value;
    }
    
    public function getConsignee ()
    {
        return $this->consignee;
    }
    
    public function setConsignee ($value): void
    {
        $this->consignee = $value;
    }
    
    public function getProvince ()
    {
        return $this->province;
    }
    
    public function setProvince ($value): void
    {
        $this->province = $value;
    }
    
    public function getCity ()
    {
        return $this->city;
    }
    
    public function setCity ($value): void
    {
        $this->city = $value;
    }
    
    public function getDistrict ()
    {
        return $this->district;
    }
    
    public function setDistrict ($value): void
    {
        $this->district = $value;
    }
    
    public function getAddress ()
    {
        return $this->address;
    }
    
    public function setAddress ($value): void
    {
        $this->address = $value;
    }
    
    public function getMobile ()
    {
        return $this->mobile;
    }
    
    public function setMobile ($value): void
    {
        $this->mobile = $value;
    }
    
    public function getPayStatus ()
    {
        return $this->pay_status;
    }
    
    public function setPayStatus ($value): void
    {
        $this->pay_status = $value;
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
    
    public function getShippingStatus ()
    {
        return $this->shipping_status;
    }
    
    public function setShippingStatus ($value): void
    {
        $this->shipping_status = $value;
    }
    
    public function getExpress ()
    {
        return $this->express;
    }
    
    public function setExpress ($value): void
    {
        $this->express = $value;
    }
    
    public function getShippingNo ()
    {
        return $this->shipping_no;
    }
    
    public function setShippingNo ($value): void
    {
        $this->shipping_no = $value;
    }
    
    public function getShippingTime ()
    {
        return $this->shipping_time;
    }
    
    public function setShippingTime ($value): void
    {
        $this->shipping_time = $value;
    }
    
    public function getShippingMoney ()
    {
        return $this->shipping_money;
    }
    
    public function setShippingMoney ($value): void
    {
        $this->shipping_money = $value;
    }
    
    public function getReceiptTime ()
    {
        return $this->receipt_time;
    }
    
    public function setReceiptTime ($value): void
    {
        $this->receipt_time = $value;
    }
    
    public function getCouponsMoney ()
    {
        return $this->coupons_money;
    }
    
    public function setCouponsMoney ($value): void
    {
        $this->coupons_money = $value;
    }
    
    public function getCouponsRecordId ()
    {
        return $this->coupons_record_id;
    }
    
    public function setCouponsRecordId ($value): void
    {
        $this->coupons_record_id = $value;
    }
    
    public function getPostscript ()
    {
        return $this->postscript;
    }
    
    public function setPostscript ($value): void
    {
        $this->postscript = $value;
    }
    
    public function getInvType ()
    {
        return $this->inv_type;
    }
    
    public function setInvType ($value): void
    {
        $this->inv_type = $value;
    }
    
    public function getInvPayee ()
    {
        return $this->inv_payee;
    }
    
    public function setInvPayee ($value): void
    {
        $this->inv_payee = $value;
    }
    
    public function getInvNumber ()
    {
        return $this->inv_number;
    }
    
    public function setInvNumber ($value): void
    {
        $this->inv_number = $value;
    }
    
    public function getGoodsAmount ()
    {
        return $this->goods_amount;
    }
    
    public function setGoodsAmount ($value): void
    {
        $this->goods_amount = $value;
    }
    
    public function getOrderAmount ()
    {
        return $this->order_amount;
    }
    
    public function setOrderAmount ($value): void
    {
        $this->order_amount = $value;
    }
    
    public function getBalancePayAmount ()
    {
        return $this->balance_pay_amount;
    }
    
    public function setBalancePayAmount ($value): void
    {
        $this->balance_pay_amount = $value;
    }
    
    public function getPayAmount ()
    {
        return $this->pay_amount;
    }
    
    public function setPayAmount ($value): void
    {
        $this->pay_amount = $value;
    }
    
    public function getOrderPaySn ()
    {
        return $this->order_pay_sn;
    }
    
    public function setOrderPaySn ($value): void
    {
        $this->order_pay_sn = $value;
    }
    
    public function getOutTradeNo ()
    {
        return $this->out_trade_no;
    }
    
    public function setOutTradeNo ($value): void
    {
        $this->out_trade_no = $value;
    }
    
    public function getCollection ()
    {
        return $this->collection;
    }
    
    public function setCollection ($value): void
    {
        $this->collection = $value;
    }
    
    public function getPayAccount ()
    {
        return $this->pay_account;
    }
    
    public function setPayAccount ($value): void
    {
        $this->pay_account = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getIsDel ()
    {
        return $this->is_del;
    }
    
    public function setIsDel ($value): void
    {
        $this->is_del = $value;
    }
    
    public function getBillStatus ()
    {
        return $this->bill_status;
    }
    
    public function setBillStatus ($value): void
    {
        $this->bill_status = $value;
    }
    
    public function getOrderRefundStatus ()
    {
        return $this->order_refund_status;
    }
    
    public function setOrderRefundStatus ($value): void
    {
        $this->order_refund_status = $value;
    }
    
    public function getRefundMoney ()
    {
        return $this->refund_money;
    }
    
    public function setRefundMoney ($value): void
    {
        $this->refund_money = $value;
    }
    
    public function getRefundBalanceMoney ()
    {
        return $this->refund_balance_money;
    }
    
    public function setRefundBalanceMoney ($value): void
    {
        $this->refund_balance_money = $value;
    }
    
    public function getIsComment ()
    {
        return $this->is_comment;
    }
    
    public function setIsComment ($value): void
    {
        $this->is_comment = $value;
    }
    
    public function getDesc ()
    {
        return $this->desc;
    }
    
    public function setDesc ($value): void
    {
        $this->desc = $value;
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