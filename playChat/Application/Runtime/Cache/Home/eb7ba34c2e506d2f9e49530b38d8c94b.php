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
    <!--底部功能-->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 ico1">
                    &nbsp;&nbsp;&nbsp;&nbsp;语音
                </div>
                <div class="col-xs-4 ico2">
                    &nbsp;&nbsp;&nbsp;&nbsp;文字
                </div>
                <div class="col-xs-4 ico3" id="last">
                    &nbsp;&nbsp;&nbsp;&nbsp;图片
                </div>
            </div>
        </div>
        <!--语音短录-->
        <div class="yu_yin">
            <div class="luyin">
                <div class="pull-left" style="border-right: 1px solid #bbb;">
                    <a href="#">短录&nbsp;&nbsp;
                    </a>
                </div>
                <div class="pull-right timer">
                    <a href="#">&nbsp;&nbsp;长录</a>
                </div>
            </div>
            <div class="tal">
                <p><img src="/playChat/Public/Home/images/anniu.png"></p>

                <p>按住最长录音60s</p>
            </div>
        </div>
        <!--语音长录-->
        <div class="chang_lu">
            <div class="luyin time">
                <div class="pull-left">
                    <a href="#">短录&nbsp;&nbsp;</a>
                </div>
                <div class="pull-right" style="border-left: 1px solid #bbb;">
                    <a href="#">&nbsp;&nbsp;长录</a>
                </div>
            </div>
            <div class="tal">
                <p><img src="/playChat/Public/Home/images/anniu.png"></p>

                <p>按住每60s自动发送录音</p>
            </div>
        </div>
        <!--文字-->
        <div class="wen_zi">
            <form class="form-inline">
                <button type="submit" class="btn btn-default" style="float: left;padding: 6px 8px;">返回</button>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="来说点什么吧">
                </div>
                <div class="smil" style="text-align: center;line-height: 34px"><img src="/playChat/Public/Home/images/biaoqing.png" style="height: 24px;"></div>
                <button  type="submit" class="btn btn-default bt1" style="float: right">发送</button>
            </form>
        </div>
        <!--图片-->
        <div class="tu_pian">
            <div class="pull-left">
                <a href="#" style="color: #292626">
                <img src="/playChat/Public/Home/images/tupian22222222.png">

                <P>图片</P>
                    </a>
            </div>
            <div class="pull-left">
                <a href="open_video.html" style="color: #292626">
                <img src="/playChat/Public/Home/images/shipin.png">
                <P>视频</P>
                </a>
            </div>
        </div>
    </nav>


	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <div class="container-fluid">
        <div class="person">
            <div class="pull-left"><img class="one" src="/playChat/Public/Home/images/mao.png">&nbsp;穿鞋子的猫&nbsp;<a href="play_room.html"><img
                    class="two" src="/playChat/Public/Home/images/zhibojian2222.png"></a></div>
            <div class="pull-right">&nbsp;&nbsp;&nbsp;<img src="/playChat/Public/Home/images/leijirenshu.png">&nbsp;累计人数:<span>364</span>
            </div>
        </div>
        <div class="sho" id="sho">
            本次直播开始于 <span>2016-03-11</span> <span>18:00</span>
        </div>

        <div class="bt bt8" id="bt">
            <a href="invite.html"><button class="btn btn-default" style="height: 40px;line-height: 40px;">邀请嘉宾</button></a>
        </div>
        <div class="play">
            <video width="100%" height="240" controls="controls" autoplay="autoplay">
                <source src="http://cmhsys.2k6k.com/1.mp4"
                        type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="talk">
            <h2>16:40</h2>
            <ul>
                <li><img class="one" src="/playChat/Public/Home/images/mao.png">&nbsp;&nbsp;<span>穿鞋子的猫</span>&nbsp;&nbsp;<span
                        class="pers">主持人</span></li>
                <li><img class="one" src="/playChat/Public/Home/images/mao.png">&nbsp;&nbsp;<span>穿鞋子的猫</span>&nbsp;&nbsp;<span
                        class="pers">嘉宾</span></li>
            </ul>
        </div>
        <!--刷新和加号-->
        <div class="refre">
            <div class="ref" ><img onclick="myRefresh()" src="/playChat/Public/Home/images/shuaxin.png"></div>
            <div class="add"><img src="/playChat/Public/Home/images/caozuo-.png"></div>
        </div>
    </div>
    <!--点击加号的内容-->
    <div class="add-function">
        <div class="func">
            <div class="top">
                <h2 class="pull-left">主持人</h2>

                <div class="pull-right">
                    <img class="one" src="/playChat/Public/Home/images/mao.png">

                    <p>穿鞋子的猫</p>
                </div>
            </div>
            <div class="row">
                <a href="#">
                    <div class="col-xs-4 one">
                        <p>禁言模式</p></div>
                </a>
                <a href="#">
                    <div class="col-xs-4 two">

                        <p>在线列表</p></div>
                </a>
                <a href="#">
                    <div class="col-xs-4 three">
                        <p>导出语音</p></div>
                </a>
            </div>
            <div class="row">
                <a href="#">
                    <div class="col-xs-4 four">

                        <p>自动播放</p></div>
                </a>
                <a href="#">
                    <div class="col-xs-4 five">

                        <p>直播介绍</p></div>
                </a>
                <a href="#">
                    <div class="col-xs-4 six">

                        <p>结束直播</p></div>
                </a>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
              function myRefresh(){
                  window.location.reload();
              }
            $("#sho").click(function () {
                $("#bt").toggle();
            });
//            点击加号显示功能
            $(".add").click(function () {
                $(".add-function").toggle();

            });
