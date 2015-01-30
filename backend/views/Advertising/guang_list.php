
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
		<div class="fb-title"><div><p><span>广告管理 &gt; 广告列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'Adv';
var _hash_ = '2ac6d4bcce8f257f817e0beb2ed8c2a7';

function del(id)
{
	$('#dialog>p').html('确定要删除吗？');
	$('#dialog').dialog('open');
	$('#dialog').dialog({
					autoOpen: false,
					width: 300,
					buttons: {
						"确定": function() { 
							var url = "?g="+g+"&m="+m+"&a=del&ad_id="+id+"&ajax=1&_hash_="+_hash_;
							$.getJSON(url, function(data){
													if(data.status == 0){
														$('#dialog>p').html('删除失败');
														$('#dialog').dialog('open');
													}else{
														_hash_ = data.info;
														$('#tt-item-'+id).remove();
														$('#dialog').dialog("close"); 
													}
													});
						},
						"取消": function() { 
							$(this).dialog("close"); 
						}
					}
				});
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
	<div class="img-button "><p><input type="button" class="addData" onclick="window.location.href='?g=Admin&m=Adv&a=add'" value="添加" name="addData" id="addData"></p></div>
	</div>
<div class="search-box">
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('ad_id[]', this)"></th>
<th width="50">ID</th>
<th>广告名称</th>
<th width="200">广告位置</th>
<th width="80">广告类型</th>
<th width="120">开始时间</th>
<th width="120">结束时间</th>
<th width="80">点击次数</th>
<th>调用代码</th>
<th width="100">操作</th>
</tr>
</thead>
<tbody>
<?php foreach($data as $k=>$v){?>
<tr id="tr<?php echo $v['ad_id']?>">
<td class="first"><input type="checkbox" value="<?php echo $v['ad_id']?>" name="ad_id[]"></td>
<td><?php echo $v['ad_id']?></td>
<td align="left"><?php echo $v['ad_name']?></td>
<td align="left"><?php echo $v['position_name']?></td>
<td align="left"><?php if($v['media_type']==101){
	echo "图片";
}else if($v['media_type']==102){
	echo "Flash";
}else if($v['media_type']==103){
	echo "代码";
}else if($v['media_type']==104){
	echo "文字";
}?></td>
<td align="left"><?php echo date("Y-m-d H:i:s",$v['start_time'])?></td>
<td align="left"><?php echo date("Y-m-d H:i:s",$v['end_time'])?></td>
<td align="left"><?php echo $v['click_count']?></td>
<td align="left">&lt;script type="text/javascript" src="/end/TP-COUPON/index.php?m=Adv&a=show&id=7"&gt;&lt;/script&gt;</td>
<td align="center"><a href="?r=advertising/guang_upd&id=<?php echo $v['ad_id']?>">编辑</a>
&nbsp;&nbsp;<a onclick="del(<?php echo $v['ad_id']?>)" href="javascript:;">删除</a>
</td>
</tr>
<?php
}
?>
</tbody></table>
<div class="pager"><span class="page_left_1_1">首页</span> <span class="page_left_2_2">上一页</span>  <span class="page_now">1</span> <span class="page_right_2_2">下一页</span> <span class="page_right_1_1">尾页</span></div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ajax-loading"></div>
</body>
<script type="text/javascript" src="Public/Js/jquery.js"></script>
<script type="text/javascript">
function del(id){
	$.ajax({
            url:"?r=advertising/guang_del",
            data:{"id":id},
            type:"post",
            success:function(res){
                if(res==1){
                    $("#tr"+id).remove();
                }else{
                    alert("删除失败");
                }
                
            }	
})
}


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
