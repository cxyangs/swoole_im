# IM聊天
### 背景
> 此项目是由于小程序B2B2C电商系统需要一个客服聊天，微信小程序默认提供的客服功能无法实现用户直接与商户进行沟通咨询，因此单独开发一套IM客服系统，同时加入常规的单聊、群聊等功能，便于后期其它项目有此需求时直接对接
### 开发思路
> 本项目基于Easyswoole框架进行开发，框架具体使用方法请移步至官方文档查询

> 客服聊天逻辑:商户在后台客服中心添加客服账户(此商户为`user`表账户)，并设置为“在线”；当消费者向该商户发送聊天咨询消息时，系统会获取所有“在线客服”,并查找上次与此消费者进行聊天的客服id,若此客服在线，则消息推送至该客服，否则随机推送到一个客服

### 运行

* git clone https://github.com/cxyangs/swoole_im.git

* composer install

* 修改dev.php 数据库、redis连接配置(正式环境修改produce.php)

* 执行php easyswoole start

* 系统默认监听9504端口,请开放此端口号

## 特性
* 一对一单聊
* 群聊
* 客服功能

## 数据格式及字段解析
* class     类名
* action    方法名
* content   请求参数
* chat_type 会话类型:1=一对一私聊;2=群聊;3=系统消息;4=客服聊天
* msg_type  消息类型:1=文字;2=图片
* msg       消息内容
* to_uid    私聊则是消息接收用户id，群聊则是群id,若是用户发送给客服，则是店铺id，若是客服发送给用户则是用户id
* shop_id   店铺id【可选】，仅当chat_type=4时有效，且必须
* role_type 发送人身份【可选】，仅当chat_type=4时有效，用于判断是用户发送还是客服发送的消息，用户发送时值为user,客服发送时值为service，且必须
* chat_id   当前会话id【可选】

`
{
"class":"chat",
"action":"sendMsg",
"content":{}
}
`


### 单聊
* 发送聊天信息
```
{
    "class":"chat",
    "action":"sendMsg",
    "content":{
        "to_uid":1,
        "chat_type":1,
        "msg_type":1,
        "msg":"消息内容",
        "chat_id":null//会话id，默认为null,后台自动生成
    }
}
```
* 接受聊天信息
```
{
    "code":1,
    "msg":null,
    "result":{
        "nickname":"消息发送人昵称",
        "avatar":"消息发送人头像地址",
        "id":1,//消息发送人id
        "chat_id":"1_2",
        "chat_type":1
        "msg_type":1
        "msg":"这是一条测试消息"
        "createtime":1566212436
    }
}
```

### 客服聊天
* 发送聊天信息
```
{
    "class":"chat",
    "action":"sendMsg",
    "content":{
        "to_uid":1,
        "chat_type":4,
        "msg_type":1,
        "msg":"消息内容",
        "chat_id":null,//会话id，默认为null,后台自动生成
        "shop_id":1,//店铺id
        "role_type":"user",//消息发送人角色，客服发送为service，用户发送为user
    }
}
```
* 接受聊天信息
```
{
    "code":1,
    "msg":null,
    "result":{
        "nickname":"消息发送人昵称",
        "avatar":"消息发送人头像地址",
        "id":1,//用户id，仅当role_type=user时才存在
        "shop_id":1,//店铺id
        "chat_id":"1_2",//会话id
        "chat_type":4,//会话类型
        "msg_type":1,//消息类型
        "msg":"这是一条测试消息",
        "createtime":1566212436,
    }
}
```

### 群聊

* 待定...

### 系统通知

* 待定...
