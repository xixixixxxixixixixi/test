<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>后台管理</title>

<link rel="stylesheet" href="/ssChen/Public/Admin/css/main.css" >

<link rel="stylesheet" href="/ssChen/Public/Admin/css/validate.css">

<script type="text/javascript" src="/ssChen/Public/Admin/js/jquery.js"></script>

<script type="text/javascript" src="/ssChen/Public/Admin/js/common.js"></script>

<script type="text/javascript" src="/ssChen/Public/Admin/js/validate.js"></script>

</head>

<body>

<div class="container">

<h1>管理员列表 <a href="<?php echo U('Login/addmanager');?>">添加管理员</a></h1>

<table cellpadding="3" cellspacing="1" align="center" class="box">

<tr>

<th width="60">ID</th>

<th>管理员名称</th>

<th width="180">组别</th>
<th >社团</th>

<th width="180">相关操作</th>

</tr>

 <?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="list">

    <td align="center"><?php echo ($vo["id"]); ?></td>

    <td align="center"><?php echo ($vo["username"]); ?></td>

    <td align="center"><?php echo ($vo["limit"]); ?></td>
    
    <td align="center"><?php echo ($vo["org"]); ?></td>

    <td align="center"><a href="<?php echo U('login/changepwd');?>?id=<?php echo ($vo["id"]); ?>">修改密码</a>&nbsp<a href="<?php echo U('login/delmanager');?>?id=<?php echo ($vo["id"]); ?>"  onclick=" return confirm('确定要删除吗？')">删除</a></td>

   </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>

<div> <?php echo ($page); ?></div>

</div>

</body>

</html>