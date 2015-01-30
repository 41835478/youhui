
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="Public/Css/Admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var _public_='Public';</script>
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
		<div class="fb-title"><div><p><span>优惠券管理 &gt; 每日精选优惠券</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript" src="Public/Js/dataList.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'CouponCode';
var _hash_ = '0443feb091ca1831fe524de4641928d8';

function del(id)
{
	$('#dialog>p').html('确定要删除吗？');
	$('#dialog').dialog('open');
	$('#dialog').dialog({
					autoOpen: false,
					width: 300,
					buttons: {
						"确定": function() { 
							var url = "?g="+g+"&m="+m+"&a=unbest&id="+id+"&ajax=1&_hash_="+_hash_;
							$.getJSON(url, function(data){
													if(data.status == 0){
														$('#dialog>p').html('删除失败');
														$('#dialog').dialog('open');
													}else{
														$('#tt-item-'+id).remove();
														_hash_ = data.info;
														$('#dialog').dialog("close"); 
													}
													});
						},
						"取消": function() { 
							$(this).dialog("close"); 
						}
					}
				});
}
$(document).ready(function(){
	$(".table-list").SetTableBgColor({
            odd:"even",
            even:"",
            selected:"",
            over:""
        });
});

</script>
<div class="search-box">
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th>名称</th>
<th width="150">有效期</th>
<th width="60">排序</th>
<th width="130">操作</th>
</tr>
</thead>
<tbody>
<tr id="tt-item-5">
<td align="left">啊实打实满122减22元优惠券</a></td>
<td align="left">2015-02-06</td>
<td align="center"><span class="pointer" module="CouponCode" group="Admin" model="coupon_code_best" pk="c_id" href="javascript:;" onclick="textEdit(this,'5','sort_order')">10000</span></td>
<td align="center"><a href="?g=Admin&m=CouponCode&a=edit_best&id=5">编辑</a>
&nbsp;&nbsp;<a onclick="del(5)" href="javascript:;">删除</a>
</td>
</tr>
</tbody></table>
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
