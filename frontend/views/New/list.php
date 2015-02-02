
<div class="clear"></div><div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="clear">
                    
                    <h2>
                        <?php echo $list['m_name']?>优惠券详情</h2>
                    
                    <div class="main_l_l_d clear">
                        
                        <div class="normal_l">
                            <a href="../../backend/web/<?php echo $list['logo']?>">
                                <img src="../../backend/web/<?php echo $list['logo']?>" alt="<?php echo $list['title']?>"></a>
                        </div>
                        
                        <div class="normal_m nw500">
                            <h1><?php echo $list['title']?></h1>
                            <ul class="normal_m_u detail clear">
                            	<li><em>购买价格：</em><i><?php echo $list['price']?></i>元</li>
                                                                
                                <li><em>有&nbsp;&nbsp;效&nbsp;&nbsp;期：</em> <i>无限制</i> </li>
                                
                                <li><em>领取数量：</em> 已发放 <i><span id='lq'><?php echo $list['fetched_amount']?></i></span>张</li>
                                
                                <li><em>更多优惠券：</em>其它<a target="_blank" href="index.php?r=mall/list&m_id=<?php echo $list['m_id']?>"><?php echo $list['m_name']?>优惠券</a></li>
                                
                                <li><em>使用说明：</em><br>2222222222</li>
                                
                            </ul>
                            <div class="gosale">
                                
                                <a href="javascript:;" class="pullbtn" title="立即领取该优惠券" id="pull" cid="8" ptype="3" price="111" onclick="lq()"><span>立即领取</span></a>
								
                                
                            </div>
							<script type="text/javascript">
							 function lq(){
								var y_id=<?php echo $list['y_id']?>;
								 //alert(y_id);
							   $.ajax({
				                    url:"index.php?r=new/lq",
									type:"get",
									data:{"y_id":y_id},
									success:function(e){
                                     
											 if(e){
											  alert("领取成功");
											  var lq=$('#lq').html(e);  
											 }else{
											  alert("领取失败");
											 }
										 }
									
					          })

							 }
							</script>
                            <div class="clear">
                            </div>
                            <ul class="normal_m_u clear">
                                <li class="">已领取的券可到会员中心的&nbsp;<a href="/end/tp-coupon/index.php?a=codes&m=user" target="_blank">我领取的优惠券</a>&nbsp;中查看
                                    
                                </li>
                                <li class="red" style="margin-top: 10px;">温馨提示： </li>
                                
                                <li style="padding: 10px 10px 5px 10px; width: auto;" class="gray">
                                                                222222222                                                                </li>
                                
                            </ul>
                            <div class="clear">
                            </div>
                            <h2 style="color: #017BC6;">
                                最近领取的会员</h2>
                            <ul class="pulledlist">
                                <li><u>领取人</u> <b>领取时间</b> <em>券码/密码</em></li>
                                                                                                                            </ul>
                        </div>
                    </div>
                    <div class="clear">
                        <div class="tabs_t">
                            
                            <ul>
                                <li class="current"><a href="javascript:;">使用说明</a></li>
                                <li class=""><a href="/end/tp-coupon/index.php?a=view&m=mall&id=5">商家介绍</a></li>
                            </ul>
                            
                        </div>
                        <div class="tabs_b" id="shop_relate">
                            <div id="c_intro" class="tabs_c ">
                                
                                <div id="couponShiyongLink">
                                    <a target="_blank" title=" <?php echo $list['m_name']?>" href="#">
                                        <?php echo $list['m_name']?></a>
                                </div>
                                <br>
                                <div id="how2use">qwssssssss&nbsp;s&nbsp;</div>
                            </div>
                            <div id="c_coupon" class="tabs_c  hidden">qqqw</div>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                    
                </div>
                <div class="main_l_t">
                    <h2>
                        温馨提示：优惠券使用说明</h2>
                    <div id="bottom">
                        <p>
                            如何使用优惠券？</p>
                        <p>
                            1.点击商家的优惠券链接，复制优惠代码。<br>
                            2.在商家（比如当当、凡客等）选择商品.<br>
                            3.选定商品,去结算中心.<br>
                            4.在提示填入优惠券号码的框内，粘贴优惠券号码。<br>
                            淘宝商家在留言栏，粘贴优惠券号码，并和商家交谈提示有优惠券号码。<br>
                            5.查看是否得到该优惠.<br>
                            6.提交订单完成交易。<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="main_r" style="width: 320px;">
                <ul class="sidebar">
                    
                    <li class="gray">
                        <h3>
                            更多wx优惠券</h3>
                        <ul class="hot_coupon">
                         
                              
                            <li><a class="img_wrap" href="/end/tp-coupon/index.php?a=view&m=code&id=8">
                                <img src="/end/TP-COUPON/Public/Uploads/201501/6787e859227d90d97aa8addef7d90b37.jpg"></a>
                                <div class="img_detail">
                                    <p class="name">
                                        <a title="123呃呃呃" href="/end/tp-coupon/index.php?a=view&m=code&id=8">123呃呃呃</a></p>
                                    <p class="btn_wrap">
                                        <a title="123呃呃呃" class="btn" href="/end/tp-coupon/index.php?a=view&m=code&id=8"><span>立即领取</span></a></p>
                                    <p class="score_now">
                                        已领：24张</p>
                                    <p class="score_old">
                                        <del>1111</del>元代金券                                    </p>
                                </div>
                            </li>
                                                    </ul>
                    </li>
                    
                    <li class="blue">
                        <h3>
                            商家信息</h3>
                        <div class="sidebar_s clear">
                            <div class="sidebar_s_l">
                                <a href="/end/tp-coupon/index.php?a=view&m=mall&id=5">
                                    <img src="/end/TP-COUPON/Public/Uploads/201501/6787e859227d90d97aa8addef7d90b37.jpg" alt="wx"></a>
                                <div class="gobuy">
                                    <a rel="nofollow" href="/end/tp-coupon/index.php?a=out&m=mall&id=5" target="_blank" class="btn counter"><span>
                                        去商家购物</span></a></div>
                            </div>
                            <div class="sidebar_s_i">
                                商家名称：<a rel="nofollow" href="/end/tp-coupon/index.php?a=out&m=mall&id=5">wx</a>
                                <!--<br>口碑指数：<span class="star_b_g relative">5.0000000093<span style="width: 93px;" class="star_b_l absolute">&nbsp;</span></span>-->
                            </div>
                        </div>
                    </li>
                    <li class="yellow">
                        <h3>
                            领取最多的优惠券列表</h3>
                        <ol class="rank_coupon">
                                                                                </ol>
                    </li>
                    <li class="yellow">
                        <h3>
                            最新发布优惠券</h3>
                        <ol class="rank_coupon">
                            
                             
                                                        <li><a title="123呃呃呃" href="/end/tp-coupon/index.php?a=view&m=code&id=8">123呃呃呃</a></li>
                                                        <li><a title="123呃呃呃" href="/end/tp-coupon/index.php?a=view&m=code&id=6">123呃呃呃</a></li>
                                                        <li><a title="啊实打实" href="/end/tp-coupon/index.php?a=view&m=code&id=5">啊实打实</a></li>
                                                        
                        </ol>
                    </li>
                    <li class="gray">
                        <h3>
                            最新被领取的优惠券</h3>
                        <ul class="hot_coupon">
                                                                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<script type="text/javascript">
