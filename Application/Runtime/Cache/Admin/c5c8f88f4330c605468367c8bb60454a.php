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

			<h1 class="page-title">Edit User</h1>
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a> </li>
				<li><a href="users.html">Users</a> </li>
				<li class="active"><?php echo ($user_info['username']); ?></li>
			</ul>

		</div>
		<div class="main-content">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#home" data-toggle="tab">配置信息</a></li>
				<li><a href="#profile" data-toggle="tab">修改密码</a></li>
			</ul>

			<div class="row">
				<div class="col-md-4">
					<br>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active in" id="home">
							<div id="edit-notice"></div>
							<form id="edit-tab" action="<?php echo U('User/edit',array("id"=>$user_info['userid']));?>" method="post">
								<div class="form-group">
									<label>用户名</label>
									<input type="text" name="edit_username" value="<?php echo ($user_info['username']); ?>" class="form-control" disabled="true">
								</div>
								
								<div class="form-group">
									<label>手机号码</label>
									<input type="text" name="edit_usermobile" value="<?php echo ($user_info['usermobile']); ?>" class="form-control">
								</div>

								<div class="form-group">
									<label>邮箱</label>
									<input type="text" name="edit_usermail" value="<?php echo ($user_info['usermail']); ?>" class="form-control">
								</div>

								<!-- <div class="form-group">
									<label>地址</label>
									<textarea value="Smith" rows="3" class="form-control">2817 S 49th
										Apt 314
										San Jose, CA 95101
									</textarea>
								</div>

								<div class="form-group">
									<label>Time Zone</label>
									<select name="DropDownTimezone" id="DropDownTimezone" class="form-control">
										<option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
										<option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
										<option value="-10.0">(GMT -10:00) Hawaii</option>
										<option value="-9.0">(GMT -9:00) Alaska</option>
										<option selected="selected" value="-8.0">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
										<option value="-7.0">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
										<option value="-6.0">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
										<option value="-5.0">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
										<option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
										<option value="-3.5">(GMT -3:30) Newfoundland</option>
										<option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
										<option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
										<option value="-1.0">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
										<option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
										<option value="1.0">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
										<option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
										<option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
										<option value="3.5">(GMT +3:30) Tehran</option>
										<option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
										<option value="4.5">(GMT +4:30) Kabul</option>
										<option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
										<option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
										<option value="5.75">(GMT +5:45) Kathmandu</option>
										<option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
										<option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
										<option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
										<option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
										<option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
										<option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
										<option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
										<option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
									</select>
								</div> -->
								<div class="btn-toolbar list-toolbar">
									<input type="button" value="修改" class="btn btn-primary" id="edit-btn"><!-- <i class="fa fa-save"></i> -->
									
								</div>
							</form>
						</div>

						<div class="tab-pane fade" id="profile">
							<div id="edit-notice2"></div>
							<form id="edit-tab2" action="<?php echo U('User/editpw',array("id"=>$user_info['userid']));?>" method="post">
								<div class="form-group">
									<label>原密码</label>
									<input type="password" name="edit-userpw" class="form-control">
								</div>
								<div class="form-group">
									<label>新密码</label>
									<input type="password" name="edit-newuserpw" class="form-control">
								</div>
								<div class="form-group">
									<label>确认新密码</label>
									<input type="password" name="edit-newuserpw2" class="form-control">
								</div>
								<div>
									<input type="button" value="修改" class="btn btn-primary" id="edit-btn2">
								</div>
							</form>
						</div>
					</div>

					<!-- <div class="btn-toolbar list-toolbar">
						<button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
						<a href="#myModal" data-toggle="modal" class="btn btn-danger">Delete</a>
					</div> -->
				</div>
			</div>

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