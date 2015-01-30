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
		<div class="fb-title"><div><p><span>角色管理 &gt; 角色列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'Role';
var _hash_ = 'eca2e6f1467e11f20cde7c06f5c00298';








function del(role_id){
                if(confirm('确认删除么?')){
                    $.ajax({
                        type: "get",
                        url: "index.php?r=guanliyuan/role_del",
                        data: "role_id="+role_id,
                        success: function(e){ 
                          if(e){
							 // alert(1);
                              $("#tr"+role_id).remove()
                          }else{
                              alert('删除失败');
                          }
                        }
                     }); 
                }
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
	<div class="img-button "><p><input type="button" class="addData" onclick="window.location.href='?g=Admin&m=Role&a=add'" value="添加" name="addData" id="addData"></p></div>
	</div>
<div class="search-box">
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('role_id[]', this)"></th>
<th width="50">ID</th>
<th>角色名称</th>
<th width="100">操作</th>
</tr>
</thead>
<?php
foreach($rows as $k=>$v){
?>
<tbody>
<tr id="tr<?php echo $v['role_id'];?>">
<td class="first"><input type="checkbox" value="1" name="role_id[]"></td>
<td><?php echo $v['role_id'];?></td>
<td align="left"><?php echo $v['role_name'];?></td>
<td align="center"><a href="index.php?r=guanliyuan/role_update&role_id=<?php echo $v['role_id'];?>">编辑</a>&nbsp;&nbsp;<a onclick="del(<?php echo $v['role_id'];?>)" href="#">删除</a>&nbsp;&nbsp;</td>
</tr>
</tbody>
<?php
}
?>
</table>
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