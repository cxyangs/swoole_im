<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | WebsocketEvent.php  Version 2019/7/5
// +----------------------------------------------------------------------
namespace App\WebSocket;

use EasySwoole\Socket\AbstractInterface\ParserInterface;
use EasySwoole\Socket\Bean\Caller;
use EasySwoole\Socket\Bean\Response;

class WebSocketParser implements ParserInterface
{
    /**
     * @Mark:客户端数据解析
     * @param $raw
     * @param $client
     * @return Caller|null
     * @Author: yang <502204678@qq.com>
     * @Version 2019/7/5
     */
    public function decode($raw, $client) : ? Caller
    {
        $obj = json_decode($raw);
        $caller =  new Caller();
        if (!$obj) return $caller;
        $class = isset($obj->class) ? ucfirst($obj->class) : "Common";
        $action = isset($obj->action) ? $obj->action : 'index';
        if (!$class || !$action)  return $caller;
        $content = isset($obj->content) ? (array)$obj->content : [];
        $class = 'App\\WebSocket\\Controller\\'.$class;
        if (!class_exists($class)) return $caller;
        // 设置被调用的类
        $caller->setControllerClass($class);
        // 设置被调用的方法
        $caller->setAction($action);
        // 设置被调用的Args
        $caller->setArgs($content);
        return $caller;
    }

    /**
     * encode
     * @param  Response $response Socket Response 对象
     * @param  Client   $client   Socket Client 对象
     * @return string             发送给客户端的消息
     */
    public function encode(Response $response, $client) : ? string
    {
        // 这里返回响应给客户端的信息
        // 这里应当只做统一的encode操作 具体的状态等应当由 Controller处理
        return json_encode($response->getMessage());
    }

}