<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Common.php  Version 2019/7/5
// +----------------------------------------------------------------------

/**
 * @Mark:token验证
 * @param $token
 * @return bool
 * @Author: yang <502204678@qq.com>
 * @Version 2019/7/5
 */
function tokenVerify($token)
{
    try{
        $key = '0d971b21c416462afaa82653fc23a361';
        $alg = 'HS256';
        $iss = 'https://www.szbsit.com';
        $ret = \Firebase\JWT\JWT::decode($token,$key,[$alg]);
        if ($ret->iss !== $iss) return false;
        return $ret->data->id;
    }catch (Throwable $e) {
        return false;
    }
}

/**
 * @Mark:生成JWT token
 * @param $uid
 * @return bool|string
 * @Author: yang <502204678@qq.com>
 * @Version 2019/8/27
 */
function tokenBuild($uid) {
    try{
        $key = '0d971b21c416462afaa82653fc23a361';
        $alg = 'HS256';
        $iss = 'https://www.szbsit.com';
        $token = [
            'iss' => $iss,
            'iat' => time(),
            'data' => ['id'=>$uid],
            'exp'=>time() + 8640000
        ];
        return \Firebase\JWT\JWT::encode($token,$key,$alg);
    }catch (Throwable $e) {
        return false;
    }
}

/**
 * @Mark:补全图片路径
 * @param $imgpath
 * @return string
 * @Author: yang <502204678@qq.com>
 * @Version 2019/8/14
 */
function imgPath($imgpath)
{
    if (empty($imgpath)) return "";
    return 'https://bsit.oss-cn-hangzhou.aliyuncs.com/'.$imgpath;
}

/**
 * @Mark:生成聊天会话id
 * @param $from
 * @param $to
 * @param $chat_type
 * @return string
 * @Author: yang <502204678@qq.com>
 * @Version 2019/8/14
 */
function buildChatHash($from,$to,$chat_type){
    $sort = [$from,$to];
    sort($sort);
    return implode(str_repeat('_',$chat_type),$sort);
}

/**
 * @Mark:解析会话id
 * @param $chat_id
 * @param $chat_type
 * @return array
 * @Author: yang <502204678@qq.com>
 * @Version 2019/8/23
 */
function deChatHash($chat_id,$chat_type){
    return explode(str_repeat('_',$chat_type),$chat_id);
}

function getLimitByPage(int $page = 1, int $limit = 20)
{
    if ($page < 1) $page = 1;
    return [($page - 1) * $limit, $limit];
}