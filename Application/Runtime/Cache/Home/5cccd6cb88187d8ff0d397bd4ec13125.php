<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link type="text/css" rel="stylesheet" href="/yhWeb/Public/Home/Css/style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery.js"></script>
    <script src="/yhWeb/Public/Home/Js/iepng.js" type="text/javascript"></script>
    <script type="text/javascript">
        EvPNG.fix('div, ul, img, li, input, a');
    </script>
    <![endif]-->
    <!--<script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery.bxslider_e88acd1b.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/menu.js"></script>
	<script type="text/javascript" src="/yhWeb/Public/Home/Js/select.js"></script>
	<script type="text/javascript" src="/yhWeb/Public/Home/Js/lrscroll.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/iban.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/fban.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/f_ban.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/mban.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/bban.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/hban.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/tban.js"></script>
	<script type="text/javascript" src="/yhWeb/Public/Home/Js/lrscroll_1.js"></script>-->
    <!--<script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery.min.js"></script>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery.validate.js"></script>-->
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery.js"></script>
    <!-- <script src="/yhWeb/Public/Home/Js/register.js" type="text/javascript"></script>-->

    <title>尤洪</title>
</head>
<body>
<!--Begin Header Begin-->
<div class="soubg">
    <div class="sou">
        <span class="fr">
        	<span class="fl">你好，请<a href="Login.html">登录</a>&nbsp; <a class="m" href="Regist.html" style="color:#ff4e00;">免费注册</a>&nbsp; </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/yhWeb/Public/Home/Images/s_tel.png" align="absmiddle"/></a></span>
        </span>
    </div>
</div>
<!--End Header End-->
<!--Begin Login Begin-->
<div class="log_bg">
    <div class="top">
        <div class="logo"><a href="../Index.html"><img src="/yhWeb/Public/Home/Images/logo.png"/></a></div>
    </div>
    <div class="regist">
        <div class="log_img"><img src="/yhWeb/Public/Home/Images/l_img.png" width="611" height="425"/></div>
        <div class="reg_c">

            <table border="0" style="width:420px; font-size:14px; margin-top:20px;" cellspacing="0" cellpadding="0">
                <tr height="50" valign="top">
                    <td width="95">&nbsp;</td>
                    <td>
                        <span class="fl" style="font-size:24px;">注册</span>
                        <span class="fr">已有商城账号，<a href="/yhWeb/Home/User/Login" style="color:#ff4e00;">我要登录</a></span>
                    </td>
                </tr>
                <tr height="50">
                    <td align="right"><font color="#ff4e00">*</font>&nbsp;用户名 &nbsp;</td>
                    <td>
                        <input type="text" value="" placeholder="请输入用户名" class="l_user" name="userName" id="uName"/>
                        <label class="uName" style="color:red;font-size:14px;"></label>
                    </td>
                </tr>
                <tr height="50">
                    <td align="right"><font color="#ff4e00">*</font>&nbsp;密码 &nbsp;</td>
                    <td>
                        <input type="password" value="" placeholder="请输入密码" class="l_pwd" name="passWord" id="uPwd"/>
                        <label class="uPwd" style="color:red;font-size:14px;"></label>
                    </td>
                </tr>
                <tr height="50">
                    <td align="right"><font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;</td>
                    <td>
                        <input type="password" value="" placeholder="请输入确认密码" class="l_pwd" name="passWord2" id="uPwd1"/>
                        <label class="uPwd1" style="color:red;font-size:14px;"></label>
                    </td>
                </tr>
                <tr height="50">
                    <td align="right"><font color="#ff4e00">*</font>&nbsp;邮箱 &nbsp;</td>
                    <td>
                        <input type="text" value="" placeholder="请输入邮箱" class="l_email" name="email" id="email"/>
                        <label class="email" style="color:red;font-size:14px;"></label>
                    </td>
                </tr>
                <tr height="50">
                    <td align="right"><font color="#ff4e00">*</font>&nbsp;手机 &nbsp;</td>
                    <td>
                        <input type="text" value="" placeholder="请输入手机号码" class="l_tel" name="phone" id="phone"/>
                        <label class="phone" style="color:red;font-size:14px;"></label>
                    </td>
                </tr>
                <tr height="50" class="1_yzm">
                    <td align="right"><font color="#ff4e00">*</font>&nbsp;验证码 &nbsp;</td>
                    <td>
                        <input type="text" value="" placeholder="请输入验证码" class="l_ipt" name="code" id="code"/>
                        <img class="b" style="width:90px;height:39px;border:1px solid #E7E7E7 " src="/yhWeb/Home/User/verify" onclick="this.src=this.src+'?'+Math.random()"/>
                        <label class="code" style="color:red;font-size:14px;"></label>
                        <!--<p><a id="a" style="font-size:14px; font-family:'宋体';">看不清?换一张</a></p>-->
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
                    <label class="r_rad"><input type="checkbox" checked/></label>
                    <label class="r_txt">我已阅读并接受《用户协议》</label>
                    </span>
                    </td>
                </tr>
                <tr height="60">
                    <td>&nbsp;</td>
                    <td><input type="submit" value="立即注册" class="reg_btn"/></td>
                </tr>
            </table>

        </div>
    </div>
</div>
<!--End Login End-->
<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：豫ICP备12009302号-1-www.dingguagua.com Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br/>
        <img src="/yhWeb/Public/Home/Images/b_1.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_2.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_3.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_4.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_5.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_6.gif" width="98" height="33"/>
    </div>
</div>
<!--End Footer End -->

</body>

