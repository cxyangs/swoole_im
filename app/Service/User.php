<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | UserAuth.php  Version 2019/7/5
// +----------------------------------------------------------------------
namespace App\Service;

use App\WebSocket\RelationMap;

class User
{
    use \EasySwoole\Component\Singleton;

    public function auth($token,$fd)
    {
        $uid = $token;//tokenVerify($token);
        if (!(int)$uid) return false;
        RelationMap::setUidFdMap((int)$uid,$fd);
        return $uid;
    }

    public function getUserInfo($uid,$field = 'id,nickname,avatar')
    {
        return (new Common())->getUserInfo($uid,$field);
    }
}