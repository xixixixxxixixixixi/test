<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>leftmenu</title>
<script type="text/javascript" src="/ssChen/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/ssChen/Public/Admin/js/common.js"></script>
<link rel="stylesheet" type="text/css" href="/ssChen/Public/Admin/css/admin.css">
<script>
function showlink()
{
	var eli = document.getElementsByTagName("li");
	for(var i=0; i<eli.length; i++)
	{   
		if(eli[i].className=='active')
		{
			parent.frames[2].location = eli[i].children[0].href;
             var act=$(".active");//将除了第一个的颜色去掉，先当于只留了第一个；
         for(var i=1;i<=act.length;i++)
         {	act.eq(i).removeClass("active");}
			break;
		}
	}
    
	
}
</script>
</head>
<body onLoad="showlink()">
<div id="jybody">
<table id="heightmenu" style="height:100%;">
<tr>
<td>
	<div id="leftmenu">
		<div class="close" title="关闭/展开左栏"></div>
        <ul class="submenu">
         <li class="active" ><a href="<?php echo U('Login/legaluser');?>" target="main-frame">合法用户</a></li>
        <li class="active" ><a href="<?php echo U('Login/illegaluser');?>" target="main-frame">待审核用户</a></li>
         
       
        </ul>
     </div>
</td></tr>
</table>		
</div>


</body>
</html>