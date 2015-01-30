<?php
use yii\widgets\LinkPager;
?>
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
		<div class="fb-title"><div><p><span>商家管理 &gt; 商家列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript" src="Public/Js/dataList.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'CouponCodeMall';
var _hash_ = '3d6107fe13aa7e95f6bf61f814c3e632';

function del(id)
{
	$('#dialog>p').html('将删除所有的优惠券及其他相关数据<br />确定要删除吗？');
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
														window.location.href = document.URL;
													}
													});
						},
						"取消": function() { 
							$(this).dialog("close"); 
						}
					}
				});
}
function single_action(action, isajax)
{
	if(check_count('id[]') == 0){
		$('#dialog>p').html('请选择商家');
		$('#dialog').dialog('open');
		return false;
	}
	if(check_count('id[]') > 1){
		$('#dialog>p').html('只能选择一个商家');
		$('#dialog').dialog('open');
		return false;
	}
	var id = get_check_val('id[]');
	var url = "?g="+g+"&m="+m+"&a="+action+"&id="+id;
	if(isajax === false){
		window.location.href = url;
	}
	url += "&ajax=1&_hash_="+_hash_;
	$.getJSON(url, function(data){
			if(data.status == 0){
				$('#dialog>p').html(data.info);
				$('#dialog').dialog('open');
			}else{
				$('#dialog>p').html('操作成功');
				if(action == 'rec2index'){
					_hash_ = data.info;
					$('#dialog').dialog('open');
				}else{
					window.location.href = document.URL;
				}
			}
	});
}
function active()
{
	$('#dialog>p').html('将重新激活该商家所有未过期且未被领取的优惠券');
	$('#dialog').dialog('open');
	single_action('active');
}
function unactive()
{
	$('#dialog>p').html('将屏蔽该商家所有未过期且未被领取的优惠券');
	$('#dialog').dialog('open');
	single_action('unactive');
}
function rec()
{
	single_action('rec', false);
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
<div class="handle-btns">
	<div class="img-button "><p><input type="button" class="addData" onclick="window.location.href='?g=Admin&m=CouponCodeMall&a=add'" value="添加商家" name="addData" id="addData"></p></div>
    <div class="img-button "><p><input type="button" class="addData" onclick="active()" value="激活" name="addData" id="addData"></p></div>
    <div class="img-button "><p><input type="button" class="addData" onclick="unactive()" value="屏蔽" name="addData" id="addData"></p></div>
    <div class="img-button "><p><input type="button" class="addData" onclick="rec()" value="推荐" name="addData" id="addData"></p></div>
	</div>
<div class="search-box">
    <form action="?">
    	<span>分类</span>
        <select name="c_id">
        <option value="0">不限...</option>
                <option value="1">123</option>
                <option value="3">444</option>
                <option value="4">&nbsp;&nbsp;&nbsp;&nbsp;袜子</option>
                <option value="2">456</option>
                </select>
        <span>关键字</span>
        <input type="text" size="12" name="kw" value="" class="textinput">
		<small></small>
		<input type="submit" value="搜索" class="submit_btn">
        <input type="hidden" value="Admin" name="g">
		<input type="hidden" value="CouponCodeMall" name="m">
		<input type="hidden" value="index" name="a">
  <input type="hidden" name="__hash__" value="d534b6b8017301f29d747e83ec1f4a50_dad0f7705859175b26a3c4364df5c067" /></form>
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('id[]', this)"></th>
<th>名称</th>
<th>分类</th>
<th>客服电话</th>
<th>网址</th>
<th width="50">激活</th>
<th width="60">排序</th>
<th width="100">操作</th>
</tr>
</thead>
<tbody>
<?php foreach($list as $k=>$v){?>
<tr id="tt-item-1">
<td class="first"><input type="checkbox" value="1" name="id[]"></td>
<td align="left"><a href="#"><?php echo $v['m_name']?></a></td>
<td align="left"><?php echo $v['name']?></td>
<td align="left"><?php echo $v['tel']?></td>
<td align="left"><a href="<?php echo $v['website']?>" target="_blank"><?php echo $v['website']?></a></td>
<td align="center"><img src="Public/Css/Admin/Images/status-1.gif" class="status" status="1" /></td>
<td align="center"><span class="pointer" module="CouponCodeMall" group="Admin" model="" pk="" href="javascript:;" onclick="textEdit(this,'1','sort_order')">9999</span></td>
<td align="center"><a href="?r=mall/edit&id=<?php echo $v['m_id']?>">编辑</a>
&nbsp;&nbsp;<a onclick="del(1)" href="javascript:;">删除</a>
</td>
</tr>
<?php }?>
</tbody></table>
<?= LinkPager::widget(['pagination' => $pages]); ?><div>
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
