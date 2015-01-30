
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
		<div class="fb-title"><div><p><span>文章管理 &gt; 文章列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'Article';
var _hash_ = '79708d17220b2c02b6510c8d73079720';

function del(id)
{
	$('#dialog>p').html('确定要删除吗？');
	$('#dialog').dialog('open');
	$('#dialog').dialog({
					autoOpen: false,
					width: 300,
					buttons: {
						"确定": function() { 
							var url = "?g="+g+"&m="+m+"&a=del&id="+id+"&ajax=1&_hash_="+_hash_;
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

function buildHtml()
{
	var id = get_check_val('article_id[]');
	if(id == ''){
		$('#dialog>p').html('请选择文章');
		$('#dialog').dialog('open');
		return false;
	}
	$('#mask,#loading').show();
	var url = "?g="+g+"&m="+m+"&a=build_html&id="+id+"&ajax=1&_hash_="+_hash_;
	$.getJSON(url, function(data){
			$('#mask,#loading').hide();
			if(data.status == 0){
				$('#dialog>p').html('操作失败');
				$('#dialog').dialog('open');
			}else{
				_hash_ = data.info;
				$('#dialog>p').html('操作成功');
				$('#dialog').dialog('open');
				setTimeout(function(){
									$('#dialog').dialog("close"); 
									},2000);
			}
	});
}

$(document).ready(function(){
	$('#mask,#loading').css({'height':$(document).height(),'width':$(document).width()});
	$(".table-list").SetTableBgColor({
            odd:"even",
            even:"",
            selected:"",
            over:""
        });
});

</script>
<div class="handle-btns">
	<div class="img-button "><p><input type="button" class="addData" onclick="window.location.href='?r=article/article_add'" value="添加" name="addData" id="addData"></p></div>
    <div class="img-button "><p><input type="button" class="addData" onclick="buildHtml()" value="生成静态" name="addData" id="addData"></p></div>
	</div>
<div class="search-box">
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('article_id[]', this)"></th>
<th>文章标题</th>
<th width="120">分类</th>
<th width="120">添加时间</th>
<th width="100">操作</th>
</tr>
</thead>
<tbody>
    <?php foreach($list as $k=>$v){?>
<tr id="tr<?php echo $v["article_id"]?>">
 
<td class="first"><input type="checkbox" value="1" name="article_id[]"></td>
<td align="left"><?php echo $v['title']?></td>
<td align="left"><?php echo $v['cate_name']?></td>
<td align="left"><?php echo date("Y-m-d H:i:s",$v['addtime']);?> </td>
<td align="center"><a href="?r=article/article_upd&id=<?php echo $v['article_id']?>">编辑</a>
&nbsp;&nbsp;<a onclick="article_del(<?php echo $v["article_id"]?>)" href="javascript:;">删除</a>
</td>

</tr>
    <?php
 }
?>
</tbody></table>
<div class="pager"><span class="page_left_1_1">首页</span> <span class="page_left_2_2">上一页</span>  <span class="page_now">1</span> <span class="page_right_2_2">下一页</span> <span class="page_right_1_1">尾页</span></div>
<div id="mask" style="background:#000 none repeat scroll 0% 0%; position: fixed; z-index: 9998;top: 0px; left: 0px; display:none; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous; opacity: 0.8;filter:Alpha(Opacity=80)"></div>
<div id="loading" style=" position:absolute; z-index: 9999;top: 0px; left: 0px; display:none;text-align:center"><img src="/end/tp-coupon/Public/Images/loading.gif" height="37" width="37" style="position:relative; top:160px;" /></div>
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
function article_del(id){
	$.ajax({
            url:"?r=article/article_del",
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
