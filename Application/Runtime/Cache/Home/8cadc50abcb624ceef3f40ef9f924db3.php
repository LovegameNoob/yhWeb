<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link type="text/css" rel="stylesheet" href="/yhWeb/Public/Home/Css/style.css"/>
    <!--[if IE 6]>
    <script src="/yhWeb/Public/Home/Js/iepng.js" type="text/javascript"></script>
    <script type="text/javascript">
        EvPNG.fix('div, ul, img, li, input, a');
    </script>
    <![endif]-->
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/menu.js"></script>

    <script type="text/javascript" src="/yhWeb/Public/Home/Js/lrscroll_1.js"></script>


    <script type="text/javascript" src="/yhWeb/Public/Home/Js/n_nav.js"></script>

    <link rel="stylesheet" type="text/css" href="/yhWeb/Public/Home/Css/ShopShow.css"/>
    <link rel="stylesheet" type="text/css" href="/yhWeb/Public/Home/Css/MagicZoom.css"/>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/MagicZoom.js"></script>

    <script type="text/javascript" src="/yhWeb/Public/Home/Js/num.js">
        var jq = jQuery.noConflict();
    </script>

    <script type="text/javascript" src="/yhWeb/Public/Home/Js/p_tab.js"></script>

    <script type="text/javascript" src="/yhWeb/Public/Home/Js/shade.js"></script>

    <title>尤洪</title>
</head>
<body>
<!--Begin Header Begin-->
<div class="soubg">
    <div class="sou">
        <!--Begin 所在收货地区 Begin-->
    	<span class="s_city_b">
        	<span class="fl">送货至：</span>
            <span class="s_city">
            	<span>四川</span>
                <div class="s_city_bg">
                    <div class="s_city_t"></div>
                    <div class="s_city_c">
                        <h2>请选择所在的收货地区</h2>
                        <table border="0" class="c_tab" style="width:235px; margin-top:10px;" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>A</th>
                                <td class="c_h"><span>安徽</span><span>澳门</span></td>
                            </tr>
                            <tr>
                                <th>B</th>
                                <td class="c_h"><span>北京</span></td>
                            </tr>
                            <tr>
                                <th>C</th>
                                <td class="c_h"><span>重庆</span></td>
                            </tr>
                            <tr>
                                <th>F</th>
                                <td class="c_h"><span>福建</span></td>
                            </tr>
                            <tr>
                                <th>G</th>
                                <td class="c_h"><span>广东</span><span>广西</span><span>贵州</span><span>甘肃</span></td>
                            </tr>
                            <tr>
                                <th>H</th>
                                <td class="c_h"><span>河北</span><span>河南</span><span>黑龙江</span><span>海南</span><span>湖北</span><span>湖南</span></td>
                            </tr>
                            <tr>
                                <th>J</th>
                                <td class="c_h"><span>江苏</span><span>吉林</span><span>江西</span></td>
                            </tr>
                            <tr>
                                <th>L</th>
                                <td class="c_h"><span>辽宁</span></td>
                            </tr>
                            <tr>
                                <th>N</th>
                                <td class="c_h"><span>内蒙古</span><span>宁夏</span></td>
                            </tr>
                            <tr>
                                <th>Q</th>
                                <td class="c_h"><span>青海</span></td>
                            </tr>
                            <tr>
                                <th>S</th>
                                <td class="c_h"><span>上海</span><span>山东</span><span>山西</span><span class="c_check">四川</span><span>陕西</span></td>
                            </tr>
                            <tr>
                                <th>T</th>
                                <td class="c_h"><span>台湾</span><span>天津</span></td>
                            </tr>
                            <tr>
                                <th>X</th>
                                <td class="c_h"><span>西藏</span><span>香港</span><span>新疆</span></td>
                            </tr>
                            <tr>
                                <th>Y</th>
                                <td class="c_h"><span>云南</span></td>
                            </tr>
                            <tr>
                                <th>Z</th>
                                <td class="c_h"><span>浙江</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </span>
        </span>
        <!--End 所在收货地区 End-->
        <span class="fr">
        	    <?php if(empty($_SESSION['userName'])): ?><span class="fl">你好，请<a href="/yhWeb/Home/User/Login">登录</a>&nbsp; <a href="/yhWeb/Home/User/Regist" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;</span>
                    <?php else: ?>
                    <span class="fl">你好，<?php echo (session('userName')); ?>&nbsp;|&nbsp;<a href="/yhWeb/Home/User/LoginOut">退出</a>&nbsp;              |&nbsp;<a href="/yhWeb/Home/Member/Member_Order">我的订单</a>&nbsp;|</span><?php endif; ?>
        	<span class="ss">
            	<div class="ss_list">
                    <a href="#">收藏夹</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">我的收藏夹</a></li>
                                <li><a href="#">我的收藏夹</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ss_list">
                    <a href="#">客户服务</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ss_list">
                    <a href="#">网站导航</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">网站导航</a></li>
                                <li><a href="#">网站导航</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/yhWeb/Public/Home/Images/s_tel.png" align="absmiddle"/></a></span>
        </span>
    </div>
