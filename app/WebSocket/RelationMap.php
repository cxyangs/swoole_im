<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | RelationMap.php  Version 2019/8/9
// +----------------------------------------------------------------------
namespace App\WebSocket;

use Co\Redis;
use EasySwoole\EasySwoole\ServerManager;

class RelationMap
{
    const Prefix = 'miao_websocket_';
    const Tags = 'tags';
    
    /**
     * @Mark:获取redis实例对象
     * @return Redis
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/9
     */
    static function _init()
    {
        return \EasySwoole\RedisPool\Redis::getInstance()->pool('redis')::defer();
    }

    /**
     * @Mark:uid绑定fd
     * @param int $uid
     * @param int $fd
     * @return mixed
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/12
     */
    static public function setUidFdMap(int $uid,int $fd)
    {
        self::setFdByUid($uid,$fd);
        self::setUidByFd($fd,$uid);
    }

    /**
     * @Mark:通过uid获取所有fd
     * @param int $uid
     * @return array|mixed
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/12
     */
    static public function getFdListByUid(int $uid)
    {
        $key = self::getKey('userFdList:'.$uid);
        $fdList = [];
        if (self::_init()->exists($key) ) {
            $fdList = (array)self::_init()->get($key);
        }
        if (!$fdList) {
            self::_init()->del($key);
            return $fdList;
        }
        foreach ($fdList as $k=>$fd) {
            if (!$ret = ServerManager::getInstance()->getSwooleServer()->exist($fd) || !$_ret = ServerManager::getInstance()->getSwooleServer()->isEstablished($fd)){
                if (ServerManager::getInstance()->getSwooleServer()->isEstablished($fd)) ServerManager::getInstance()->getSwooleServer()->disconnect($fd);

                unset($fdList[$k]);
            }
        }
        return $fdList;
    }

    /**
     * @Mark:通过fd设置uid映射
     * @param int $fd
     * @param int $uid
     * @return mixed
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/12
     */
    static private function setUidByFd(int $fd,int $uid)
    {
        self::setTag(self::getKey('fdUser:'.$fd));
        return self::_init()->set(self::getKey('fdUser:'.$fd),$uid);
    }

    /**
     * @Mark:通过uid设置fd映射
     * @param int $uid
     * @param int $fd
     * @return mixed
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/12
     */
    static private function setFdByUid(int $uid,int $fd)
    {
        $fdList = self::getFdListByUid($uid);
        $fdList[] = $fd;
        self::setTag(self::getKey('userFdList:'.$uid));
        return self::_init()->set(self::getKey('userFdList:'.$uid),$fdList);
    }

    /**
     * @Mark:通过fd获取uid
     * @param int $fd
     * @return mixed
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/12
     */
    static public function getUidByFd(int $fd)
    {
        return self::_init()->get(self::getKey('fdUser:'.$fd));
    }

    /**
     * @Mark:获取key
     * @param $key
     * @return string
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/12
     */
    static private function getKey($key)
    {
        return self::Prefix.$key;
    }

    /**
     * @Mark:清除fd相关信息
     * @param int $fd
     * @return mixed
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/12
     */
    static public function clearByFd(int $fd)
    {
        $fdUserKey = self::getKey('fdUser:'.$fd);
        $uid = self::_init()->get($fdUserKey);
        $userFdListKey = self::getKey('userFdList:'.$uid);
        if ($uid) {
            $fdList = (array)self::_init()->get($userFdListKey);
            foreach ($fdList as $k=>$v) {
                if ((int)$v === $fd) unset($fdList[$k]);
            }
            if ($fdList) {
                self::_init()->set($userFdListKey,$fdList);
            } else {
                self::_init()->del($userFdListKey);
            }
        }
        $keysList = self::_init()->get(self::getKey(self::Tags));
        if ($keysList) {
            $keysListFlip = array_flip($keysList);
            if (isset($keysListFlip[$fdUserKey]) && isset($keysList[$keysListFlip[$fdUserKey]])) unset($keysList[$keysListFlip[$fdUserKey]]);
            if (isset($keysListFlip[$userFdListKey]) && isset($keysList[$keysListFlip[$userFdListKey]])) unset($keysList[$keysListFlip[$userFdListKey]]);
            self::_init()->set(self::getKey(self::Tags), $keysList);
        }
        return self::_init()->del(self::getKey('fdUser:'.$fd));
    }
    
    static public function clearAll()
    {
        $tagName = self::Tags;
        $obj = self::_init();
        if ($obj->exists(self::getKey($tagName))) {
            $keyList = $obj->get(self::getKey($tagName));
            if ($keyList) {
                foreach ($keyList as $key) {
                    $obj->del($key);
                }
            }
            $obj->del(self::getKey($tagName));
        }
    }

    static private function setTag($key)
    {
        $tagName = self::Tags;
        if (is_string($key)) {
            $key = explode(',', $key);
        }
        if (self::_init()->exists(self::getKey($tagName))) {
            $tags =self::_init()->get(self::getKey($tagName));
            $tags = array_unique(array_merge($tags, $key));
        } else {
            $tags = $key;
        }
        self::_init()->set(self::getKey($tagName), $tags);
    }

}