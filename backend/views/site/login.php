
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TP-COUPON — 后台管理系统</title>
<link rel="shortcut icon" href="favicon.ico" />
<link href="Public/Css/Admin/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var _public_='/end/tp-coupon/Public';</script>
<script type="text/javascript" src="Public/Js/common.js"></script>
<style type="text/css">

input{ height:25px; line-height:25px; font-size:14px;}

</style>
<script type="text/javascript">

//指定当前组模块URL地址 
var AJAX_LOADING = '提交请求中，请稍候...';
var AJAX_ERROR = 'AJAX请求发生错误！';

</script>
</head>
<body>
<form method='post' name="" id="login" action="?r=site/login" >
<div id="login-box">
	<div id="resultMsg"></div>
    <table width="300" border="0" cellspacing="0" cellpadding="0" style="position:absolute; left:300px; top:100px;">
  <tr>
    <td width="90" align="right" height="40" valign="middle">帐号：</td>
    <td valign="middle"><input type="text" name="admin_name" /></td>
  </tr>
  <tr>
    <td align="right" height="40" valign="middle">密码：</td>
    <td valign="middle"><input type="password" name="admin_pwd" /></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><input type="image" src="Public/Css/Admin/Images/login_btn.png" /></td>
  </tr>
</table>
</div>
<input type="hidden" name="__hash__" value="c3db598fb456984e36e8f2e9b0cdea08_754b1f657e742f5cabce1f9c6c7dbcf9" /></form>
</body>
<script type="text/javascript">
var login_url = '?r=site/login';
var index_url = '?r=site';
var captcha = false;

jQuery(function($){
	if(top.location != self.location)
	{
		top.location.href = self.location.href;
		return;
	}
	
	$(document).keypress(function(e){
		if(e.keyCode == 13)
		{
			login()
		}
	});
	
	$("#login").submit(function(){
		login();
		return false;
	});
});

function login()
{
	$("#resultMsg").stop().removeClass('error').addClass('loading').html(AJAX_LOADING).show();
	
	$.ajax({
		url: login_url,
		type:"POST",
		cache: false,
		data:$("#login").serialize(),
		dataType:"json",
		error: function(){
			$("#resultMsg").addClass('error').html(AJAX_ERROR).show().fadeOut(5000);
		},
		success: function(result){
			$("#resultMsg").hide();
			if(result.status==1)
				location.href = index_url;
			else
			{
				$("#resultMsg").addClass('error').html(result.info).show().fadeOut(5000);
				if(captcha){
					fleshVerify();
				}
			}
		}
	});
}

function _login()
{
	$("#resultMsg").stop().removeClass('error').addClass('loading').html(AJAX_LOADING).show();
	var admin_name = $('#admin_name').val();
	var admin_pwd = $('#admin_pwd').val();
	if(admin_name == ''){
		$("#resultMsg").addClass('error').html('用户名不能为空').show().fadeOut(5000);
		return false;
	}
	if(admin_pwd == ''){
		$("#resultMsg").addClass('error').html('密码不能为空').show().fadeOut(5000);
		return false;
	}
	var url = login_url + '&admin_name='+encodeURIComponent(admin_name)+'&admin_pwd='+admin_pwd;
	if(captcha){
		var verify = $('#verify').val();
		if(verify == ''){
			$("#resultMsg").addClass('error').html('验证码不能为空').show().fadeOut(5000);
			return false;
		}
		url += '&verify='+verify;
	}
	$.getJSON(url, function(data){
									$("#resultMsg").hide();
									if(data.status == 1){
										location.href = index_url;
									}else{
										$("#resultMsg").addClass('error').html(result.info).show().fadeOut(5000);
										if(captcha){
											fleshVerify();
										}
									}
									});
}

function fleshVerify()
{
	var time = new Date().getTime();
	$("#verifyImg").attr('src',"?g=Public&m=Public&a=verifycode&mt="+time);
}

</script>
</html>