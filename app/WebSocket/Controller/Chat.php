<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Chat.php  Version 2019/8/12
// +----------------------------------------------------------------------
namespace App\WebSocket\Controller;

use App\Service\User;
use App\WebSocket\RelationMap;
use EasySwoole\EasySwoole\ServerManager;
use EasySwoole\EasySwoole\Swoole\Task\TaskManager;
use EasySwoole\Socket\AbstractInterface\Controller;

class Chat extends Common
{
    /**
     * @Mark:解析客户端发送的聊天消息
     * @return bool
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/16
     */
    public function sendMsg()
    {
        $params = $this->caller()->getArgs();
        if (!isset($params['chat_type']) || !$params['chat_type'] || !isset($params['msg_type']) || !$params['msg_type'] || !isset($params['msg']) || !$params['msg'] || !isset($params['to_uid']) || !$params['to_uid'] || !isset($params['chat_id']) ) {
            return $this->error();
        }
        $chatType = $params['chat_type'];
        switch ($chatType)
        {
            case 1:
                return $this->singleMsg($params);
                break;
            case 2:
                return $this->groupMsg($params);
                break;
            case 3:
                return $this->systemMsg($params);
                break;
            case 4:
                return $this->ServiceMsg($params);
                break;
        }

    }

    /**
     * @Mark:单聊
     * @param $params
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/16
     */
    public function singleMsg($params)
    {
        $chatService = new \App\Service\Chat();
        $friendFdList = RelationMap::getFdListByUid($params['to_uid']);
        $client = $this->caller()->getClient();
        $uid = RelationMap::getUidByFd($client->getFd());
        $userInfo = User::getInstance()->getUserInfo($uid);
        $chatService->checkChat($uid,$params['to_uid'],$params['chat_type']);
        $chat_id = (function()use($params,$uid){
            if ($params['chat_id']) return $params['chat_id'];
            return buildChatHash($uid,$params['to_uid'],$params['chat_type']);
        })();
        $chatMsg = [
            'nickname'=> $userInfo->getNickname(),
            'avatar'=> imgPath($userInfo->getAvatar()),
            'id'=> $uid,
            'chat_id'=>$chat_id,
            'chat_type'=> $params['chat_type'],
            'msg_type'=>$params['msg_type'],
            'msg'=> $params['msg'],
            'createtime'=> time()
        ];
        if ($friendFdList) {
            //异步推送消息
            TaskManager::async(function () use ($friendFdList,$chatMsg){
                $server = ServerManager::getInstance()->getSwooleServer();
                foreach ($friendFdList as $fd) {
                    if ($server->isEstablished($fd)) {
                        $server->push($fd,json_encode(['code'=>1,'msg'=>null,'result'=>$chatMsg]));
                    }
                }
            });
        }
        $chatRecord = [
            'from_uid'=>$uid,
            'to_uid'=>$params['to_uid'],
            'msg'=>$params['msg'],
            'chat_type'=>$params['chat_type'],
            'msg_type'=>$params['msg_type'],
            'createtime'=>time(),
            'chat_id'=>$chatMsg['chat_id']
        ];
        //保存聊天记录，实现多端消息同步
        $chatService->addChatRecord($chatRecord);
        //更新聊天会话
        $chatService->updateChat($chatRecord);
        return $this->success();
    }

    public function groupMsg($params)
    {
        return $this->success();
    }


    public function systemMsg($params)
    {
        return $this->success();
    }

