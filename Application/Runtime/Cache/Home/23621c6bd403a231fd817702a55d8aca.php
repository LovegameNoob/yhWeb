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

    <script type="text/javascript" src="/yhWeb/Public/Home/Js/select.js"></script>


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
<script>
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
                $('.cars').html(data.content)
                $('#total').text(data.total)
                document.getElementById(show_div).style.display = 'block';
                document.getElementById(bg_div).style.display = 'block';
                var bgdiv = document.getElementById(bg_div);
                bgdiv.style.width = document.body.scrollWidth;
                // bgdiv.style.height = $(document).height();
                $("#" + bg_div).height($(document).height());
            }

        }, 'json')
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
    $(function () {
        $('.cartdel').click(function () {
            $(this).parent().remove()
            $.post('/yhWeb/Home/BuyCar/cartDel', {id: $(this).attr('cartid')}, function (data) {
                $('#typenum').text(data.typenum)
                if ($('.cars li').length <= 0) {
                    $('.car_bg').html('<div class="un_login">购物车里空空如也~</div>');
                }
                else {
                    $('#total').html(data.total)
                }
            }, 'json')
            //window.location.reload()
        })

    })
</script>
<!--End Header End-->
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
<!--End Header End-->
<div class="i_bg bg_color">
    <!--Begin 用户中心 Begin -->
    <div class="m_content">
        <div class="m_left">
    <div class="left_n">管理中心</div>
    <div class="left_m">
        <div class="left_m_t t_bg1">订单中心</div>
        <ul>
            <li><a href="/yhWeb/Home/Member/Member_Order">我的订单</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Address">收货地址</a></li>
            <li><a href="#">缺货登记</a></li>
            <li><a href="#">跟踪订单</a></li>
        </ul>
    </div>
    <div class="left_m">
        <div class="left_m_t t_bg2">会员中心</div>
        <ul>
            <li><a href="/yhWeb/Home/Member/index">用户信息</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Collect">我的收藏</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Msg">我的留言</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Links">推广链接</a></li>
            <li><a href="#">我的评论</a></li>
        </ul>
    </div>
    <div class="left_m">
        <div class="left_m_t t_bg3">账户中心</div>
        <ul>
            <li><a href="/yhWeb/Home/Member/Member_Safe">账户安全</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Packet">我的红包</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Money">资金管理</a></li>
        </ul>
    </div>
    <div class="left_m">
        <div class="left_m_t t_bg4">分销中心</div>
        <ul>
            <li><a href="/yhWeb/Home/Member/Member_Member">我的会员</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Results">我的业绩</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Commission">我的佣金</a></li>
            <li><a href="/yhWeb/Home/Member/Member_Cash">申请提现</a></li>
        </ul>
    </div>
</div>
<script src="/yhWeb/Public/jquery.js"></script>
<script>

</script>
        <div class="m_right">
            <p></p>
            <div class="mem_tit">收货地址</div>
            <div class="address">
                <div class="a_close"><a href="#"><img src="/yhWeb/Public/Home/Images/a_close.png"/></a></div>
                <table border="0" class="add_t" align="center" style="width:98%; margin:10px auto;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td colspan="2" style="font-size:14px; color:#ff4e00;">杨杨公司</td>
                    </tr>
                    <tr>
                        <td align="right" width="80">收货人姓名：</td>
                        <td>杨杨</td>
                    </tr>
                    <tr>
                        <td align="right">配送区域：</td>
                        <td>四川成都市武侯区三环以内</td>
                    </tr>
                    <tr>
                        <td align="right">详细地址：</td>
                        <td>科华北路66号世外桃源写字楼3楼</td>
                    </tr>
                    <tr>
                        <td align="right">手机：</td>
                        <td>12345678998</td>
                    </tr>
                    <tr>
                        <td align="right">电话：</td>
                        <td>028-12345678</td>
                    </tr>
                    <tr>
                        <td align="right">电子邮箱：</td>
                        <td>123456789@qq.com</td>
                    </tr>
                    <tr>
                        <td align="right">标志建筑：</td>
                        <td>世外桃源</td>
                    </tr>
                </table>

                <p align="right">
                    <a href="#" style="color:#ff4e00;">设为默认</a>&nbsp; &nbsp; &nbsp; &nbsp; <a href="#" style="color:#ff4e00;">编辑</a>&nbsp; &nbsp; &nbsp; &nbsp;
                </p>

            </div>

            <div class="mem_tit">
                <a href="#"><img src="/yhWeb/Public/Home/Images/add_ad.gif"/></a>
            </div>
            <table border="0" class="add_tab" style="width:930px;" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="135" align="right">配送地区</td>
                    <td colspan="3" style="font-family:'宋体';">
                        <select class="jj" name="country" style="background-color:#f6f6f6;">
                            <option value="0" selected="selected">请选择...</option>
                            <option value="1">中国</option>
                            <option value="2">中国</option>
                            <option value="3">中国</option>
                            <option value="4">中国</option>
                        </select>
                        <select class="jj" name="province">
                            <option value="0" selected="selected">请选择...</option>
                            <option value="1">四川</option>
                            <option value="2">重庆</option>
                            <option value="3">北京</option>
                            <option value="4">云南</option>
                        </select>
                        <select class="jj" name="city">
                            <option value="0" selected="selected">请选择...</option>
                            <option value="1">成都</option>
                            <option value="2">宜宾</option>
                            <option value="3">南充</option>
                            <option value="4">绵阳</option>
                        </select>
                        <select class="jj" name="area">
                            <option value="0" selected="selected">请选择...</option>
                            <option value="1">武侯区</option>
                            <option value="2">成华区</option>
                            <option value="3">锦江区</option>
                            <option value="4">青羊区</option>
                        </select>
                        （必填）
                    </td>
                </tr>
                <tr>
                    <td align="right">收货人姓名</td>
                    <td style="font-family:'宋体';"><input type="text" value="姓名" class="add_ipt"/>（必填）</td>
                    <td align="right">电子邮箱</td>
                    <td style="font-family:'宋体';"><input type="text" value="12345678@qq.com" class="add_ipt"/>（必填）</td>
                </tr>
                <tr>
                    <td align="right">详细地址</td>
                    <td style="font-family:'宋体';"><input type="text" value="世外桃源" class="add_ipt"/>（必填）</td>
                    <td align="right">邮政编码</td>
                    <td style="font-family:'宋体';"><input type="text" value="610000" class="add_ipt"/></td>
                </tr>
                <tr>
                    <td align="right">手机</td>
                    <td style="font-family:'宋体';"><input type="text" value="1361234587" class="add_ipt"/>（必填）</td>
                    <td align="right">电话</td>
                    <td style="font-family:'宋体';"><input type="text" value="028-12345678" class="add_ipt"/></td>
                </tr>
                <tr>
                    <td align="right">标志建筑</td>
                    <td style="font-family:'宋体';"><input type="text" value="世外桃源大酒店" class="add_ipt"/></td>
                    <td align="right">最佳送货时间</td>
                    <td style="font-family:'宋体';"><input type="text" value="" class="add_ipt"/></td>
                </tr>
            </table>
            <p align="right">
                <a href="#">删除</a>&nbsp; &nbsp; <a href="#" class="add_b">确认修改</a>
            </p>


        </div>
    </div>
    <!--End 用户中心 End-->
    <!--Begin Footer Begin -->
    <div class="b_btm_bg b_btm_c">
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


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>