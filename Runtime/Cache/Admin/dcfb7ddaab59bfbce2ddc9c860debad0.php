<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>登陆</title>
    <link rel="stylesheet" type="text/css" href="/app/Public/Admin/css/login.css"></head>
<body>
    <form class="login-form" method="post" autocomplate="off">
            <div><h3>长大校园通</h3></div>
            <input required name="username" type="text" placeholder="管理员用户名：">
            <input required type="password" name="password" placeholder="口令："><br/>
            <input type="submit" value="登陆">
    </form>
</body>
</html>