    /**
     * @Mark:客服聊天
     * @param $params
     * @return bool
     * @throws \EasySwoole\Component\Pool\Exception\PoolEmpty
     * @throws \EasySwoole\Component\Pool\Exception\PoolException
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/16
     */
    public function ServiceMsg($params)
    {
        if (!isset($params['role_type'])) return $this->error();
        $chatService = new \App\Service\Chat();
        $client = $this->caller()->getClient();
        $uid = RelationMap::getUidByFd($client->getFd());
        if (!$params['chat_id']) {
            if (!isset($params['shop_id']) || !$params['shop_id']) return $this->error();
            $params['chat_id'] = (function()use($params,$uid,$chatService){
                $_uid = (int)$params['role_type'] === 1 ? $params['to_uid'] : $uid;
                //检测会话是否存在
                $chatService->checkChat($params['shop_id'],$_uid,$params['chat_type']);
                return buildChatHash($params['shop_id'],$_uid,$params['chat_type']);
            })();
        } else {
            $chatUids = deChatHash($params['chat_id'],$params['chat_type']);
            if ((int)$params['role_type'] === 1) {
                $params['shop_id'] = (int)$chatUids[0] === $params['to_uid'] ? (int)$chatUids[1] : (int)$chatUids[0];
            } else {
                $params['shop_id'] = (int)$chatUids[0] === $uid ? (int)$chatUids[1] : (int)$chatUids[0];
            }

        }
        $chatMsg = [
            'msg'=>$params['msg'],
            'chat_type'=>$params['chat_type'],
            'msg_type'=>$params['msg_type'],
            'createtime'=>time(),
            'chat_id'=>$params['chat_id'],
            'shop_id'=>$params['shop_id']
        ];
        //校验消息发送人身份
        if ($params['role_type'] === 'service') {
            $shopInfo = (new \App\Service\Common())->getShopInfoById((int)$params['shop_id']);
            $chatMsg['nickname'] = $shopInfo->getShopName();
            $chatMsg['avatar'] = $shopInfo->getShopLogo();
            $friendFdList = RelationMap::getFdListByUid($params['to_uid']);
        } else {
            $userInfo = User::getInstance()->getUserInfo($uid);
            $chatMsg['nickname'] = $userInfo->getNickname();
            $chatMsg['avatar'] = imgPath($userInfo->getAvatar());
            $chatMsg['id'] = $uid;
            //若用户主动给客服发送消息，此时to_uid为店铺id，获取所有“在线”客服
            $serviceList = (new \App\Service\Common())->getShopServiceList((int)$params['shop_id']);
            if ($serviceList) {
                //获取上次跟此用户聊天的客服
                $lastChatInfo = $chatService->getLastMsg($params['chat_id']);
                if ($lastChatInfo) {
                    $_serviceList = array_column($serviceList,null,'uid');
                    $serviceUid = $lastChatInfo->getFromUid() === $uid ? $lastChatInfo->getToUid() : $uid;
                    if (!isset($_serviceList[$serviceUid])) {
                        $serviceUid = $serviceList[0]['uid'];
                    }
                } else {
                    $serviceUid = $serviceList[0]['uid'];
                }
                $friendFdList = RelationMap::getFdListByUid($serviceUid);
            } else {
                $serviceUid = 0;
                $friendFdList = [];
            }
        }
        //异步推送消息
        if ($friendFdList) {
            TaskManager::async(function () use ($friendFdList,$chatMsg){
                $server = ServerManager::getInstance()->getSwooleServer();
                foreach ($friendFdList as $fd) {
                    if ($server->isEstablished($fd)) {
                        $server->push($fd,json_encode(['code'=>1,'msg'=>null,'result'=>$chatMsg]));
                    }
                }
            });
        }
        $chatRecord = [
            'from_uid'=>$uid,
            'to_uid'=>isset($serviceUid) ? $serviceUid : $params['to_uid'],
            'shop_id'=>$params['shop_id'],
            'msg'=>$params['msg'],
            'chat_type'=>$params['chat_type'],
            'msg_type'=>$params['msg_type'],
            'createtime'=>time(),
            'chat_id'=>$params['chat_id']
        ];
        //保存聊天记录，实现多端消息同步
        $chatService->addChatRecord($chatRecord);
        //更新聊天会话
        $chatRecord['role_type'] = $params['role_type'];
        $chatService->updateChat($chatRecord);
        return $this->success();
    }

    public function setChatRead()
    {
        $params = $this->caller()->getArgs();
        if (!isset($params['chat_id']) || !$params['chat_id']) return $this->error();
        if (!isset($params['role_type'])) return $this->error();
        $chat = new \App\Service\Chat();
        $client = $this->caller()->getClient();
        $uid = RelationMap::getUidByFd($client->getFd());
        $chat->setChatRead((int)$uid,$params['chat_id'],(int)$params['role_type']);
        return $this->success();
    }
}