</div>
<div class="top">
    <div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/yhWeb/Public/Home/Images/logo.png"/></a></div>
    <div class="search">
        <form method="post" action="/yhWeb/Home/CategoryList/search">
            <input type="text" value="" class="s_ipt" name="search"/>
            <input type="submit" value="搜索" class="s_btn"/>
        </form>
        <span class="fl"><a href="#">咖啡</a><a href="#">iphone 6S</a><a href="#">新鲜美食</a><a href="#">蛋糕</a><a href="#">日用品</a><a href="#">连衣裙</a></span>
    </div>
    <div class="i_car">
        <div class="car_t">购物车 [ <span id="typenum"><?php if(!empty($_SESSION['userId'])): echo ($_SESSION['cart']['typenum']); ?>
            <?php else: ?>
            0<?php endif; ?></span> ]
        </div>
        <div class="car_bg">
            <!--Begin 购物车未登录 Begin-->
            <?php if(empty($_SESSION['userId'])): ?><div class="un_login">还未登录！<a href="/yhWeb/Home/User/Login" style="color:#ff4e00;">马上登录</a> 查看购物车！</div>
                <!--End 购物车未登录 End-->
                <?php else: ?>
                <!--Begin 购物车已登录 Begin-->
                <?php if(empty($_SESSION['cart']['goods'])): ?><div class="un_login">购物车里空空如也~</div>
                    <?php else: ?>
                    <ul class="cars">
                        <?php if(is_array($_SESSION['cart']['goods'])): $i = 0; $__LIST__ = $_SESSION['cart']['goods'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li>
                                <div class="img"><a href="#"><img src="/yhWeb/Public/Uploads/<?php echo ($goods["picName"]); ?>" width="58" height="58"/></a></div>
                                <div class="name"><a href="#"><?php echo ($goods["goodsName"]); ?></a></div>
                                <div class="price" id="<?php echo ($goods["id"]); ?>"><font color="#ff4e00">￥<?php echo ($goods["price"]); ?></font> X<?php echo ($goods["number"]); ?></div>
                                <button class="cartdel" cartid="<?php echo ($goods["id"]); ?>">删除</button>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span id="total"><?php echo ($_SESSION['cart']['total']); ?></span></div>
                    <div class="price_a"><a href="/yhWeb/Home/BuyCar/index">去购物车结算</a></div><?php endif; ?>
                <!--End 购物车已登录 End--><?php endif; ?>
        </div>
    </div>
</div>
<!--End Header End-->
<script src="/yhWeb/Public/jquery.js"></script>
<script>
    $(function () {
        $('.cartdel').click(function () {
            $(this).parent().remove()
            $.post('/yhWeb/Home/BuyCar/cartDel', {id: $(this).attr('cartid')}, function (data) {
                $('#typenum').text(data.typenum)
                if ($('.cars li').length <= 0) {
                    $('.car_bg').html("<div class='un_login'>购物车里空空如也~</div>");
                }
                else {
                    $('#total').text(data.total)
                }
            })
        })
    })
    function ShowDiv_1(show_div, bg_div, id) {
        var num = $('.n_ipt').val();
        $.post('/yhWeb/Home/BuyCar/addBuyCar', {id: id, num: num}, function (data) {
            if (data.status == 0) {
                alert('添加失败')
            }
            else if (data.status == 2) {
                var r = confirm('请先登陆');
                if (r) {
                    window.location = '/yhWeb/Home/User/Login'
                }
            }
            else {
                $('#cartmsg').html(data.msg)
                $('#typenum').text(data.typenum)
                $('.car_bg').html(data.content)

                document.getElementById(show_div).style.display = 'block';
                document.getElementById(bg_div).style.display = 'block';
                var bgdiv = document.getElementById(bg_div);
                bgdiv.style.width = document.body.scrollWidth;
                // bgdiv.style.height = $(document).height();
                $("#" + bg_div).height($(document).height());
            }

        })
    }
    function ShowDiv(show_div, bg_div, id) {
        $('.b_sure').attr("href", "/yhWeb/Home/BuyCar/cartDelete/id/"
                + id)
        document.getElementById(show_div).style.display = 'block';
        document.getElementById(bg_div).style.display = 'block';
        var bgdiv = document.getElementById(bg_div);
        bgdiv.style.width = document.body.scrollWidth;
        // bgdiv.style.height = $(document).height();
        $("#" + bg_div).height($(document).height());
    }

</script>
<!--Begin Menu Begin-->
<div class="menu_bg">
    <div class="menu">
        <!--Begin 商品分类详情 Begin-->
        <div class="nav">
            <div class="nav_t">全部商品分类</div>
            <div class="leftNav" style="display: none">
                <ul>
                    <?php if(is_array($_SESSION['typerows'])): $i = 0; $__LIST__ = $_SESSION['typerows'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$typeone): $mod = ($i % 2 );++$i;?><li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="/yhWeb/Public/Home/Images/<?php echo ($typeone["one"]["icon"]); ?>"/></span>
                                <span class="fl"><a href="/yhWeb/Home/Category/index?id=<?php echo ($typeone["one"]["id"]); ?>"><?php echo ($typeone["one"]["name"]); ?></a></span>
                            </div>
                            <div class="zj">
                                <div class="zj_l">
                                    <?php if(is_array($typeone["two"])): $i = 0; $__LIST__ = $typeone["two"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$typetwo): $mod = ($i % 2 );++$i;?><div class="zj_l_c">
                                            <h2><a href="/yhWeb/Home/CategoryList/index/typeid/<?php echo ($typetwo["id"]); ?>"><?php echo ($typetwo["name"]); ?></a></h2>
                                            <?php if(is_array($typetwo["three"])): $i = 0; $__LIST__ = $typetwo["three"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$typethree): $mod = ($i % 2 );++$i;?><a href="/yhWeb/Home/CategoryList/index/typeid/<?php echo ($typethree["id"]); ?>"><?php echo ($typethree["name"]); ?></a>|<?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <!--End 商品分类详情 End-->
        <ul class="menu_r">
            <li><a href="/yhWeb/Home/Index">首页</a></li>
            <li><a href="/yhWeb/Home/Category/Index/id/1">美食</a></li>
            <li><a href="/yhWeb/Home/Category/Index/id/23">生鲜</a></li>
            <li><a href="/yhWeb/Home/Category/Index/id/28">家居</a></li>
            <li><a href="/yhWeb/Home/Category/Index/id/27">女装</a></li>
            <li><a href="/yhWeb/Home/Category/Index/id/24">美妆</a></li>
            <li><a href="/yhWeb/Home/Category/Index/id/25">数码</a></li>
        </ul>
        <div class="m_ad">中秋送好礼！</div>
    </div>
</div>
<!--End Menu End-->
<div class="i_bg">
    <div class="postion">
        <span class="fl">全部 ><?php echo ($goodsdetail["path"]); ?></span>
    </div>
    <div class="content">

        <div id="tsShopContainer">
            <div id="tsImgS"><a href="/yhWeb/Public/Uploads/<?php echo ($goodsdetail["goods"]["picName"]); ?>" title="/yhWeb/Public/Home/Images" class="MagicZoom" id="MagicZoom"><img src="/yhWeb/Public/Uploads/<?php echo ($goodsdetail["goods"]["picName"]); ?>" width="390" height="390"/></a></div>
            <div id="tsPicContainer">
                <div id="tsImgSArrL" onclick="tsScrollArrLeft()"></div>
                <div id="tsImgSCon">
                    <ul>
                        <li onclick="showPic(0)" rel="MagicZoom" class="tsSelectImg"><img src="/yhWeb/Public/Uploads/<?php echo ($goodsdetail["goods"]["picName"]); ?>" tsImgS="/yhWeb/Public/Uploads/<?php echo ($goodsdetail["goods"]["picName"]); ?>" width="79" height="79"/></li>
                    </ul>
                </div>
                <div id="tsImgSArrR" onclick="tsScrollArrRight()"></div>
            </div>
            <img class="MagicZoomLoading" width="16" height="16" src="/yhWeb/Public/Home/Images/loading.gif" alt="Loading..."/>
        </div>

        <div class="pro_des">
            <div class="des_name">
                <p><?php echo ($goodsdetail["goods"]["goodsName"]); ?></p>
                <?php echo ($goodsdetail["goods"]["descr"]); ?>
            </div>
            <div class="des_price">
                本店价格：<b>￥<?php echo ($goodsdetail["goods"]["price"]); ?></b><br/>
                消费积分：<span>28R</span>
            </div>
            <?php if(is_array($goodsdetail["version"])): $i = 0; $__LIST__ = $goodsdetail["version"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$version): $mod = ($i % 2 );++$i;?><div class="des_choice">
                    <span class="fl"><?php echo ($version["propertyName"]); ?>：</span>
                    <ul>
                        <?php if(is_array($version["propertyValue"])): $i = 0; $__LIST__ = $version["propertyValue"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li><?php echo ($value); ?>
                                <div class="ch_img"></div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<li class="checked"><?php echo ($value); ?><div class="ch_img"></div></li>-->
            <div class="des_share">
                <div class="d_sh">
                    分享
                    <div class="d_sh_bg">
                        <a href="#"><img src="/yhWeb/Public/Home/Images/sh_1.gif"/></a>
                        <a href="#"><img src="/yhWeb/Public/Home/Images/sh_2.gif"/></a>
                        <a href="#"><img src="/yhWeb/Public/Home/Images/sh_3.gif"/></a>
                        <a href="#"><img src="/yhWeb/Public/Home/Images/sh_4.gif"/></a>
                        <a href="#"><img src="/yhWeb/Public/Home/Images/sh_5.gif"/></a>
                    </div>
                </div>
                <div class="d_care <?php echo ($goodsdetail["class"]); ?>"><a onclick="addCollection('MyDiv','fade',<?php echo ($goodsdetail["goods"]["id"]); ?>);">关注商品</a></div>
            </div>
            <div class="des_join">
                <div class="j_nums">
                    <input type="text" value="1" name="number" class="n_ipt"/>
                    <input type="button" value="" onclick="add()" class="n_btn_1"/>
                    <input type="button" value="" onclick="cut()" class="n_btn_2"/>
                </div>
                <span class="fl"><a onclick="ShowDiv_1('MyDiv1','fade1',<?php echo ($goodsdetail["goods"]["id"]); ?>)"><img src="/yhWeb/Public/Home/Images/j_car.png"/></a></span>
            </div>
        </div>
        <script>
            function add() {
                var num = parseInt($('.n_ipt').val())
                num = num + 1
                //num=num.toString()
                $('.n_ipt').val(num)
            }
            function cut() {
                var num = parseInt($('.n_ipt').val())
                if (num == 1) {
                    num = 1;
                } else {
                    num = num - 1;
                    $('.n_ipt').val(num)
                }
            }
        </script>
        <div class="s_brand">
            <?php if(!empty($goodsdetail["goods"]["brandsImg"])): ?><img src="/yhWeb/Public/Home/Images/<?php echo ($goodsdetail["goods"]["brandsImg"]); ?>" width="188" height="188"/>
            <div class="s_brand_c"><a href="#">进入品牌专区</a></div><?php endif; ?>
        </div>


    </div>
    <div class="content mar_20">
        <div class="l_history">
            <div class="fav_t">用户还喜欢</div>
            <ul>
                <?php if(is_array($goodsLike)): $i = 0; $__LIST__ = $goodsLike;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsLike): $mod = ($i % 2 );++$i;?><li>
                    <div class="img"><a href="#"><img src="/yhWeb/Public/Uploads/<?php echo ($goodsLike["picName"]); ?>" width="185" height="162"/></a></div>
                    <div class="name"><a href="#"><?php echo ($goodsLike["goodsName"]); ?></a></div>
                    <div class="price">
                        <font>￥<span><?php echo ($goodsLike["price"]); ?></span></font> &nbsp;
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="l_list">
            <div class="des_border">
                <!--<div class="des_tit">-->
                    <!--<ul>-->
                        <!--<li class="current">推荐搭配</li>-->
                    <!--</ul>-->
                <!--</div>-->
                <!--<div class="team_list">-->
                    <!--<div class="img"><a href="#"><img src="" width="160" height="140"/></a></div>-->
                    <!--<div class="name"><a href="#"></a></div>-->
                    <!--<div class="price">-->
                        <!--<div class="checkbox"><input type="checkbox" name="zuhe" checked="checked"/></div>-->
                        <!--<font>￥<span></span></font> &nbsp;-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="team_icon"><img src="/yhWeb/Public/Home/Images/jia_b.gif"/></div>-->
                <!--<div class="team_sum">-->
                    <!--套餐价：￥<span></span><br/>-->
                    <!--<input type="text" value="1" class="sum_ipt"/><br/>-->
                    <!--<a href="#"><img src="/yhWeb/Public/Home/Images/z_buy.gif"/></a>-->
                <!--</div>-->

            </div>
            <div class="des_border">
                <div class="des_tit">
                    <ul>
                        <li class="current"><a href="#p_attribute">商品属性</a></li>
                        <li><a href="#p_details">商品详情</a></li>
                        <li><a href="#p_comment">商品评论</a></li>
                    </ul>
                </div>
                <div class="des_con" id="p_attribute">

                    <table border="0" align="center" style="width:100%; font-family:'宋体'; margin:10px auto;" cellspacing="0" cellpadding="0">
                        <?php if(is_array($goodsdetail["property"])): $i = 0; $__LIST__ = $goodsdetail["property"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$property): $mod = ($i % 2 );++$i;?><tr>
                                <?php if(is_array($property)): $i = 0; $__LIST__ = $property;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$property): $mod = ($i % 2 );++$i;?><td><?php echo ($property["propertyName"]); ?>:<?php echo ($property["propertyValue"]); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
            </div>

            <div class="des_border" id="p_details">
                <div class="des_t">商品详情</div>
                <div class="des_con">
                    <!--<table border="0" align="center" style="width:745px; font-size:14px; font-family:'宋体';" cellspacing="0" cellpadding="0">-->
                        <!--<tr>-->
                            <!--<td width="265"><img src="/yhWeb/Public/Home/Images/de1.jpg" width="206" height="412"/></td>-->
                            <!--<td>-->
                                <!--<b>迪奥真我香水(Q版)</b><br/>-->
                                <!--【商品规格】：5ml<br/>-->
                                <!--【商品质地】：液体<br/>-->
                                <!--【商品日期】：与专柜同步更新<br/>-->
                                <!--【商品产地】：法国<br/>-->
                                <!--【商品包装】：无外盒 无塑封<br/>-->
                                <!--【商品香调】：花束花香调<br/>-->
                                <!--【适用人群】：适合女性（都市白领，性感，有女人味的成熟女性）<br/>-->
                            <!--</td>-->
                        <!--</tr>-->
                    <!--</table>-->

                    <p align="center">
                        <?php if(is_array($goodsimg["picDetail"])): $i = 0; $__LIST__ = $goodsimg["picDetail"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$picDetail): $mod = ($i % 2 );++$i;?><img src="/yhWeb/Public/Uploads/<?php echo ($picDetail); ?>" /><br/><br/><?php endforeach; endif; else: echo "" ;endif; ?>
                    </p>

                </div>
            </div>

            <div class="des_border" id="p_comment">
                <div class="des_t">商品评论</div>

                <table border="0" class="jud_tab" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="175" class="jud_per">
                            <p>80.0%</p>好评度
                        </td>
                        <td width="300">
                            <table border="0" style="width:100%;" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="90">好评<font color="#999999">（80%）</font></td>
                                    <td><img src="/yhWeb/Public/Home/Images/pl.gif" align="absmiddle"/></td>
                                </tr>
                                <tr>
                                    <td>中评<font color="#999999">（20%）</font></td>
                                    <td><img src="/yhWeb/Public/Home/Images/pl.gif" align="absmiddle"/></td>
                                </tr>
                                <tr>
                                    <td>差评<font color="#999999">（0%）</font></td>
                                    <td><img src="/yhWeb/Public/Home/Images/pl.gif" align="absmiddle"/></td>
                                </tr>
                            </table>
                        </td>
                        <td width="185" class="jud_bg">
                            购买过雅诗兰黛第六代特润精华露50ml的顾客，在收到商品才可以对该商品发表评论
                        </td>
                        <td class="jud_bg">您可对已购买商品进行评价<br/><a href="#"><img src="/yhWeb/Public/Home/Images/btn_jud.gif"/></a></td>
                    </tr>
                </table>


                <table border="0" class="jud_list" style="width:100%; margin-top:30px;" cellspacing="0" cellpadding="0">
                    <tr valign="top">
                        <td width="160"><img src="/yhWeb/Public/Home/Images/peo1.jpg" width="20" height="20" align="absmiddle"/>&nbsp;向死而生</td>
                        <td width="180">
                            颜色分类：<font color="#999999">粉色</font> <br/>
                            型号：<font color="#999999">50ml</font>
                        </td>
                        <td>
                            产品很好，香味很喜欢，必须给赞。 <br/>
                            <font color="#999999">2015-09-24</font>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td width="160"><img src="/yhWeb/Public/Home/Images/peo2.jpg" width="20" height="20" align="absmiddle"/>&nbsp;就是这么想的</td>
                        <td width="180">
                            颜色分类：<font color="#999999">粉色</font> <br/>
                            型号：<font color="#999999">50ml</font>
                        </td>
                        <td>
                            送朋友，她很喜欢，大爱。 <br/>
                            <font color="#999999">2015-09-24</font>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td width="160"><img src="/yhWeb/Public/Home/Images/peo3.jpg" width="20" height="20" align="absmiddle"/>&nbsp;墨镜墨镜</td>
                        <td width="180">
                            颜色分类：<font color="#999999">粉色</font> <br/>
                            型号：<font color="#999999">50ml</font>
                        </td>
                        <td>
                            大家都说不错<br/>
                            <font color="#999999">2015-09-24</font>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td width="160"><img src="/yhWeb/Public/Home/Images/peo4.jpg" width="20" height="20" align="absmiddle"/>&nbsp;那*****洋 <br/><font color="#999999">（匿名用户）</font></td>
                        <td width="180">
                            颜色分类：<font color="#999999">粉色</font> <br/>
                            型号：<font color="#999999">50ml</font>
                        </td>
                        <td>
                            下次还会来买，推荐。<br/>
                            <font color="#999999">2015-09-24</font>
                        </td>
                    </tr>
                </table>


                <div class="pages">
                    <a href="#" class="p_pre">上一页</a><a href="#" class="cur">1</a><a href="#">2</a><a href="#">3</a>...<a href="#">20</a><a href="#" class="p_pre">下一页</a>
                </div>

            </div>


        </div>
    </div>


    <!--Begin 弹出层-收藏成功 Begin-->
    <div id="fade" class="black_overlay"></div>
    <div id="MyDiv" class="white_content">
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv('MyDiv','fade')"><img src="/yhWeb/Public/Home/Images/close.gif"/></span>
            </div>
            <div class="notice_c">

                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                    <tr valign="top">
                        <td width="40"><img src="/yhWeb/Public/Home/Images/suc.png"/></td>
                        <td>
                            <span style="color:#3e3e3e; font-size:18px; font-weight:bold;">您已成功收藏该商品</span><br/>
                            <a href="#">查看我的关注 >></a>
                        </td>
                    </tr>
                    <tr height="50" valign="bottom">
                        <td>&nbsp;</td>
                        <td><a href="javascript:CloseDiv('MyDiv','fade');" class="b_sure">确定</a></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    <!--End 弹出层-收藏成功 End-->


    <!--Begin 弹出层-加入购物车 Begin-->
    <div id="fade1" class="black_overlay"></div>
    <div id="MyDiv1" class="white_content">
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv_1('MyDiv1','fade1')"><img src="/yhWeb/Public/Home/Images/close.gif"/></span>
            </div>
            <div class="notice_c">

                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                    <tr valign="top">
                        <td width="40"><img src="/yhWeb/Public/Home/Images/suc.png"/></td>
                        <td id="cartmsg">

                        </td>
                    </tr>
                    <tr height="50" valign="bottom">
                        <td>&nbsp;</td>
                        <td><a href="/yhWeb/Home/BuyCar/index" class="b_sure">去购物车结算</a><a href="#" class="b_buy" onclick="CloseDiv_1('MyDiv1','fade1')">继续购物</a></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    <!--End 弹出层-加入购物车 End-->


    <!--Begin Footer Begin -->
    <div class="b_btm_bg bg_color">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="72"><img src="/yhWeb/Public/Home/Images/b1.png" width="62" height="62"/></td>
                    <td><h2>正品保障</h2>正品行货 放心购买</td>
                </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="72"><img src="/yhWeb/Public/Home/Images/b2.png" width="62" height="62"/></td>
                    <td><h2>满38包邮</h2>满38包邮 免运费</td>
                </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="72"><img src="/yhWeb/Public/Home/Images/b3.png" width="62" height="62"/></td>
                    <td><h2>天天低价</h2>天天低价 畅选无忧</td>
                </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="72"><img src="/yhWeb/Public/Home/Images/b4.png" width="62" height="62"/></td>
                    <td><h2>准时送达</h2>收货时间由你做主</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
        <dl>
            <dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
            <dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
            <dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
            <a href="#" class="b_sh1">新浪微博</a>
            <a href="#" class="b_sh2">腾讯微博</a>
            <p>
                服务热线：<br/>
                <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="/yhWeb/Public/Home/Images/er.gif" width="118" height="118"/></div>
            <img src="/yhWeb/Public/Home/Images/ss.png"/>
        </div>
    </div>
    <div class="btmbg">
        <div class="btm">
            备案/许可证编号：豫ICP备12009302号-1-www.dingguagua.com Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br/>
            <img src="/yhWeb/Public/Home/Images/b_1.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_2.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_3.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_4.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_5.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_6.gif" width="98" height="33"/>
        </div>
    </div>
    <!--End Footer End -->
</div>

</body>

<script src="/yhWeb/Public/Home/Js/ShopShow.js"></script>

<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>
<script>
    $(function(){
        $('.collect').css('background','url(/yhWeb/Public/Home/Images/heart_h.png) no-repeat 10px center');
    })
    function addCollection(show_div, bg_div,id)
    {
        $.post('/yhWeb/Home/CategoryList/addCollection',{id:id},function (data){
            if(data.status)
            {
                $('.d_care').css('background','url(/yhWeb/Public/Home/Images/heart_h.png) no-repeat 10px center');
                document.getElementById(show_div).style.display = 'block';
                document.getElementById(bg_div).style.display = 'block';
                var bgdiv = document.getElementById(bg_div);
                bgdiv.style.width = document.body.scrollWidth;
                // bgdiv.style.height = $(document).height();
                $("#" + bg_div).height($(document).height());
            }
            else
            {
                var r = confirm('请先登陆');
                if (r) {
                    window.location = '/yhWeb/Home/User/Login'
                }
            }
        })
    }
</script>