
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="./Public/Css/Admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var _public_='/end/tp-coupon/Public';</script>
<script type="text/javascript" src="./Public/Js/common.js"></script>
</head>
<body style="background:#DEE4ED;padding:0; overflow:hidden; overflow-y:scroll;">
	<div>
            <?php if ($act=='1'){ ?>
		<div class="fanwe-menu" valign="top" >
        		<dl>
			<dt><div><strong>优惠券管理</strong></div></dt>
            			<dd><p><a href="?r=youhui/index" target="mainFrame">优惠券列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=CouponCode&a=best" target="mainFrame">每日精选优惠券</a></p></dd>
            			<dd><p><a href="?g=Admin&m=CouponCode&a=add" target="mainFrame">添加优惠券</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>商家管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=CouponCodeMall&a=index" target="mainFrame">商家列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=CouponCodeMall&a=recs" target="mainFrame">推荐商家列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=CouponCodeMall&a=add" target="mainFrame">添加商家</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>促销活动管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=MallPromotion&a=index" target="mainFrame">活动列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=MallPromotion&a=add" target="mainFrame">添加活动</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>折扣商品管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=MallZhekou&a=index" target="mainFrame">折扣列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=MallZhekou&a=category" target="mainFrame">折扣分类列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=MallZhekou&a=add" target="mainFrame">添加折扣商品</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>分类管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=CouponCodeCategory&a=index" target="mainFrame">分类列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=CouponCodeCategory&a=add" target="mainFrame">添加分类</a></p></dd>
                     </dl>
         	</div>
            <?php } ?>
            
            
                <?php if ($act=='2'){ ?>
            		<div class="fanwe-menu" valign="top">
        		<dl>
			<dt><div><strong>文章管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=Article&a=index" target="mainFrame">文章列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Article&a=add" target="mainFrame">添加文章</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Article&a=category" target="mainFrame">文章分类</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>广告管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=Adv&a=index" target="mainFrame">广告列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Adv&a=add" target="mainFrame">添加广告</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>广告位管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=AdvPosition&a=index" target="mainFrame">广告位列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=AdvPosition&a=add" target="mainFrame">添加广告位</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>友情链接管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=FriendLink&a=index" target="mainFrame">链接列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=FriendLink&a=add" target="mainFrame">添加链接</a></p></dd>
                     </dl>
         	</div>
                <?php } ?>
            <?php if ($act=='3'){ ?>
            	<div class="fanwe-menu" valign="top">
        		<dl>
			<dt><div><strong>会员管理</strong></div></dt>
            			<dd><p><a href="?r=huiyuan/index" target="mainFrame">会员列表</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>充值管理</strong></div></dt>
            			<dd><p><a href="?r=huiyuan/chongzhi" target="mainFrame">充值记录</a></p></dd>
                     </dl>
         	</div>
     <?php } ?>
            
            <?php if ($act=='4'){ ?>
            <div class="fanwe-menu" valign="top">
        		<dl>
			<dt><div><strong>权限管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=CouponCode" target="mainFrame">优惠券管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=CouponCodeMall" target="mainFrame">商家管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=MallPromotion" target="mainFrame">促销活动管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=MallZhekou" target="mainFrame">折扣商品管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=CouponCodeCategory" target="mainFrame">分类管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=Article" target="mainFrame">文章管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=Adv" target="mainFrame">广告管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=AdvPosition" target="mainFrame">广告位管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=FriendLink" target="mainFrame">友情链接管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=Member" target="mainFrame">会员管理</a></p></dd>
            			<dd><p><a href="?g=Admin&m=Priv&a=set&module=Payment" target="mainFrame">充值管理</a></p></dd>
                     </dl>
         	</div>

             <?php } ?>
            
            
              <?php if ($act=='5'){ ?>
            <div class="fanwe-menu" valign="top">
        		<dl>
			<dt><div><strong>管理员管理</strong></div></dt>
            			<dd><p><a href="index.php?r=guanliyuan/list_gly" target="mainFrame">管理员列表</a></p></dd>
            			<dd><p><a href="index.php?r=guanliyuan/add_gly" target="mainFrame">添加管理员</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>角色管理</strong></div></dt>
            			<dd><p><a href="index.php?r=guanliyuan/list" target="mainFrame">角色列表</a></p></dd>
            			<dd><p><a href="index.php?r=guanliyuan/add" target="mainFrame">添加角色</a></p></dd>
                     </dl>
         	</div>

             <?php } ?>
            
            
              <?php if ($act=='6'){ ?>
            <div class="fanwe-menu" valign="top">
        		<dl>
			<dt><div><strong>系统管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=SysConf&a=setting" target="mainFrame">系统设置</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>验证码管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=VerifyCode&a=setting" target="mainFrame">验证码设置</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>城市管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=City&a=index" target="mainFrame">城市列表</a></p></dd>
            			<dd><p><a href="?g=Admin&m=City&a=add" target="mainFrame">添加城市</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>临时文件管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=TempFile&a=index" target="mainFrame">临时文件管理</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>缓存管理</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=Cache&a=clear" target="mainFrame">清除系统缓存</a></p></dd>
                     </dl>
         		<dl>
			<dt><div><strong>更新全文索引</strong></div></dt>
            			<dd><p><a href="?g=Admin&m=SearchIndex&a=update" target="mainFrame">更新全文索引</a></p></dd>
                     </dl>
         	</div>

             <?php } ?>
	</div>
<script type="text/javascript">

		if($("a:first").attr("href"))
		{
			top.document.getElementById("mainFrame").src = $("a:first").attr("href");
			$("a:first").parent().parent().addClass("cur");
		};
		
		$("a").click(function(){
			$("a").each(function(){
				$(this).parent().parent().removeClass("cur");
			});
			$(this).parent().parent().addClass("cur");
			$(this).blur();
		});

</script>
</body>
</html>