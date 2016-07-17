<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>top</title>
<script type="text/javascript" src="/ssChen/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/ssChen/Public/Admin/js/common.js"></script>
<link rel="stylesheet" type="text/css" href="/ssChen/Public/Admin/css/admin.css">
</head>
<body>
<div id="jywrap">
    <div id="jyhead">
        <a href="<?php echo U('Login/menu');?>" target="main-frame"><div class="logo"></div></a>
        <div class="nav">
    <ul class="menu">
    <li class="active" ><a href="<?php echo U('Login/menu');?>" target="menu-frame" hidefocus="true">系统设置</a></li>
    <li><a href="<?php echo U('Login/activity');?>" target="menu-frame" hidefocus="true">活动管理</a></li>
    <li><a href="<?php echo U('Login/money');?>" target="menu-frame" hidefocus="true">资金信息</a></li>
    <li><a href="<?php echo U('Login/user');?>" target="menu-frame" hidefocus="true">用户信息</a></li>
    <?php echo ($organization); ?>
    <!--<li><a href="" target="menu-frame" hidefocus="true">视频列表</a></li>--!>
   </ul>
        </div>
        <div class="uinfo"><?php echo ($admin); ?>您好，上次登录时间：<?php echo ($login_time); ?> 上次登录IP：<?php echo ($ip); ?> 权限为:<?php echo ($limit); ?>
   <br />
		<a href="/ssChen" target="_blank">网站首页</a> | 
		<a href="<?php echo U('Login/menu');?>" target="menu-frame">后台首页</a> | 
		<a href="<?php echo U('Login/changepwd');?>" target="main-frame">修改密码</a> | 
		<a href="<?php echo U('Login/logoff');?>" target="_top" >退出登录</a>
		</div>
    </div>
</div>
</body>
</html>