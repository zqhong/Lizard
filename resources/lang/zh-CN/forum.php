<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/12 22:39
 * @filename thread.php
 * @encoding UTF-8
 */


return [
    'homepage' => '首页',
    'threads' => '话题',
    'login' => '登陆',
    'register' => '注册',
    'logout' => '退出登录',
    'welcome' => '你好，:username',
    'required_login' => '您还未登录。',
    'remember_me' => '记住密码',
    'forgot_password' => '忘记密码？',
    'email_address' => 'E-Mail 地址',
    'password' => '密码',
    'confirm_password' => '确认密码',
    'reset_password' => '重置密码',
    'send_password_reset_link' => '发送重置密码链接至您的邮箱',
    'add_thread' => '发表新话题',
    'username' => '用户',
    'loginname' => '登陆名',
    'create_new_thread' => '创建新话题',
    'title' => '标题',
    'body' => '内容',
    'select_node' => '选择节点',
    'submit' => '提交',
    'search' => '搜索',
    'registered_user' => '已注册用户请',
    'add_reply' => '发表回复',
    'reply' => '回复',
    'need_login' => sprintf('需要 %s 后方可回复, 如果你还没有账号请点击这里 %s。',
        link_to_route('login', '登陆', [], ['class' => 'btn btn-success']), link_to_route('register', '注册', [], ['class' => 'btn btn-primary'])),
    'add_thread_success' => '发表文章成功',
    'add_reply_success' => '发表评论成功',
    'like' => '赞',
    'unlike' => '踩',
    'about' => '关于',
    'read' => '阅读',
    'tag' => '标签',
];
