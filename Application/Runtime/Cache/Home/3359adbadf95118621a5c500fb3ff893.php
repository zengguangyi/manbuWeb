<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>漫步者|注册</title>
  <link rel="stylesheet" type="text/css" href="/manbuWeb/Public/css/loginstyle.css">
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
</head>
<body class="align">

  <div class="site__container">

    <div class="grid__container">

    <div class="form__field">
        <div id="register_notice" style="text-align:center"></div>
      </div>

      <form id="register_form" action="<?php echo U('User/register');?>" method="post" class="form form--login">

        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input type="text" class="form__input" id="register_username" name="register_username" placeholder="Username  4-20英文或数字" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input type="password" class="form__input" id="register_userpw" name="register_userpw" placeholder="Password  8-16" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input type="password" class="form__input" id="register_userpw2" name="register_userpw2" placeholder="Password Again" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-mobile-phone" for="login__mobile"><span class="hidden">Mobile</span></label>
          <input type="text" class="form__input" id="register_usermobile" name="register_usermobile" placeholder="Mobile" required>
        </div>


        <div class="form__field">
          <label class="fontawesome-envelope" for="login__password"><span class="hidden">Email</span></label>
          <input type="text" class="form__input" id="register_usermail" name="register_usermail" placeholder="Email" required>
        </div>

        <div class="form__field">
          <input id="register_btn" type="button" value="Register">
        </div>

      </form>

    </div>

  </div>

  <script type="text/javascript" src="/manbuWeb/Public/js/login-style.js"></script> 
  
</body>
</html>