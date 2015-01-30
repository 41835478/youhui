
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
		<div class="fb-title"><div><p><span>广告位管理 &gt; 编辑广告位</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="Public/Js/jQuery.validate.message_cn.js"></script>
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?g=Admin&m=AdvPosition" name="" id="">返回列表</a></p></div>
</div>
<form action="?r=location/location_upd_do" method="post">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody><tr>
		<th width="200" class="first">广告位名称：</th>
		<td><input name="position_name" type="text"  size="40" class="textinput requireinput required" value="<?php echo $list['position_name']?>" /></td>
	</tr>
	<tr>
		<th class="first">广告位宽度：</th>
		<td><input name="ad_width" type="text"  size="10" class="textinput requireinput required number" value="<?php echo $list['ad_width'] ?>" />像素</td>
	</tr>
    <tr>
		<th class="first">广告位高度：</th>
		<td><input name="ad_height" type="text"  size="10" class="textinput requireinput required number" value="<?php echo $list['ad_height']?>" />像素</td>
	</tr>
	<input type="hidden" name="position_id" value="<?php echo $list['position_id']?>" />
    <tr>
		<th class="first">广告位描述：</th>
		<td><input name="position_desc" type="text"  size="40" class="textinput" value="<?php echo $list['position_desc']?>" /></td>
	</tr>
    <tr style="display:none;">
		<th class="first">广告位模板：</th>
		<td>
        <textarea rows="6" cols="55" name="position_style" class="requireinput">&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot;&gt;
{foreach from=$ads item=ad}
&lt;tr&gt;&lt;td&gt;{$ad}&lt;/td&gt;&lt;/tr&gt;
{/foreach}
&lt;/table&gt;</textarea>
        </td>
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

$("#form_post").validate();

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
