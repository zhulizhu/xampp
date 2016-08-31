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


	
    <!-- 这里放置需要在公共footer中追加的代码 -->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container" style="border-bottom: none;">
            <a href="play_room.html">
                <div class="pull-left" id="one"><p>直播间</p></div>
            </a>
            <a href="personal_center.html">
                <div class="pull-right" id="two"><p>个人中心</p></div>
            </a>
        </div>
    </nav>

	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <!--这里放置正文代码-&#45;&#45;index-->
    <div class="container-fluid">
        <div class="bg-box">
            <div class="bg">
                <div class="ph">
                    <img src="/playChat/Public/Home/images/mao.png">
                    <h4>直播间名称</h4>
                </div>
                <div class="attention pull-right">
                    <img src="/playChat/Public/Home/images/shoucang.png">粉丝:<span>120</span>人
                </div>
                <div class="bn">
                    <a href="setting.html">
                        <button class="btn btn-default" style="background-color: #01b0f1;">设置直播间</button>
                    </a>
                </div>
                <div class="tex te1">
                    <p>直播间介绍:<span>很好玩哦,大家来体验一把</span></p>
                </div>
            </div>

        </div>
        <!--创建话题-->
        <div class="bt bt7">
            <a href="public_play.html">
                <button class="btn btn-default" style="height: 48px;font-weight: bold;">创建新的话题</button>
            </a>
        </div>
        <!--历史直播话题-->
        <div class="media med me">
            <div class="media-left">
                <a href="playing.html">
                    <img class="media-object" src="/playChat/Public/Home/images/jingxuna.png">

                    <div class="one">&nbsp;<span>直播中</span></div>
                    <div class="two"><span>200正在参加</span>&nbsp;</div>
                </a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">道德对于我们有多重要?<span>剩余:2天</span></h3>

                <p><img src="/playChat/Public/Home/images/shizhong.png"><span>2016-10-11</span><span>14:11:18</span><span
                        class="money">收益:200元</span></p>

                <p>简介:道德对于我们有多重要</p>
                <button class="btn btn-default btn-1 btn1 erwei" style="border-color: #fff">查看二维码</button>
                <a href="renew-money.html">
                    <button class="btn btn-default btn-1 btn2" style="border-color: #fff">话题时长续费</button>
                </a>
                <button class="btn btn-default btn-1 btn3" style="border-color: #fff">删除直播</button>
            </div>
        </div>
        <!--历史直播话题-->
        <div class="media med" style="margin-bottom: 74px">
            <div class="media-left">
                <a href="playing.html">
                    <img class="media-object" src="/playChat/Public/Home/images/jingxuna.png">

                    <div class="one">&nbsp;<span>直播中</span></div>
                    <div class="two"><span>200正在参加</span>&nbsp;</div>
                </a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">道德对于我们有多重要?<span>剩余:2天</span></h3>

                <p><img src="/playChat/Public/Home/images/shizhong.png"><span>2016-10-11</span><span>14:11:18</span><span
                        class="money">收益:200元</span></p>

                <p>简介:道德对于我们有多重要</p>
                <button class="btn btn-default btn-1 btn1 erwei" style="border-color: #fff">查看二维码</button>
                <a href="renew-money.html">
                    <button class="btn btn-default btn-1 btn2" style="border-color: #fff">话题时长续费</button>
                </a>
                <button class="btn btn-default btn-1 btn3" style="border-color: #fff">删除直播</button>
            </div>
        </div>
    </div>
    <div class="er-wei alert">
        <div class="wei">
            <div class="title">查看二维码
                <button style="opacity: 1;margin-right: 10px;margin-top: 4px" class="close" data-dismiss="alert"><span style="color: #fff">&times;</span></button>
            </div>
            <div class="ph">
                <img src="/playChat/Public/Home/images/mao.png">
            </div>
            <div class="er">
                <img src="/playChat/Public/Home/images/erweima.png">
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".erwei").click(function () {
                $(".er-wei").show();
            });
        })
    </script>

	<!-- /主体 -->

	<!-- 底部 -->
	<!-- 这里放置共用页脚代码 -->
	
    <!-- 这里放置需要在公共footer中追加的代码 -->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container" style="border-bottom: none;">
            <a href="play_room.html">
                <div class="pull-left" id="one"><p>直播间</p></div>
            </a>
            <a href="personal_center.html">
                <div class="pull-right" id="two"><p>个人中心</p></div>
            </a>
        </div>
    </nav>

	<!-- /底部 -->
</body>
</html>