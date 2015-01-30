<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="./Public/Css/Admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var _public_='./Public';</script>
<script type="text/javascript" src="./Public/Js/common.js"></script>
<script type="text/javascript" src="./Public/Js/jquery.pngFix.js"></script>
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
		<div class="fb-title"><div><p><span>商家管理 &gt; 商家列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="./Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript">
var r = 'chuxiao';
var m = 'add';
var _hash_ = 'd8f39d29f38a433abb14de5a6793c35e';
function unactive()
{
	$('#dialog>p').html('将屏蔽该商家所有未过期且未被领取的优惠券');
	$('#dialog').dialog('open');
	single_action('unactive');
}
$(document).ready(function(){
	$(".table-list").SetTableBgColor({
            odd:"even",
            even:"",
            selected:"",
            over:""
        });
	$('input[name=m_id]').each(function(){
					  $(this).click(function(){
						var m_id = $(this).val();

						var m_name = $(this).attr('rel');
						//alert(m_name)
						window.parent.pick_mall_handler({m_id:m_id,m_name:m_name});
				 });
					  });
});
<!--{/literal}-->
</script>
<div class="search-box">
    
</div>

<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first">&nbsp;</th>
<th width="30">ID</th>
<th>名称</th>
<th>客服电话</th>
<th>网址</th>
</tr>
</thead>
<tbody>
<pre>

<?php foreach($list as $key=>$item):?>
<tr id="tt-item-<?= $item["m_id"] ?>">
<td class="first">
<input name="m_id" type="radio" value="<?= $item["m_id"] ?>" rel="<?= $item["m_name"] ?>" />&nbsp;</td>
<td><?= $item["m_id"] ?></td>
<td align="left"><?= $item["m_name"] ?></td>
<td align="left"><?= $item["tel"] ?></td>
<td align="left"><a href="<?= $item["gourl"] ?>" target="_blank"><?= $item["gourl"] ?></a></td>
</tr>
<?php endforeach;?>
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