<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>
<script>
    $(function () {
        /*用户名判断*/
        $('#uName').blur(function () {
            var userName = $('#uName').val();
            if (userName == '') {
                $('.uName').html('*请输入用户名');
                $('.uName').css('color', 'red');
                return false;
            }

            if (userName.length < 5 || userName.length >= 16) {

                $('.uName').html('*用户名长度必须在5-16位之间');

                $('.uName').css('color', 'red');

                return flase;

            } else {
                $('.uName').html('*用户名正确');
                $('.uName').css('color', 'green');
            }

            $.post('checkUserName', {userName: userName}, function (data) {

                if (data == 1) {

                    $('.uName').html('*该用户名已注册');
                    $('.uName').css('color', 'red');
                    return false;

                } else {

                    $('.uName').html('*恭喜，此用户名可以使用。');

                    $('.uName').css('color', 'green');

                }

            })

        });
        /*密码判断*/
        $('input[type=password]').blur(function () {

            if ($(this).is('#uPwd')) {

                if ($(this).val() == '') {
                    $('.uPwd').html('*请输入密码');
                    $('.uPwd').css({'color': 'red', 'fontSize': '14px'});
                    return false;
                }

                if ($(this).val().length < 5 || $(this).val().length >= 16) {

                    $('.uPwd').html('*密码长度必须在5-16位之间');
                    $('.uPwd').css({'color': 'red', 'fontSize': '14px'});
                    return false;

                } else {

                    $('.uPwd').html('*密码正确');

                    $('.uPwd').css({'color': 'green', 'fontSize': '14px'});

                }

            }
            /*确认密码判断*/
            if ($(this).is('#uPwd1')) {

                if ($(this).val() == '') {
                    $('.uPwd1').html('*请输入确认密码');
                    $('.uPwd1').css({'color': 'red', 'fontSize': '14px'});
                    return false;
                }

                if ($('#uPwd').val() != $('#uPwd1').val()) {

                    $('.uPwd1').html('*两次密码不一致');
                    $('.uPwd1').css({'color': 'red', 'fontSize': '14px'});

                } else {

                    $('.uPwd1').html('*密码正确');

                    $('.uPwd1').css({'color': 'green', 'fontSize': '14px'});

                }
            }
        });
        /*email判断*/
        $('#email').blur(function () {

            var email = $('#email').val();

            var reg = /^[a-z0-9](\w|\.|-)*@\w{2,}\.(com|cn|net|com.cn|net.cn)$/i;

            if (!reg.test(email)) {

                $('.email').html('*邮箱格式不正确');

                $('.email').css({'color': 'red', 'fontSize': '14px'});

                return false;

            } else {

                $('.email').html('*邮箱正确');

                $('.email').css({'color': 'green', 'fontSize': '14px'});

            }

            $.post('/yhWeb/Home/User/checkEmail', {email: email}, function (data) {
                if (data == 1) {

                    $('.email').html('*邮箱已注册');

                    $('.email').css({'color': 'red', 'fontSize': '14px'});

                    return false;

                }

            })

        })

    });
    /*手机号码判断*/
    $(function () {

        $('#phone').blur(function () {

            var phone = $('#phone').val();

            var reg = /^1[3|4|5|7|8]\d{9}$/;

            if (!reg.test(phone)) {

                $('.phone').html('*手机号码格式不正确');

                $('.phone').css({'color': 'red', 'fontSize': '14px'});

                return false;

            } else {

                $('.phone').html('*手机号码正确');

                $('.phone').css({'color': 'green', 'fontSize': '14px'});

            }

            $.post('/yhWeb/Home/User/phone', {phone: phone}, function (data) {
                if (data == 1) {

                    $('.phone').html('*手机号码已注册');

                    $('.phone').css({'color': 'red', 'fontSize': '14px'});

                    return false;

                }

            })

        });
        /*验证码判断*/
        var state=1;
        $('#code').blur(function () {
            var inputCode = $('#code').val();
            if (inputCode <= 0) {
                $('.code').html('*验证码不能为空');
                $('.code').css({'color': 'red', 'fontSize': '14px'});
                state=0;
                return false;
            }

            $.post('/yhWeb/Home/User/check_verify', {code: inputCode}, function ($data) {
                if ($data == 1) {
                    $('.code').html('*验证码正确');
                    $('.code').css({'color': 'green', 'fontSize': '14px'});
                    state=1;
                } else {
                    $('.code').html('*验证码输入错误，请重输');
                    state=0;
                }
            })

        });
        /*ajax提交*/
        $('.reg_btn').click(function () {
            var userName = $('#uName').val();

            var uPwd = $('#uPwd').val();

            var uPwd1 = $('#uPwd1').val();

            var email = $('#email').val();

            var phone = $('#phone').val();

            var inputCode = $('#code').val();

            if (userName == '') {
                $('.uName').html('*请输入用户名');
                return false;
            }

            if (uPwd == '') {
                $('.uPwd').html('*请输入用户密码');
                return false;
            }

            if (uPwd1 == '') {
                $('.uPwd1').html('*请输入确认密码');
                return false;
            }

            if (email == '') {
                $('.email').html('*请输入电子邮箱');
                return false;
            }

            if (phone == '') {
                $('.phone').html('*请输入手机号码');
                return false;
            }

            if(state==1)
            {
                $.post('/yhWeb/Home/User/register_action', {userName: userName, passWord: uPwd, email: email, phone: phone}, function (data) {
                    if (data.status == 1) {
                        window.location.href = '../Index/Index';
                    } else if (data.status == 2) {
                        alert('注册失败');
                    }
                }, 'json')

            }

        })
    });
</script>