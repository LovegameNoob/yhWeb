<?php if (!defined('THINK_PATH')) exit();?><div class="list_t">
            	<span class="fl list_or">
                	<a href="#" class="now">默认</a>
                    <a href="#">
                        <span class="fl">销量</span>
                        <span class="i_up">销量从低到高显示</span>
                        <span class="i_down">销量从高到低显示</span>
                    </a>
                    <a href="#">
                        <span class="fl">价格</span>
                        <span class="i_up">价格从低到高显示</span>
                        <span class="i_down">价格从高到低显示</span>
                    </a>
                    <a href="#">新品</a>
                </span>
    <span class="fr" id="count">共发现<?php echo (count($Filtergoods)); ?>件</span>
</div>
<div class="list_c">
    <ul class="cate_list">
        <?php if(is_array($Filtergoods)): $i = 0; $__LIST__ = $Filtergoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li>
                <div class="img"><a href="/yhWeb/Home/Product/index/id/<?php echo ($goods["id"]); ?>"><img src="/yhWeb/Public/Uploads/<?php echo ($goods["picName"]); ?>" width="210" height="185"/></a></div>
                <div class="price">
                    <font>￥<span><?php echo ($goods["price"]); ?></span></font> &nbsp; 26R
                </div>
                <div class="name"><a href="/yhWeb/Home/Product/index/id/<?php echo ($goods["id"]); ?>"><?php echo ($goods["goodsName"]); ?></a></div>
                <div class="carbg">
                    <a href="#" class="ss">收藏</a>
                    <a onclick="ShowDiv_1('MyDiv1','fade1',<?php echo ($goods["id"]); ?>)" class="j_car">加入购物车</a>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>