<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>漫步者M0</title>
	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/bootstrap-theme.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="/manbuweb/Public/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/style.css">
	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo U('Index/index');?>">漫步者音箱</a>
			</div>

			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo U('Index/index');?>">首页 <span class="sr-only">(current)</span></a></li>
					<li><a href="<?php echo U('User/login');?>">登录</a></li>
					<li><a href="<?php echo U('Parameter/index');?>">规格参数</a></li>
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="transparent-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="center-line">
						<div class="center-title">
							<h1 >智能 多用</h1>
							<h3>EDIFIER</h3>
							<div class="center-buy">
								<a href="#">BUY</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
	<div class="white-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="md4-left">
						<img src="/manbuweb/Public/img/bluetooth1.png">
						<p>通过蓝牙与手机和电脑连接，使用距离远，且箱体设计更为简洁。</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md4-center">
						<img src="/manbuweb/Public/img/35mmaux1.png">
						<p>有源2.0声道，3.5mm音频接口。采用全新的1.5英寸全频带铝振膜单元，钕铁硼磁路，内置360度反射式立体声扬声器系统，实现全范围收听，令音质更加出色。</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md4-right">
						<img src="/manbuweb/Public/img/fmradio1.png">
						<p>FM收音，每个夜晚，让您在舒缓的音乐中入眠。</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="line"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">     <!-- col-sm-12对手机平板适应布局-->
					<div class="history-left" id="imgLeft">
						<img src="/manbuweb/Public/img/history1.jpg">
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="history-left-title">
						<ul>
							<li>超大液晶显示屏</li>
							<li>内置数显闹钟</li>
							<li>多达5组的闹钟模式</li>
							<li>SD、USB、FM等音源均可作为闹铃</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="history-right">
						<img src="/manbuweb/Public/img/history2.jpg">
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="history-right-title">
						<ul>
							<li>时钟功能无比智能</li>
							<li>日期、时间随心调节，星期自动生成</li>
							<li>实用贪睡功能</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="history-left-title">
						<ul>
							<li>盲操作硅胶按键设计</li>
							<li>音箱顶部设置有音乐播放按键</li>
							<li>硅胶材质设计也使得手感舒适</li>
							<li>盲操作的可实现，让您随时随地都能操作精准</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="history-left" id="imgLeft">
						<img src="/manbuweb/Public/img/history3.jpg">
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="history-right-title">
						<ul>
							<li>宽电压电源适配器</li>
							<li>采用外接电源设计</li>
							<li>配备了宽电压设计的电源适配器</li>
							<li>在100-240V的电网中都能使用，贴心设计，享你所想</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="history-right">
						<img src="/manbuweb/Public/img/history4.jpg">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="line"></div>
				</div>
			</div>
			
		</div>

		<footer class="foot">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<p class="foot-title">Posted by:zengguangyi</p>
						<p>此网站仅供学习使用</p>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</footer>

		<div id="footbar-aa">
			<div id="footbar-bb">
				<div id="footbar-cc">
					<a href="javascript:;"></a>
				</div>
				<div id="footbar-left">
					<p>手机扫码浏览</p>
					<img src="/manbuweb/Public/img/gyblog.jpg">
				</div>
				<div id="footbar-right">
					<p>扫码关注微信</p>
					<img src="/manbuweb/Public/img/gyblog.jpg">
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="/manbuweb/Public/js/stylejs.js"></script>	
</body>
</html>