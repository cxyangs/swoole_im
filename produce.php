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
            'worker_num' => 4,
            'task_worker_num' => 2,
            'reload_async' => true,
            'task_enable_coroutine' => true,
            'max_wait_time'=>5
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

    ],
    'REDIS'=>[

    ]
];
