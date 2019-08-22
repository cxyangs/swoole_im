<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/5/28
 * Time: 下午6:33
 */

namespace EasySwoole\EasySwoole;

use App\WebSocket\RelationMap;
use App\WebSocket\WebSocketEvent;
use App\WebSocket\WebsocketParser;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\MysqliPool\Mysql;
use EasySwoole\RedisPool\Redis;
use EasySwoole\Socket\Dispatcher;

class EasySwooleEvent implements Event
{

    public static function initialize()
    {
        // TODO: Implement initialize() method.
        date_default_timezone_set('Asia/Shanghai');
        //注册redis连接池
        $configData = Config::getInstance()->getConf('REDIS');
        $config = new \EasySwoole\RedisPool\Config($configData);
        $poolConf = Redis::getInstance()->register('redis',$config);
        $poolConf->setMinObjectNum($configData['minObjectNum']);
        $poolConf->setMaxObjectNum($configData['maxObjectNum']);
        //注册mysql连接池
        $databasesConfigData = Config::getInstance()->getConf('DATABASES');
        $config = new \EasySwoole\Mysqli\Config($databasesConfigData);
        $poolConf = Mysql::getInstance()->register('mysql',$config);
        $poolConf->setMinObjectNum($configData['minObjectNum']);
        $poolConf->setMaxObjectNum($configData['maxObjectNum']);
    }

    public static function mainServerCreate(EventRegister $register)
    {
        $register->add(EventRegister::onWorkerStart, function (\swoole_server $server, $workerId) {
            if ($workerId == 0) {
                //删除fd与uid映射关系
                RelationMap::clearAll();
            }
        });
        // 注册WebSocket事件
        $conf = new \EasySwoole\Socket\Config();
        $conf->setType($conf::WEB_SOCKET);
        $conf->setParser(new WebsocketParser());
        $dispatch = new Dispatcher($conf);
        $register->add(EventRegister::onOpen, [WebSocketEvent::class, 'onOpen']);
        $register->add(EventRegister::onClose, [WebSocketEvent::class, 'onClose']);
        $register->add(EventRegister::onMessage, function (\swoole_server $server, \swoole_websocket_frame $frame) use ($dispatch) {
            $dispatch->dispatch($server, $frame->data,$frame);
        });
    }

    public static function onRequest(Request $request, Response $response): bool
    {
        $response->withHeader('Access-Control-Allow-Origin', '*');
        $response->withHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS,DELETE,PUT');
        $response->withHeader('Access-Control-Allow-Credentials', 'true');//允许携带cookie
        $response->withHeader('Access-Control-Allow-Headers', 'Content-Type, authorizations, X-Requested-With');
        if ($request->getMethod() === 'OPTIONS') {
            $response->withStatus(200);
            $response->end();
            return false;
        }
        return true;
    }

    public static function afterRequest(Request $request, Response $response): void
    {
        // TODO: Implement afterAction() method.
    }
}