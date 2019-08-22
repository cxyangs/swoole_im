<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class OrderBillBean extends SplBean
{
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $id;
    
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $shop_id;
    
    /**
     * remark 账单号
     * type varchar(50)
     */        
    protected $order_bill_no;
    
    /**
     * remark 订单号id集合
     * type varchar(200)
     */        
    protected $order_ids;
    
    /**
     * remark 订单金额
     * type decimal(10,2)
     */        
    protected $order_amount;
    
    /**
     * remark 运费
     * type decimal(10,2)
     */        
    protected $freight;
    
    /**
     * remark 退款金额
     * type decimal(10,2)
     */        
    protected $refund_amount;
    
    /**
     * remark 收取佣金
     * type decimal(10,2)
     */        
    protected $commission;
    
    /**
     * remark 商品分类佣金
     * type decimal(10,2)
     */        
    protected $cate_commission;
    
    /**
     * remark 订单用户返佣
     * type decimal(10,2)
     */        
    protected $order_user_comminss;
    
    /**
     * remark 佣金比例
     * type decimal(10,2)
     */        
    protected $commission_rate;
    
    /**
     * remark 本期应结账单(含运费)
     * type decimal(10,2)
     */        
    protected $current_bill;
    
    /**
     * remark 冻结金额
     * type decimal(10,2)
     */        
    protected $freezing_amount;
    
    /**
     * remark 出帐时间
     * type int(10) unsigned
     */        
    protected $account_time;
    
    /**
     * remark 开始时间
     * type int(10) unsigned
     */        
    protected $start_time;
    
    /**
     * remark 结束时间
     * type int(10) unsigned
     */        
    protected $end_time;
    
    /**
     * remark 出帐状态 0未出帐 1已出帐
     * type tinyint(1) unsigned
     */        
    protected $account_status;
    
    /**
     * remark 审核时间
     * type int(10)
     */        
    protected $check_time;
    
    /**
     * remark 申请时间
     * type int(10) unsigned
     */        
    protected $apply_time;
    
    /**
     * remark 申请状态 0未申请 1同意 2拒绝 3申请
     * type tinyint(1) unsigned
     */        
    protected $apply_status;
    
    /**
     * remark 账单描述
     * type varchar(225)
     */        
    protected $bill_desc;
    
    /**
     * remark 订单商品佣金
     * type text
     */        
    protected $goods_commission;
    
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
    
    public function getOrderBillNo ()
    {
        return $this->order_bill_no;
    }
    
    public function setOrderBillNo ($value): void
    {
        $this->order_bill_no = $value;
    }
    
    public function getOrderIds ()
    {
        return $this->order_ids;
    }
    
    public function setOrderIds ($value): void
    {
        $this->order_ids = $value;
    }
    
    public function getOrderAmount ()
    {
        return $this->order_amount;
    }
    
    public function setOrderAmount ($value): void
    {
        $this->order_amount = $value;
    }
    
    public function getFreight ()
    {
        return $this->freight;
    }
    
    public function setFreight ($value): void
    {
        $this->freight = $value;
    }
    
    public function getRefundAmount ()
    {
        return $this->refund_amount;
    }
    
    public function setRefundAmount ($value): void
    {
        $this->refund_amount = $value;
    }
    
    public function getCommission ()
    {
        return $this->commission;
    }
    
    public function setCommission ($value): void
    {
        $this->commission = $value;
    }
    
    public function getCateCommission ()
    {
        return $this->cate_commission;
    }
    
    public function setCateCommission ($value): void
    {
        $this->cate_commission = $value;
    }
    
    public function getOrderUserComminss ()
    {
        return $this->order_user_comminss;
    }
    
    public function setOrderUserComminss ($value): void
    {
        $this->order_user_comminss = $value;
    }
    
    public function getCommissionRate ()
    {
        return $this->commission_rate;
    }
    
    public function setCommissionRate ($value): void
    {
        $this->commission_rate = $value;
    }
    
    public function getCurrentBill ()
    {
        return $this->current_bill;
    }
    
    public function setCurrentBill ($value): void
    {
        $this->current_bill = $value;
    }
    
    public function getFreezingAmount ()
    {
        return $this->freezing_amount;
    }
    
    public function setFreezingAmount ($value): void
    {
        $this->freezing_amount = $value;
    }
    
    public function getAccountTime ()
    {
        return $this->account_time;
    }
    
    public function setAccountTime ($value): void
    {
        $this->account_time = $value;
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
    
    public function getAccountStatus ()
    {
        return $this->account_status;
    }
    
    public function setAccountStatus ($value): void
    {
        $this->account_status = $value;
    }
    
    public function getCheckTime ()
    {
        return $this->check_time;
    }
    
    public function setCheckTime ($value): void
    {
        $this->check_time = $value;
    }
    
    public function getApplyTime ()
    {
        return $this->apply_time;
    }
    
    public function setApplyTime ($value): void
    {
        $this->apply_time = $value;
    }
    
    public function getApplyStatus ()
    {
        return $this->apply_status;
    }
    
    public function setApplyStatus ($value): void
    {
        $this->apply_status = $value;
    }
    
    public function getBillDesc ()
    {
        return $this->bill_desc;
    }
    
    public function setBillDesc ($value): void
    {
        $this->bill_desc = $value;
    }
    
    public function getGoodsCommission ()
    {
        return $this->goods_commission;
    }
    
    public function setGoodsCommission ($value): void
    {
        $this->goods_commission = $value;
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