
<div class="clear"></div><div class="w990 clear">
        <div class="clear" style="margin: 8px 0">
        </div>
        <div id="main" style="padding-top: 0;">
            <div class="main_l">
                <h3><?php echo $list['m_name']?>优惠券</h3>
                <div id="p_top">
                    <div id="p_top_left">
                            <img style="max-width: 260px;" src="<?php echo $list['logo']?>"></div>
                    <div id="p_top_right">
                        <li><span class="pred">网站名称：</span><?php echo $list['m_name']?></li>
                        <li><span class="pred">网站地址：</span><a rel="nofollow" href="/end/tp-coupon/index.php?a=out&m=mall&id=5" target="_blank"><?php echo $list['gourl']?></a></li>
                        
                        <li><span class="pred">客服电话：</span><?php echo $list['tel']?></li>
                        
                        <li style="border: 0px"><span class="pred">网站简介：</span><?php echo $list ['description']?></li>
                    </div>
                </div>
                <div class="dash_line">
                </div>
                
                
                <?php  foreach($youhui as $v){ ?>
  
                <div class="main_l_i">
                    <div class="main_l_c_c">
                        <ul class="coupons-list" id="J_CouponsList"><li>
    <div class="coupon-wrapper">
        <div class="scissors">
        </div>
        <h2>
            <a title="<?php echo $v['title']?>" href="?r=new/list&y_id=<?php echo $v['y_id']?>" target="_blank"><?php echo $v['title']?></a>
            
            <!--<i class="hot">hot</i>-->
            
        </h2>
        <a title="<?php echo $v['title']?>" href="?r=new/list&y_id=<?php echo $v['y_id']?>" class="coupon" target="_blank">
            <?php if($v['c_type']==1){?>
         <span class="left"><span class="description">满<em><?php echo $v['money_max']?></em>减<em><?php echo $v['money_reduce']?></em>            </span><span class="store-logo">
                <img src="Public/Uploads/201501/a5561895a0574990de4dc3bd5f505401.png" style="display: block;"></span> </span>
          
            <?php } ?>
                 <?php if($v['c_type']==2){?>
            <span class="left"><span class="description"><em><?php echo $v['money_amount']?></em>元代金券            </span><span class="store-logo">
                <img src="Public/Uploads/201501/6787e859227d90d97aa8addef7d90b37.jpg" style="display: block;"></span> </span>
          
            <?php } ?>  
            <span class="right">
                <em class="free"><?php echo $v['price']?>元</em>
                
                <span class="get"><b></b>立即领取</span>
                
            </span></a>
        
        <div class="info">
            
            <span>还剩 <i>2</i> 天</span><span>已领:<i>24</i></span><span>剩余:<i>76</i></span>
            
            <span><a class="store-from" href="/end/tp-coupon/index.php?a=view&m=mall&id=5"><?php echo $list['m_name']?>优惠券</a></span>
        </div>
        
    </div>
</li>                        </ul>
                    </div>
                </div>
                
                <?php } ?>
                
                
                
            </div>
            <div class="main_r" style="width: 320px;">
                <ul class="sidebar">
                    <li class="blue">
                        <h3>
                            商家信息</h3>
                        <div class="sidebar_s clear">
                            <div class="sidebar_s_l">
                                <a href="/end/tp-coupon/index.php?a=view&m=mall&id=5">
                                    <img src="<?php echo $list['logo']?>" alt="<?php echo $list['m_name']?>"></a>
                                <div class="gobuy">
                                    <a rel="nofollow" href="/end/tp-coupon/index.php?a=out&m=mall&id=5" target="_blank" class="btn counter"><span>去商家购物</span></a></div>
                            </div>
                            <div class="sidebar_s_i">
                                商家名称：<a rel="nofollow" href="/end/tp-coupon/index.php?a=out&m=mall&id=5"><?php echo $list['m_name']?></a><br>
                            </div>
                        </div>
                    </li>
                    <li class="yellow">
                        <h3>
                            领取最多的优惠券列表</h3>
                        <ol class="rank_coupon">
                                                                                </ol>
                    </li>
                    <li class="yellow_b">
                        <h3>
                            推荐商城</h3>
                        <ul class="twocol img">
                                                                            </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>