<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="/ssChen/Public/Admin/css/main.css">

<title>后台管理</title>

</head>

<body>

<div class="container">

<h1>系统环境</h1>

<table cellpadding="3" cellspacing="1" align="center" class="box">

<tr class='list'>

<td align="right" width="100">目录：</td>

<td align='left'>

<?php echo ($document); ?>

</td>

</tr> 

<tr class='list'>

<td align="right">软件环境：</td>

<td align='left'>

<?php echo ($software); ?>

</td>

</tr> 

<tr class='list'>

<td align="right">系统环境：</td>

<td align='left'>

<?php echo ($user_agent); ?>

</td>

</tr> 

<tr class='list'>

<td align="right">程序版本：</td>

<td align='left'>

V1.0

</td>

</tr>

</table>

</div>

</body>

</html>