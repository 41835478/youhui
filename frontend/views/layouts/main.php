<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\web\Session;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$session = new Session();
$session->open();
?>
        
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>TP-COUPON - 中国领先的优惠券平台 - Powered by TP-COUPON</title>
<link rel="shortcut icon" href="favicon.ico" />
<meta name="keywords" content="网购 优惠券 京东优惠券 当当优惠券 凡客优惠券">
<meta name="description" content="中国领先的优惠券平台">
<meta name="author" content="anqiu xiao" />
<meta name="copyright" content="2012-2015 jihaoju.com ijiaqu.com" />
<link rel="stylesheet" type="text/css" href="Public/Css/Home/style.css" />
<script type="text/javascript">var _public_='Public';</script>
<script src="Public/Js/common.js" type="text/javascript"></script>
<script type="text/javascript">
var images = 'Public/Images/Home/';
var user_id = "0";
var user_nick = "";
var login_url = '/end/tp-coupon/index.php?a=login&m=user';
var service_qq = '89249294';
var weibo_sina = 'jihaoju';
var weibo_qq = 'jihaoju';
var user = {'user_id':user_id,'nick':user_nick};
jQuery(function() {
		    window.mainObj = window.mainObj ? window.mainObj : $("#main");
							if (mainObj.length > 0) {
                                var goWeibo = jQuery('<div id="go_weibo" class="float_bar"><a href="http://weibo.com/'+weibo_sina+'" target="_blank"><img src="'+images+'sina.gif" title="新浪微博" /></a><a href="http://t.qq.com/'+weibo_qq+'" target="_blank"><img src="'+images+'tencent.gif" title="腾讯微博" /></a><a href="http://wpa.qq.com/msgrd?v=3&amp;uin='+237428417+'&amp;site=qq&amp;menu=yes" target="_blank"><img src="'+images+'qq.gif" title="联系在线客服" /></a></div>').appendTo(document.body);
                                var goTopObj = jQuery('<div id="go_top" class="float_bar"><div class="return"><a href="javascript:;" title="回到顶部">回顶部</a></div></div>').appendTo(document.body);
                                jQuery(".return a,a.return").live("click", function() {
                                    jQuery("html,body").animate({
                                        scrollTop: 0
                                    }, 500);
                                });
                                jQuery(".suggest a,a.suggest").live("click", function() {
                                    Youhui.common.suggest.init();
                                });
                                jQuery(window).bind("resize.gotop", function() {
                                    goTopObj.css("left", mainObj.outerWidth() + mainObj.offset().left + 10);
                                    goWeibo.css("left", mainObj.outerWidth() + mainObj.offset().left + 10).show();
                                }).bind("scroll.gotop", function() {
                                    //if(jQuery(window).scrollTop() > jQuery(window).height()*1.2){
                                    if (jQuery(window).scrollTop() > 30) {
                                        goTopObj.fadeIn('fast');
                                    } else {
                                        goTopObj.fadeOut('fast');
                                    }
                                    if (jQuery(window).scrollTop() > 100) {
                                        if (jQuery(".float_nav").length == 0) {
                                            jQuery("#nav").clone(true).addClass("float_nav").appendTo(document.body);
                                        }
                                    } else {
                                        jQuery(".float_nav").remove();
                                    }
                                }).triggerHandler("resize.gotop");
                            }
		/*当有ajax请求时显示
                            var loading_lite = jQuery('<div class="loading_lite" style="display:none">加载中，请稍候...</div>').appendTo(document.body).ajaxStart(function() {
                            jQuery(this).html('加载中，请稍候...').fadeIn('normal');
                            }).ajaxSuccess(function() {
                            jQuery(this).stop().hide();
                            }).ajaxError(function() {
                            jQuery(this).html('加载异常，请稍候刷新重试').show().delay(3000).fadeOut(1500);
                            });
                            */
		if(jQuery("#usercenter")){
			jQuery("#usercenter").hover(function() {
                                jQuery(".nav_i", this).show().prev().addClass("active");
                            }, function() {
                                jQuery(".nav_i", this).hide().prev().removeClass("active"); ;
                            });
		}
});
</script></head>
<body>
<div class="toplink">
        <div class="w990">
            <div id="header">
               
                <div id="site_nav">
                 <div class="favl"> 
                        
                </div>
                    <ul class="quick_menu">
                        <li><iframe width="136" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&amp;width=136&amp;height=24&amp;uid=2507337250&amp;style=2&amp;btn=red&amp;dpc=1"></iframe>
                        </li>
                        <li class="fav"><a title="TP-COUPON" href="javascript:;" onClick="AddFavorite('http://'+window.location.host+'//end/TP-COUPON', 'TP-COUPON')"><font color="red">收藏TP-COUPON</font></a></li>
                        <li><a href="/end/TP-COUPON/" title="网站首页">网站首页</a></li>
                        <li style="background: none;"><a title="联系我们" href="/end/TP-COUPON/Html/contact.html">联系我们</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="w990 clear">
        <div id="header">
            <div class="top">
                <div class="logo">
                    <a title="TP-COUPON - 中国最大的优惠券网站" href="/end/TP-COUPON/">
                        <img alt="TP-COUPON" style="width: 303px; height: 82px;" src="Public/Images/Home/logo.jpg"></a></div>
                <div class="search">
                    <div class="search_f">
                        
                         <form action="index.php?r=site/search" method="post" id="searchform" name="searchform" onSubmit="if(this.kw.value==this.kw.defaultValue)return false;">
                        <ul>
                            <li id="search_c">
                                <input type="text" value="输入要搜索的商家名称，比如：京东或当当" autocomplete="off" id="search_i" name="kw" onFocus="if(this.value==this.defaultValue)this.value=''" onBlur="if(!this.value.length)this.value=this.defaultValue"></li>
                        </ul>
                        <div id="search_b"><input name="sub" type="image" value="搜索" src="Public/Images/Home/search.jpg"></div>
                        </form>
                        
                        
                        
                    </div>
                    <div class="search_t">
                                                            </div>
                </div>
            </div>
        </div>
    </div>
