<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2018 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | 自动生成数据库表映射  Version 2018/11/30
// +----------------------------------------------------------------------
include_once 'vendor/autoload.php';
//执行方式 php build.php 存放目录【默认application/Common/Model】 表名【默认所有表】
//如 php build.php test bs_admin
$dir = isset($argv[1]) ? $argv[1] : __DIR__.'/app/Service/Bean';
$tableName = isset($argv[2]) ? $argv[2] : 'ALL';
if (!is_dir($dir)) mkdir($dir,0777,true);
$config = [
    'host'=>'127.0.0.1',
    'port'=>'3306',
    'user'=>'miao',
    'timeout'=>'5',
    'charset'=>'utf8mb4',
    'password'=>'JTsiYJiADXZBNMfB',
    'database'=>'miao',
    'prefix'=>'bs_',
    'maxObjectNum'         => 5,//最大创建数量
    'minObjectNum'         => 1,//最小创建数量 最小创建数量不能大于等于最大创建
    'POOL_TIME_OUT'=>'0.1',
];
try{
    $mysql = new MySqli($config['host'],$config['user'],$config['password'],$config['database']);
    mysqli_set_charset($mysql,$config['charset']);//设置编码
    mysqli_connect_error()?die("连接失败"):"";
    if ($tableName === 'ALL') {
        $databases = $mysql->query("show tables");
        $tables = $databases->fetch_all();
    } else {
        $tables = [
            [$tableName]
        ];
    }
    foreach ($tables as $table) {
        $table = $table[0];
        $tableName = str_replace($config['prefix'],'',$table);
        $fileName = \EasySwoole\Utility\Str::studly($tableName);
        $tableInfo = $mysql->query('SHOW FULL COLUMNS FROM '.$table);
        $fieldList = $tableInfo->fetch_all();
        $str = '';
        foreach ($fieldList as $field) {
            $str .= <<<EOT
/**
     * remark $field[8]
     * type $field[1]
     */        
    protected \$$field[0];
    
    
EOT;
        }
//        $str = substr($str,0,strripos($str,PHP_EOL));
        foreach ($fieldList as $field) {
            $get = 'get'.\EasySwoole\Utility\Str::studly($field[0]);
            $set = 'set'.\EasySwoole\Utility\Str::studly($field[0]);
            $str .= <<<EOT
public function $get ()
    {
        return \$this->$field[0];
    }
    
    public function $set (\$value): void
    {
        \$this->$field[0] = \$value;
    }
    
    
EOT;
        }
    writeModel($fileName.'Bean',$str,$dir);
    }
} catch (\Error $e) {
    var_dump($e->getMessage());
}

function writeModel($name,$content,$dir) {
    $data = <<<EOT
<?php
namespace App\Service\Bean;

use EasySwoole\Spl\SplBean;

class $name extends SplBean
{
    $content
}
EOT;
    file_put_contents($dir.'/'.$name.'.php',$data);
    echo "\033[0;34m ".$dir.'/'.$name.".php Create Success \033[0m".PHP_EOL;
}
