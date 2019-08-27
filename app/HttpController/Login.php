<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Login.php  Version 2019/8/27
// +----------------------------------------------------------------------
namespace App\HttpController;

use EasySwoole\Utility\Random;

class Login extends Common
{
    protected $noNeedLogin = ['*'];

    /**
     * @Mark:登录
     * @return bool
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/27
     */
    public function index()
    {
        $params = json_decode($this->request()->getBody()->__toString(),true);
        if (!isset($params['username']) || empty($params['username'])) return $this->error('用户名不得为空');
        if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_]{4,15}$/',$params['username'])) return $this->error('用户名错误');
        if (!isset($params['password']) || empty($params['password'])) return $this->error('密码不得为空');
        if (!preg_match('/^[a-zA-Z]\w{5,17}$/',$params['password'])) return $this->error('密码格式错误');
        $userInfo = (new \App\Service\Common())->getUserInfoByUsername($params['username']);
        if (!$userInfo->getId()) return $this->error('账户不存在');
        if ($userInfo->getPassword() !== md5(md5($params['password']).$userInfo->getSalt())) return $this->error('密码错误');
        $this->success('登录成功',['token'=>tokenBuild($userInfo->getId())]);
    }

    /**
     * @Mark:注册
     * @return bool
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/27
     */
    public function register()
    {
        $params = json_decode($this->request()->getBody()->__toString(),true);
        if (!isset($params['username']) || empty($params['username'])) return $this->error('用户名不得为空');
        if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_]{4,15}$/',$params['username'])) return $this->error('请输入5~16位以字母开头的数字、字母或下划线的用户名');
        if (!isset($params['password']) || empty($params['password'])) return $this->error('密码不得为空');
        if (!preg_match('/^[a-zA-Z]\w{5,17}$/',$params['password'])) return $this->error('请输入6~18位数字、字母或下划线的组合密码');
        $service = new \App\Service\Common();
        $userInfo = $service->getUserInfoByUsername($params['username']);
        if ($userInfo->getId()) return $this->error('当前用户名已存在');
        $userInfo->setSalt(Random::character(6));
        $userInfo->setUsername($params['username']);
        $userInfo->setNickname($params['username']);
        $userInfo->setPassword(md5(md5($params['password']).$userInfo->getSalt()));
        $ret = $service->userRegister($userInfo);
        if ($ret) {
            return $this->success('注册成功',['token'=>tokenBuild($ret)]);
        } else {
            return $this->error('注册失败');
        }
    }

}