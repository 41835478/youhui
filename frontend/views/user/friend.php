<?php
use yii\web\Session;
$session = new Session();
$session->open();
?>
<div class="clear"></div><div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="clear">
                    <h2>邀请好友<span class="more">邀请好友 | <a href="/end/tp-coupon/index.php?a=myinvite&m=user">我的邀请</a></span></h2>
                    <div></div>
                    <table class="list">
                <tbody><tr><td style="color:#f60" class="l">你可以通过QQ、微博、邮件或论坛发送给你的朋友</td></tr>
                <tr><td class="l">
                        <span style="float:left;">我的邀请地址：<input type="text" value="http://www.wangxu.com/end/TP-COUPON/?m=User&a=reg&invite=3" style="width:300px" onclick="this.select()" id="inviteurl" class="text copylink"></span>
                        <span id="appdiv" style="float:left;position:relative;"><a id="copyit" class="btn" onclick="copyToClipBoard($('#inviteurl').val());"><span>复制邀请地址</span></a></span>
                    </td></tr>
                <tr><td class="l"> 
                        <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
		<a class="bds_qzone" title="分享到QQ空间"></a>
        <a class="bds_tsina" title="分享到新浪微博"></a>
        <a class="bds_renren" title="分享到人人网"></a>
        <a class="bds_kaixin001" title="分享到开心网"></a>
        <a class="bds_tqf" title="分享到腾讯朋友"></a>
        <a class="bds_douban" title="分享到豆瓣网"></a>
        <a class="bds_taobao" title="分享到淘宝"></a>
        <a class="bds_ty" title="分享到天涯社区"></a>
        <a class="bds_baidu" title="分享到百度搜藏"></a>
        <span class="bds_more">更多</span>
		<a class="shareCount"></a>                
    </div>
<!-- Baidu Button END -->
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
                    </td></tr>
                    <!--<tr><td class="l">邀请链接被点击：积分 + 0</td></tr>-->
                <tr><td class="l">点击链接并注册：积分 + 6</td></tr>
				</tbody></table>
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