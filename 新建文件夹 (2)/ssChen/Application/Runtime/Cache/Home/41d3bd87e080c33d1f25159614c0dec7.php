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



    <div><h1 align="left">现有金额：<?php echo ($count); ?>元</h1></div>

<table cellpadding="3" cellspacing="1" align="center" class="box">

<tr>

<th width="80px">活动名称</th>
<th width="80px">具体事项</th>
<th width="80px">收支金额</th>
<th width="80px">上传人</th>
<th width="80px">上传时间</th>
<th width="60px">相关操作</th>

</tr>


<?php echo ($list); ?>



</table> 


</div>



</body>

</html>