<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>数据时代</title>
    <meta http-equiv="X-UA-Compatible" content="IE=8">
	<link rel="stylesheet" type="text/css" href="/datamath/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/datamath/Public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/datamath/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/datamath/Public/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/datamath/Public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/datamath/Public/css/ngDialog.min.css">
    <link rel="stylesheet" type="text/css" href="/datamath/Public/css/ngDialog-theme-default.min.css">

	<script type="text/javascript" src="/datamath/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/datamath/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/datamath/Public/js/bootstrap.js"></script>
	<script type="text/javascript" src="/datamath/Public/js/myjs.js"></script>
	<script type="text/javascript" src="/datamath/Public/js/npm.js"></script>
	<script type="text/javascript" src="/datamath/Public/js/angular.min.js"></script>
    <script type="text/javascript" src="/datamath/Public/js/ngDialog.min.js"></script>

</head>
<body id="mainPage">
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div id="title_panel">
    <div id="left" style="float: left;">
        <a id="homePage" href="/Home/Index/index">数立方</a>
        <a id="titleNav" href="#" onmouseover="navListover()" onmouseleave="navListleave()"><span class="glyphicon glyphicon-th"></span></a>
    </div>
    <div id="right" style="float: right;">
        <a id="city">上海</a>
        <a id="chooseCity" href="#">[选择城市]</a>
        <?php if(!isset($_SESSION['nickname'])): ?><a  href="/Home/Index/login">登录注册</a>
            <?php else: ?>
            <a href="#">welcome to home,<?php echo (session('nickname')); ?>!</a>
            <a href="/Home/Index/quit">登出</a><?php endif; ?>
    </div>
</div>
</body>
</html>


<div id="navList"  onmouseover="chkIn()" onmouseout="chkOut()" style="display: none">
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" style="width: 100%;">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner" style="height: 400px;width: 100%;">
        	<div class="item active" style="height: 100%;width: 100%;">
            	<img class="img-responsive" src="/datamath/Public/img/banner1.jpg" alt="First slide" style="height: 100%;width: 100%;">
        	</div>
        	<div class="item"  style="height: 100%;width: 100%;">
            	<img class="img-responsive" src="/datamath/Public/img/banner2.jpg" alt="Second slide" style="height: 100%;width: 100%;">
        	</div>
        	<div class="item"  style="height: 100%;width: 100%;">
            	<img class="img-responsive" src="/datamath/Public/img/banner3.jpg" alt="Third slide" style="height: 100%;width: 100%;">
        	</div>
	</div>
</div>
<div style="height: 20px;"></div>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div id="matrix_panel" style="background: url(/datamath/Public/img/banner4.jpg) no-repeat">
    <div id="matrixContainer">
        <ul>
            <li id="m1" style="opacity: 0.4" href="#">
                <a onmouseover="rollback(1)" onmouseleave="turnback(1)">
                    <div id="front" style="display:block;">
                        <span >D</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(1)">
                        <span style="cursor:pointer">d</span>
                    </div>
                </a>
            </li>
            <li id="m2" style="opacity: 0.1" href="#">
                <a onmouseover="rollback(2)" onmouseleave="turnback(2)">
                    <div id="front" style="display:block;">
                        <span>A</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(2)">
                        <span>a</span>
                    </div>
                </a>
            </li>
            <li id="m3" style="opacity: 0.2" href="#">
                <a onmouseover="rollback(3)" onmouseleave="turnback(3)">
                    <div id="front" style="display:block;">
                        <span>T</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(3)">
                        <span>t</span>
                    </div>
                </a>
            </li>
            <li id="m4" style="opacity: 0.1" href="#">
                <a onmouseover="rollback(4)" onmouseleave="turnback(4)">
                    <div id="front" style="display:block;">
                        <span>A</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(4)">
                        <span>a</span>
                    </div>
                </a>
            </li>
            <li id="m10" style="opacity: 0.1" href="#">
                <a onmouseover="rollback(10)" onmouseleave="turnback(10)">
                    <div id="front" style="display:block;">
                        <span>I</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(10)">
                        <span>i</span>
                    </div>
                </a>
            </li>
            <li id="m_search">
                <div style="margin: auto;width: 50%;height: 235px;">
                    <h2 style="width: 100%;text-align: center;color: #FFFFFF;font-size: 20px">数学是宇宙的语言</h2>
                    <h2 style="width: 100%;text-align: center;color: #FFFFFF;font-size: 25px">有种数学的美叫随机</h2>
                    <div style="text-align: center">
                        <input type="button" class="btn btn-info btn-lg" onclick="randomStart()" value="感受下随机的乐趣">
                    </div>
                </div>
            </li>
            <li id="m5" style="opacity: 0.1" href="#">
                <a onmouseover="rollback(5)" onmouseleave="turnback(5)">
                    <div id="front" style="display:block;">
                        <span>S</span>
                    </div>
                    <div id="back" style="display: none; onclick="ran(5)" >
                        <span>s</span>
                    </div>
                </a>
            </li>
            <li id="m9" style="opacity: 0.1" href="#">
                <a onmouseover="rollback(9)" onmouseleave="turnback(9)">
                    <div id="front" style="display:block;">
                        <span>M</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(9)">
                        <span>m</span>
                    </div>
                </a>
            </li>
            <li id="m8" style="opacity: 0.4" href="#">
                <a onmouseover="rollback(8)" onmouseleave="turnback(8)">
                    <div id="front" style="display:block;">
                        <span>A</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(8)">
                        <span>a</span>
                    </div>
                </a>
            </li>
            <li id="m7" style="opacity: 0.1" href="#">
                <a onmouseover="rollback(7)" onmouseleave="turnback(7)">
                    <div id="front" style="display:block;">
                        <span>T</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(7)">
                        <span>t</span>
                    </div>
                </a>
            </li>
            <li id="m6" style="opacity: 0.2" href="#">
                <a onmouseover="rollback(6)" onmouseleave="turnback(6)">
                    <div id="front" style="display:block;">
                        <span>H</span>
                    </div>
                    <div id="back" style="display: none;" onclick="ran(6)">
                        <span>h</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div id="foot_panel">
    <div style="text-align: center">
        <a style="cursor: pointer;decoration:none;" href="http://www.miitbeian.gov.cn" target="_blank" >
            <img src="/datamath/Public/img/gh.png" style="height:20px;">
            <span style="font-size: 10px">苏ICP备 17036358</span>
        </a>
    </div>
</div>
</body>
</html>
</body>
</html>