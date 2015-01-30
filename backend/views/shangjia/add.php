
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
		<div class="fb-title"><div><p><span>商家管理 &gt; 添加商家</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/xheditor-1.1.13/xheditor-1.1.13-zh-cn.min.js"></script>
<script type="text/javascript" src="Public/Js/xheditor-1.1.13/xheditor_plugins/ubb.min.js"></script>
<script type="text/javascript" src="Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="Public/Js/jQuery.validate.message_cn.js"></script>
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?r=shangjia/index" name="" id="">返回列表</a></p></div>
</div>
<form action="index.php?r=shangjia/add_do" method="post" name="form_post" id="form_post" enctype="multipart/form-data">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody>
	<tr>
		<th width="200" class="first">商城分类：</th>
		<td><select name="c_id" class="requireinput required">
		       <?php foreach($info as $k=>$v){?>
						<option value="<?php echo $v['id']?>" ><?php echo $v['name']?></option>
			   <?php }?>
						</select>
		</td>
	</tr>
    <tr>
		<th width="200" class="first">名称：</th>
		<td><input name="name" type="text"  size="40" class="textinput requireinput required" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">网址：</th>
		<td><input name="website" type="text"  size="40" class="textinput requireinput required url" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">购买跳转网址：</th>
		<td><input name="gourl" type="text"  size="40" class="textinput requireinput required" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">客服电话：</th>
		<td><input name="tel" type="text"  size="40" class="textinput requireinput required" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">LOGO：</th>
		<td><input name="logo" id="logo" type="file"  size="40" class="requireinput" /></td>
	</tr>
    <tr>
		<th width="200" class="first">形象图：</th>
		<td><input name="figure_image" id="figure_image" type="file"  size="40" class="requireinput" /></td>
	</tr>
    <tr>
		<th width="200" class="first">简介：</th>
		<td><textarea name="description" cols="" rows="" class="textinput requireinput required" style="height:150px; width:550px;"></textarea></td>
	</tr>
    <tr>
		<th width="200" class="first">优惠券使用方法：</th>
		<td><textarea name="how2use" id="how2use" cols="" rows="" class="textinput requireinput required" style="height:250px; width:550px;"></textarea><br /><span id="tip_desc"></span></td>
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
var m = 'CouponCodeMall';
var a = 'add';
var upscript_url = '/end/tp-coupon/index.php?g=Public&m=Public&a=upload4xheditor&immediate=1';
var editor = null;

jQuery(document).ready(function() {
			$("#form_post").validate({
						 submitHandler:function(form){
							 						if(editor.getSource() == ''){
														$('#tip_desc').html('<label generated="true" class="error">此内容为必填项,请输入！</label>');
														return;
													}
													form.how2use.value = $('#how2use').val();
						 							form.submit();
						 						}
						 });
			if(a == 'add'){
						$('#logo').rules('add', {
						 		required: true
						});
						$('#figure_image').rules('add', {
						 		required: true
						});
			}
			var options = {elm:'#how2use',tools:'full',upscript_url:upscript_url};
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
