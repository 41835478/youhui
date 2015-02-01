<?php
use yii\widgets\LinkPager;
?>
 <style>
.pager{float:right;}
.pager li{float:left;}
.pager li{margin:5px;}
</style>
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
		<div class="fb-title"><div><p><span>优惠券管理 &gt; 优惠券列表</span></p></div></div>
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
var _hash_ = 'b2b6da6d3337846bf538906a99ac9502';

function del(id)
{
	$('#dialog>p').html('将删除所有的优惠码及其他相关数据<br />确定要删除吗？');
	$('#dialog').dialog('open');
	$('#dialog').dialog({
					autoOpen: false,
					width: 300,
					buttons: {
						"确定": function() { 
							var url = "?g="+g+"&m="+m+"&a=del&id="+id+"&ajax=1&_hash_="+_hash_;
							$.getJSON(url, function(data){
													if(data.status == 0){
														$('#dialog>p').html('删除失败');
														$('#dialog').dialog('open');
													}else{
														$('#tt-item-'+id).remove();
														$('#dialog').dialog('close');
													}
													});
						},
						"取消": function() { 
							$(this).dialog("close"); 
						}
					}
				});
}
function set_best()
{
	if(check_count('id[]') == 0){
		$('#dialog>p').html('请选择优惠券');
		$('#dialog').dialog('open');
		return false;
	}
	if(check_count('id[]') > 1){
		$('#dialog>p').html('只能选择一个优惠券');
		$('#dialog').dialog('open');
		return false;
	}
	var id = get_check_val('id[]');
	var url = "?g="+g+"&m="+m+"&a=set_best&id="+id;
	window.location.href = url;
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
<div class="handle-btns tabs-title">
	<div class="img-button "><p><input type="button" class="addData" onclick="window.location.href='?g=Admin&m=CouponCode&a=add'" value="添加" name="addData" id="addData"></p></div>
    	<div class="img-button "><p><input type="button" class="addData" onclick="window.location.href='?g=Admin&m=CouponCode&a=import'" value="批量导入" name="addData" id="addData"></p></div>
    <div class="img-button "><p><input type="button" class="addData" onclick="set_best()" value="设为每日精选" name="addData" id="addData"></p></div>
    <div class="tt-item "><p><a href="http://soft.qfanqie.com/forum.php?mod=forumdisplay&fid=42" target="_blank">获取优惠券</a></p></div>
</div>
<div class="search-box">
    <form action="?">
        <span>商家名</span>
        <input type="text" size="12" name="kw" value="" class="textinput">
		<small></small>
		<input type="submit" value="搜索" class="submit_btn">
        <input type="hidden" value="Admin" name="g">
		<input type="hidden" value="CouponCode" name="m">
		<input type="hidden" value="index" name="a">
 </form>
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('id[]', this)"></th>
<th>名称</th>
<th width="100">有效期</th>
<th width="130">价格</th>
<th width="60">数量</th>
<th width="70">已领取数量</th>
<th width="60">排序</th>
<th width="60">激活</th>
<th width="130">操作</th>
</tr>
</thead>
<tbody>
<?php foreach($list as $k=>$v){?>
<tr id="tr<?php echo $v['y_id']?>">
<td class="first"><input type="checkbox" value="5" name="id[]"></td>
<td align="left"><a href=""><?php echo $v['title']?></a></td>
<td align="left">无限制</td>
<td align="left">免费</td>
<td align="left"><?php echo $v['amount']?></td>
<td align="center"><?php echo $v['fetched_amount']?></td>
<td align="center"><span class="pointer" module="CouponCode" group="Admin" model="" pk="" href="javascript:;" onclick="textEdit(this,'5','sort_order')">9999</span></td>
<td align="center"><span class="pointer" module="CouponCode" group="Admin" model="" pk="" href="javascript:;" onclick="toggleStatus(this,'5','is_active')"><img src="Public/Css/Admin/Images/status-0.gif" class="status" status="0" /></span></td>
<td align="center"><a href="?g=Admin&m=CouponCode&a=code&c_id=5">优惠码管理</a>&nbsp;&nbsp;<a href="?g=Admin&m=CouponCode&a=edit&c_id=5">编辑</a>
&nbsp;&nbsp;<a href="#" onclick="del('<?php echo $v['y_id']?>')">删除</a>
</td>
</tr>
<?php }?>
</tbody></table>
   <script >
       
             function del(id){

                if(confirm('确认删除么?')){
                    $.ajax({
                        type: "POST",
                        url: "index.php?r=youhui/del",
                        data: "id="+id,
                        success: function(msg){ 
                          if(msg){
                              $("#tr"+id).remove()
                          }else{
                              alert('删除失败');
                          }
                        }
                     }); 
                }
            }
        </script>
 <div> <center><ul class="pager"> <li><?= LinkPager::widget(['pagination' => $pages]); ?><li></ul></center><div>
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
