<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | User.php  Version 2019/8/13
// +----------------------------------------------------------------------
namespace App\HttpController;

use App\Service\Chat;
use App\Service\Common;
use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\MysqliPool\Mysql;

class User extends Controller
{
    protected $uid;
    protected function onRequest(?string $action): ?bool
    {
        parent::onRequest($action);
        $authorizations = $this->request()->getHeader('authorizations');
        if (!$authorizations) return false;
        list(,$token) = explode(' ',$this->request()->getHeader('authorizations')[0]);
        $uid = tokenVerify($token);
        if (!$uid) return false;
        $this->uid = $uid;
        return true;
    }

    public function index()
    {
        $db = Mysql::getInstance()->pool('mysql')::defer();
        $userList = $db->get('bs_user',[0,10],'nickname as username,avatar,id');
        $mine = [];
        foreach ($userList as &$info) {
            $info['avatar'] = imgPath($info['avatar']);
            $info['sign'] = '我的ID是:'.$info['id'];
            if ($info['id'] == $this->request()->getQueryParam('id')) {
                $mine = $info;
            }
        }
        $data = [
            'mine'=>$mine,
            'friend'=>[
                [
                    'groupname'=>'分组一',
                    'id'=>1,
                    'online'=>2,
                    'list'=>$userList
                ]
            ]
        ];
        $result = Array(
            "code" => 0,
            "data" => $data,
            "msg" => ''
        );
        $this->response()->write(json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $this->response()->withHeader('Content-type', 'application/json;charset=utf-8');
        $this->response()->withStatus(200);
        return true;
    }

    public function chatRecently()
    {
        $params = json_decode($this->request()->getBody()->__toString(),true);
        $isService = isset($params['is_service']) ? $params['is_service'] : false;
        $chatService = new Chat();
        if ($isService) {
            //获取店铺id
            $shopId = (new Common())->getshopIdByUid($this->uid);
            if (!$shopId) return $this->error();
            $list = $chatService->getChatRecently($shopId);
        } else {
            $list = $chatService->getChatRecently($this->uid);
        }
        if (!$list['rows']) return $this->error();
        return $this->success(null,$list);
    }

    public function getChatRecord()
    {
        $params = json_decode($this->request()->getBody()->__toString(),true);
        if (!isset($params['chat_id']) || !$params['chat_id']) {
            if (isset($params['to_uid']) && $params['to_uid'] && isset($params['chat_type']) && (int)$params['chat_type']) {
                $chat_id = buildChatHash($this->uid,$params['to_uid'],(int)$params['chat_type']);
            } else {
                return $this->error('参数错误');
            }
        } else {
            $chat_id = $params['chat_id'];
        }
        $list = (new Chat())->getChatRecord($chat_id,getLimitByPage(isset($params['page']) ? $params['page'] : 1));
        if ($list['total']) {
            foreach ($list['rows'] as &$v) {
                $v['mine'] = $v['from_uid'] === $this->uid ? true : false;
            }
            return $this->success(null,$list);
        }
        return $this->error();
    }

    public function upload()
    {
        $file = time().'.png';
        $path = '/mnt/hgfs/www/layIM/layim-v3.7.6/'.$file;
        $this->request()->getUploadedFile('file')->moveTo($path);
        $data = [
            'code'=>0,
            'msg'=>"",
            'data'=>[
                'src'=>'http://chat.cc/'.$file
            ]
        ];
        $this->response()->write(json_encode($data));
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
        $this->error($throwable->getMessage());
    }
}