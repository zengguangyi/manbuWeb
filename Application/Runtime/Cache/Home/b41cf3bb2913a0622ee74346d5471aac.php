<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>漫步者|规格参数</title>
	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/bootstrap-theme.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="/manbuweb/Public/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/parameterstyle.css">
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
					<li ><a href="<?php echo U('Index/index');?>">首页 </a></li>
					<li><a href="<?php echo U('User/login');?>">登录</a></li>
					<li class="active"><a href="<?php echo U('Parameter/index');?>">规格参数 <span class="sr-only">(current)</span></a></li>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table id="parameter-table">
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "暂时没数据" ;else: foreach($__LIST__ as $key=>$datalist): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($datalist["parametername"]); ?></td>
						<td><?php echo ($datalist["parameternum"]); ?></td>
					</tr><?php endforeach; endif; else: echo "暂时没数据" ;endif; ?>
				</table>
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
	</div>
</body>
</html>