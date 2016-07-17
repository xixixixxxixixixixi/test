<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>XDST-ssC</title>
    <link href="/ssChen/Public/Home/css/bootstrap.min.css" rel="stylesheet">
   
	<link href="/ssChen/Public/Home/css/main.css" rel="stylesheet">
	<link href="/ssChen/Public/Home/css/animate.css" rel="stylesheet">	
	<link href="/ssChen/Public/Home/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/ssChen/Public/Home/img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ssChen/Public/Home/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ssChen/Public/Home/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ssChen/Public/Home/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ssChen/Public/Home/img/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

	<section id="contact">
		<div class="contact-section">
		
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div id="contact-section">
                            <h3>社团：<?php echo ($org); ?></h3>
							<h4>用户：<?php echo ($user); ?></h4>
    					
					    	<form   method="post" action="/ssChen/index.php/Home/Index/changepwd">
					            <div class="form-group">
					                <input type="text" name="name" value="<?php echo ($name); ?>" class="form-control" required placeholder="姓名">
					            </div>
					            <div class="form-group">
					                <input type="text" name="password" class="form-control" required placeholder="密码">
                                  
					            </div>
                                 <div class="form-group">
					                <input type="text" name="password1" class="form-control" required placeholder="确认密码">
                                  
					            </div>
					            
                                <input type="hidden" name="submitter" value="<?php echo ($user); ?>"/>                      
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2016<a target="_blank" href="">By ssbabysong</p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    <script type="text/javascript" src="/ssChen/Public/Home/js/jquery.js"></script>
    <script type="text/javascript" src="/ssChen/Public/Home/js/bootstrap.min.js"></script>
	
  	<script type="text/javascript" src="/ssChen/Public/Home/js/gmaps.js"></script>
	<script type="text/javascript" src="/ssChen/Public/Home/js/smoothscroll.js"></script>
    <script type="text/javascript" src="/ssChen/Public/Home/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="/ssChen/Public/Home/js/coundown-timer.js"></script>
    <script type="text/javascript" src="/ssChen/Public/Home/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="/ssChen/Public/Home/js/jquery.nav.js"></script>
    <script type="text/javascript" src="/ssChen/Public/Home/js/main.js"></script>  
</body>
</html>