<div class="w990 clear">
        <div id="nav">
            <div class="w990">
                <ul id="nav_l">
                    <!--class="active"-->
                    <li><a href="index.php?r=site/index" ><span></span>首页</a></li>
                    <li>|</li>
                    <li><a href="index.php?r=new/index" ><span></span>最新优惠券</a></li>
                    <li>|</li>
                    <li><a href="index.php?r=hot/index" ><span></span>热门优惠券</a></li>
                    <li>|</li>
                    <li><a href="index.php?r=receive/index" ><span></span>最近被领取的优惠券</a></li>
                    <li>|</li>
                    <li><a href="index.php?r=mall/index" ><span></span>商家大全</a></li>
                    <li>|</li>
                    <li><a href="index.php?r=promotion/index" ><span></span>促销活动</a></li>
                    <li>|</li>
                    <li><a href="index.php?r=zhekou/index" ><span></span>超值折扣</a></li>
                </ul>
                


                
                <ul id="nav_r">
                    <?php if(empty($session['user'])){?>
        <li id="userweibo"><a href="?r=login/login">登陆</a><a href="?r=registered/regis">注册</a></li>
                    <?php }else{ ?>
        <li id="usercenter"><a href="?r=user/codes" class=""><span></span>账号中心</a>
                    <?php }?>
        <div style="display: none;" class="nav_i">
            <div class="nav_i_u">
                <div class="nav_i_u_l">
                    <a href="javascript:void(0);"><img src="http://www.wangxu.com/ucenter/upload/uc_server/avatar.php?uid=3&type=real&size=middle" onerror="this.src='Public/Images/Home/avatar.jpeg'"></a>
                </div>
                <div class="nav_i_u_i">
                    
                    <a href="javascript:void(0);"><?php echo $session['user']['nick']?></a><br>
                    
                </div>
            </div>
            <ul>
                <li><a href="?r=user/codes" style="color: #f00">我领取的优惠券</a></li>
                <li><a href="?r=user/pay">账号充值</a></li>
                <li><a href="?r=user/recodes">消费记录</a></li>
                <li><a href="?r=user/friend">邀请好友</a></li>
                <li><a href="?r=user/upd_pass">修改密码</a></li>
                <li><a href="?r=login/logout">注销登录</a></li>
            </ul>
        </div>
    </li>
    </ul>

                
                
            </div>
        </div>
         
        
    </div>

		<div class="container">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>
			<?= $content ?>
        </div>



<div class="w990 clear" id="footer">
        <ul class="sections clear">
            <li>
                <h4>
                    相关链接</h4>
                <ul class="twocol">
                    <li><a href="/end/TP-COUPON/Html/about.html">关于我们</a></li>
                    <li><a href="/end/TP-COUPON/Html/contact.html">联系我们</a></li>
                    <li><a href="/end/TP-COUPON/Html/pay.html">如何充值</a></li>
                    <li><a href="/end/TP-COUPON/index.php?m=Article&amp;a=links">友情链接</a></li>
                </ul>
            </li>
            
            <li>
                <h4>
                    新浪微博关注TP-COUPON</h4>
                <p class="inline">
                    如果您新浪微博用户，您可以关注TP-COUPON官方微博，以便及时获取最新优惠信息。<br>
                    <a rel="nofollow" target="_blank" title="关注我们" href="http://weibo.com/jihaoju">关注我们</a></p>
                <a rel="nofollow" class="follow sina" title="TP-COUPON新浪微博" target="_blank" href="http://weibo.com/jihaoju">微博主页</a> </li>
            <li>
                <h4>
                    QQ空间关注TP-COUPON</h4>
                <p class="inline">
                    如果您是QQ空间的用户，您可以通过点击我喜欢来关注TP-COUPON，随时查看优惠信息。<br>
                    <a rel="nofollow" title="关注我们" href="javascript:void(0);">关注我们</a></p>
                <a rel="nofollow" class="follow qq" title="TP-COUPON腾讯认证空间" href="javascript:void(0);">我喜欢</a> </li>
        </ul>
        <div id="copyright">
            TP-COUPON优惠券网&copy;版权所有，未经许可严禁复制或镜像 ICP证：&nbsp;&nbsp;<br>
            Powered by <a href="http://soft.qfanqie.com" target="_blank">TP-COUPON</a> 技术支持：<a href="http://www.jihaoju.com" target="_blank">jihaoju.com</a>&nbsp;&amp;&nbsp;<a href="http://www.ijiaqu.com" target="_blank">ijiaqu.com</a>&nbsp;2012-2015 All rights reserved<br>
            
        </div>
    </div>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;uid=668204" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
</body>
</html>