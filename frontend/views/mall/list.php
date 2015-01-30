
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
            <a title="<?php echo $v['title']?>" href="/end/tp-coupon/index.php?a=view&m=code&id=8" target="_blank"><?php echo $v['title']?></a>
            
            <!--<i class="hot">hot</i>-->
            
        </h2>
        <a title="<?php echo $v['title']?>" href="/end/tp-coupon/index.php?a=view&m=code&id=8" class="coupon" target="_blank">
            <span class="left"><span class="description"><em>1111</em>元代金券            </span><span class="store-logo">
                <img src="/end/TP-COUPON/Public/Uploads/201501/6787e859227d90d97aa8addef7d90b37.jpg" style="display: block;"></span> </span>
            <span class="right">
                
                <em class="free">111积分</em>
                
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