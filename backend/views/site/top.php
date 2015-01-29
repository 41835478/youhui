
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<link href="./Public/Css/Admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var _public_='/end/tp-coupon/Public';</script>
<script type="text/javascript" src="./Public/Js/common.js"></script>
<script type="text/javascript" src="./Public/Js/jquery.pngFix.js"></script>
</head>
<body style="background: none repeat scroll 0% 0% rgb(153, 162, 179); padding: 0pt;">
<div class="fanwe-header">
	<div class="fh-top">
		<div class="fht-logo"><img src="./Public/Images/Admin/logo.png"></div>
		<div class="fht-links">
			<span>欢迎您！admin</span>
			<a class="edit-pwd" href="?g=Admin&m=User&a=edit_pwd" target="mainFrame">修改密码</a>
			<a class="browse-index" href="/end/tp-coupon/" target="brank">浏览首页</a>
			<a href="?g=Admin&m=Cache&a=clear" target="mainFrame">更新缓存</a>
			<a href="?g=Admin&m=User&a=logout" target="mainFrame">退出</a>
		</div>
		<div class="fht-navs">
        				<div class="active">
				<p>
					<a href="?r=site/left&act=1" target="leftFrame">网购优惠券</a>
				</p>
			</div>
            			<div class="">
				<p>
					<a href="?r=site/left&act=2" target="leftFrame">前台</a>
				</p>
			</div>
            			<div class="">
				<p>
					<a href="?r=site/left&act=3" target="leftFrame">会员管理</a>
				</p>
			</div>
            			<div class="">
				<p>
					<a href="?r=site/left&act=4" target="leftFrame">权限管理</a>
				</p>
			</div>
            			<div class="">
				<p>
					<a href="?r=site/left&act=5" target="leftFrame">管理员</a>
				</p>
			</div>
            			<div class="">
				<p>
					<a href="?r=site/left&act=6" target="leftFrame">系统</a>
				</p>
			</div>
                     </div>
	</div>
	<!--<div class="fh-bottom">
		<div class="fhb-body">
			
		</div>
	</div>-->
</div>
<div class="ajax-loading" style="top:36px; right:0;"></div>

<script type="text/javascript">

jQuery(function(){
	$(".fht-navs div").click(function(){
		$(".fht-navs div").removeClass("active");
		$(this).addClass("active");
		$('a',this).blur();
	});
	
	$(".fht-navs div").click(function(){
		$(".fht-navs div").removeClass("active");
		$(this).addClass("active");
		$('a',this).blur();
	});
	
	$(document).pngFix(); 
});

</script>
</body></html>