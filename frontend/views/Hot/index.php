<div class="clear"></div><div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="clear">
                    <h2>热门优惠券</h2>
                    <dl class="filter clear">
                        <dt style="height: 40px;">商家类型：</dt>
                        <dd class="current"><a href="index.php?a=hot&m=code&cate_id=0&type=2&cate_id2=0&p=1">全部</a></dd>
						<?php
						foreach($list as $k=>$v){
							?>
                                                                        <dd ><a href="index.php?a=hot&m=code&cate_id=1&type=2&cate_id2=0&p=1"><?php echo $v['name'];?></a></dd>
																		<?php
																			}
							                                              ?>
                                                                    </dl>
                                        <dl class="filter clear">
                        <dt>排序：</dt>
                        <dd ><a href="index.php?a=hot&m=code&cate_id=0&type=1&cate_id2=0&p=1">昨日最热</a></dd><dd class="current"><a href="index.php?a=hot&m=code&cate_id=0&type=2&cate_id2=0&p=1">今日最热</a></dd><dd ><a href="index.php?a=hot&m=code&cate_id=0&type=3&cate_id2=0&p=1">本周最热</a></dd><dd ><a href="index.php?a=hot&m=code&cate_id=0&type=4&cate_id2=0&p=1">本月最热</a></dd>
                    </dl>
                    <ul class="coupons-list" id="J_CouponsList" style="margin-left: 5px;">     
	<?php
	foreach($rows as $k=>$v){
		?>
<li>
    <div class="coupon-wrapper">
        <div class="scissors">
        </div>
        <h2><a href="index.php?a=view&m=code&id=2" title="<?php echo $v['title'];?>" target="_blank"><?php echo $v['title'];?></a><!--<i class="hot">hot</i>--></h2>
        <a title="<?php echo $v['title'];?>" href="index.php?a=view&m=code&id=2" class="coupon" target="_blank">
            <span class="left"><span class="description">满<em>100</em>减<em>
			<?php echo $v['money_amount'];?></em></span><span class="store-logo">
                <img src="Public/Uploads/201501/7bea0e5bd7bb3833ac106fdde5625b90.jpg" style="display: block;"></span> </span>
            <span class="right">
                
                <em class="free"><?php echo $v['price'];?></em>
                
                <span class="pulled"><b></b>立即领取</span>
                
            </span></a>
        
        <div class="info">
            
            <span>长期有效 </span><span>已领数量：<i><?php echo $v['fetched_amount'];?></i></span><span>收录券</span>
            
            <span><a class="store-from" href="index.php?a=view&m=mall&id=1"><?php echo $v['m_name'];?>优惠券</a></span>
        </div>
        
    </div>
</li> 
<?php
}
?>
</ul>
<ul class="pager"><span class="page_left_1_1">首页</span> <span class="page_left_2_2">上一页</span>  <span class="page_now">1</span> <span class="page_right_2_2">下一页</span> <span class="page_right_1_1">尾页</span></ul>
                </div>
            </div>
            <div class="main_r" style="width: 320px;">
                <ul class="sidebar">
                    <li class="gray">
                        <h3>
                            热门优惠券</h3>
                        <ul class="hot_coupon">
                                                                                </ul>
                    </li>
                    <li class="yellow">
                        <h3>
                            最新发布优惠券</h3>
                        <ol class="rank_coupon">
                            
                             
                                                        <li><a title="asdsad" href="index.php?a=view&m=code&id=1">asdsad</a></li>
                                                        
                        </ol>
                    </li>
                    <li class="gray">
                        <h3>
                            最新被领取的优惠券</h3>
                        <ul class="hot_coupon">
                            
                                                                                
                        </ul>
                    </li>
                    <li class="green">
                        <h3>
                            热门搜索</h3>
                        <ul class="multicol">
                                                                                <li><a title="123优惠券" href="index.php?a=view&m=mall&id=1">123优惠券</a></li>
                                                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>