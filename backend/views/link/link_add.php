
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
		<div class="fb-title"><div><p><span>友情链接管理 &gt; 添加链接</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="Public/Js/jQuery.validate.message_cn.js"></script>
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?r=link/link_list" name="" id="">返回列表</a></p></div>
</div>
<form action="?r=link/link_add_do" method="post" enctype="multipart/form-data">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody><tr>
		<th width="200" class="first">网站名称：</th>
		<td><input name="site_name" type="text"  size="40" class="textinput requireinput required" value="" /></td>
	</tr>
	<tr>
		<th class="first">位置：</th>
		<td>
        <select name="position_id" class="requireinput required">
                <option value="101" >首页</option>
                <option value="102" >友情链接页</option>
                </select>
        </td>
	</tr>
    <tr>
		<th class="first">类型：</th>
		<td><label><input onclick="switch_type(this.value)" name="link_type" type="radio" value="1" checked />文字</label><label><input onclick="switch_type(this.value)" name="link_type" type="radio" value="2"  />图片</label></td>
	</tr>
    <tr>
		<th class="first">链接：</th>
		<td><input name="link_url" type="text"  size="40" class="textinput url" value="" /></td>
	</tr>
    <tr>
		<th class="first">显示顺序：</th>
		<td><input name="sort_order" type="text"  size="10" class="textinput requireinput required number" value="" /></td>
	</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="4" border="0" style="display:block;" class="table-form link_group group_1">
	<tbody>
    <tr>
		<th width="200" class="first">链接文字：</th>
		<td><input name="link_text" type="text"  size="40" class="textinput" value="" /></td>
	</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="4" border="0" style="display:none;" class="table-form link_group group_2">
	<tbody>
    <tr>
		<th width="200" class="first">链接LOGO：</th>
		<td><input type='file' name='link_logo' size='40' /></td>
	</tr>
    <tr>
		<th width="200" class="first">或LOGO网址：</th>
		<td><input name="logo_url" type="text"  size="40" class="textinput url" value="" /></td>
	</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody>
	<tr class="act">
		<th width="200" class="first">&nbsp;</th>
		<td>
			<input type="submit" value="提交" class="submit_btn">
			<input type="reset" value="重置" class="reset_btn">
		</td>
	</tr>
</tbody></table></form>
<script type="text/javascript">

$("#form_post").validate();

function switch_type(link_type)
{
	$('.link_group').css('display','none');
	$('.group_'+link_type).css('display','block');
}

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
