<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>后台管理</title>
<link rel="stylesheet" href="/ssChen/Public/Admin/css/main.css" >
<link rel="stylesheet" href="/ssChen/Public/Admin/css/validate.css">
<script type="text/javascript" src="/ssChen/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/ssChen/Public/Admin/js/validate.js"></script>
</head>
<body>
<div class="container">
<h1>管理理员添加</h1>
<form action="/ssChen/index.php/Home/Login/addprocess" method="post" >
<table cellpadding="3" cellspacing="1" align="center" class="box">
<tr class="list">
<td align="right" width="150px">管理员分类：</td>
<td>
<select name="type">
<option value='0'>普通管理员</option>
<option value='1'>超级管理员</option>
</select>&nbsp;
管理社团：
<select name="org">
<?php echo ($org); ?>
</select>
</td>
</tr>
<tr class="list">
<td align="right">账号：</td>
<td>
<input name="username" reg="."/> <span name="easyTip">&nbsp;</span>
</td>
</tr>
<tr class="list">
<td align="right">密码：</td>
<td>
<input name="password" type="password" id="pwd1" reg="."/> <span name="easyTip">&nbsp;</span>
</td>
</tr>
<tr class="list">
<td align="right">确认密码：</td>
<td>
<input name="password1" type="password" id="pwd2" reg="."/> <span name="easyTip">&nbsp;</span>
</td>
</tr>
<tr class="list">
<td align="right"></td>
<td>
<input type="submit" value="提 交" class="btn" id="submit"/>
</td>
</tr>
</table>
</form>
</div>
<script type="text/javascript">
var isExtendsValidate = true;
function extendsValidate(){	
	//密码匹配验证
	if( $('#pwd1').val() == $('#pwd2').val() ){
		$('#pwd2').validate_callback(null,"sucess");
	}else{
		$('#pwd2').validate_callback("密码不匹配","failed");
		return false;
	}
	
}
</script>
</body>
</html>