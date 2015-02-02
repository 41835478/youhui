<?php
use yii\web\Session;
$session = new Session();
$session->open();
?>

<div class="clear"></div><div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="clear">
                    <h2 class="login_t">修改密码</h2>
                    <ul class="clear">
                    <form action="" method="post" name="login_form" id="login_form">
                    <table width="100%" border="0" class="login_form">
  <tr>
    <td width="100" align="right">旧密码：</td>
    <td colspan="2"><input name="oldpwd" id="oldpwd" type="password" style="width:200px;" /></td>
  </tr>
  <tr>
    <td width="100" align="right">新密码：</td>
    <td colspan="2"><input name="newpwd" id="newpwd" type="password" style="width:200px;" /></td>
  </tr>
  <tr>
    <td width="100" align="right">确认密码：</td>
    <td colspan="2"><input name="confirm_pwd" id="confirm_pwd" type="password" style="width:200px;" /></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td width="150"><input type="submit" value="确定" name="commit" id="signup-submit" class="formbutton"></td>
    <td>&nbsp;</td>
  </tr>
</table>
<input name="_hash_" type="hidden" value="34460865be20d2ad31496b129f9cbaf0" />
<input type="hidden" name="__hash__" value="a579a00806fda7cd4795443696f546ad_2a0deaf04e46a1a27a5b1d54c4f20c41" /></form>
				</ul>
                </div>
            </div>
            <div class="main_r" style="width: 320px;">
    <ul class="sidebar">
    
<li class="yellow">
            <h3>
                我的信息</h3>
            <div class="sidebar_s clear">
                <div class="sidebar_s_l">
                    <a href="javascript:void(0);">
                        <img src="http://www.wangxu.com/ucenter/upload/uc_server/avatar.php?uid=3&type=real&size=middle" onerror="this.src='Public/Images/Home/avatar.jpeg'" alt="qcc"></a>
                </div>
                <div class="sidebar_s_i">
                    <a href="javascript:void(0);"><?php echo $session['user']['nick']?></a>
                    <br>积分：<?php echo $session['user']['credit']?>                    <br>金钱：<?php echo $session['user']['money']?>元
                    <br>
                </div>
                <ul class="twocol user_link">
               <li><a href="?r=user/codes" style="color: #f00">我领取的优惠券</a></li>
                <li><a href="?r=user/pay">账号充值</a></li>
                <li><a href="?r=user/recodes">消费记录</a></li>
                <li><a href="?r=user/friend">邀请好友</a></li>
                <li><a href="?r=user/upd_pass">修改密码</a></li>
                <li><a href="?r=login/logout">注销登录</a></li>
                </ul>
            </div>
        </li></ul>
</div>
        </div>
    </div>
<script type="text/javascript">
var g = 'Home';
var m = 'User';
var a = 'editpwd';
var logout_url = "/end/tp-coupon/index.php?a=logout&m=user";
var editpwd_url = "/end/tp-coupon/index.php?a=editpwd&m=user";
function editpwd()
{
	$.ajax({
		url: editpwd_url,
		type:"POST",
		cache: false,
		data:$("#login_form").serialize(),
		dataType:"json",
		error: function(){
			
		},
		success: function(result){
			if(result.status==1){
				alert('修改成功\n请重新登陆');
				window.location.href = logout_url;
			}else{
				alert(result.info);
			}
		}
	});
}
$(document).ready(function() {
			$("#login_form").validate({
						 submitHandler:function(form){
							 						editpwd();
							 						return false;
						 						}
						 });
			$('#oldpwd').rules('add', {
						 		required: true,
								rangelength: [6,15]
						});
			$('#newpwd').rules('add', {
						 		required: true,
								rangelength: [6,15]
						});
			$('#confirm_pwd').rules('add', {
						 		required: true,
								equalTo: '#newpwd',
								rangelength: [6,15]
						});
});
</script>