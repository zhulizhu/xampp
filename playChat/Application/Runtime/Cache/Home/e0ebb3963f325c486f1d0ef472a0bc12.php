<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<!-- 这里放共用head文件头,js,或者css -->
<title>标题</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no">
<script type="text/javascript" src="/playChat/Public/Home/js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/font/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/css/playchat.css">
<script type="text/javascript" src="/playChat/Public/Home/js/bootstrap.min.js"></script>

	
    <!-- 这里可以放一些需要在公共head中追加的代码,比如css代码,引入其他页面不需要的css文件,或者js文件 -->

</head>
<body>
	<!-- 头部 -->
	<!-- 这里可以放导航条,也可以放其他 -->


	
	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <!--这里放置正文代码-&#45;&#45;index-->
    <div class="container-fluid con">
        <!--认证表单信息-->
        <form class="form-horizontal">
            <div class="form-group bor">
                <input  type="text" class="form-control" id="exampleInputName2" placeholder="请填写你的微信号">
            </div>
            <div class="form-group bor">
                <input  type="text" class="form-control" placeholder="请填写你的手机号">
            </div>
            <div class="form-group bo">
                <input style="margin-top: 0;" type="text" class="form-control num pull-left"
                       placeholder="请输入验证码">
                <button   class="btn btn-default nu pull-right bor b">验证码
                </button>
            </div>
        </form>
        <div class="bt">
            <a href="play_room.html"><button class="btn btn-default">确定</button></a>
        </div>
    </div>


	<!-- /主体 -->

	<!-- 底部 -->
	<!-- 这里放置共用页脚代码 -->
	

	
	<!-- /底部 -->
</body>
</html>