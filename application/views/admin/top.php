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
</head>
<body style="background:#1E9CD6;">
<style>
.nav_daohan{height:60px;overflow: hidden;}
	.nav_daohan li{float:right;padding:0px 15px;height:60px;text-align:center;padding-top:10px;line-height:30px;display: inline-block;}
	.nav_daohan li i{font-size:20px;}
	.nav_daohan li:hover{background:#75b9d8}
	.nav_daohan ul{width:320px;display:inline-block;float:right;}
	.nav_daohan a{color:#fff;}
	.wangz_beiz{height:30px;width:100%;background:#DEDEDE;box-shadow:1px 1px 5px #333;}
</style>
<div class="nav_daohan">
		<ul>
			<a href="javascript:tcdlu()"><li style="background:#3E3D3D;"><i class="am-icon-google am-icon-cog am-icon-spin"></i><br />退出</li></a>
			<a href="<?php echo site_url('/admin/qxian_kz/add_user/'.$user['user_id'])?>" target="main_frame"><li><i class="am-icon-sellsy"></i><br />个人资料</li></a>
			<a href="<?php echo site_url('/admin/index/index_ki');?>" target="main_frame"><li><i class="am-icon-desktop"></i><br />后台首页</li></a>
			<a href="<?php echo site_url();?>" target="_blank"><li><i class="am-icon-home"></i><br />首页</li></a>
		</ul>
		<div><a href=""><ul style="width:150px;"><li style="width:110px;height:60px;line-height:20px;"><span style="margin-left:2px;" class="am-badge am-badge-danger am-round"><?php echo $liuyan?></span><br/>待处理问题</li></ul></a></div>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('js/layer.js')?>"></script>
<script>
function tcdlu() {
  if(confirm("你确定提出系统吗？")){
    $.ajax({
      url: '',
      data: {cz:'tc'},
      dataType: 'json',
      type: 'post',
      success: function (a) {
        alert(a.title);
        parent.location.reload();
      }
    });
  }

}
	
</script>

</body>
</html>