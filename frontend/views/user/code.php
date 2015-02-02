<?php
use yii\web\Session;
$session = new Session();
$session->open();
?>
<div class="clear"></div><div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="clear">
                    <h2>
                        我领取的优惠券</h2>
                    <ul class=" clear">  
                        <?php foreach($codes as $v){?>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v['code']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em><?php echo date('Y-m-d H:i:s',$v['fetch_time'])?></em></li>
                        <?php }?>
                    </ul>
                    <ul class="pager"><span class="page_left_1_1">首页</span> <span class="page_left_2_2">上一页</span>  <span class="page_now">1</span> <span class="page_right_2_2">下一页</span> <span class="page_right_1_1">尾页</span></ul>
                </div>
            </div>
            <div class="main_r" style="width: 320px;">
    <ul class="sidebar">
    
<li class="yellow">
            <h3>
                我的信息</h3>
            <div class="sidebar_s clear">
                <div class="sidebar_s_l">
                    <a href="javascript:void(0);">
                        <img src="http://www.wangxu.com/ucenter/upload/uc_server/avatar.php?uid=3&type=real&size=middle" onerror="this.src='Public/Images/Home/avatar.jpeg'" alt="qcc"></a>
                </div>
         <div class="sidebar_s_i">
                    <a href="javascript:void(0);"><?php echo $session['user']['nick']?></a>
                    <br>积分：<?php echo $session['user']['credit']?>                    <br>金钱：<?php echo $session['user']['money']?>元
                    <br>
                </div>
                <ul class="twocol user_link">
              <li><a href="?r=user/codes" style="color: #f00">我领取的优惠券</a></li>
                <li><a href="?r=user/pay">账号充值</a></li>
                <li><a href="?r=user/recodes">消费记录</a></li>
                <li><a href="?r=user/friend">邀请好友</a></li>
                <li><a href="?r=user/upd_pass">修改密码</a></li>
                <li><a href="?r=login/logout">注销登录</a></li>
                </ul>
            </div>
        </li>                    <li class="gray">
                        <h3>
                            每日精选促销(01-31)</h3>
                        <ul class="hot_coupon">
                                                                                    <li><a target="_blank" title="啊实打实" class="img_wrap" href="/end/tp-coupon/index.php?a=view&m=code&id=5">
                                <img alt="啊实打实" src="/end/TP-COUPON/Public/Uploads/201501/a5561895a0574990de4dc3bd5f505401.png"></a>
                                <div class="img_detail">
                                    <p class="name">
                                        <a target="_blank" title="啊实打实" href="/end/tp-coupon/index.php?a=view&m=code&id=5">啊实打实</a> </p>
                                    <p class="btn_wrap">
                                        <a target="_blank" title="啊实打实" class="btn" href="/end/tp-coupon/index.php?a=view&m=code&id=5"><span>去看看</span></a></p>
                                        
                                       <p class="score_old flwindex_tuijian">
                                    </p>
                                    
                                </div>
                            </li>
                                                     </ul>
                    </li>
                    
                     <li class="gray">
                        <h3>
                            大家都在领什么券</h3>
                        <ul class="hot_coupon">
                                                                        </ul>
                    </li>
             </ul>
</div>

        </div>
    </div>
<script type="text/javascript">
$("li.code").bind("copy",function(){
                var opened = $(this).attr("opened");
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
                    window.open($(this).attr('rel'));
                    opened = opened===undefined ? 1 : parseInt(opened)+1;
                    $(this).attr("opened",opened);
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
</script>
