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
    <style>
        .pay,.meeting{
            display: none;
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
        <!--内部会议直播-->
        <div class="bt bt2">
            <button class="btn btn-default">选择直播类型</button>
            <p>选择后不能更改</p>
        </div>
        <div class="row" style="padding-left:0;padding-right: 0;">
            <div class="col-xs-4">
                    <h4>公开直播</h4>
                    <div id="pub"><img class="pub" style="width: 76%;height: auto"  src="/playChat/Public/Home/images/gongkaizhibo1.png"></div>
                <p class="public" style="left: 42%;display: block;">
                    <img  src="/playChat/Public/Home/images/sanjiao.png">
                </p>
            </div>
            <div class="col-xs-4">
                    <h4>收费直播</h4>
                    <div id="pa"><img class="pa" style="width: 76%;height: auto"  src="/playChat/Public/Home/images/shouferizhibo.png"></div>
                <p class="pay" style="left: 42%;display: none;">
                    <img  src="/playChat/Public/Home/images/sanjiao.png">
                </p>
            </div>
            <div class="col-xs-4">
                    <h4>内部会议</h4>
                    <div id="meet"><img class="meet" style="width: 76%;height: auto"  src="/playChat/Public/Home/images/neibu.png"></div>
                <p class="meeting" style="left: 42%;display: none;">
                    <img  src="/playChat/Public/Home/images/sanjiao.png">
                </p>
            </div>
        </div>
        <!--公开直播-->
        <div class="all public">
            <p>所有人可收听</p>
        </div>
        <!--收费直播-->
        <div class="all pay" >
            <p>设置入场费用(72小时)</p>
            <!--<form class="form-horizontal">-->
            <!--<div class="form-group">-->
            <!--<input type="text" class="form-control" id="exampleInputName2" placeholder="请输入金额(最低1元)">-->
            <!--</div>-->
            <!--</form>-->
            <form class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control"  placeholder="请输入金额(最低1元)">
                        <div class="input-group-addon">|元</div>
                    </div>
                </div>
            </form>
        </div>
        <!--设置密码话题密码-->
        <div class="all meeting" >
            <p>设置密码</p>

            <form class="form-inline">
                <div class="form-group">

                    <input type="password" class="form-control" id="exampleInputAmount" placeholder="支持中文、英文不区分大小">

                </div>
            </form>
        </div>
        <!--话题设置-->
        <div class="tab" id="top-one">
            <div class="pull-left">本期话题</div>
            <div class="pull-right">你说我们要成功</div>
        </div>
        <div class="tab">

            <div class="pull-left">开始时间</div>
            <div class="pull-right">你说我们要成功</div>

        </div>
        <div class="tab" id="tab">

            <div class="pull-left">话题介绍</div>
            <div class="pull-right">你说我们要成功</div>

        </div>
        <div class="bt" style="margin-bottom: 16px;">
            <a href="playing.html">
                <button class="btn btn-default">下一步</button>
            </a>
        </div>
    </div>
    <div class="ball alert" style="border-radius: 0">
        <div class="ball-con">
            <div class="title">话题名称</div>
            <form role="form">
                <div class="form-group for">
                    <textarea class="form-control" rows="3" placeholder="请输入话题名称"></textarea>
                </div>
            </form>
            <div class="bn bn1">
                <button class="btn btn-default pull-left close" style="font-weight:normal;font-size: 14px;opacity: 1" data-dismiss="alert">取消</button>
                <button class="btn btn-default pull-right">确定</button>
            </div>
        </div>
    </div>
    <div class="ball-one alert" style="border-radius: 0">
        <div class="ball-con">
            <div class="title">话题名称</div>
            <form role="form">
                <div class="form-group for">
                    <textarea class="form-control" rows="3" placeholder="请输入话题介绍"></textarea>
                </div>
            </form>
            <div class="bn bn1 ">
                <button class="btn btn-default pull-left close" style="font-weight:normal;font-size: 14px;opacity: 1"  data-dismiss="alert">取消</button>
                <button class="btn btn-default pull-right">确定</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">


        $(document).ready(function () {
            $("#pub").click(function(){
                $(".pub").attr("src","/playChat/Public/Home/images/gongkaizhibo1.png");
                $(".pa").attr("src","/playChat/Public/Home/images/shouferizhibo.png");
                $(".meet").attr("src","/playChat/Public/Home/images/neibu.png");
                $(".public").css('display','block');
                $(".pay").css('display','none');
                $(".meeting").css('display','none');

            });
            $("#pa").click(function(){
                $(".pub").attr("src","/playChat/Public/Home/images/gongkaizhibo.png");
                $(".pa").attr("src","/playChat/Public/Home/images/shouferizhibo1.png");
                $(".meet").attr("src","/playChat/Public/Home/images/neibu.png");
                $(".public").css('display','none');
                $(".pay").css('display','block');
                $(".meeting").css('display','none');
            });
            $("#meet").click(function(){
                $(".pub").attr("src","/playChat/Public/Home/images/gongkaizhibo.png");
                $(".pa").attr("src","/playChat/Public/Home/images/shouferizhibo.png");
                $(".meet").attr("src","/playChat/Public/Home/images/neibu1.png");
                $(".public").css('display','none');
                $(".pay").css('display','none');
                $(".meeting").css('display','block');
            });
            $("#top-one").click(function () {
                $(".ball").fadeToggle();
            });
            $("#tab").click(function () {
                $(".ball-one").fadeToggle();
            })
        })
    </script>

	<!-- /主体 -->

	<!-- 底部 -->
	<!-- 这里放置共用页脚代码 -->
	

	
	<!-- /底部 -->
</body>
</html>