<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>后台管理</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="/ssChen/Public/Admin/css/main.css" >

<link rel="stylesheet" href="/ssChen/Public/Admin/css/validate.css">

<script type="text/javascript" src="/ssChen/Public/Admin/js/jquery.js"></script>

<script type="text/javascript" src="/ssChen/Public/Admin/js/common.js"></script>

<script type="text/javascript" src="/ssChen/Public/Admin/js/validate.js"></script>

</head>

<body>

<div class="container" >

<h1>活动添加</h1>

<form class="form" action="/ssChen/index.php/Home/Login/editactivitypro" enctype="multipart/form-data" method="post" name="form1" >

<table cellpadding="3" cellspacing="1" align="center" class="box">

<tr class="list">

<td> 名称：</td>

<td>

<input value="<?php echo ($title); ?>" name="title" size="60"  type="text"/><input type="hidden" name="id" value="<?php echo ($id); ?>"/>

</td>

</tr>

<tr class="list" >

<td>内容：</td>

<td>

<!-- 加载编辑器的容器 -->

  <script id="container" name="content" value="<?php echo ($content); ?>" type="text/plain">   

    </script>

</td>

</tr>

<tr class="list">

<td ></td>

<td>

<input type="submit" value="提 交" class="btn"/>

</td>

</tr>

</table>

</form>

</div>

 

    <!-- 配置文件 -->

    <script type="text/javascript" src="/ssChen/Public/plugin/ueditor.config.js"></script>

    <!-- 编辑器源码文件 -->

    <script type="text/javascript" src="/ssChen/Public/plugin/ueditor.all.js"></script>

    <!-- 实例化编辑器 -->

    <script type="text/javascript">

        var ue = UE.getEditor('container');

    </script>



</body>

</html>