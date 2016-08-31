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


	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <!--这里放置正文代码-&#45;&#45;index-->
<div class="container-fluid">
    <div class="num">
        <div class="pull-left">已直播话题(2)</div>
        <div class="pull-right">即将到期话题(1)</div>
    </div>
    <!--已直播话题-->
    <div class="num-one">
        <!--历史直播话题-->
        <div class="media med me" style="border-top: none">
            <div class="media-left">
                <a href="playing.html">
                <img class="media-object" src="/playChat/Public/Home/images/jingxuna.png">

                <div class="one">&nbsp;<span>已结束</span></div>
                    </a>
                <!--<div class="two"><span>200正在参加</span>&nbsp;</div>-->
            </div>
            <div class="media-body">
                <h3 class="media-heading">道德对于我们有多重要?<span>已结束</span></h3>

                <p><img src="/playChat/Public/Home/images/shizhong.png"><span>2016-10-11</span><span>14:11:18</span><span
                        class="money">收益:200元</span></p>

                <p>简介:道德对于我们有多重要</p>
                <button class="btn btn-default btn-1 btn3 btn4">删除直播</button>
            </div>
        </div>
        <!--历史直播话题-->
        <div class="media med">
            <div class="media-left">
                <a href="playing.html">
                <img class="media-object" src="/playChat/Public/Home/images/jingxuna.png">

                <div class="one">&nbsp;<span>直播中</span></div>
                    </a>
                <!--<div class="two"><span>200正在参加</span>&nbsp;</div>-->
            </div>
            <div class="media-body">
                <h3 class="media-heading">道德对于我们有多重要?<span>剩余:2天</span></h3>

                <p><img src="/playChat/Public/Home/images/shizhong.png"><span>2016-10-11</span><span>14:11:18</span><span
                        class="money">收益:200元</span></p>

                <p>简介:道德对于我们有多重要</p>
                <button class="btn btn-default btn-1 btn3 btn4">删除直播</button>
            </div>
        </div>
    </div>
    <!--即将到期话题-->
    <div class="num-two">
        <!--历史直播话题-->
        <div class="media med me" style="border-top: none">
            <div class="media-left">
                <a href="playing.html">
                <img class="media-object" src="/playChat/Public/Home/images/jingxuna.png">

                <div class="one">&nbsp;<span>已结束</span></div>
                    </a>
                <!--<div class="two"><span>200正在参加</span>&nbsp;</div>-->
            </div>
            <div class="media-body">
                <h3 class="media-heading">道德对于我们有多重要?<span>已结束</span></h3>

                <p><img src="/playChat/Public/Home/images/shizhong.png"><span>2016-10-11</span><span>14:11:18</span><span
                        class="money">收益:200元</span></p>

                <p>简介:道德对于我们有多重要</p>
                <button class="btn btn-default btn-1 btn3 btn4">删除直播</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
//    点击左右按钮切换
    $(document).ready(function () {
        $(".pull-left").click(function () {
            $(this).css({'color': '#00b0f0', 'border-bottom': '2px solid #00b0f0'});
            $(".pull-right").css({'color': '#313131', 'border-bottom': '1px solid #ababab'});
            $(".num-two").hide();
            $(".num-one").show();
        });
        $(".pull-right").click(function () {
            $(this).css({'color': '#00b0f0', 'border-bottom': '2px solid #00b0f0'});
            $(".pull-left").css({'color': '#313131', 'border-bottom': '1px solid #ababab'});
            $(".num-one").hide();
            $(".num-two").show();
        })
    })
</script>

	<!-- /主体 -->

	<!-- 底部 -->
	<!-- 这里放置共用页脚代码 -->
	
    <!-- 这里放置需要在公共footer中追加的代码 -->


	<!-- /底部 -->
</body>
</html>