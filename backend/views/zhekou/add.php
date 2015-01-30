<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="./Public/Css/Admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var _public_='./Public';</script>
<script type="text/javascript" src="./Public/Js/common.js"></script>
<script type="text/javascript" src="./Public/Js/jquery.pngFix.js"></script>
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
		<div class="fb-title"><div><p><span>促销活动管理 &gt; 添加活动</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="./Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="./Public/Js/jQuery.validate.message_cn.js"></script>
<link rel="stylesheet" type="text/css" href="./Public/Js/WdatePicker/skin/WdatePicker.css" />
<script type="text/javascript" src="./Public/Js/WdatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="./Public/Js/thickbox/thickbox.js"></script>
<link href="./Public/Js/thickbox/thickbox.css" rel="stylesheet" type="text/css" />
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?r=chuxiao/index" name="" id="">返回列表</a></p></div>
</div>
<form action="?r=zhekou/add_do" method="post" name="form_post" id="form_post" enctype="multipart/form-data">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody>
	<tr>
		<th width="200" class="first">商家：</th>
		<td><input name="m_name" id="m_name" type="text"  size="40" class="textinput requireinput required" value="" readonly="readonly" /><input name="m_id" id="m_id" type="hidden" value="0" />&nbsp;<a href="?r=zhekou/shangjia&is_iframe=1&keepThis=true&TB_iframe=true&height=440&width=750" title="选择商家" class="thickbox">选择商家</a></td>
	</tr>
    <tr>
		<th width="200" class="first">活动名称：</th>
		<td><input name="title" type="text"  size="40" class="textinput requireinput required" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">活动类型：</th>
		<td><select name="cate_id" class="requireinput required">
                        <?php foreach($list as $v){?>
                        <option value="<?php echo $v['id']?>" ><?php echo $v['name']?></option>
                        <?php }?>
						</select></td>
	</tr>
    <tr>
		<th width="200" class="first">价钱：</th>
		<td><input type="Text" name="price" class="textinput requireinput required"  value=""></td>
	</tr>
    <tr>
		<th width="200" class="first">活动简介：</th>
		<td><textarea name="description" id="description" cols="" rows="" class="textinput requireinput required" style="height:150px; width:550px;"></textarea></td>
	</tr>
    <tr>
		<th width="200" class="first">CPS跳转网址：</th>
		<td><input name="gourl" type="text"  size="40" class="textinput requireinput required" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">LOGO：</th>
		<td><input name="logo" id="logo" type="file"  size="40" class="requireinput" /></td>
	</tr>
    <tr>
		<th width="200" class="first">排序：</th>
		<td><input name="sort_order" type="text"  size="10" class="textinput requireinput required number" value="9999" /></td>
	</tr>
	<tr class="act">
		<th class="first">&nbsp;</th>
		<td>
			<input type="submit" value="提交" class="submit_btn">
			<input type="reset" value="重置" class="reset_btn">
		</td>
	</tr>
</tbody></table>
<input name="hash" type="hidden" value="fd2d5be5bae39a2563d091d240c44d68" />
<input name="id" type="hidden" value="0" />
<input type="hidden" name="__hash__" value="a7d408463f7669c84376ded8f594c64e_5243d55feaeeecd5927f891b40b9df9a" /></form>
<script type="text/javascript">
var g = 'Admin';
var m = 'MallPromotion';
var a = 'add';
var tb_pathToImage = "./Public/Js/thickbox/loadingAnimation.gif";

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
						 							form.submit();
						 						}
						 });
			if(a == 'add'){
						$('#logo').rules('add', {
						 		required: true
						});
			}
			tb_init('a.thickbox, area.thickbox, input.thickbox');//pass where to apply thickbox
			imgLoader = new Image();// preload image
			imgLoader.src = tb_pathToImage;
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
