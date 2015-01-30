
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="Public/Css/Admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var _public_='/end/tp-coupon/Public';</script>
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
		<div class="fb-title"><div><p><span>折扣商品管理 &gt; 折扣商品列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript" src="Public/Js/dataList.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'MallZhekou';
var _hash_ = 'dd2658468e01609b7bf5fc895bdfbc09';

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
														$('#dialog').dialog('close');
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
	<div class="img-button "><p><input type="button" class="addData" onclick="window.location.href='?g=Admin&m=MallZhekou&a=add'" value="添加折扣商品" name="addData" id="addData"></p></div>
	</div>
<div class="search-box">
    <form action="?">
    	<span>分类</span>
        <select name="cate_id">
        <option value="0">不限...</option>
                <option value="1">www</option>
                </select>
        <span>关键字</span>
        <input type="text" size="12" name="kw" value="" class="textinput">
		<small></small>
		<input type="submit" value="搜索" class="submit_btn">
        <input type="hidden" value="Admin" name="g">
		<input type="hidden" value="MallZhekou" name="m">
		<input type="hidden" value="index" name="a">
  <input type="hidden" name="__hash__" value="e36ab98a9a30c79c3b9e53cc07de367b_9d915212c94b888a569aa70229323e3c" /></form>
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('id[]', this)"></th>
<th>名称</th>
<th>类型</th>
<th>CPS购买网址</th>
<th width="60">排序</th>
<th width="100">操作</th>
</tr>
</thead>
<tbody>
        <?php foreach($list as $v){?>
<tr id="tt-item-1">
<td class="first"><input type="checkbox" value="1" name="id[]"></td>
<td align="left"><a href="?g=Admin&m=MallZhekou&a=view&id=1"><?php echo $v['title']?></a></td>
<td align="left"><?php echo $v['cate_id']?></td>
<td align="left"><a href="http://www.baidu.com" target="_blank"><?php echo $v['gourl']?></a></td>
<td align="center"><span class="pointer" module="MallZhekou" group="Admin" model="" pk="" href="javascript:;" onclick="textEdit(this,'1','sort_order')"><?php echo $v['sort_order']?></span></td>
<td align="center"><a href="?g=Admin&m=MallZhekou&a=edit&id=1">编辑</a>
&nbsp;&nbsp;<a onclick="del(1)" href="javascript:;">删除</a>
</td>
</tr>
        <?php }?>
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
