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



<script>
function del()
{
return confirm('确认删除？');
}

</script>

</head>

<body>

<div class="container">



    <div><h1 align="left">经费明细</h1></div>
<form action="/ssChen/index.php/Home/Login/editmoneypro" method="post">
<table cellpadding="3" cellspacing="1" align="center" class="box">

<tr class="list"><td width="150px">活动主题：</td><td><input name="theme" value="<?php echo ($theme); ?>" /><input type="hidden" name="id" value="<?php echo ($id); ?>"/></td></tr>
<tr class="list"><td>具体事项：</td><td><input name="matter" value="<?php echo ($matter); ?>"/></td></tr>
<tr class="list"><td>收支金额：</td><td><input name="payment" value="<?php echo ($payment); ?>"/></td></tr>
<tr class="list"><td colspan="2"><input value="提交" type="submit"/></td></tr>



</table> 
</form>

</div>



</body>

</html>