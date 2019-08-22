<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2019-01-01
 * Time: 20:06
 */

return [
    'SERVER_NAME' => "MiaoChat",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT' => 9504,
        'SERVER_TYPE' => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE' => SWOOLE_TCP,
        'RUN_MODEL' => SWOOLE_PROCESS,
        'SETTING' => [
            'worker_num' => 1,
            'reload_async' => true,
            'max_wait_time'=>5,
            'task_worker_num'=>1,
            'task_enable_coroutine'=>true
        ],
    ],
    'RunEnv'      => 'dev',
    'TEMP_DIR'    => __DIR__.'/runtime',//临时文件存放的目录
    'LOG_DIR'     => __DIR__.'/runtime/log',//日志文件存放的目录
    'CONSOLE' => [
        'ENABLE' => false,
        'LISTEN_ADDRESS' => '127.0.0.1',
        'HOST' => '127.0.0.1',
        'PORT' => 9505,
        'USER' => 'root',
        'PASSWORD' =>'123456'
    ],
    'DISPLAY_ERROR' => true,
    'DATABASES'=>[
        'host'=>'127.0.0.1',
        'port'=>'3306',
        'user'=>'chat',
        'timeout'=>'5',
        'charset'=>'utf8mb4',
        'password'=>'cZCX5fiikm2ZG5re',
        'database'=>'chat',
        'prefix'=>'bs_',
        'maxObjectNum'         => 5,//最大创建数量
        'minObjectNum'         => 1,//最小创建数量 最小创建数量不能大于等于最大创建
        'POOL_TIME_OUT'=>'0.1',
    ],
    'REDIS'=>[
        'host'=>'127.0.0.1',
        'port'=>'6379',
        'auth'=>null,
        'prefix'=>'miao_websocket_',//前缀
        'maxObjectNum'         => 5,//最大创建数量
        'minObjectNum'         => 1,//最小创建数量 最小创建数量不能大于等于最大创建
    ]
];
