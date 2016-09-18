<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
</head>
<body style='background-color:#F7F7F7;'>
<!-- 导航  -->
   <nav class="navbar navbar-blue navbar-fixed-top" role="navigation"> 
    <div class="container"> 
    <div class="navbar-header"> 
        <button type="button" class="navbar-toggle" data-toggle="collapse" 
                data-target="#example-navbar-collapse"> 
            <span class="sr-only">切换导航</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
        </button> 
        <a class="navbar-brand" href="/index"><img src="{{ asset('images/logo.png') }}" width='110px'></a> 
    </div> 
    <div class="collapse navbar-collapse" id="example-navbar-collapse"> 
        <ul class="nav navbar-nav navbar-right"> 
            <li><a href="#" class='active'>首页</a></li>
            <li><a href="#">发职位</a></li>
            <li><a href="#">找简历</a></li>
            <li><a href="#">职位管理</a></li>
            <li><a href="#">简历管理</a></li>
            <li><a href="#">PRO+</a></li>
            <li><a href="#">薪酬报告</a></li>
        </ul> 
    </div>
    </div> 
</nav><!-- 导航end -->
<div class="container-fluid aside-xxl" style='margin-top:65px;max-width:90%;margin-bottom:5%;'>
@yield('content')
</div>

<!-- foot -->
<div id="footer" class="container">
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="navbar-inner navbar-content-center">
        <p style="padding:10px;">
			<div class="container">
				<ul class='list-inline' style='font-size:12px;'>
				  <li><span class='glyphicon glyphicon-phone-alt'></span> 服务热线：400-6838-789 或 010-56905000</li>
				  <li><a href='#'>猎聘网简介</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>加入猎聘网</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>创新优势</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>用户协议</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>媒体报道</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>联系我们</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>网站地图</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>网站合作</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>意见反馈</a></li>
				  <li><span style='color:#ddd'>|</span></li>
				  <li><a href='#'>猎聘网</a></li>
				</ul>
			</div>
        </p>
    </div>
</nav>

<!-- foot end -->
<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> 

<script>
	$('.navbar-nav a').click(function (){
		$('.navbar-nav a').removeClass('active');
		$(this).addClass('active');
	});
</script>
</div>
</body>
</html>