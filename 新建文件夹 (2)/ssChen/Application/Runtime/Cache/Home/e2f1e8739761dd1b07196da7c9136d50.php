<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<!-- Custom Theme files -->
<link href="/ssChen/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.useso.com/css?family=Roboto:500,900italic,900,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body class="index1">
<div class="login">
	<h2>XiDian</h2>
	<div class="login-top">
		<h1>REGISTER FORM</h1>
		<form action="registerpro" method="post">
			<input type="text" value="学号" name="account" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Id';}">
            <input type="text" value="name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}">
			<input type="password" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
            
	        <select name="org">
           <?php echo ($option); ?>
             </select>
	    <div class="forgot">
	    
	    	<input type="submit" value="Register" >
	    </div>
        </form>
	</div>
	<div class="login-bottom">
		<h3><a href="<?php echo U('Index/index');?>">Login</a>&nbsp Here</h3>
	</div>
</div>	
<div class="copyright">
	<p>By &nbsp;ssChen</p>
</div>


</body>
</html>