<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Common.php  Version 2019/8/12
// +----------------------------------------------------------------------
namespace App\WebSocket\Controller;

use EasySwoole\Socket\AbstractInterface\Controller;

class Common extends Controller
{
    public function index()
    {
        $this->error(null,-1);
    }

    public function success(array $params = null,string $msg = null)
    {
        $data = [
            'code'=>1,
            'msg'=>$msg,
            'result'=>$params
        ];
        $this->response()->setMessage($data);
        return true;
    }

    public function error(string $msg = null,$code = 0)
    {
        $data = [
            'code'=>$code,
            'msg'=>$msg
        ];
        $this->response()->setMessage($data);
        return true;
    }
}