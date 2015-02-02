<div class="clear"></div><div class="w990 clear">
        <div style="padding-top: 0;" id="main" class="mt10">
        <div style="width:990px;" class="main_l">
        <div class="clear" id="main_l_b">
            <h2>超值折扣</h2>
            <dl style="width:950px;" class="filter clear"><dt style="height:20px;">商家类型：</dt>
                <dd <?php if($cat_id==0){ ?>class="current"<?php } ?>><a href="?r=zhekou/search_type&id=0">全部</a></dd>
               <?php foreach($list as $k=>$v){?>
                                                <dd <?php if($cat_id==$v['id']){ ?>class="current"<?php } ?>><a href="?r=zhekou/search_type&id=<?php echo $v['id']?>"><?php echo $v['name']?></a></dd>
                                                <?php
                                                }
                                                ?>
                                    </dl>
            
            
            <div class="deal_box"> 
          <?php foreach($data as $k=>$v){?>
                <div class="deal_a">
    <div class="deal_bt">
      <h2>【<a target="_blank" href="/end/tp-coupon/index.php?a=view&m=mall&id=3"><font color="#660033"><?php echo $v['m_name']?></font></a>】<a target="_blank" rel="nofollow" href="<?php echo $v['gourl']?>"><?php echo $v['title']?></a></h2>
    </div>
    <div class="deal_img">
      <a target="_blank" rel="nofollow" title="去抢购" href="<?php echo $v['gourl']?>" class="dimg_link">
        <img class="normal_image" src="../../backend/<?php echo $v['logo']?>">
      </a>
          </div>
    <div class="deal_time">
                <span class="tao_time_div"> 恭喜您，还可以使用<a target="_blank" href="/end/tp-coupon/index.php?a=view&m=mall&id=3"><font color="#660033"><?php echo $v['m_name']?>优惠券</font></a>更省钱</span>
                  </div>
    <div class="deal_jg">
      <div class="jg_tuan">
        <strong>¥<?php echo $v['price']?></strong>
        <a rel="nofollow" href="<?php echo $v['gourl']?>" target="_blank" class="deal_qkk"></a>
      </div>
      <div class="m_tao_sb">
                  <span><img src="http://www.quanlaoda.com/static/theme/ev56_xiutuan/css/i/author_image3.png"></span>
          <em>折扣攻略：</em><?php echo $v['description']?></div>
    </div>
  </div>
<?php
}
?>

      <!-- end bd -->
          </div>
            
            <ul class="pager"><span class="page_left_1_1">首页</span> <span class="page_left_2_2">上一页</span>  <span class="page_now">1</span> <span class="page_right_2_2">下一页</span> <span class="page_right_1_1">尾页</span></ul>
        </div>
    </div>
        </div>
    </div>
<script type="text/javascript">
$(document).ready(function() {
    $('.deal_a').live('mouseover',function(){
        $(this).addClass('deal_hover');
    });
    $('.deal_a').live('mouseout',function(){
        $(this).removeClass('deal_hover')
    });
});
</script>

</body>
</html>
