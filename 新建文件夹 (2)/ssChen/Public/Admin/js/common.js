$(function(){
	//去除超链接虚线框
	$("a").focus(function(){this.blur()});
	//左栏展开关闭
	$(".close").toggle(function(){
		parent.document.getElementById('frame-body').cols = '25,*';
		$(this).style.background = 'url(images/arrow.gif) no-repeat -139px -28px';
		$(".submenu").hide();
	},function(){
		parent.document.getElementById('frame-body').cols = '160,*';
			$(this).style.background = 'url(images/arrow.gif) no-repeat 0px 0px';
		$(".submenu").show();
	})
	//左侧菜单样式改变
	$(".submenu li").click(function(){		
		$(".submenu li").each(function(){
			$(this).removeClass("active");
		})	
		$(this).addClass("active");
	})
    
	//头部菜单样式改变
	$(".nav li").click(function(){								
		$(".nav li").each(function(){
			$(this).removeClass("active");
		})	
		$(this).addClass("active");
	})
	//表格mouseover样式
	$(".list").hover(function(){
 	$(this).addClass("list_on")
    },
	function(){
	$(this).removeClass("list_on")
    })
	//创建iframe
	$('body').append('<iframe name="do" width="0" height="0" scrolling="no" frameborder="0" style="display:none;"></iframe>');


})

//artdialog通用提示
function msg(content)
{
	art.dialog.tips(content,1.5);	
}
//iframe中关闭父窗口artdialog
function artdialog_close()
{
	art.dialog({id:'art_dialog'}).close();
}
