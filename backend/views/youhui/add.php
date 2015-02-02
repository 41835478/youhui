
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
		<div class="fb-title"><div><p><span>优惠券管理 &gt; 添加优惠券</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/xheditor-1.1.13/xheditor-1.1.13-zh-cn.min.js"></script>
<script type="text/javascript" src="Public/Js/xheditor-1.1.13/xheditor_plugins/ubb.min.js"></script>
<script type="text/javascript" src="Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="Public/Js/jQuery.validate.message_cn.js"></script>
<link rel="stylesheet" type="text/css" href="Public/Js/WdatePicker/skin/WdatePicker.css" />
<script type="text/javascript" src="Public/Js/WdatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="Public/Js/thickbox/thickbox.js"></script>
<link href="Public/Js/thickbox/thickbox.css" rel="stylesheet" type="text/css" />
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?g=Admin&m=CouponCode" name="" id="">返回列表</a></p></div>
</div>
<form action="index.php?r=youhui/add_do" method="post" name="form_post" id="form_post">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody>
	<tr>
		<th width="200" class="first">商家：</th>
		<td><input name="m_name" id="m_name" type="text"  size="40" class="textinput requireinput required" value="" readonly="readonly" /><input name="m_id" id="m_id" type="hidden" value="0" />&nbsp;<a href="?r=youhui/shangjia&is_iframe=1&keepThis=true&TB_iframe=true&height=440&width=750" title="选择商家" class="thickbox">选择商家</a></td>
	</tr>
    <tr>
		<th width="200" class="first">名称：</th>
		<td><input name="title" type="text"  size="40" class="textinput" value="" />(设定名称后优惠券标题将优先显示为该名称)</td>
	</tr>
            <tr>
		<th width="200" class="first">类型：</th>
		<td><select name="c_type" onchange="sel_c_type(this.value)"><option value="1">减免券</option></select><span id="c_type_elm_1" style="display: inline;">满<input name="money_max" id="money_max" type="text" size="10" class="textinput requireinput number required" value="">元&nbsp;减<input name="money_reduce" id="money_reduce" type="text" size="10" class="textinput requireinput number required" value="">元</span><span id="c_type_elm_2" style="display: none;">金额：<input name="money_amount" id="money_amount" type="text" size="10" class="textinput requireinput number" value="">元</span></td>
	</tr>
    <tr>
		<th width="200" class="first">有效期：</th>
		<td><select name="expiry_type" onchange="sel_expiry_type(this.value)"><option value="1" >有限制</option><option value="2" >无限制</option></select><span id="expiry_type_elm_1">有效期至<input type="Text" name="expiry" class="Wdate textinput requireinput"  id="expiry" onFocus="WdatePicker({skin:'ext',dateFmt:'yyyy-MM-dd',isShowToday:false,lang:'zh_cn',readOnly:true})" style="cursor: hand; width:160px;" value=""></span></td>
	</tr>
    <tr>
		<th width="200" class="first">发放数量：</th>
		<td>数量：<input name="amount"  type="text"  size="10" class="textinput requireinput number" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">付费：</th>
		<td>价格：<input name="price" id="price_2" type="text"  size="10" class="textinput requireinput number" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">使用说明：</th>
		<td><textarea name="directions" id="directions" cols="" rows="" class="textinput" style="height:150px; width:550px;"></textarea></td>
	</tr>
    <tr>
		<th width="200" class="first">温馨提示：</th>
		<td><textarea name="prompt" id="prompt" cols="" rows="" class="textinput" style="height:150px; width:550px;"></textarea></td>
	</tr>
	<tr class="act">
		<th class="first">&nbsp;</th>
		<td>
			<input type="submit" value="提交" class="submit_btn">
			<input type="reset" value="重置" class="reset_btn">
		</td>
	</tr>
</tbody></table>
</form>
<script type="text/javascript">
var g = 'Admin';
var m = 'CouponCode';
var a = 'add';
var c_type = 1;
var expiry_type = 1;
var price_type = 1;
var tb_pathToImage = "Public/Js/thickbox/loadingAnimation.gif";
var upscript_url = '/end/tp-coupon/index.php?g=Public&m=Public&a=upload4xheditor&immediate=1';
var editor = null;

function sel_c_type(c_type)
{
	$('#c_type_elm_1,#c_type_elm_2').hide();
	$('#c_type_elm_'+c_type).show();
	if(c_type == 1){
		$('#money_max,#money_reduce').addClass('required');
		$('#money_amount').removeClass('required');
	}else{
		$('#money_max,#money_reduce').removeClass('required');
		$('#money_amount').addClass('required');
	}
}
function sel_expiry_type(expiry_type)
{
	if(expiry_type == 1){
		$('#expiry_type_elm_1').show();
		$('#expiry').addClass('required');
	}else{
		$('#expiry_type_elm_1').hide();
		$('#expiry').removeClass('required');
	}
}
function sel_price_type(price_type)
{
	$('#price_type_elm_1,#price_type_elm_2,#price_type_elm_3').hide();
	$('#price_type_elm_'+price_type).show();
	if(price_type == 2){
		$('#price_2').addClass('required');
		$('#price_3').removeClass('required');
	}else if(price_type == 3){
		$('#price_2').removeClass('required');
		$('#price_3').addClass('required');
	}else{
		$('#price_2,#price_3').removeClass('required');
	}
}
function pick_mall_handler(mall)
{
	if(mall !== null){
		$('#m_id').val(mall.m_id);
		$('#m_name').val(mall.m_name);
	}
	tb_remove();
}
$(document).ready(function() {
			$("#form_post").validate({
						 submitHandler:function(form){
							 						form.directions.value = $('#directions').val();
													form.prompt.value = $('#prompt').val();
						 							form.submit();
						 						}
						 });
			sel_c_type(c_type);
			sel_expiry_type(expiry_type);
			sel_price_type(price_type);
			tb_init('a.thickbox, area.thickbox, input.thickbox');//pass where to apply thickbox
			imgLoader = new Image();// preload image
			imgLoader.src = tb_pathToImage;
			var options = {elm:'#directions,#prompt',tools:'simple',upscript_url:upscript_url};
			editor = editorInit(options);
});

</script>
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