coupon.init();
$(".pulledlist li").bind("copy",function(){
                var opened = $(this).parent().attr("opened");
                if(opened===undefined || parseInt(opened)<3){
					$.fn.jmodal({
                    	data: {},
                    	title: '温馨提示',
                    	content: '复制成功！请在新窗口中使用优惠券',
                    	buttonText: { ok: '确定', cancel: '' },
                    	fixed: false,
						marginTop: 200,
						okEvent: function(data, args) {
                        	args.hide();
                    	}
               	   	});
                    window.open(shopping_url);
                    opened = opened===undefined ? 1 : parseInt(opened)+1;
                    $(".pulledlist").attr("opened",opened);
                }else{
                    $.fn.jmodal({
                    	data: {},
                    	title: '温馨提示',
                    	content: '复制优惠券代码成功！',
                    	buttonText: { ok: '确定', cancel: '' },
                    	fixed: false,
						marginTop: 200,
						okEvent: function(data, args) {
                        	args.hide();
                    	}
               	   	});
                }
            });
$(".pulledlist li em").bind("mouseup",function(){
                $(".newtips").remove();
                coupon.tips("<font color=green>进行复制操作后将会弹出商家的网站<br />请务必在弹出的商家网站中使用优惠券！</font>", 350, $(this).offset().top - 125, 'up', 50 ,$('#main'));
            });
$('a.expand').click(function(){
							 $('ul.pulledlist>li.h').removeClass('h');
							 $(this).parent().remove();
							 });
$('div.tabs_t>ul>li').each(function(i){
									$(this).hover(function(){
													    $('div.tabs_t>ul>li').removeClass('current');
									 					$(this).addClass('current');
									 					if(i==0){
										 					$('#c_intro').removeClass('hidden');
										 					$('#c_coupon').addClass('hidden');
									 					}else if(i==1){
										 					$('#c_intro').addClass('hidden');
										 					$('#c_coupon').removeClass('hidden');
									 					}
													   });
									});
$(document).ready(function() {
	ReImgSize('how2use',620,580);
						   });
</script>
