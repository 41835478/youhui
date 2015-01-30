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
		<div class="fb-title"><div><p><span>充值管理 &gt; 充值记录</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript" src="Public/Js/dataList.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'Payment';
var _hash_ = '86ad9271734069a9a8e5494d43b1559c';

function single_action(action, id)
{
	$('#dialog>p').html('确定要进行此操作吗？');
	$('#dialog').dialog('open');
	$('#dialog').dialog({
					autoOpen: false,
					width: 300,
					buttons: {
						"确定": function() { 
							var url = "?g="+g+"&m="+m+"&a="+action+"&id="+id+"&ajax=1&_hash_="+_hash_;
							$.getJSON(url, function(data){
													if(data.status == 0){
														$('#dialog>p').html('操作失败');
														$('#dialog').dialog('open');
													}else{
														window.location.href = document.URL;
													}
													});
						},
						"取消": function() { 
							$(this).dialog("close"); 
						}
					}
				});
}
function del(p_id){
	//alert(p_id);
                if(confirm('确认删除么?')){
                    $.ajax({
                        type: "get",
                        url: "index.php?r=huiyuan/chongzhi_del",
                        data: "p_id="+p_id,
                        success: function(e){  
							//alert(e);
                          if(e==1){

							
                              $("#tr"+p_id).remove()
                          }else{
                              alert('删除失败');
                          }
                        }
                     }); 
                }
            }
function send_goods(id)
{
	single_action('send_goods', id)
}
function finish(id)
{
	single_action('finish', id)
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
</div>
<div class="search-box">
    <form action="?">
        <span>昵称</span>
        <input type="text" size="12" name="nick" value="" class="textinput">
		<small></small>
		<input type="submit" value="搜索" class="submit_btn">
        <input type="hidden" value="Admin" name="g">
		<input type="hidden" value="Payment" name="m">
		<input type="hidden" value="index" name="a">
  <input type="hidden" name="__hash__" value="e5e88a1b337e597ee8be31ed174f2c75_5b9b926b0db22417eed71e767edee702" /></form>
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('id[]', this)"></th>
<th>昵称</th>
<th width="200">交易号</th>
<th width="200">支付宝交易号</th>
<th width="80">金钱(:元)</th>
<th width="150">说明</th>
<th width="150">充值时间</th>
<th width="150">状态</th>
<th width="100">操作</th>
</tr>
</thead>
<tbody>
<tr id="tr<?php echo $aaa['p_id'];?>">
<td class="first"><input type="checkbox" value="<?php echo $aaa['p_id'];?>" name="id[]"></td>
<td align="left"><?php echo $aaa['nick'];?></td>
<td align="left"><?php echo $aaa['out_trade_no'];?></td>
<td align="left"></td>
<td align="left"><?php echo $aaa['amount'];?></td>
<td align="center"><?php echo $aaa['content'];?></td>
<td align="center"><?php echo date('Y-m-d H:i:s',$aaa['addtime']);?></td>
<td align="center"><?php if($aaa['status']==103){ echo "等待买家付款";}else{ echo "等待卖家发货";}?></td>
<td align="center"><a href="javascript:;" onclick="del(<?php echo $aaa['p_id'];?>);">删除</a></td>
</tr>
</tbody>
</table>
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