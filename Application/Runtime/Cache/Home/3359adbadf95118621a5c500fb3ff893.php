<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>漫步者|注册</title>
  <link rel="stylesheet" type="text/css" href="/manbuweb/Public/css/loginstyle.css">
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
</head>
<body class="align">

  <div class="site__container">

    <div class="grid__container">

    <div class="form__field">
        <div id="register_notice"></div>
      </div>

      <form id="register_form" action="<?php echo U('User/register');?>" method="post" class="form form--login">

        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input type="text" class="form__input" id="register_username" name="register_username" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input type="password" class="form__input" id="register_userpw" name="register_userpw" placeholder="Password" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input type="password" class="form__input" id="register_userpw2" name="register_userpw2" placeholder="Password Again" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Email</span></label>
          <input type="password" class="form__input" id="register_usermail" name="register_usermail" placeholder="Email" required>
        </div>

        <div class="form__field">
          <input id="register_btn" type="button" value="Register">
        </div>

      </form>

    </div>

  </div>
  
  <script type="text/javascript">
    $(function(){
      $('#register_btn').click(function(){
      // $username=$('#login_username').val();
      // $userpw=$('#login_userpw').val();

      var login_arr=$('#register_form').serialize();
      var $action=$('#register_form').attr('action');
      $.post($action,login_arr,function(data){
        $('#register_notice').html(data.info);
      });
    })
    })
  </script>
</body>
</html>