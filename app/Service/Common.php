<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Common.php  Version 2019/8/14
// +----------------------------------------------------------------------
namespace App\Service;
use App\Service\Bean\ShopBean;
use App\Service\Bean\UserBean;

class Common
{
    /**
     * @var \EasySwoole\Mysqli\Mysqli
     */
    private $db;
    public function __construct()
    {
        $this->db = \EasySwoole\MysqliPool\Mysql::getInstance()->pool('mysql')::defer();
    }

    /**
     * @Mark:获取用户详情
     * @param $uid
     * @param string $field
     * @return UserBean
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/27
     */
    public function getUserInfo($uid,$field = 'id,nickname,avatar')
    {
        $userInfo = $this->db->where('id',$uid)->getOne('bs_user',$field);
        return new UserBean($userInfo);
    }

    /**
     * @Mark:通过用户名获取用户信息
     * @param $username
     * @param string $field
     * @return UserBean
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/27
     */
    public function getUserInfoByUsername($username,$field = 'id,password,salt')
    {
        $userInfo = $this->db->where('username',$username)->getOne('bs_user',$field);
        return new UserBean($userInfo);
    }

    public function userRegister(UserBean $userBean)
    {
        return $this->db->insert('bs_user',$userBean->toArray());
    }

    /**
     * @Mark:获取客服列表
     * @param int $shop_id
     * @return \EasySwoole\Mysqli\Mysqli|mixed
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\JoinFail
     * @throws \EasySwoole\Mysqli\Exceptions\OrderByFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/27
     */
    public function getShopServiceList(int $shop_id)
    {
        $serviceInfo = $this->db->join('bs_shop p','s.shop_id = p.id')->where('s.shop_id',$shop_id)->where('s.is_online',1)->orderBy('RAND()')->get('bs_service s',null,'s.uid,p.shop_logo');
        return $serviceInfo;
    }

    /**
     * @Mark:
     * @param int $uid
     * @return int
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/19
     */
    public function getshopIdByUid(int $uid)
    {
        $shopId= $this->db->where('uid',$uid)->getValue('bs_service','shop_id');
        return $shopId;
    }

    /**
     * @Mark:通过店铺id获取店铺详情
     * @param int $shop_id
     * @param string $field
     * @return ShopBean
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/16
     */
    public function getShopInfoById(int $shop_id,$field = 'id,shop_name,shop_logo')
    {
        $shopInfo = $this->db->where('id',$shop_id)->getOne('bs_shop',$field);
        return new ShopBean($shopInfo);
    }
}