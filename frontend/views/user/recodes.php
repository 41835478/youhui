<?php
use yii\web\Session;
$session = new Session();
$session->open();
?>
<div class="clear"></div><div class="w990 clear">
        <div id="main">
            <div class="main_l">
                <div id="main_l_l" class="paynow clear">
                    <h2>消费记录</h2>
                    <div class="main_l_l_d clear">
                        <div class="normal_m">
                            <ul class="consumelist">
                                <li><u>类型</u><q>消费类型</q> <b>数量</b> <em>时间</em></li>
                            <?php foreach($list as $v){?>
                            <li><u><?php if($v['type']=='spend'){ echo '支出'; }else{ echo '收入';} ?></u><q><?php if($v['money_type']=='money'){ echo '金钱'; }else{ echo '积分';} ?></q><b><?php echo $v['amount']?></b> <em><?php echo date('Y-m-d H:i:s',$v['addtime'])?></em></li>
                            <?php } ?>
                            
                                                            </ul>
                            <ul class="pager"><span class="page_left_1_1">首页</span> <span class="page_left_2_2">上一页</span>  <span class="page_now">1</span> <span class="page_right_2_2">下一页</span> <span class="page_right_1_1">尾页</span></ul>
                        </div>
                        
                    </div>
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
        </li></ul>
	</div>
</div>
</div>