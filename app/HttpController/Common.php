<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Common.php  Version 2019/8/27
// +----------------------------------------------------------------------
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;

class Common extends Controller
{
    protected $uid;
    protected $noNeedLogin = [];
    public function index()
    {
        $this->success();
    }

    protected function onRequest(?string $action): ?bool
    {
        if (!in_array('*',$this->noNeedLogin) && !in_array($action,$this->noNeedLogin)) {
            $authorizations = $this->request()->getHeader('authorizations');
            if (!$authorizations) throw new \Exception('请登录',401);
            $authorizations = explode(' ',$authorizations[0]);
            if (count($authorizations) != 2) throw new \Exception('请登录',401);
            $token = $authorizations[1];
            $uid = tokenVerify($token);
            if (!$uid) throw new \Exception('请登录',401);
            $this->uid = $uid;
        }
        return parent::onRequest($action);
    }

    public function success($msg = null,$result = null,$code = 1)
    {
        $data = [
            'code'=>$code,
            'msg'=>$msg,
            'result'=>$result
        ];
        $this->response()->write(json_encode($data));
        $this->response()->end();
        return true;
    }

    public function error($msg = null,$result = null,$code = 0)
    {
        $data = [
            'code'=>$code,
            'msg'=>$msg,
            'result'=>$result
        ];
        $this->response()->write(json_encode($data));
        $this->response()->end();
        return true;
    }

    public function onException(\Throwable $throwable):void
    {
        if ($throwable->getCode() != 500) {
            $this->error($throwable->getMessage(),null,$throwable->getCode());
        } else {
            $this->response()->withStatus(500);
            $this->error($throwable->getMessage());
        }
    }
}