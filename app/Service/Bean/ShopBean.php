<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class ShopBean extends SplBean
{
    /**
     * remark 
     * type int(11)
     */        
    protected $id;
    
    /**
     * remark 店铺账户id
     * type int(11)
     */        
    protected $uid;
    
    /**
     * remark 余额
     * type decimal(10,2)
     */        
    protected $balance;
    
    /**
     * remark 店铺名称
     * type varchar(255)
     */        
    protected $shop_name;
    
    /**
     * remark 物流评分
     * type int(3)
     */        
    protected $express_score;
    
    /**
     * remark 店铺评分
     * type int(3)
     */        
    protected $shop_score;
    
    /**
     * remark 经营类目id集合
     * type varchar(255)
     */        
    protected $cate_ids;
    
    /**
     * remark 默认选中分类
     * type tinytext
     */        
    protected $cate_checked_arr;
    
    /**
     * remark 店铺主页宣传标语
     * type varchar(255)
     */        
    protected $home_page_tagline;
    
    /**
     * remark 首页活动列表宣传语
     * type varchar(255)
     */        
    protected $active_tagline;
    
    /**
     * remark 店铺logo
     * type varchar(255)
     */        
    protected $shop_logo;
    
    /**
     * remark 店铺主页图片
     * type varchar(255)
     */        
    protected $home_page_image;
    
    /**
     * remark 店铺关键字
     * type varchar(255)
     */        
    protected $shop_keyword;
    
    /**
     * remark 店铺描述
     * type varchar(255)
     */        
    protected $description;
    
    /**
     * remark 审核状态:0=审核中;1=审核通过;2=审核失败;
     * type tinyint(1)
     */        
    protected $checked_status;
    
    /**
     * remark 店铺状态:0=暂停歇业;1=运营中;-1=封店
     * type tinyint(1)
     */        
    protected $status;
    
    /**
     * remark 真实姓名
     * type varchar(255)
     */        
    protected $realname;
    
    /**
     * remark 身份证号码
     * type varchar(18)
     */        
    protected $identify_number;
    
    /**
     * remark 身份证正面
     * type varchar(255)
     */        
    protected $card_due;
    
    /**
     * remark 身份证反面
     * type varchar(255)
     */        
    protected $card_reverse;
    
    /**
     * remark 银行预留手机号
     * type char(11)
     */        
    protected $bank_mobile;
    
    /**
     * remark 银行卡号
     * type varchar(30)
     */        
    protected $bank_number;
    
    /**
     * remark 开户行
     * type varchar(255)
     */        
    protected $bank_name;
    
    /**
     * remark 实名认证审核状态:0=待提交;1=审核通过;2=审核失败;3=待审核;
     * type tinyint(1)
     */        
    protected $identify_checked_status;
    
    /**
     * remark 实名认证审核失败原因
     * type varchar(255)
     */        
    protected $identify_checked_remark;
    
    /**
     * remark 备注信息
     * type varchar(255)
     */        
    protected $remark;
    
    /**
     * remark 待修改内容，等待管理员审核
     * type text
     */        
    protected $pre_change;
    
    /**
     * remark 签约有效期开始
     * type int(11)
     */        
    protected $start_time;
    
    /**
     * remark 签约有效期结束
     * type int(11)
     */        
    protected $end_time;
    
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
     * remark 店铺添加商品是否需要审核，0不需要，1需要
     * type tinyint(1)
     */        
    protected $shop_goods_checked;
    
    /**
     * remark 公司名
     * type varchar(50)
     */        
    protected $company_name;
    
    /**
     * remark 营业执照副本
     * type varchar(255)
     */        
    protected $business_license;
    
    /**
     * remark 营业执照注册号
     * type varchar(20)
     */        
    protected $registered_number;
    
    /**
     * remark 其他证明性文件
     * type text
     */        
    protected $prove_img;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $business_start_time;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $business_end_time;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $idCard_start_time;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $idCard_end_time;
    
    /**
     * remark 补充协议生效开始时间
     * type int(10)
     */        
    protected $supplementary_start_time;
    
    /**
     * remark 补充协议到期时间
     * type int(10)
     */        
    protected $supplementary_end_time;
    
    /**
     * remark 是否签署补充协议,不等于1代表协议文章id
     * type int(10)
     */        
    protected $is_checkin_supplementary;
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function setId ($value): void
    {
        $this->id = $value;
    }
    
    public function getUid ()
    {
        return $this->uid;
    }
    
    public function setUid ($value): void
    {
        $this->uid = $value;
    }
    
    public function getBalance ()
    {
        return $this->balance;
    }
    
    public function setBalance ($value): void
    {
        $this->balance = $value;
    }
    
    public function getShopName ()
    {
        return $this->shop_name;
    }
    
    public function setShopName ($value): void
    {
        $this->shop_name = $value;
    }
    
    public function getExpressScore ()
    {
        return $this->express_score;
    }
    
    public function setExpressScore ($value): void
    {
        $this->express_score = $value;
    }
    
    public function getShopScore ()
    {
        return $this->shop_score;
    }
    
    public function setShopScore ($value): void
    {
        $this->shop_score = $value;
    }
    
    public function getCateIds ()
    {
        return $this->cate_ids;
    }
    
    public function setCateIds ($value): void
    {
        $this->cate_ids = $value;
    }
    
    public function getCateCheckedArr ()
    {
        return $this->cate_checked_arr;
    }
    
    public function setCateCheckedArr ($value): void
    {
        $this->cate_checked_arr = $value;
    }
    
    public function getHomePageTagline ()
    {
        return $this->home_page_tagline;
    }
    
    public function setHomePageTagline ($value): void
    {
        $this->home_page_tagline = $value;
    }
    
    public function getActiveTagline ()
    {
        return $this->active_tagline;
    }
    
    public function setActiveTagline ($value): void
    {
        $this->active_tagline = $value;
    }
    
    public function getShopLogo ()
    {
        return $this->shop_logo;
    }
    
    public function setShopLogo ($value): void
    {
        $this->shop_logo = $value;
    }
    
    public function getHomePageImage ()
    {
        return $this->home_page_image;
    }
    
    public function setHomePageImage ($value): void
    {
        $this->home_page_image = $value;
    }
    
    public function getShopKeyword ()
    {
        return $this->shop_keyword;
    }
    
    public function setShopKeyword ($value): void
    {
        $this->shop_keyword = $value;
    }
    
    public function getDescription ()
    {
        return $this->description;
    }
    
    public function setDescription ($value): void
    {
        $this->description = $value;
    }
    
    public function getCheckedStatus ()
    {
        return $this->checked_status;
    }
    
    public function setCheckedStatus ($value): void
    {
        $this->checked_status = $value;
    }
    
    public function getStatus ()
    {
        return $this->status;
    }
    
    public function setStatus ($value): void
    {
        $this->status = $value;
    }
    
    public function getRealname ()
    {
        return $this->realname;
    }
    
    public function setRealname ($value): void
    {
        $this->realname = $value;
    }
    
    public function getIdentifyNumber ()
    {
        return $this->identify_number;
    }
    
    public function setIdentifyNumber ($value): void
    {
        $this->identify_number = $value;
    }
    
    public function getCardDue ()
    {
        return $this->card_due;
    }
    
    public function setCardDue ($value): void
    {
        $this->card_due = $value;
    }
    
    public function getCardReverse ()
    {
        return $this->card_reverse;
    }
    
    public function setCardReverse ($value): void
    {
        $this->card_reverse = $value;
    }
    
    public function getBankMobile ()
    {
        return $this->bank_mobile;
    }
    
    public function setBankMobile ($value): void
    {
        $this->bank_mobile = $value;
    }
    
    public function getBankNumber ()
    {
        return $this->bank_number;
    }
    
    public function setBankNumber ($value): void
    {
        $this->bank_number = $value;
    }
    
    public function getBankName ()
    {
        return $this->bank_name;
    }
    
    public function setBankName ($value): void
    {
        $this->bank_name = $value;
    }
    
    public function getIdentifyCheckedStatus ()
    {
        return $this->identify_checked_status;
    }
    
    public function setIdentifyCheckedStatus ($value): void
    {
        $this->identify_checked_status = $value;
    }
    
    public function getIdentifyCheckedRemark ()
    {
        return $this->identify_checked_remark;
    }
    
    public function setIdentifyCheckedRemark ($value): void
    {
        $this->identify_checked_remark = $value;
    }
    
    public function getRemark ()
    {
        return $this->remark;
    }
    
    public function setRemark ($value): void
    {
        $this->remark = $value;
    }
    
    public function getPreChange ()
    {
        return $this->pre_change;
    }
    
    public function setPreChange ($value): void
    {
        $this->pre_change = $value;
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
    
    public function getShopGoodsChecked ()
    {
        return $this->shop_goods_checked;
    }
    
    public function setShopGoodsChecked ($value): void
    {
        $this->shop_goods_checked = $value;
    }
    
    public function getCompanyName ()
    {
        return $this->company_name;
    }
    
    public function setCompanyName ($value): void
    {
        $this->company_name = $value;
    }
    
    public function getBusinessLicense ()
    {
        return $this->business_license;
    }
    
    public function setBusinessLicense ($value): void
    {
        $this->business_license = $value;
    }
    
    public function getRegisteredNumber ()
    {
        return $this->registered_number;
    }
    
    public function setRegisteredNumber ($value): void
    {
        $this->registered_number = $value;
    }
    
    public function getProveImg ()
    {
        return $this->prove_img;
    }
    
    public function setProveImg ($value): void
    {
        $this->prove_img = $value;
    }
    
    public function getBusinessStartTime ()
    {
        return $this->business_start_time;
    }
    
    public function setBusinessStartTime ($value): void
    {
        $this->business_start_time = $value;
    }
    
    public function getBusinessEndTime ()
    {
        return $this->business_end_time;
    }
    
    public function setBusinessEndTime ($value): void
    {
        $this->business_end_time = $value;
    }
    
    public function getIdCardStartTime ()
    {
        return $this->idCard_start_time;
    }
    
    public function setIdCardStartTime ($value): void
    {
        $this->idCard_start_time = $value;
    }
    
    public function getIdCardEndTime ()
    {
        return $this->idCard_end_time;
    }
    
    public function setIdCardEndTime ($value): void
    {
        $this->idCard_end_time = $value;
    }
    
    public function getSupplementaryStartTime ()
    {
        return $this->supplementary_start_time;
    }
    
    public function setSupplementaryStartTime ($value): void
    {
        $this->supplementary_start_time = $value;
    }
    
    public function getSupplementaryEndTime ()
    {
        return $this->supplementary_end_time;
    }
    
    public function setSupplementaryEndTime ($value): void
    {
        $this->supplementary_end_time = $value;
    }
    
    public function getIsCheckinSupplementary ()
    {
        return $this->is_checkin_supplementary;
    }
    
    public function setIsCheckinSupplementary ($value): void
    {
        $this->is_checkin_supplementary = $value;
    }
    
    
}