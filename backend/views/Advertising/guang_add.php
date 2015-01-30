
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
		<div class="fb-title"><div><p><span>广告管理 &gt; 添加广告</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="Public/Js/jQuery.validate.message_cn.js"></script>
<link rel="stylesheet" type="text/css" href="Public/Js/WdatePicker/skin/WdatePicker.css" />
<script type="text/javascript" src="Public/Js/WdatePicker/WdatePicker.js"></script>
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?g=Admin&m=Adv" name="" id="">返回列表</a></p></div>
</div>
<form action="?r=advertising/guang_add_do" method="post" enctype="multipart/form-data">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody>
    <tr>
		<th width="200" class="first">广告名称：</th>
		<td><input name="ad_name" type="text"  size="40" class="textinput requireinput required" value="" /></td>
	</tr>
	<tr>
		<th class="first">广告类型：</th>
		<td>
        <select onchange="switch_media_type(this.value)" name="media_type" class="requireinput required">
                 <option value="101" >图片</option>
                  <option value="102" >Flash</option>
                  <option value="103" >代码</option>
                  <option value="104" >文字</option>
                  </select>
        </td>
	</tr>
    <tr>
		<th class="first">广告位置：</th>
		<td>
        <select name="position_id" class="requireinput required">
                <option value="1" >天天</option>
                </select>
        </td>
	</tr>
    <tr>
		<th class="first">是否开启：</th>
		<td><label><input name="enabled" type="radio" value="1" checked />开启</label><label><input name="enabled" type="radio" value="0"  />关闭</label></td>
	</tr>
    <tr>
		<th class="first">开始时间：</th>
		<td>
        <input type="Text" name="start_time" class="Wdate requireinput required"  id="start_time" onFocus="WdatePicker({skin:'ext',dateFmt:'yyyy-MM-dd HH:mm',isShowToday:false,lang:'zh_cn',readOnly:true})" style="cursor: hand; width:160px;" value="">
        </td>
	</tr>
    <tr>
		<th class="first">结束时间：</th>
		<td>
        <input type="Text" name="end_time" class="Wdate requireinput required"  id="end_time" onFocus="WdatePicker({skin:'ext',dateFmt:'yyyy-MM-dd HH:mm',isShowToday:false,lang:'zh_cn',readOnly:true})" style="cursor: hand; width:160px;" value="">
        </td>
	</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="4" border="0" style="display:block;" class="table-form ad_group group_101">
	<tbody>
    <tr>
		<th width="200" class="first">广告链接：</th>
		<td><input name="ad_link" type="text"  size="40" class="textinput url" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">上传广告图片：</th>
		<td><input type='file' name='ad_img' size='40' /></td>
	</tr>
    <tr>
		<th width="200" class="first">或图片网址：</th>
		<td><input name="img_url" type="text"  size="40" class="textinput url" value="" /></td>
	</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="4" border="0" style="display:none;" class="table-form ad_group group_102">
	<tbody>
    <tr>
		<th width="200" class="first">上传Flash文件：</th>
		<td><input type='file' name='upfile_flash' size='40' /></td>
	</tr>
    <tr>
		<th width="200" class="first">或Flash网址：</th>
		<td><input name="flash_url" type="text"  size="40" class="textinput url" value="" /></td>
	</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="4" border="0" style="display:none;" class="table-form ad_group group_103">
	<tbody>
    <tr>
		<th width="200" class="first">输入广告代码：</th>
		<td>
        <textarea rows="6" cols="55" name="ad_code"></textarea>
        </td>
	</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="4" border="0" style="display:none;" class="table-form ad_group group_104">
	<tbody>
    <tr>
		<th width="200" class="first">广告链接：</th>
		<td><input name="ad_link2" type="text"  size="40" class="textinput url" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">广告内容：</th>
		<td><textarea rows="6" cols="55" name="ad_text"></textarea></td>
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
</tbody></table>
</form>
<script type="text/javascript">

$("#form_post").validate();

function switch_media_type(media_type)
{
	$('.ad_group').css('display','none');
	$('.group_'+media_type).css('display','block');
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
