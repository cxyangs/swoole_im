<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class GoodsBean extends SplBean
{
    /**
     * remark 
     * type int(8) unsigned
     */        
    protected $id;
    
    /**
     * remark 商品名称
     * type varchar(120)
     */        
    protected $goods_name;
    
    /**
     * remark 商品编码
     * type varchar(60)
     */        
    protected $goods_sn;
    
    /**
     * remark 商品主图
     * type varchar(255)
     */        
    protected $goods_thumb;
    
    /**
     * remark 商品图片 json
     * type text
     */        
    protected $goods_img;
    
    /**
     * remark 视频地址
     * type varchar(255)
     */        
    protected $goods_video;
    
    /**
     * remark 商户ID
     * type int(10) unsigned
     */        
    protected $shop_id;
    
    /**
     * remark 分类ID string
     * type varchar(10)
     */        
    protected $cate_id;
    
    /**
     * remark 店铺商品分类id
     * type varchar(20)
     */        
    protected $shop_cate_id;
    
    /**
     * remark 品牌ID
     * type smallint(5) unsigned
     */        
    protected $brand_id;
    
    /**
     * remark 类型ID
     * type smallint(5) unsigned
     */        
    protected $type_id;
    
    /**
     * remark 销量
     * type int(11)
     */        
    protected $sale_num;
    
    /**
     * remark goods_sku表库存之和
     * type mediumint(8)
     */        
    protected $goods_stock;
    
    /**
     * remark 销售价
     * type decimal(10,2)
     */        
    protected $sale_price;
    
    /**
     * remark 市场价
     * type decimal(10,2)
     */        
    protected $market_price;
    
    /**
     * remark 商品重量
     * type decimal(10,3)
     */        
    protected $goods_weight;
    
    /**
     * remark 关键词
     * type varchar(255)
     */        
    protected $keywords;
    
    /**
     * remark 商品描述
     * type text
     */        
    protected $goods_desc;
    
    /**
     * remark 是否为赠品
     * type tinyint(1)
     */        
    protected $is_gift;
    
    /**
     * remark 1上架 2下架
     * type tinyint(1) unsigned
     */        
    protected $is_sale;
    
    /**
     * remark 0正常 1删除
     * type tinyint(1) unsigned
     */        
    protected $is_del;
    
    /**
     * remark 
     * type smallint(4) unsigned
     */        
    protected $listorder;
    
    /**
     * remark 
     * type text
     */        
    protected $spec_list;
    
    /**
     * remark 运费计方式:0=固定运费;1=按运费模板
     * type tinyint(1)
     */        
    protected $freight_type;
    
    /**
     * remark 运费
     * type decimal(10,2)
     */        
    protected $freight_fee;
    
    /**
     * remark 运费模板id
     * type int(11)
     */        
    protected $express_template_id;
    
    /**
     * remark 平台佣金
     * type decimal(10,2)
     */        
    protected $commission;
    
    /**
     * remark 会员返佣信息
     * type varchar(255)
     */        
    protected $member_commission;
    
    /**
     * remark 是否已审核
     * type int(10)
     */        
    protected $is_checked;
    
    /**
     * remark 审核失败原因
     * type varchar(255)
     */        
    protected $check_fail_reason;
    
    /**
     * remark 优惠促销:0=关闭;1=满减;2=满折;3=满赠
     * type tinyint(1)
     */        
    protected $is_promotion;
    
    /**
     * remark 促销详情数据
     * type varchar(255)
     */        
    protected $promotion_value;
    
    /**
     * remark 是否开启限时促销
     * type tinyint(1)
     */        
    protected $is_time_limit_promotion;
    
    /**
     * remark 限时促销价
     * type decimal(10,2)
     */        
    protected $time_limit_sale_price;
    
    /**
     * remark 
     * type int(10)
     */        
    protected $time_limit_promotion_end;
    
    /**
     * remark 限时促销时间
     * type int(10)
     */        
    protected $time_limit_promotion_start;
    
    /**
     * remark 赠送红包id
     * type int(11)
     */        
    protected $bonus_id;
    
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
    
    public function getGoodsName ()
    {
        return $this->goods_name;
    }
    
    public function setGoodsName ($value): void
    {
        $this->goods_name = $value;
    }
    
    public function getGoodsSn ()
    {
        return $this->goods_sn;
    }
    
    public function setGoodsSn ($value): void
    {
        $this->goods_sn = $value;
    }
    
    public function getGoodsThumb ()
    {
        return $this->goods_thumb;
    }
    
    public function setGoodsThumb ($value): void
    {
        $this->goods_thumb = $value;
    }
    
    public function getGoodsImg ()
    {
        return $this->goods_img;
    }
    
    public function setGoodsImg ($value): void
    {
        $this->goods_img = $value;
    }
    
    public function getGoodsVideo ()
    {
        return $this->goods_video;
    }
    
    public function setGoodsVideo ($value): void
    {
        $this->goods_video = $value;
    }
    
    public function getShopId ()
    {
        return $this->shop_id;
    }
    
    public function setShopId ($value): void
    {
        $this->shop_id = $value;
    }
    
    public function getCateId ()
    {
        return $this->cate_id;
    }
    
    public function setCateId ($value): void
    {
        $this->cate_id = $value;
    }
    
    public function getShopCateId ()
    {
        return $this->shop_cate_id;
    }
    
    public function setShopCateId ($value): void
    {
        $this->shop_cate_id = $value;
    }
    
    public function getBrandId ()
    {
        return $this->brand_id;
    }
    
    public function setBrandId ($value): void
    {
        $this->brand_id = $value;
    }
    
    public function getTypeId ()
    {
        return $this->type_id;
    }
    
    public function setTypeId ($value): void
    {
        $this->type_id = $value;
    }
    
    public function getSaleNum ()
    {
        return $this->sale_num;
    }
    
    public function setSaleNum ($value): void
    {
        $this->sale_num = $value;
    }
    
    public function getGoodsStock ()
    {
        return $this->goods_stock;
    }
    
    public function setGoodsStock ($value): void
    {
        $this->goods_stock = $value;
    }
    
    public function getSalePrice ()
    {
        return $this->sale_price;
    }
    
    public function setSalePrice ($value): void
    {
        $this->sale_price = $value;
    }
    
    public function getMarketPrice ()
    {
        return $this->market_price;
    }
    
    public function setMarketPrice ($value): void
    {
        $this->market_price = $value;
    }
    
    public function getGoodsWeight ()
    {
        return $this->goods_weight;
    }
    
    public function setGoodsWeight ($value): void
    {
        $this->goods_weight = $value;
    }
    
    public function getKeywords ()
    {
        return $this->keywords;
    }
    
    public function setKeywords ($value): void
    {
        $this->keywords = $value;
    }
    
    public function getGoodsDesc ()
    {
        return $this->goods_desc;
    }
    
    public function setGoodsDesc ($value): void
    {
        $this->goods_desc = $value;
    }
    
    public function getIsGift ()
    {
        return $this->is_gift;
    }
    
    public function setIsGift ($value): void
    {
        $this->is_gift = $value;
    }
    
    public function getIsSale ()
    {
        return $this->is_sale;
    }
    
    public function setIsSale ($value): void
    {
        $this->is_sale = $value;
    }
    
    public function getIsDel ()
    {
        return $this->is_del;
    }
    
    public function setIsDel ($value): void
    {
        $this->is_del = $value;
    }
    
    public function getListorder ()
    {
        return $this->listorder;
    }
    
    public function setListorder ($value): void
    {
        $this->listorder = $value;
    }
    
    public function getSpecList ()
    {
        return $this->spec_list;
    }
    
    public function setSpecList ($value): void
    {
        $this->spec_list = $value;
    }
    
    public function getFreightType ()
    {
        return $this->freight_type;
    }
    
    public function setFreightType ($value): void
    {
        $this->freight_type = $value;
    }
    
    public function getFreightFee ()
    {
        return $this->freight_fee;
    }
    
    public function setFreightFee ($value): void
    {
        $this->freight_fee = $value;
    }
    
    public function getExpressTemplateId ()
    {
        return $this->express_template_id;
    }
    
    public function setExpressTemplateId ($value): void
    {
        $this->express_template_id = $value;
    }
    
    public function getCommission ()
    {
        return $this->commission;
    }
    
    public function setCommission ($value): void
    {
        $this->commission = $value;
    }
    
    public function getMemberCommission ()
    {
        return $this->member_commission;
    }
    
    public function setMemberCommission ($value): void
    {
        $this->member_commission = $value;
    }
    
    public function getIsChecked ()
    {
        return $this->is_checked;
    }
    
    public function setIsChecked ($value): void
    {
        $this->is_checked = $value;
    }
    
    public function getCheckFailReason ()
    {
        return $this->check_fail_reason;
    }
    
    public function setCheckFailReason ($value): void
    {
        $this->check_fail_reason = $value;
    }
    
    public function getIsPromotion ()
    {
        return $this->is_promotion;
    }
    
    public function setIsPromotion ($value): void
    {
        $this->is_promotion = $value;
    }
    
    public function getPromotionValue ()
    {
        return $this->promotion_value;
    }
    
    public function setPromotionValue ($value): void
    {
        $this->promotion_value = $value;
    }
    
    public function getIsTimeLimitPromotion ()
    {
        return $this->is_time_limit_promotion;
    }
    
    public function setIsTimeLimitPromotion ($value): void
    {
        $this->is_time_limit_promotion = $value;
    }
    
    public function getTimeLimitSalePrice ()
    {
        return $this->time_limit_sale_price;
    }
    
    public function setTimeLimitSalePrice ($value): void
    {
        $this->time_limit_sale_price = $value;
    }
    
    public function getTimeLimitPromotionEnd ()
    {
        return $this->time_limit_promotion_end;
    }
    
    public function setTimeLimitPromotionEnd ($value): void
    {
        $this->time_limit_promotion_end = $value;
    }
    
    public function getTimeLimitPromotionStart ()
    {
        return $this->time_limit_promotion_start;
    }
    
    public function setTimeLimitPromotionStart ($value): void
    {
        $this->time_limit_promotion_start = $value;
    }
    
    public function getBonusId ()
    {
        return $this->bonus_id;
    }
    
    public function setBonusId ($value): void
    {
        $this->bonus_id = $value;
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