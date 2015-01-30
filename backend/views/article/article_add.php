
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
		<div class="fb-title"><div><p><span>文章管理 &gt; 添加文章</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/xheditor-1.1.13/xheditor-1.1.13-zh-cn.min.js"></script>
<script type="text/javascript" src="Public/Js/xheditor-1.1.13/xheditor_plugins/ubb.min.js"></script>
<script type="text/javascript" src="Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="Public/Js/jQuery.validate.message_cn.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'Article';
var a = 'add';
var upscript_url = '/end/tp-coupon/index.php?g=Public&m=Public&a=upload4xheditor&immediate=1';
</script>
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?r=article/article" name="" id="">返回列表</a></p></div>
</div>
<form action="?r=article/article_add_do" method="post"  enctype="multipart/form-data">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody>
    <tr>
		<th width="200" class="first">文章分类：</th>
		<td>
        <select name="cate_id" class="requireinput required">
                <option value="1" >111</option>
                </select>
        </td>
	</tr>
    <tr>
		<th width="200" class="first">文章标题：</th>
		<td><input name="title" type="text"  size="80" class="textinput requireinput required" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">文章别名：</th>
		<td><input name="alias" type="text"  size="20" class="textinput" value="" /></td>
	</tr>
    <tr>
		<th class="first">文章内容：</th>
		<td>
        <textarea name="content" id="content" cols="" rows="" class="requireinput required" style="height:460px; width:600px;"></textarea>
        <br />
        <span id="tip_desc"></span>
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
var cur_city = '';

jQuery(document).ready(function() {
            $("#form_post").validate({
						 submitHandler:function(form){ 
						 							if($('#content').val().length == 0){
														$('#tip_desc').html('<label generated="true" class="error">此内容为必填项,请输入！</label>');
														return false;
													}else{
														$('#tip_desc').html('');
													}
													form.content.value = $('#content').val();
						 							form.submit();
						 						}
						 });
			var options = {elm:'#content',tools:'full',upscript_url:upscript_url};
			editorInit(options);
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
