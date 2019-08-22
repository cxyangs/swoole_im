<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | OnlineUser.php  Version 2019/7/5
// +----------------------------------------------------------------------
namespace App\Service;

use EasySwoole\Component\Singleton;
use EasySwoole\Component\TableManager;
use Swoole\Table;

class OnlineUser
{
    use Singleton;
    private $table;

    public function __construct()
    {
        TableManager::getInstance()->add('onlineUser', [
            'fd' => ['type' => Table::TYPE_INT, 'size' => 8],
            'uid' => ['type' => Table::TYPE_INT, 'size' => 8],
            'shop_id' => ['type' => Table::TYPE_INT, 'size' => 8],
            'avatar' => ['type' => Table::TYPE_STRING, 'size' => 256],
            'nickname' => ['type' => Table::TYPE_STRING, 'size' => 128],
            'onlineTime' => ['type' => Table::TYPE_INT, 'size' => 4],
        ]);
        $this->table = TableManager::getInstance()->get('onlineUser');
    }

    /**
     * @Mark:创建在线用户
     * @param UserBean $userBean
     * @Author: yang <502204678@qq.com>
     * @Version 2019/7/5
     */
    public function createUser(UserBean $userBean):void
    {
        $this->table->set($userBean->getFd(),$userBean->toArray(null,$userBean::FILTER_NOT_EMPTY));
        $this->table->set($userBean->getUid(),$userBean->toArray(null,$userBean::FILTER_NOT_EMPTY));
        if ($userBean->getShopId()) {
            $this->table->set($userBean->getShopId(),$userBean->toArray(null,$userBean::FILTER_NOT_EMPTY));
        }
    }

    /**
     * @Mark:删除用户
     * @param $fd
     * @Author: yang <502204678@qq.com>
     * @Version 2019/7/5
     */
    public function delUser($fd):void
    {
        if ($this->table->get($fd)) $this->table->del($fd);
    }

    public function getUserInfo($fd)
    {
        return $this->table->get($fd);
    }
}