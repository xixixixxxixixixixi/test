/*
	Copyright (C) 2009 - 2012
	WebSite:	Http://wangking717.javaeye.com/
	Author:		wangking
*/
$(function(){
	$("[name='easyTip']").each(function(){
		$(this).addClass("onShow");
	});
	$(":text").each(function(){
		$(this).addClass("input");
	});
	$("textarea").each(function(){
		$(this).addClass("input");
	});
	$("[reg]").blur(function(){
		validate($(this));
	});
	
	$("[reg]").click(function(){
		$(this).nextAll("[name='easyTip']").eq(0).removeClass();
		$(this).nextAll("[name='easyTip']").eq(0).addClass("onFocus");				   
	});
	var xOffset = 30; // x distance from mouse
    var yOffset = -10; // y distance from mouse  
	
	
	//input action
	$("[reg],[url]:not([reg]),[tip]").hover(
		function(e) {
			if($(this).attr('tip') != undefined){
				var top = (e.pageY + yOffset);
				var left = (e.pageX + xOffset);
				$('body').append( '<p id="vtip"><img id="vtipArrow" src="images/tip_arrow.gif"/>' + $(this).attr('tip') + '</p>' );
				$('p#vtip').css("top", top+"px").css("left", left+"px");
				//$('p#vtip').bgiframe();
			}
		},
		function() {
			if($(this).attr('tip') != undefined){
				$("p#vtip").remove();
			}
		}
	).mousemove(
		function(e) {
			if($(this).attr('tip') != undefined){
				var top = (e.pageY + yOffset);
				var left = (e.pageX + xOffset);
				$("p#vtip").css("top", top+"px").css("left", left+"px");
			}
		}
	).blur(function(){
		if($(this).attr("url") != undefined){
			ajax_validate($(this));
		}else if($(this).attr("reg") != undefined){
			validate($(this));
		}
	});
	
	$("form").submit(function(){
		var isSubmit = true;
		$(this).find("[reg],[url]:not([reg])").each(function(){
			if($(this).attr("reg") == undefined){
				if(!ajax_validate($(this))){
					isSubmit = false;
				}
			}else{
				if(!validate($(this))){
					isSubmit = false;
				}
			}
		});
		if(typeof(isExtendsValidate) != "undefined"){
   			if(isSubmit && isExtendsValidate){
				return extendsValidate();
			}
   		}
		return isSubmit;
	});
	
});

function validate(obj){
	var reg = new RegExp(obj.attr("reg"));
	var objValue = obj.attr("value");
	tipObj = obj.nextAll("[name='easyTip']").eq(0);
	tipObj.removeClass();
	if(!reg.test(objValue)){
		tipObj.addClass("onError");
		if(objValue=="")
		{
		tipObj.html(obj.attr('emp_txt'));	
		}
		else
		{
		tipObj.html(obj.attr('err_txt'));
		}
		change_error_style(obj,"add");
		return false;
	}else{
		if(obj.attr("url") == undefined){
			
			change_error_style(obj,"remove");
			return true;
		}else{
			return ajax_validate(obj);
		}
	}
	
}

function ajax_validate(obj){
	
	var url_str = obj.attr("url");
	if(url_str.indexOf("?") != -1){
		url_str = url_str+"&"+obj.attr("name")+"="+obj.attr("value");
	}else{
		url_str = url_str+"?"+obj.attr("name")+"="+obj.attr("value");
	}
	var feed_back = $.ajax({url: url_str,cache: false,async: false}).responseText;
	feed_back = feed_back.replace(/(^\s*)|(\s*$)/g, "");
	if(feed_back == 'success'){
		change_error_style(obj,"remove");
		change_tip(obj,null,"remove");
		return true;
	}else{
		change_error_style(obj,"add");
		change_tip(obj,feed_back,"add");
		return false;
	}
}

function change_tip(obj,msg,action_type){	
	if(action_type == "add"){		
		tipObj.html(msg);
	}else{
		tipObj.html("&nbsp");
	}
}

function change_error_style(obj,action_type){
	if(action_type == "add"){
		obj.addClass("input_validation-failed");
		tipObj.addClass("onError");
	}else{
		obj.removeClass("input_validation-failed");
		tipObj.addClass("onCorrect");
		tipObj.html("&nbsp");
	}
}

$.fn.validate_callback = function(msg,action_type,options){
	this.each(function(){
		if(action_type == "failed"){
			change_error_style($(this),"add");
			change_tip($(this),msg,"add");
		}else{
			change_error_style($(this),"remove");
			change_tip($(this),null,"remove");
		}
	});
};
