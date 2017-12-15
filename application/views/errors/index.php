<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>后台系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="<?php echo base_url('css/amazeui.min.css')?>">

 <style>
  .wangztaios{width:500px;height:100px;margin:20% auto;
   background: #3E3D3D;
   text-align: center;line-height:25px;padding-top:23px;
   color: #ffffff;}
 </style>
</head>
<body onload="settime(this)">
<?php if($ztai){?>
<div class="wangztaios">
    <p><?php echo  $nr?>，系统开始跳转。。。。<br/>开始跳转：<span id="daosji" ></span>
        系统没有反应可以【<a href="<?php echo $url?>" >点击这里</a>】
    </p>
</div>
<?php }else{?>
    <div class="wangztaios">
        <p><?php echo $nr?>，系统开始跳转。。。。<br/>开始跳转：<span id="daosji" ></span>
            系统没有反应可以【<a href="<?php echo $url?>">点击这里</a>】
        </p>
    </div>
<?php }?>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('js/amazeui.min.js')?>"></script>
<script type="text/javascript">
    var countdown=<?php echo $sjian?>;
    function settime(val) {
        if (countdown == 0) {
            window.location.href='<?php echo $url?>';
            countdown = <?php echo $sjian?>;
        } else {
            $('#daosji').text(countdown);
            countdown--;
        }
        setTimeout(function() {
            settime(val)
        },1000)
    }
</script>
</body>
<?php die;?>