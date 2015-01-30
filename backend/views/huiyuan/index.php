<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="Public/Css/Admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var _public_='/end/tp-coupon/Public';</script>
<script type="text/javascript" src="Public/Js/common.js"></script>
<script type="text/javascript" src="Public/Js/jquery.pngFix.js"></script>
</head>
<body>
<div id="dialog" title="信息提示">
<p></p>
</div>
<script type="text/javascript">

 $('#dialog').dialog({
					autoOpen: false,
					width: 300,
					buttons: {
						"确定": function() { 
							$(this).dialog("close"); 
						}
					}
				});
 $('div.ui-dialog-buttonset>button>span.ui-button-text').text('确定');

</script>
	<div class="fanwe-body">
		<div class="fb-title"><div><p><span>会员管理 &gt; 会员列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript" src="Public/Js/dataList.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'Member';
var _hash_ = '09b0718bf66502cb92ecdd1083b6716e';

$(document).ready(function(){
	$(".table-list").SetTableBgColor({
            odd:"even",
            even:"",
            selected:"",
            over:""
        });
});

</script>
<div class="handle-btns">
</div>
<div class="search-box">
    <form action="index.php?r=huiyuan/seach" method="post">
        <span>昵称</span>
        <input type="text" size="12" name="nick" value="" class="textinput">
		<small></small>
		<input type="submit" value="搜索" class="submit_btn">
     </form>
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('id[]', this)"></th>
<th>昵称</th>
<th width="150">E-mail</th>
<th width="60">积分</th>
<th width="80">金钱(:元)</th>
<th width="150">最后登陆时间</th>
<th width="100">最后登陆IP</th>
<th width="60">锁定</th>
<th width="130">操作</th>
</tr>
</thead>
<?php
foreach($rows as $k=>$v){
?>
<tbody>
<tr id="tt-item-4">
<td class="first"><input type="checkbox" value="4" name="id[]"></td>
<td align="left"><?php echo $v['nick'];?></td>
<td align="left"><?php echo $v['email'];?></td>
<td align="left"><span class="pointer" module="Member" group="Admin" model="User" pk="" href="javascript:;" onclick="textEdit(this,'4','credit')"><?php echo $v['credit'];?></span></td>
<td align="left"><span class="pointer" module="Member" group="Admin" model="User" pk="" href="javascript:;" onclick="textEdit(this,'4','money')"><?php echo $v['money'];?></span></td>
<td align="center"><?php echo date('Y-m-d H:i:s',$v['last_login']);?></td>
<td align="center"><?php echo $v['last_ip'];?></td>
<td align="center"><span class="pointer" module="Member" group="Admin" model="User" pk="" href="javascript:;" onclick="toggleStatus(this,'4','is_locked')"><img src="Public/Css/Admin/Images/status-0.gif" class="status" status="0" /></span></td>
<td align="center"><a href="index.php?r=huiyuan/jilu&user_id=<?php echo $v['user_id'];?>">充值记录</a>
</td>
</tr>
</tbody>
<?php
}
?></table>
<div class="pager"><span class="page_left_1_1">首页</span> <span class="page_left_2_2">上一页</span>  <span class="page_now">1</span> <span class="page_right_2_2">下一页</span> <span class="page_right_1_1">尾页</span></div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ajax-loading"></div>
</body>
<script type="text/javascript">

jQuery(function($){
	updateBodyDivHeight();
	$(window).resize(function(){
		updateBodyDivHeight();
	});
});

function updateBodyDivHeight()
{
	jQuery(".body-table-div").height(jQuery(".fanwe-body").height() - 36);
	if(jQuery(".body-table-div").get(0).scrollHeight > jQuery(".body-table-div").height())
	{
		var width = jQuery(".body-table-div").width() - 16;
		jQuery(".body-table-div > *").each(function(){
			if(!$(this).hasClass('ajax-loading'))
			{
				$(this).width(width)	
			}
		});
	}
}

</script>
</html>
