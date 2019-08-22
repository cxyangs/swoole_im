<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Websocket.php  Version 2019/7/5
// +----------------------------------------------------------------------
namespace App\WebSocket;

use App\Service\User;

/**
 * WebSocket事件处理器
 * Class WebSocketEvent
 * @package App\WebSocket
 */
class WebSocketEvent
{
    protected $dispatcher;

    /**
     * 用户连接到WebSocket
     * @param \swoole_server $server
     * @param \swoole_http_request $req
     */
    static function onOpen(\swoole_server $server, \swoole_http_request $req)
    {
        $token = $req->get['token'];
        if (!User::getInstance()->auth($token,$req->fd)) {
            $server->close($req->fd);
        }
    }

    /**
     * 用户断开链接
     * @param \swoole_server $server
     * @param int $fd
     * @param int $reactorId
     */
    static function onClose(\swoole_server $server, int $fd, int $reactorId)
    {
        RelationMap::clearByFd($fd);
    }
}