<?php
// +----------------------------------------------------------------------
// | Szbsit [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2019 http://www.szbsit.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: yang <502204678@qq.com>
// +----------------------------------------------------------------------
// | User.php  Version 2019/9/23
// +----------------------------------------------------------------------
namespace App\WebSocket\Controller;

use App\WebSocket\MsgCode;

class User extends Common
{
    public function recentChat()
    {
        $params = $this->caller()->getArgs();
        $isService = isset($params['is_service']) ? $params['is_service'] : false;
        $chatService = new \App\Service\Chat();
        if ($isService) {
            //获取店铺id
            $shopId = (new \App\Service\Common())->getshopIdByUid($this->uid);
            if (!$shopId) return false;
            $list = $chatService->getChatRecently($shopId,1);
        } else {
            $list = $chatService->getChatRecently($this->uid);
        }
        if ($list['rows']) {
            $this->success($list,null,MsgCode::RecentChat);
        }
    }
}