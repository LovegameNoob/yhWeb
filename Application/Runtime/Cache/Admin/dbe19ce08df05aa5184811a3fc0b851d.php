<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>展开合闭按钮</title>
    <link href="/yhWeb/Public/Admin/Css/css.css" type="text/css" rel="stylesheet"/>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <script language="javascript">
        function switchSysBar() {
            if (parent.document.getElementById('attachucp').cols == "194,12,*") {
                document.getElementById('leftbar').style.display = "";
                parent.document.getElementById('attachucp').cols = "0,12,*";
            }
            else {
                parent.document.getElementById('attachucp').cols = "194,12,*";
                document.getElementById('leftbar').style.display = "none"
            }
        }
        function load() {
            if (parent.document.getElementById('attachucp').cols == "0,12,*") {
                document.getElementById('leftbar').style.display = "";
            }
        }
    </script>
</head>
<body marginwidth="0" marginheight="0" onLoad="load()" topmargin="0" leftmargin="0" onselectstart="return false" oncontextmenu=return(false) style="overflow-x:hidden;">
<center>
    <table height="100%" cellspacing="0" cellpadding="0" border="0" width="100%">
        <tbody>
        <tr>
            <td bgcolor="#ededb1" width="1">
            </td>
            <td id="leftbar" style="display: none; background:url(/yhWeb/Public/Admin/Images/Main/switchbg.jpg) repeat-y #d2d2d0 0px 0">
                <a onClick="switchSysBar()" href="javascript:void(0);">
                    <img src="/yhWeb/Public/Admin/Images/Main/pic24.jpg" width="12" height="72" border="0" alt="隐藏左侧菜单">
                </a>
            </td>
            <td id="rightbar" style="background:url(../Images/Main/switchbg.jpg) repeat-y #f2f0f5 0px 0">
                <a onClick="switchSysBar()" href="javascript:void(0);">
                    <img src="/yhWeb/Public/Admin/Images/Main/pic23.jpg" width="12" height="72" border="0" alt="隐藏左侧菜单">
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</center>
</body>
</html>