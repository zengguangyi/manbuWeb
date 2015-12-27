<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>产品介绍</title>

	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/bootstrap-theme.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="/manbuweb/Public/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/lightbox2/css/lightbox.css">
	
	<link rel="stylesheet" href="/manbuweb/Public/fullpage/css/jquery.fullPage.css">
	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/productstyle.css">

</head>
<body>

	<div id="dowebok">
		<div class="section page1">
			<div class="container-fluid">
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
						<div class="row">
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
									<li><a href="<?php echo U('User/login');?>" class="popup">登录/注册</a></li>
									<li><a href="<?php echo U('Parameter/index');?>">规格参数</a></li>
									<li><a href="<?php echo U('Product/index');?>">产品介绍</a></li>
									<li ><a data-toggle="collapse" href="#collapseThings" aria-expanded="true" aria-controls="collapseThings">更多款型</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="container-fluid">
						<div class="row">
							<div class="collapse" id="collapseThings">
								<!-- 隐藏的关于栏 -->
								<div class="row collapse-box">
									<div class="col-md-4"></div>
									<div class="col-md-1 col-sm-6"><a href="#"><strong>手机耳机</strong></a></div>
									<div class="col-md-1 col-sm-6"><a href="#"><strong>游戏耳机</strong></a></div>
									<div class="col-md-1 col-sm-6"><a href="#"><strong>电脑音箱</strong></a></div>
									<div class="col-md-1 col-sm-6"><a href="#"><strong>家居音箱</strong></a></div>
									<div class="col-md-4"></div>
								</div>
								<div class="row collapse-box">
									<div class="col-md-4"></div>
									<div class="col-md-1 col-sm-6"><a href="#"><img src="/manbuweb/Public/img/collapseThings1.png"></a></div>
									<div class="col-md-1 col-sm-6"><a href="#"><img src="/manbuweb/Public/img/collapseThings2.png"></a></div>
									<div class="col-md-1 col-sm-6"><a href="#"><img src="/manbuweb/Public/img/collapseThings3.png"></a></div>
									<div class="col-md-1 col-sm-6"><a href="#"><img src="/manbuweb/Public/img/collapseThings4.png"></a></div>
									<div class="col-md-4"></div>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
			<div class="page1-center-txt">
				<div class=".container-fluid">
					<div class="row">
						<h3>为现代生活而设计</h3>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<ul id="page1-ul">
								<li>液晶显示器显示音频输入,日期、时间、活跃警报,以及蓝牙连接的信号强度和调频收音机。</li>
								<li>两个360°全方位的扬声器。</li>
								<li>国际调频无线电频率选择。</li>
								<li>5个预设警报报警,从周一到周五或周一至周日。</li>
							</ul>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<img src="/manbuweb/Public/img/product1.jpg" class="img-responsive" id="page1-iamge">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section page2">
			<div class=".container-fluid">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div id="page2-table">
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<tr>
										<td>总功率输出: </td>
										<td>RMS 4W x 2</td>
									</tr>
									<tr>
										<td>信噪比: </td>
										<td>≥90dBA</td>
									</tr>
									<tr>
										<td>失真: </td>
										<td>≤0.5%</td>
									</tr>
									<tr>
										<td>Chanel separation: </td>
										<td>≥45dB</td>
									</tr>
									<tr>
										<td>蓝牙配置文件支持: </td>
										<td>A2DP, AVRCA</td>
									</tr>
									<tr>
										<td>全范围单元: </td>
										<td>1½ inch (40mm), 磁屏蔽, 8Ω</td>
									</tr>
									<tr>
										<td>尺寸: </td>
										<td>130mm x 126mm x 89mm (WxHxD)</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div id="page2-iamge">
							<img src="/manbuweb/Public/img/product2.png" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section page3">
			<div class="gallery_box">
				<div class="grid" id="masonry">
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage1.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage1.jpg"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage2.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage2.jpg"></a>
					</div>
					<div class="grid-item grid-item-width2">
						<a href="/manbuweb/Public/img/productPage3.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage3.jpg"></a>
					</div>
					
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage4.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage4.jpg"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage5.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage5.jpg"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage6.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage6.jpg"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage7.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage7.jpg"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage8.png" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage8.png"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage9.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage9.jpg"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage10.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage10.jpg"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage11.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage11.jpg"></a>
					</div>
					<div class="grid-item">
						<a href="/manbuweb/Public/img/productPage12.jpg" data-lightbox="image-1" data-title="My caption"><img src="/manbuweb/Public/img/productPage12.jpg"></a>
					</div>
				</div>
			</div>

			
		</div>
	</div>

	
	<script src="/manbuweb/Public/fullpage/js/jquery.fullPage.js"></script>
	<script src="/manbuweb/Public/js/imagesloaded.pkgd.min.js"></script>
	<script src="/manbuweb/Public/js/masonry.js"></script>
	<script type="text/javascript" src="/manbuweb/Public/lightbox2/js/lightbox.js"></script>	
	<script type="text/javascript" src="/manbuweb/Public/js/productjs.js"></script>
</body>
</html>