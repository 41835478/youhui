<?php
use yii\widgets\LinkPager;
?>
 <style>
.pager{float:right;}
.pager li{float:left;}
.pager li{margin:5px;}
</style>
<div class="clear"></div><div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="clear">
                    <h2>
                        全部优惠券</h2>
                     <dl class="filter clear">
                        <dt style="height: 40px;">商家类型：</dt>
                          <dd <?php if($cat==0){ ?>class="current"<?php } ?> ><a href="?r=new/search&c_id=0">全部</a></dd>
                          <?php foreach($info as $k=>$v){?>
						 <dd <?php if($cat==$v['id']){ ?>class="current"<?php } ?> ><a href="?r=new/search&c_id=<?php echo $v['id']?>"><?php echo $v['name']?></a></dd>
                    
						   <?php }?>
                     </dl>
                     
                    <ul class="coupons-list" id="J_CouponsList" style="margin-left: 5px;">        
<?php foreach($code as $k=>$v){?>					
<li>
    <div class="coupon-wrapper">
        <div class="scissors">
        </div>
        <h2><a href="" title="<?php echo $v['title']?>" target="_blank"><?php echo $v['title']?></a><!--<i class="hot">hot</i>--></h2>
        <a title="<?php echo $v['m_name']?>" href="?r=new/list&y_id=<?php echo $v['y_id']?>" class="coupon" target="_blank">
            <span class="left"><span class="description"><em>立降</em><em><?php echo $v['price']?></em></span><span class="store-logo">
                <img src="../../backend/web/<?php echo $v['logo']?>" style="display: block;"></span> </span>
            <span class="right">
                
                <em class="free"><?php echo $v['price']?>元</em>
                
                <span class=""><b></b>立即领取</span>
                
            </span></a>
        
        <div class="info">
            
            <span>长期有效 </span><span>已领数量：<i><?php echo $v['fetched_amount']?></i></span><span>收录券</span>
            
            <span><a class="store-from" href="#"><?php echo $v['m_name']?>优惠券</a></span>
        </div>
        
    </div>
</li>
<?php }?>
</ul>

<ul class="pager"> <li><?= LinkPager::widget(['pagination' => $pages]); ?><li></ul>
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
                            
                             
                                                        <li><a title="asdsad" href="/end/tp-coupon/index.php?a=view&m=code&id=1">asdsad</a></li>
                                                        
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
                                                                                <li><a title="123优惠券" href="/end/tp-coupon/index.php?a=view&m=mall&id=1">123优惠券</a></li>
                                                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
