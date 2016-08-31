<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<!-- 这里放共用head文件头,js,或者css -->
<title>标题</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/fonts/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/playChat/Public/Home/css/playchat.css">
<script type="text/javascript" src="/playChat/Public/Home/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/playChat/Public/Home/js/bootstrap.min.js"></script>

	
    <!-- 这里可以放一些需要在公共head中追加的代码,比如css代码,引入其他页面不需要的css文件,或者js文件 -->
    <style>
        .text4 {
            margin-top: 20px !important;
        }

        .text4 li {
            list-style: none !important;
            color: #888888 !important;
            margin-top: 10px !important;
            margin-left: 0!important;
        }
        .form-control{
            width: 90%;
            height: 50px;
            margin: 54px auto 0;
            border: 1px solid #00b0f0;
        }
    </style>

</head>
<body>
	<!-- 头部 -->
	<!-- 这里可以放导航条,也可以放其他 -->


	
	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <!--这里放置正文代码-&#45;&#45;index-->
    <div class="container-fluid">
        <div class="bg-box bg-1">
            <div class="bg">
                <div class="ph">
                    <img src="/playChat/Public/Home/images/mao.png">
                    <h4>直播间名称</h4>
                </div>
                <div class="attention pull-right">
                    <img src="/playChat/Public/Home/images/shoucang.png">粉丝:<span>120</span>人
                </div>
                <div class="tex tex1">
                    <p>直播间介绍:<span>很好玩哦,大家来体验一把</span></p>
                </div>
            </div>

        </div>
        <div class="text text4">
            <ol>
                <li><img src="/playChat/Public/Home/images/shizhong.png" style="width: 7%;margin-right: 8px;">开始时间 <span>2016-10-21</span> <span>14:11:12</span></li>
                <li><img src="/playChat/Public/Home/images/huati3.png" style="width: 8%;margin-right: 7px">直播话题:<span>道德对我们多重要</span></li>
                <li><img src="/playChat/Public/Home/images/jieshao.png" style="width: 6%;margin-right: 12px">话题介绍:<span>来吧来吧,大家一起来</span></li>

            </ol>
        </div>
        <input type="text" class="form-control" placeholder="输入直播间密码">
        <!--创建话题-->
        <div class="bt bt6">
            <button class="btn btn-default" >进入直播间</button>
        </div>

    </div>

	<!-- /主体 -->

	<!-- 底部 -->
	<!-- 这里放置共用页脚代码 -->
	

	
	<!-- /底部 -->
</body>
</html>