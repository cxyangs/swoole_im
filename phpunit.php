<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Test.php  Version 2019/5/20
// +----------------------------------------------------------------------
require_once 'vendor/autoload.php';

$key = '0d971b21c416462afaa82653fc23a361';
$alg = 'HS256';
$iss = 'https://www.szbsit.com';
$token = [
    'iss' => $iss,
    'iat' => time(),
    'data' => ['id'=>22571]
];
$exp = time() + 8640000;
$access_token = $token;
$access_token['scopes'] = 'access_token'; //token标识，请求接口的token
$access_token['exp'] = $exp;
$ret = \Firebase\JWT\JWT::encode($access_token,$key,$alg);
var_dump($token['data']['id']);
var_dump($ret);