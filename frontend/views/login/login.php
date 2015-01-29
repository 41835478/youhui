<div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="clear">
                    <h2 class="login_t">会员登陆</h2>
                    <ul class="clear">
                    <form action="/end/tp-coupon/index.php?a=login&m=user" method="post" name="login_form" id="login_form">
                    <table width="100%" border="0" class="login_form">
  <tr>
    <td width="100" align="right">帐号：</td>
    <td colspan="2"><input name="nick" id="nick" type="text" style="width:200px;" /></td>
  </tr>
  <tr>
    <td align="right">密码：</td>
    <td colspan="2"><input name="pw" id="pw" type="password" style="width:200px;" />&nbsp;<a href="/end/tp-coupon/index.php?a=getpwd&m=user">忘记密码？</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td colspan="2"><input name="save" id="save" type="checkbox" value="1" /><span id="label_save">下次自动登陆？</span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td width="150"><input type="submit" value="登陆" name="commit" id="signup-submit" class="formbutton"></td>
    <td>&nbsp;&nbsp;</td>
  </tr>
</table>
<input name="_hash_" type="hidden" value="8ee8d94e15d6b31fdc8fb695a97d1580" />
<input type="hidden" name="__hash__" value="5c373caee3602d41ef7ffbc3c726d2cb_3dab458d9c9516a715049c0fba4e2c30" /></form>
				</ul>
                </div>
            </div>
            <div class="main_r" style="width: 320px;">
    <ul class="sidebar">
            

        <li class="yellow">
            <h3>还没有TP-COUPON帐号？</h3>
            <div class="sidebar_s clear">
            	<div class="sidebar_s_l">
                    <a class="signUp" href="/end/tp-coupon/index.php?a=reg&m=user"></a>
                </div>
            </div>
        </li>
   
             </ul>
</div>
        </div>
    </div>
<script type="text/javascript">
var g = 'Home';
var m = 'User';
var a = 'login';
var u_index_url = "/end/tp-coupon/index.php?a=index&m=user";
$(document).ready(function() {
			$("#login_form").validate({
						 submitHandler:function(form){
							 						form.submit();
						 						}
						 });
			$('#nick').rules('add', {
						 		required: true,
								rangelength: [2,20]
						});
			$('#pw').rules('add', {
						 		required: true,
								rangelength: [6,15]
						});
});
</script>