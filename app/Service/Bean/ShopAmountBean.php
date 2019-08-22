<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopAmountBean extends SplBean
{
    /**
     * remark 
     * type int(11) unsigned
     */        
    protected $id;
    
    /**
     * remark 
     * type int(11)
     */        
    protected $shop_id;
    
    /**
     * remark 金额
     * type decimal(10,2)
     */        
    protected $amount;
    
    /**
     * remark 交易流水号
     * type varchar(50)
     */        
    protected $serial_no;
    
    /**
     * remark 类型 0=结算 1充值 2提现
     * type tinyint(1)
     */        
    protected $type;
    
    /**
     * remark 0=汇款转账 1微信支付 2 支付宝支付 3=余额支付
     * type tinyint(1)
     */        
    protected $pay_type;
    
    /**
     * remark 来源 结算订单/账户充值
     * type varchar(225)
     */        
    protected $original;
    
    /**
     * remark 申请描述
     * type text
     */        
    protected $desc;
    
    /**
     * remark 审核回复
     * type text
     */        
    protected $reply;
    
    /**
     * remark 0待审核 1审核通过 2审核不通过
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 上传凭证
     * type varchar(225)
     */        
    protected $voucher;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $createtime;
    
    /**
     * remark 
     * type int(10)
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
    
    public function getAmount ()
    {
        return $this->amount;
    }
    
    public function setAmount ($value): void
    {
        $this->amount = $value;
    }
    
    public function getSerialNo ()
    {
        return $this->serial_no;
    }
    
    public function setSerialNo ($value): void
    {
        $this->serial_no = $value;
    }
    
    public function getType ()
    {
        return $this->type;
    }
    
    public function setType ($value): void
    {
        $this->type = $value;
    }
    
    public function getPayType ()
    {
        return $this->pay_type;
    }
    
    public function setPayType ($value): void
    {
        $this->pay_type = $value;
    }
    
    public function getOriginal ()
    {
        return $this->original;
    }
    
    public function setOriginal ($value): void
    {
        $this->original = $value;
    }
    
    public function getDesc ()
    {
        return $this->desc;
    }
    
    public function setDesc ($value): void
    {
        $this->desc = $value;
    }
    
    public function getReply ()
    {
        return $this->reply;
    }
    
    public function setReply ($value): void
    {
        $this->reply = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getVoucher ()
    {
        return $this->voucher;
    }
    
    public function setVoucher ($value): void
    {
        $this->voucher = $value;
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