//            $(".one").click(function () {
//                $(this).css({
//                    'background': 'url("/playChat/Public/Home/images/jingyanmoishi.png") no-repeat 50% 4%',
//                    'background-size': '34%'
//                });
            //   点击任何位置加号的内容关闭
            $(".add-function").click(function () {
                $(".add-function").hide();
            });
            //号航的语音,文字图片显示和隐藏
            function hideButton() {
                $(".chang_lu").hide();
                $(".yu_yin").hide();
                $(".wen_zi").hide();
                $(".tu_pian").hide();
            }

            //点击语音激活状态
            $(".ico1").click(function () {
                $(this).css({
                    'color': '#00b0f0',
                    'background': 'url("/playChat/Public/Home/images/yuyin1.png") no-repeat 28% 50%',
                    'background-size': '18%'
                });
                $(".ico2").css({
                    'color': '#888888',
                    'background': 'url("/playChat/Public/Home/images/wenzi1.png") no-repeat 28% 50%',
                    'background-size': '20%'
                });
                $(".ico3").css({
                    'color': '#888888',
                    'background': 'url("/playChat/Public/Home/images/tupian.png") no-repeat 28% 50%',
                    'background-size': '18%'
                });
                hideButton();
                $(".yu_yin").toggle();
            });
            //点击长录
            $(".timer").click(function () {
                hideButton();
                $(".chang_lu").show();

            });
            //点击短录
            $(".time").click(function () {
                hideButton();
                $(".yu_yin").show();
            });
            //点击文字激活状态
            $(".ico2").click(function () {
                $(this).css({
                    'color': '#00b0f0',
                    'background': 'url("/playChat/Public/Home/images/wenzi.png") no-repeat 28% 50%',
                    'background-size': '20%'
                });
                $(".ico1").css({
                    'color': '#888',
                    'background': 'url("/playChat/Public/Home/images/yuyin.png") no-repeat 28% 50%',
                    'background-size': '18%'
                });
                $(".ico3").css({
                    'color': '#888888',
                    'background': 'url("/playChat/Public/Home/images/tupian.png") no-repeat 28% 50%',
                    'background-size': '18%'
                });
                hideButton();
                $(".wen_zi").toggle();
            });
            //点击图片激活状态
            $(".ico3").click(function () {
                $(this).css({
                    'color': '#00b0f0',
                    'background': 'url("/playChat/Public/Home/images/tupian1.png") no-repeat 28% 50%',
                    'background-size': '18%'
                });
                $(".ico1").css({
                    'color': '#888',
                    'background': 'url("/playChat/Public/Home/images/yuyin.png") no-repeat 28% 50%',
                    'background-size': '18%'
                });
                $(".ico2").css({
                    'color': '#888888',
                    'background': 'url("/playChat/Public/Home/images/wenzi1.png") no-repeat 28% 50%',
                    'background-size': '20%'
                });

                hideButton();
                $(".tu_pian").toggle();
            });

        });
    </script>

	<!-- /主体 -->

	<!-- 底部 -->
	<!-- 这里放置共用页脚代码 -->
	
    <!-- 这里放置需要在公共footer中追加的代码 -->
    <!--底部功能-->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 ico1">
                    &nbsp;&nbsp;&nbsp;&nbsp;语音
                </div>
                <div class="col-xs-4 ico2">
                    &nbsp;&nbsp;&nbsp;&nbsp;文字
                </div>
                <div class="col-xs-4 ico3" id="last">
                    &nbsp;&nbsp;&nbsp;&nbsp;图片
                </div>
            </div>
        </div>
        <!--语音短录-->
        <div class="yu_yin">
            <div class="luyin">
                <div class="pull-left" style="border-right: 1px solid #bbb;">
                    <a href="#">短录&nbsp;&nbsp;
                    </a>
                </div>
                <div class="pull-right timer">
                    <a href="#">&nbsp;&nbsp;长录</a>
                </div>
            </div>
            <div class="tal">
                <p><img src="/playChat/Public/Home/images/anniu.png"></p>

                <p>按住最长录音60s</p>
            </div>
        </div>
        <!--语音长录-->
        <div class="chang_lu">
            <div class="luyin time">
                <div class="pull-left">
                    <a href="#">短录&nbsp;&nbsp;</a>
                </div>
                <div class="pull-right" style="border-left: 1px solid #bbb;">
                    <a href="#">&nbsp;&nbsp;长录</a>
                </div>
            </div>
            <div class="tal">
                <p><img src="/playChat/Public/Home/images/anniu.png"></p>

                <p>按住每60s自动发送录音</p>
            </div>
        </div>
        <!--文字-->
        <div class="wen_zi">
            <form class="form-inline">
                <button type="submit" class="btn btn-default" style="float: left;padding: 6px 8px;">返回</button>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="来说点什么吧">
                </div>
                <div class="smil" style="text-align: center;line-height: 34px"><img src="/playChat/Public/Home/images/biaoqing.png" style="height: 24px;"></div>
                <button  type="submit" class="btn btn-default bt1" style="float: right">发送</button>
            </form>
        </div>
        <!--图片-->
        <div class="tu_pian">
            <div class="pull-left">
                <a href="#" style="color: #292626">
                <img src="/playChat/Public/Home/images/tupian22222222.png">

                <P>图片</P>
                    </a>
            </div>
            <div class="pull-left">
                <a href="open_video.html" style="color: #292626">
                <img src="/playChat/Public/Home/images/shipin.png">
                <P>视频</P>
                </a>
            </div>
        </div>
    </nav>


	<!-- /底部 -->
</body>
</html>