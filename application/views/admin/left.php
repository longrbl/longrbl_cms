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
<body style="background:#3e3d3d;">
<style>
.am-list>li{background:#3e3d3d;border:none;border-top:1px solid #424242;}
.am-list>li:hover{background:#545454}
.am-panel>.am-list>li>a{font-size:12px;}
a{color:#fff; font-size:13px;}
a:hover,a:visited,a:active,a:link{color:#fff;font-size:13px;}
.user_var{width:100%;height:180px;}
.nav_daohan i{margin:0px 7px;font-size:17px;}
</style>
<div class="user_var">
		<p style="width:100px;height:100px;margin:auto;margin-top:10px;overflow:hidden;"><img src="data:image/jpg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABQAAD/4QMqaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjUtYzAxNCA3OS4xNTE0ODEsIDIwMTMvMDMvMTMtMTI6MDk6MTUgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUQwOEExOTdDNzhGMTFFNjlDQUE4MDdEM0MyM0JGMkQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUQwOEExOThDNzhGMTFFNjlDQUE4MDdEM0MyM0JGMkQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5RDA4QTE5NUM3OEYxMUU2OUNBQTgwN0QzQzIzQkYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RDA4QTE5NkM3OEYxMUU2OUNBQTgwN0QzQzIzQkYyRCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEAAICAgICAgICAgIDAgICAwQDAgID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" alt=""  style="width:100px;height:100px;border-radius:50%;border:2px #fff solid;"></p>
<p style="color:#fff;text-align:center;font-size:13px;margin-top:15px; text-transform:uppercase;"><?php echo $user['user_zu']?><br/><?php echo $user['name'];?></p>
</div>
<div class="nav_daohan">
<ul class="am-list admin-sidebar-list" id="collapase-nav-1">
<?php if($user['cid']==1){?>
    <li class="am-panel">
        <a href="<?php echo site_url('/admin/index/index_ki')?>" target="main_frame">
            <i class="am-icon-home am-margin-left-sm"></i>后台首页<i class="am-icon-angle-right am-fr am-margin-right"></i>
        </a>
    </li>
    <?php foreach($list as $v):?>
        <li class="am-panel">
            <?php if(empty($v['class_array'])){?>
                <a href="<?php echo site_url($v['link']);?>" target="main_frame">
                    <i class="<?php echo $v['class']?>"></i><?php echo $v['name']?><i class="am-icon-angle-right am-fr am-margin-right"></i>
                </a>
            <?php }?>
            <?php if(!empty($v['class_array'])){?>
                <a data-am-collapse="{parent: '#collapase-nav-1', target: '#<?php echo $v['id']?>'}">
                    <i class="<?php echo $v['class']?>"></i><?php echo $v['name']?><i class="am-icon-angle-right am-fr am-margin-right"></i>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="<?php echo $v['id']?>">
                    <?php foreach($v['class_array'] as $k):?>
                        <li><a href="<?php echo site_url($k['link']);?>" target="main_frame"><?php echo $k['name']?></a></li>
                    <?php endforeach;?>
                </ul>
            <?php }?>
        </li>
    <?php endforeach?>
<?php }else{?>
    <li class="am-panel">
        <a href="<?php echo site_url('/admin/index/index_ki')?>" target="main_frame">
            <i class="am-icon-home am-margin-left-sm"></i>后台首页<i class="am-icon-angle-right am-fr am-margin-right"></i>
        </a>
    </li>
    <?php foreach($list as $v):?>
        <?php if(in_array($v['link'],$secc)){?>
        <li class="am-panel">
            <?php if(empty($v['class_array'])){?>
                <a href="<?php echo site_url($v['link']);?>" target="main_frame">
                    <i class="<?php echo $v['class']?>"></i><?php echo $v['name']?><i class="am-icon-angle-right am-fr am-margin-right"></i>
                </a>
            <?php }?>
            <?php if(!empty($v['class_array'])){?>
                <a data-am-collapse="{parent: '#collapase-nav-1', target: '#<?php echo $v['id']?>'}">
                    <i class="<?php echo $v['class']?>"></i><?php echo $v['name']?><i class="am-icon-angle-right am-fr am-margin-right"></i>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="<?php echo $v['id']?>">
                    <?php foreach($v['class_array'] as $k):?>
                        <?php if(in_array($k['link'],$secc)){?>
                        <li><a href="<?php echo site_url($k['link']);?>" target="main_frame"><?php echo $k['name']?></a></li>
                        <?php }?>
                    <?php endforeach;?>
                </ul>
            <?php }?>
        </li>
            <?php }?>
    <?php endforeach?>

<?php }?>
</ul>
</div>
<div style="position:fixed;bottom:0px;text-align:center;color:#8a8a8a;font-size:12px;width:100%;background: #545454;padding:2px 0px;z-index:999">
    &#64;&#35910;&#35910;&#24320;&#21457;<br />
  &#52;&#55;&#56;&#49;&#50;&#48;&#49;&#55;&#52;&#64;&#113;&#113;&#46;&#99;&#111;&#109;
</div>

<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('js/amazeui.min.js')?>"></script>
</body>