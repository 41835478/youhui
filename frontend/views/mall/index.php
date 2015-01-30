

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<div class="clear"></div><div class="w990 clear">
        <div style="padding-top: 0;" id="main" class="mt10">
        <div style="width:990px;" class="main_l">
        <div class="clear" id="main_l_b">
            <h2>优惠券商家</h2>
            <dl style="width:950px;" class="filter clear"><dt style="height:20px;">商家类型：</dt>
    <dd <?php if($cat==0){ ?>class="current"<?php } ?> ><a href="?r=mall/search&cate_id=0">全部</a></dd>
                <?php foreach($cate as $v){?>
    <dd <?php if($cat==$v['id']){ ?>class="current"<?php } ?> ><a href="?r=mall/search&cate_id=<?php echo $v['id']?>"><?php echo $v['name']?></a></dd>
                <?php } ?>                                                                     
                                                                                                                                               
                                                            </dl>
                        
            
            <ul style="margin-bottom:15px;" class="blist bshop clear">
                                    <?php foreach($mall as $v){?>
                <li>
                        <div class="blist_p">
                            <a title="<?php echo $v['m_name']?>" href=""><img alt="<?php echo $v['m_name']?>" src="<?php echo $v['logo']?>"></a>
                            <div class="functions">
                                <a title="<?php echo $v['m_name']?>" class="favourite" href="/end/tp-coupon/index.php?a=view&m=mall&id=3" onclick="AddFavorite(this.href, this.title); return false;">收藏</a>
                            </div>
                        </div>
                        <div class="blist_n">
                            <h4>
                                <a class="bname" title="" href="/end/tp-coupon/index.php?a=view&m=mall&id=3"><?php echo $v['m_name']?></a>
                                                            </h4>
                            <div class="outlink"><a target="_blank" rel="nofollow" href="/end/tp-coupon/index.php?a=out&m=mall&id=3"><?php echo $v['gourl']?></a></div>                            <div class="intro"><?php echo $v['description']?></div>
                            <!--<div class="project">主营：化妆品,护肤品,中国领先化妆品特卖网站</div>-->
                            <div class="button">
                                <a class="btn salebuy" target="_blank" rel="nofollow" href="/end/tp-coupon/index.php?a=out&m=mall&id=3"><span>直接购物</span></a>
                                <a class="btn" href="?r=mall/list&m_id=<?php echo $v['m_id']?>"><span>领取优惠券</span></a>
                            </div>

                        </div>
                    </li>
                                    <?php }?>
                
                                                </ul>
            
        </div>
                <div class="main_l_t">
            <h2>温馨提示：优惠券使用说明</h2>
            <div id="bottom">
                <p>如何使用优惠券？</p><p>1.通过优惠券网点击商家的优惠券链接，复制优惠代码。<br>2.在商家（比如当当、凡客等）选择商品.<br>3.选定商品,去结算中心.<br>4.在提示填入优惠券号码的框内，粘贴优惠券号码。<br> 淘宝商家在留言栏，粘贴优惠券号码，并和商家交谈提示有优惠券号码。<br>5.查看是否得到该优惠.<br>6.提交订单完成交易。<br></p>            </div>
        </div>
    </div>
        </div>
    </div>
<!-- Baidu Button END -->
</body>
</html>