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
<link rel="stylesheet" href="<?php echo base_url('css/index.css')?>">
<script type="Text/Javascript" language="JavaScript">
if (window.top != window)
{
  window.top.location.href = document.location.href;
}
</script>
<frameset cols="160,*" framespacing="0" border="0" id="frame-all">
  <frame src="<?php echo site_url('/admin/index/left');?>" id="header-frame" name="header-frame" frameborder="no" scrolling="no">
  <frameset rows="60, *" framespacing="0" border="0" id="frame-body">
    <frame src="<?php echo site_url('/admin/index/top');?>" id="menu-frame" name="menu_frame" frameborder="no" scrolling="no">
    <frame src="<?php echo site_url('/admin/index/index_ki');?>"id="main-frame" name="main_frame" frameborder="no" scrolling="yes">
  </frameset>
</frameset>
</head>
<body>
</body>
</html>
