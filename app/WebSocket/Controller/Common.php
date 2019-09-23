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

use App\WebSocket\MsgCode;
use App\WebSocket\RelationMap;
use EasySwoole\Socket\AbstractInterface\Controller;

class Common extends Controller
{
    protected $uid;

    public function __construct()
    {
        parent::__construct();
    }

    public function onRequest(?string $actionName) : bool
    {
        $this->uid = RelationMap::getUidByFd($this->caller()->getClient()->getFd());
        if (!$this->uid) {
            $this->error('请登录',MsgCode::NoLogin);
            return false;
        }
        return true;
    }

    public function index()
    {
        $this->error('PONG',-1);
    }

    public function success(array $params = null,string $msg = null,int $code = 1)
    {
        $data = [
            'code'=>$code,
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

    public function onException(\Throwable $throwable):void
    {

    }
}