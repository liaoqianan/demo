<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>欢迎登录京西商城后台管理系统</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/Public/Admin/js/jquery.js"></script>
    <script src="/Public/Admin/js/cloud.js" type="text/javascript"></script>
    <script language="javascript">
    $(function() {
        $('.loginbox').css({
            'position': 'absolute',
            'left': ($(window).width() - 692) / 2
        });
        $(window).resize(function() {
            $('.loginbox').css({
                'position': 'absolute',
                'left': ($(window).width() - 692) / 2
            });
        })
    });
    </script>
    <style>
      .loginbox ul li{
          margin-bottom:8px;
        }
      .verify{
          width:220px;
          border-right:1px solid #BAC702;
          border-rodius:4px;
      }
      .verify_img{
        float:left;
      }
      .loginbox ul li:after{
          content:"";
          display:block;
          clear:both;
      }
    </style>
</head>

<body style="background-color:#1c77ac; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
    <div id="mainBody">
        <div id="cloud1" class="cloud"></div>
        <div id="cloud2" class="cloud"></div>
    </div>
    <div class="logintop">
        <span>欢迎使用京西商城后台管理系统</span>
        <ul>
            <li><a href="/" target="_blank">商城首页</a></li>
        </ul>
    </div>
    <form action="" method="post">
        <div class="loginbody">
            <span class="systemlogo"></span>
            <div class="loginbox">
                <ul>
                    <li>
                        <input name="username" type="text" class="loginuser" placeholder="用户名" />
                    </li>
                    <li>
                        <input name="password" type="password" class="loginpwd" placeholder="密码" />
                    </li>
                    <li>
                        <input name="verify" type="text" class="loginuser verify" placeholder="验证码" />
                        <img src="<?php echo U('index/verify');?>" onclick="this.src= '<?php echo U('Index/verify');?>' +'?'+Math.random()" class="verify_img" height="48" alt="">
                    </li>
                    <li>
                        <input type="hidden" value="">
                        <input name="" type="submit" class="loginbtn" value="登录" />
                        <label><a href="<?php echo U('Admin/findpassword');?>">忘记密码？</a></label>
                    </li>
                </ul>
            </div>
        </div>
    </form>
    <div class="loginbm">版权所有 &copy;2016 <a href="http://www.itcast.cn/php">传智播客教育集团 PHP学院</a> </div>
</body>

</html>