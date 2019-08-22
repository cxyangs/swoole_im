<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | Chat.php  Version 2019/8/14
// +----------------------------------------------------------------------
namespace App\Service;

use App\Service\Bean\ChatBean;
use App\Service\Bean\ChatMessageBean;

class Chat
{
    /**
     * @var \EasySwoole\Mysqli\Mysqli
     */
    private $db;
    public function __construct()
    {
        $this->db = \EasySwoole\MysqliPool\Mysql::getInstance()->pool('mysql')::defer();
    }

    /**
     * @Mark:获取会话列表
     * @param int $id
     * @param int $is_shop
     * @return array
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\OrderByFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/14
     */
    public function getChatRecently(int $id,int $is_shop = 0)
    {
        if ($is_shop) {
            $this->db->where('shop_id',$id);
        } else {
            $this->db->where('uid',$id);
        }
        $list = $this->db->where('is_del',0)->orderBy('last_time','DESC')->get('bs_chat',null,'id,chat_id,shop_id,friend_uid,friend_name,friend_avatar,last_msg,last_uid,last_time,chat_type,msg_type,unread_count');
        return ['rows'=>$list,'unread_count'=>array_sum(array_column($list,'unread_count'))];
    }

    /**
     * @Mark:获取聊天记录
     * @param $chat_id
     * @param $limit
     * @return array
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\OrderByFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/14
     */
    public function getChatRecord(string $chat_id,$limit = [0,10])
    {
        $list = $this->db
            ->join('bs_user u','sm.from_uid = u.id','LEFT')
            ->where('sm.chat_id',$chat_id)
            ->orderBy('sm.createtime','DESC')
            ->withTotalCount()
            ->get('bs_chat_message sm',$limit,'u.avatar,u.nickname,sm.chat_id,sm.from_uid,sm.to_uid,sm.chat_type,sm.msg_type,sm.msg,sm.createtime');
        return ['rows'=>$list,'total'=>$this->db->getTotalCount()];
    }

    /**
     * @Mark:添加聊天记录
     * @param array $params
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/14
     */
    public function addChatRecord(array $params)
    {
        $data = [
            'chat_id'=>$params['chat_id'],
            'from_uid'=>$params['from_uid'],
            'to_uid'=>$params['to_uid'],
            'chat_type'=>$params['chat_type'],
            'msg_type'=>$params['msg_type'],
            'msg'=>$params['msg'],
            'createtime'=>$params['createtime']
        ];
        $this->db->insert('bs_chat_message',$data);
    }

    /**
     * @Mark:验证会话是否存在，若不存在则创建
     * @param int $from
     * @param int $to
     * @param int $chat_type
     * @return bool
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/16
     */
    public function checkChat(int $from,int $to,$chat_type = 1)
    {
        $chat_id = buildChatHash($from,$to,$chat_type);
        $ret = $this->db->where('chat_id',$chat_id)->count('bs_chat');
        if ($ret) return true;
        if ($chat_type === 1) {//单聊
            $userList = $this->db->whereIn('id',[$from,$to])->get('bs_user',null,'avatar,nickname,id');
            $userList = array_column($userList,null,'id');
            $data = [
                ['uid'=>$from,'friend_uid'=>$userList[$to]['id'],'friend_name'=>$userList[$to]['nickname'],'friend_avatar'=>imgPath($userList[$to]['avatar']),'chat_id'=>$chat_id],
                ['uid'=>$to,'friend_uid'=>$userList[$from]['id'],'friend_name'=>$userList[$from]['nickname'],'friend_avatar'=>imgPath($userList[$from]['avatar']),'chat_id'=>$chat_id],
            ];
            $this->db->insertMulti('bs_chat',$data);
        } elseif ($chat_type === 4) {//客服聊天
            $shopInfo = $this->db->where('id',$from)->getOne('bs_shop','shop_logo,shop_name,id');
            $userInfo = $this->db->where('id',$to)->getOne('bs_user','id,nickname,avatar');
            $data = [
                ['uid'=>$to,'shop_id'=>$shopInfo['id'],'friend_uid'=>$shopInfo['id'],'friend_name'=>$shopInfo['shop_name'],'friend_avatar'=>imgPath($shopInfo['shop_logo']),'chat_id'=>$chat_id],
                ['shop_id'=>$shopInfo['id'],'friend_uid'=>$to,'friend_name'=>$userInfo['nickname'],'friend_avatar'=>imgPath($userInfo['avatar']),'chat_id'=>$chat_id],
            ];
            $this->db->insertMulti('bs_chat',$data);
        } else if ($chat_type === 2) {//群聊

        } else if ($chat_type === 3) {//系统消息

        }
        return true;
    }

    /**
     * @Mark:更新会话信息
     * @param array $params
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/16
     */
    public function updateChat(array $params)
    {
        $data = [
            'last_uid'=>$params['from_uid'],
            'last_msg'=>$params['msg'],
            'last_time'=>$params['createtime'],
            'chat_type'=>$params['chat_type'],
            'msg_type'=>$params['msg_type'],
            'is_del'=>0,
        ];
        if ($params['chat_type'] === 1) {
            $this->db->where('chat_id',$params['chat_id'])->where('uid',$params['from_uid'])->update('bs_chat',$data);
            $data['unread_count'] = $this->db->inc();
            $this->db->where('chat_id',$params['chat_id'])->where('uid',$params['to_uid'])->update('bs_chat',$data);
        } else if ($params['chat_type'] === 4){
            if ($params['role_type'] === 'service') {
                $this->db->where('chat_id',$params['chat_id'])->where('shop_id',$params['shop_id'])->update('bs_chat',$data);
                $data['unread_count'] = $this->db->inc();
                $this->db->where('chat_id',$params['chat_id'])->where('uid',$params['to_uid'])->update('bs_chat',$data);
            } else {
                $this->db->where('chat_id',$params['chat_id'])->where('uid',$params['from_uid'])->update('bs_chat',$data);
                $data['unread_count'] = $this->db->inc();
                $this->db->where('chat_id',$params['chat_id'])->where('shop_id',$params['shop_id'])->update('bs_chat',$data);
            }
        } else if ($params['chat_type'] === 2) {

        } else if ($params['chat_type'] === 3) {

        }
    }

    /**
     * @Mark:获取最后一条聊天记录
     * @param string $chat_id
     * @return ChatMessageBean|null
     * @throws \EasySwoole\Mysqli\Exceptions\ConnectFail
     * @throws \EasySwoole\Mysqli\Exceptions\OrderByFail
     * @throws \EasySwoole\Mysqli\Exceptions\PrepareQueryFail
     * @throws \Throwable
     * @Author: yang <502204678@qq.com>
     * @Version 2019/8/19
     */
    public function getLastMsg(string $chat_id)
    {
        $LastInfo = $this->db->where('chat_id',$chat_id)->orderBy('id','DESC')->getOne('bs_chat_message','from_uid,to_uid');
        return $LastInfo ? new ChatMessageBean($LastInfo) : null;
    }
}