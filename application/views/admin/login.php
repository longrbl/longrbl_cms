<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>后台管理系统</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url('js/amazeui.min.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/amazeui.min.css')?>">
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<?php if(!$user){?>
    <div class="am-alert am-alert-danger" data-am-alert style="position:fixed;top:100px;left:40%;">
        <button type="button" class="am-close">&times;</button>
        <p>你的用户名或密码错误，在或者你被管理员禁止登录，请重新尝试提交</p>
    </div>
<?php }?>
<div class="header">
  <div class="am-g">
    <h1>登录后台系统</h1>
    <p>Login background system<br/>权限管理，系统基础设置，角色管理</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
       <form method="post" class="am-form">
      <label for="email">用户名:</label>
      <input type="text" name="name"  value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="mima"  value="">
      <br>

      <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label>
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
        <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr">
      </div>
    </form>
  </div>
</div>
</body>
</html>
