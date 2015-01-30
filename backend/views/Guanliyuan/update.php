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
		<div class="fb-title"><div><p><span>角色管理 &gt; 编辑角色</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="Public/Js/jQuery.validate.message_cn.js"></script>
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?g=Admin&m=Role" name="" id="">返回列表</a></p></div>
</div>

<form action="index.php?r=guanliyuan/role_update_do&role_id=<?php echo $arr['role_id'];?>" method="post" name="form_post" id="form_post">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody>
	<tr>
		<th width="200" class="first">角色名称：</th>
		<td><input name="role_name" id="role_name" type="text"  size="40" class="textinput requireinput required" value="<?php echo $arr['role_name'];?>" /></td>
	</tr>
	<tr class="act">
		<th class="first">&nbsp;</th>
		<td>
			<input type="submit" value="提交" class="submit_btn">
			<input type="reset" value="重置" class="reset_btn">
		</td>
	</tr>
</tbody></table>
<input name="_hash_" type="hidden" value="2cc1b7f978fbc853b24a9bf391786f45" />
<input name="role_id" id="role_id" type="hidden" value="1" />
<input type="hidden" name="__hash__" value="ea72979239f4568275540f5e03ecad75_d01a805d078d00b82fb1ef3b30f06d81" /></form>
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