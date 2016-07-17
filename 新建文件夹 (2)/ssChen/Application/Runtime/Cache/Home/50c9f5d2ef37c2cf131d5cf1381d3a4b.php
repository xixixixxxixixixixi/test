<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>

<head>

<title>网站后台管理系统</title>

<meta http-equiv="Content-Type"	content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" media="all" href="/ssChen/Public/Admin/css/login.css" />

<script src="/ssChen/Public/Admin/js/jquery.js"></script>

</head>

<body>

<div id="login">

	<div class="warp">

    	<div class="content">

            <h1></h1>

<form name="form1" action="/ssChen/index.php/Home/Login/login" method="post" >

<table align="center" cellpadding="3" cellspacing="0" border="0" width="500">

<tr><td align="right" width="130">用户名：</td>

  <td colspan="2"><input name="username" id="username" class="input" reg="."/></td>

  <td width="140" rowspan="4" valign="top">&nbsp;

    <input name="submit" type="submit" value="" class="btn" onClick="return checkform()"/></td>

</tr>

<tr><td align="right">密码：</td><td colspan="2"><input name="password" type="password" class="input" reg="[A-Za-z0-9]{6}" id="pwd1"/></td>

  </tr>

<tr><td align="right">验证码：</td><td colspan="2">

<input type="text" name="checkcode" class="input" style="width:60px;"/>

</td>

  </tr>

<tr><td align="right"></td><td width="121">

<img border="0" src="/ssChen/index.php/Home/Login/verify"style="cursor:pointer"onclick=this.src='/ssChen/index.php/Home/Login/verify/'+Math.random()  id="captchaImg">



</td>

  <td width="85">看不清？点击图片</td>

</tr>

</table>

</form>

        </div>

    </div>

</div>

<iframe name="main" width="0" height="0" scrolling="no" frameborder="0" id="do_iframe"></iframe>

<script type="text/javascript">

function checkform()

{

	if (document.form1.username.value == ""){

		 alert("用户名不能为空！");

		 document.form1.username.focus();

         return false;

	}

	if (document.form1.password.value == ""){

		 alert("密码不能为空！");

		 document.form1.password.focus();

         return false;

	}

	if (document.form1.checkcode.value == ""){

		 alert("验证码不能为空！");

		 document.form1.checkcode.focus();

         return false;

	}

	return true;

}



</script>

</body>

</html>