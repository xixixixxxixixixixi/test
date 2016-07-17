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
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		              
		               <a class="navbar-brand" href="index.html">
                			<img class="img-responsive" src="/ssChen/Public/Home/img/logo.png">
		                </a>                   
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#explore">下次活动</a></li>                         
		                    <li class="scroll"><a href="#event">近期活动</a></li>
		                    <li class="scroll"><a href="#about">关于我们</a></li>                     
		                    <li class="scroll"><a href="#contact">经费明细</a></li>  
                            <li><a onclick="location.href='information'">个人信息</a></li>     
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="/ssChen/Public/Home/img/slider/bg1.jpg" alt="slider">						
					<div class="carousel-caption">
						<h2></h2>
						<h4></h4>
						<a href="#contact"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="/ssChen/Public/Home/img/slider/bg2.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2></h2>
						<h4></h4>
						<a href="#contact"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="/ssChen/Public/Home/img/slider/bg3.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2></h2>
						<h4></h4>
						<a href="#contact" ><i class="fa fa-angle-right"></i></a>
					</div>
				</div>				
			</div>
		</div>    	
    </section>
	<!--/#home-->

	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="/ssChen/Public/Home/img/watch.png" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>距离下次活动时间还有</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<li>					
							<span class="days time-font">00</span>
							<p>days </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="">hours </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="">minutes</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="">second</p>
						</li>				
					</ul>
				</div>
			</div>
			<div class="cart">
				<a href="#"><i class="fa fa-shopping-cart"></i> <span>飞往首页</span></a>
			</div>
		</div>
	</section><!--/#explore-->

	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading">近期活动</h2>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<?php echo ($list1); ?>
								</div>
							</div>
						
						</div>
					</div>
				</div>
				<div class="guitar">
					<img class="img-responsive" src="/ssChen/Public/Home/img/guitar.png" alt="guitar">
				</div>
			</div>			
		</div>
	</section><!--/#event-->
    	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<div id="event-carousel" class="carousel slide" data-interval="false">
					<div class="carousel-inner">
							<div class="item active">
								<div class="row">
								<?php echo ($list2); ?>
								</div>
							</div>
							
							</div>
						</div>
					</div>
				</div>
				
			</div>			
		</div>
	</section><!--/#event-->


	<section id="about">
		<div class="guitar2">				
			<img class="img-responsive" src="/ssChen/Public/Home/img/guitar2.jpg" alt="guitar">
		</div>
		<div class="about-content">					
					<h2>About Us</h2>
					<p>我们的介绍</p>
					<a href="#" class="btn btn-primary">微博连接或者什么玩意<i class="fa fa-angle-right"></i></a>
				
		</div>
	</section><!--/#about-->
	<section id="contact">
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="/ssChen/Public/Home/img/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3></h3>
							<address>
								
							</address>
						</div>
						<div class="contact-address">
							<h3>Say something...</h3>
							<address>
							额......<br />About money	
							</address>
						</div>
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
                            <h3>社团：<?php echo ($org); ?></h3>
							<h4>用户：<?php echo ($user); ?></h4>
    					
					    	<form   method="post" action="/ssChen/index.php/Home/Index/moneypro">
					            <div class="form-group">
					                <input type="text" name="theme" class="form-control" required placeholder="活动主题">
					            </div>
                                <div class="form-group">
					                <select name="input" style="color: black;"><option value="0">支出</option><option value="1">收入</option></select>
					            </div>
					            <div class="form-group">
					                <input type="text" name="payment" class="form-control" required placeholder="金额(元)">
                                    <input type="hidden" name="org" value="<?php echo ($org); ?>"/>
					            </div>
					            <div class="form-group">
					                <textarea name="matter"  required class="form-control" rows="6" placeholder="具体事项"></textarea>
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