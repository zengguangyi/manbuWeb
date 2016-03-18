<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>漫步者|登录</title>
  <link rel="stylesheet" type="text/css" href="/manbuWeb/Public/css/loginstyle.css">
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
</head>
<body class="align">

  <div class="site__container">

    <div class="grid__container">

    <div class="form__field">
        <div id="login_notice"></div>
      </div>

      <form id="login_form" action="<?php echo U('User/login');?>" method="post" class="form form--login">

        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input type="text" class="form__input" id="login_username" name="login_username" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input type="password" class="form__input" id="login_userpw" name="login_userpw" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input id="login_btn" type="button" value="Sign In">
        </div>

      </form>

      <p class="text--center">Not a member? <a href="<?php echo U('User/register');?>">Sign up now</a> <span class="fontawesome-arrow-right"></span></p>

    </div>

  </div>
  
  <script type="text/javascript" src="/manbuWeb/Public/js/login-style.js"></script> 

</body>
</html>