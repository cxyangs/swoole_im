<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | MsgCode.php  Version 2019/8/12
// +----------------------------------------------------------------------
namespace App\WebSocket;

class MsgCode
{
    // 好友列表
    const FriendList = 100;
    // 群成员列表
    const GroupMemberList = 101;
    //最近聊天列表
    const RecentChat = 102;
    // 新聊天消息
    const ChatMsg = 200;
    // 聊天记录
    const ChatMsgRecord = 201;
    //未登录
    const NoLogin = -200;
}