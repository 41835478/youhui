<?php
use yii\web\Session;
$session = new Session();
$session->open();
?>
<div class="clear"></div><div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="paynow clear">
                    <h2>
                      TP-COUPON充值(先给您TP-COUPON账号充值，然后再购买优惠券)</h2>
                    <div class="main_l_l_d clear">
                        <div class="normal_m">
                            <form method="post" action="?r=user/pay_do" name="form_post" id="form_post">
                            <b>充值金额：</b><input type="text" maxlength="4" id="amount" value="2.0" name="amount" style="height:20px;" class="requireinput required number">元
                            <br> 
                            <p>
                                <input type="submit" value="使用支付宝来充值" name="btnChongzhi" style="height:30px;width:140px;">
                            </p>
                            <br>
                            <br>
                            <strong style="color: red;">注意：
                            <br>1.每个支付宝只可为一个账号充值，请不要注册多个账号来购买。
                            <br>2.如果购买的券因为过期或已经使用，都可以找TP-COUPON客服申请退款。
                            <br>3.请黄牛，代购，批发，倒卖优惠券等绕道而行，不要恶意领取TP-COUPON从商家争取的券，导致大家领取不到券。</strong>
                            </form>
                        </div>
                    </div>
                    <h2>
                        TP-COUPON采用支付宝支付来保证您充值安全</h2>
                    <div class="w630">
                        <strong>TP-COUPON采用支付宝作为网上第三方支付平台，最大程度的保证你的交易安全</strong>
                        <div id="payment_i_1" class="payplat">                            
                            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="paylogos">
                                <tbody>
                                    <tr class="align_Center">
                                        <td width="25%" valign="top" style="padding-bottom: 5px">
                                                <img src="http://www.quanmama.com/images/banklogo/pay_alipay.gif" title="支付宝" alt="支付宝">
                                        </td>
                                        <td width="25%" valign="top" style="">
                                            <br>
                                        </td>
                                        <td width="25%" valign="top" style="">
                                            <br>
                                        </td>
                                        <td width="25%" valign="top" style="">
                                            <br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                       <h2>下面是TP-COUPON充值的支付宝截图：</h2>
                        <img width="680px" src="http://www.quanmama.com/images/quanmama-cz.jpg">
                    </div>
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
        </li>   
              <li class="yellow">
                        <h3>
                            最新充值的TP-COUPON用户</h3>
                        <ol class="rank_coupon">
                                                    </ol>
                    </li>
             </ul>
</div>
        </div>
    </div>
<script type="text/javascript">
jQuery(document).ready(function() {
            jQuery("#form_post").validate({
						 submitHandler:function(form){
						 							form.submit();
						 						}
			});
});
</script>