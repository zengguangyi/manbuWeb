<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en"><head>
<meta charset="utf-8">
<title>Bootstrap Admin</title>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/manbuweb/Public/admin/lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="/manbuweb/Public/admin/lib/font-awesome/css/font-awesome.css">

<script src="/manbuweb/Public/admin/lib/jquery-1.11.1.min.js" type="text/javascript"></script>

<script src="/manbuweb/Public/admin/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function() {
    $(".knob").knob();
  });
</script>


<link rel="stylesheet" type="text/css" href="/manbuweb/Public/admin/stylesheets/theme.css">
<link rel="stylesheet" type="text/css" href="/manbuweb/Public/admin/stylesheets/premium.css">

</head>
<body class=" theme-blue">

  <!-- Demo page code -->

  <script type="text/javascript">
    $(function() {
      var match = document.cookie.match(new RegExp('color=([^;]+)'));
      if(match) var color = match[1];
      if(color) {
        $('body').removeClass(function (index, css) {
          return (css.match (/\btheme-\S+/g) || []).join(' ')
        })
        $('body').addClass('theme-' + color);
      }

      $('[data-popover="true"]').popover({html: true});
      
    });
  </script>
  <style type="text/css">
    #line-chart {
      height:300px;
      width:800px;
      margin: 0px auto;
      margin-top: 1em;
    }
    .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
      color: #fff;
    }
  </style>

  <script type="text/javascript">
    $(function() {
      var uls = $('.sidebar-nav > ul > *').clone();
      uls.addClass('visible-xs');
      $('#main-menu').append(uls.clone());
    });
  </script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <!-- Le fav and touch icons -->
      <link rel="shortcut icon" href="../assets/ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
      

      <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
      <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
      <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
      <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
      <!--[if (gt IE 9)|!(IE)]><!--> 
      
      <!--<![endif]-->

      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Guangyi</span></a></div>

          <div class="navbar-collapse collapse" style="height: 1px;">
            <ul id="main-menu" class="nav navbar-nav navbar-right">
              <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> Guangyi Zeng
                  <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu">
                  <li><a href="./">我的帐户</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">管理面板</li>
                  <li><a href="./">用户</a></li>
                  <li><a href="./">安全</a></li>
                  <li><a tabindex="-1" href="./">付款</a></li>
                  <li class="divider"></li>
                  <li><a tabindex="-1" href="sign-in.html">注销</a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
      </div>
      

      <div class="sidebar-nav">
        <ul>
          <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> 仪表板<i class="fa fa-collapse"></i></a></li>
          <li><ul class="dashboard-menu nav nav-list collapse in">
            <li><a href="index.html"><span class="fa fa-caret-right"></span> 主要</a></li>
            <li ><a href="<?php echo U('User/lists');?>"><span class="fa fa-caret-right"></span> 用户列表</a></li>
            <li ><a href="user.html"><span class="fa fa-caret-right"></span> 用户配置文件</a></li>
            <li ><a href="media.html"><span class="fa fa-caret-right"></span> 媒体</a></li>
            <li ><a href="calendar.html"><span class="fa fa-caret-right"></span> 日历</a></li>
          </ul></li>

          <li><a href="#" data-target=".dashboard-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> 商品<i class="fa fa-collapse"></i></a></li>
          <li><ul class="dashboard-menu nav nav-list collapse in">
            
            <li ><a href="<?php echo U('Goods/lists');?>"><span class="fa fa-caret-right"></span> 商品列表</a></li>
            <li ><a href="<?php echo U('Goods/add');?>"><span class="fa fa-caret-right"></span> 新增商品</a></li>

          </ul></li>

          <li data-popover="true" data-content="Items in this group require a <strong><a href='http://portnine.com/bootstrap-themes/aircraft' target='blank'>premium license</a><strong>." rel="popover" data-placement="right"><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-fighter-jet"></i> 高级功能<i class="fa fa-collapse"></i></a></li>
          <li><ul class="premium-menu nav nav-list collapse">
            <li class="visible-xs visible-sm"><a href="#">- 高级功能需要许可证 -</a></span>
              <li ><a href="premium-profile.html"><span class="fa fa-caret-right"></span> 增强型</a></li>
              <li ><a href="premium-blog.html"><span class="fa fa-caret-right"></span> 博客</a></li>
              <li ><a href="premium-blog-item.html"><span class="fa fa-caret-right"></span> 博客页面</a></li>
              <li ><a href="premium-pricing-tables.html"><span class="fa fa-caret-right"></span> 定价表</a></li>
              <li ><a href="premium-upgrade-account.html"><span class="fa fa-caret-right"></span> 升级帐户</a></li>
              <li ><a href="premium-widgets.html"><span class="fa fa-caret-right"></span> 窗口小部件</a></li>
              <li ><a href="premium-timeline.html"><span class="fa fa-caret-right"></span> 活动时间线</a></li>
              <li ><a href="premium-users.html"><span class="fa fa-caret-right"></span> 增强用户列表</a></li>
              <li ><a href="premium-media.html"><span class="fa fa-caret-right"></span> 增强媒体</a></li>
              <li ><a href="premium-invoice.html"><span class="fa fa-caret-right"></span> 发票联</a></li>
              <li ><a href="premium-build.html"><span class="fa fa-caret-right"></span> 高级工具</a></li>
              <li ><a href="premium-colors.html"><span class="fa fa-caret-right"></span> 附加颜色主题</a></li>
            </ul></li>

            <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> 帐户 <span class="label label-info">+3</span></a></li>
            <li><ul class="accounts-menu nav nav-list collapse">
              <li ><a href="sign-in.html"><span class="fa fa-caret-right"></span> 登录</a></li>
              <li ><a href="sign-up.html"><span class="fa fa-caret-right"></span> 注册</a></li>
              <li ><a href="reset-password.html"><span class="fa fa-caret-right"></span> 重置密码</a></li>
            </ul></li>

            <li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> 法律<i class="fa fa-collapse"></i></a></li>
            <li><ul class="legal-menu nav nav-list collapse">
              <li ><a href="privacy-policy.html"><span class="fa fa-caret-right"></span> 隐私政策</a></li>
              <li ><a href="terms-and-conditions.html"><span class="fa fa-caret-right"></span> 条款和条件</a></li>
            </ul></li>

            <li><a href="help.html" class="nav-header"><i class="fa fa-fw fa-question-circle"></i> Help</a></li>
            <li><a href="faq.html" class="nav-header"><i class="fa fa-fw fa-comment"></i> Faq常见问题解答</a></li>
            <li><a href="http://portnine.com/bootstrap-themes/aircraft" class="nav-header" target="blank"><i class="fa fa-fw fa-heart"></i> Get Premium</a></li>
          </ul>
        </div>
        
	<div class="content">
		<div class="header">

			<h1 class="page-title">商品</h1>
			<ul class="breadcrumb">
				<li><a href="index.html">主页</a> </li>
				<li class="active">商品列表</li>
			</ul>

		</div>
		<div class="main-content">

			<div class="btn-toolbar list-toolbar">
				<button class="btn btn-primary"><i class="fa fa-plus"></i> New User</button>
				<button class="btn btn-default">Import</button>
				<button class="btn btn-default">Export</button>
				<div class="btn-group">
				</div>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>商品名</th>
						<th>商品价格</th>
						<th>创建时间</th>
						<th>更新时间</th>

						<th style="width: 3.5em;">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($userlists["lists"])): foreach($userlists["lists"] as $key=>$ul): ?><tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<a href="<?php echo U('User/edit',array('id'=>$ul['userid']));?>"><i class="fa fa-pencil"></i></a>
								<a href="#myModal<?php echo ($ul['userid']); ?>" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>

								<div class="modal small fade" id="myModal<?php echo ($ul['userid']); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 id="myModalLabel">删除	消息提示</h3>
											</div>
											<div class="modal-body">
												<p class="error-text"><i class="fa fa-warning modal-icon"></i>您确定要删除该用户吗?<br>这是不可回退操作.</p>
											</div>
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">取消</button>
												<button onclick="window.location.href='<?php echo U('User/delete',array('id'=>$ul['userid']));?>'" class="btn btn-danger" data-dismiss="modal">删除</button>
											</div>
										</div>
									</div>
								</div>

							</td>
						</tr><?php endforeach; endif; ?>
					<tfoot>
						<th colspan="6"><?php echo ($userlists["page"]); ?></th>
					</tfoot>
				</tbody>
			</table>

			<footer>
				<hr>

				<!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
				<p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
				<p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
			</footer>
		</div>
	</div>


        <script src="/manbuweb/Public/admin/lib/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
          $("[rel=tooltip]").tooltip();
          $(function() {
            $('.demo-cancel-click').click(function(){return false;});
          });
        </script>
        
        <!--一些jquery拦截的ajax返回数据-->
        <script src="/manbuweb/Public/js/login-style.js"></script>
      </body>
      </html>