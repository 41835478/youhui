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
		<div class="fb-title"><div><p><span>管理员管理 &gt; 添加管理员</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.validate.min.js"></script>
<script type="text/javascript" src="Public/Js/jQuery.validate.message_cn.js"></script>
<div class="handle-btns">
	<div class="link-button"><p><a class="" href="?g=Admin&m=Admin" name="" id="">返回列表</a></p></div>
</div>
<form action="index.php?r=guanliyuan/add_gly_do" method="post" name="form_post" id="form_post">
<table cellspacing="0" cellpadding="4" border="0" class="table-form">
	<tbody>
    <tr>
		<th width="200" class="first">用户名：</th>
		<td><input name="user_name" id="user_name" onblur="check_user_name_valid(false);" type="text"  size="40" class="textinput requireinput" value="" /><label class="error2" id="tip_user_name"></label></td>
	</tr>
    <tr>
		<th width="200" class="first">密码：</th>
		<td><input name="password" id="password" type="password"  size="40" class="textinput requireinput" value="" /></td>
	</tr>
    <tr>
		<th width="200" class="first">确认密码：</th>
		<td><input name="confirm_password" id="confirm_password" type="password"  size="40" class="textinput requireinput" value="" /></td>
	</tr>
  <tr>
		<th width="200" class="first">角色：</th>
		<td id="group_role_id">
		<?php foreach($rows as $k=>$v){?>
                <label><input name="role_id[]" type="checkbox" class="atLeastOneChecked" value="<?php echo $v['role_id'];?>"  /><?php echo $v['role_name'];?></label>
				<?php
				}
				?>
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
<input name="is_locked" type="hidden" value="0" />
<input name="is_super"  type="hidden" value="0" />
</form>
<script type="text/javascript">
var g = 'Admin';
var m = 'Admin';
var a = 'add';

$("#form_post").validate({
   rules: {
			user_name: {
				required: true
			}
		},
	
	errorPlacement:function(error,element) {

     if (element.attr("name") == "role_id[]")

       error.appendTo("#group_role_id");

     else

       error.insertAfter(element);

   }

});

jQuery(document).ready(function() {
            $.validator.addMethod('atLeastOneChecked', function(value, element) {
            		var checkedCount = 0;
              			$("input[name='role_id[]']").each(function() { 
               				if ($(this).attr('checked')) { checkedCount++; } 
               			});
              		return checkedCount>0;
            
        	},"请至少选择一项");
			
			if(a == 'add'){
						$('#password').rules('add', {
						 		required: true,
								minlength: 6
						 		});
						$('#confirm_password').rules('add', {
						 		required: true,
								minlength: 6,
								equalTo: "#password"
						 		});
			}
});

function check_user_name_valid(dosubmit)
{
	var user_name = $('#user_name').val();
	var user_id = $('#user_id').val();
	if(user_name == ''){
		$('#tip_user_name').text('');
		return false;
	}
	var url = "?g="+g+"&m="+m+"&a=check_user_name_valid&ajax=1&user_id="+user_id+"&user_name="+encodeURIComponent(user_name);
		$.getJSON(url, function(data){
									if(data.status == 0){
										alert(data.info);
									}else{
										if(data.data.is_exist == 1){
											$('#tip_user_name').text('该用户名已存在');
										}else if(data.data.is_exist == 0){
											$('#tip_user_name').text('');
											if(dosubmit){
												$('#form_post').submit();
											}
										}
									}
									});
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