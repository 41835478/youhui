<?php
use yii\widgets\LinkPager;
?>
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
		<div class="fb-title"><div><p><span>分类管理 &gt; 分类列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="Public/Js/jquery.SetTableBgColor.js"></script>
<script type="text/javascript" src="Public/Js/dataList.js"></script>
<script type="text/javascript">
var g = 'Admin';
var m = 'CouponCodeCategory';
var _hash_ = '1c5b8b3e52afa8c9e61bd91e571e6fa8';

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
	<div class="img-button "><p><input type="button" class="addData" onclick="window.location.href='?r=cate/add'" value="添加分类" name="addData" id="addData"></p></div>
	</div>
<div class="search-box">
</div>
<table cellspacing="0" cellpadding="0" border="0" class="table-list list" id="checkList">
<thead>
<tr>
<th width="30" class="first"><input type="checkbox" onclick="check_all('id[]', this)"></th>
<th>分类名称</th>
<th width="80">首页显示</th>
<th width="60">排序</th>
<th width="100">操作</th>
</tr>
</thead>
<tbody>
    <?php foreach($list as $k=>$v){?>
    
<tr  id="tr<?php echo $v['id']?>">
<td class="first"><input type="checkbox" value="1" name="id[]"></td>
<td align="left"><?php echo $v['name'] ?></td>
<td align="center"><?php if($v['show_index']==1){?><span class="pointer" module="CouponCodeCategory" group="Admin" model="coupon_code_category" pk="id" href="javascript:;" onclick="toggleStatus(this,'1','show_index')"><img src="Public/Css/Admin/Images/status-1.gif" class="status" status="0" /></span><?php }else{?><span class="pointer" module="CouponCodeCategory" group="Admin" model="coupon_code_category" pk="id" href="javascript:;" onclick="toggleStatus(this,'1','show_index')"><img src="Public/Css/Admin/Images/status-0.gif" class="status" status="0" /></span><?php }?></td>
<td align="left"><span class="pointer" module="CouponCodeCategory" group="Admin" model="" pk="" href="javascript:;" onclick="textEdit(this,'1','sort_order')"><?php echo $v['sort_order']?></span></td>
<td align="center"><a href="?r=cate/edit&id=<?php echo $v['id']?>">编辑</a>
&nbsp;&nbsp;<a href="#" onclick="del('<?php echo $v['id']?>')">删除</a>
</td>
</tr>
   <?php } ?>
</tbody></table>
   <script >
       
             function del(id){

                if(confirm('确认删除么?')){
                    $.ajax({
                        type: "POST",
                        url: "index.php?r=cate/del",
                        data: "id="+id,
                        success: function(msg){ 
                          if(msg){
                              $("#tr"+id).remove()
                          }else{
                              alert('删除失败');
                          }
                        }
                     }); 
                }
            }
        </script>
       <div> <?= LinkPager::widget(['pagination' => $pages]); ?><div>

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
