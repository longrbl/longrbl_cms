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
<body>
<style>
  .wangz_klo{list-style:none;margin:0px;}
  .wangz_klo li{padding:10px;display:inline-block }
</style>
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">友情链接</strong> / <small>Friendship link</small></div>
    </div>
    <hr>
    <div class="am-g">
      <div class=" am-u-md-8 ">
        <form class="am-form am-form-horizontal demoform" action="" method="post" >
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">标题</label>
            <div class="am-u-sm-9">
              <input type="text"   name="title" datatype="*" value="<?php echo $user['title']?>">
              <?php if(!empty($user)){?>
                <input type="hidden" name="id" value="<?php echo $user['id'];?>">
              <?php }?>
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">URL</label>
            <div class="am-u-sm-9">
              <input type="text"   name="url" datatype="url" value="<?php echo $user['url']?>">
              <?php if(!empty($user)){?>
                <input type="hidden" name="id" value="<?php echo $user['id'];?>">
              <?php }?>
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">排序</label>
            <div class="am-u-sm-9">
              <input type="text" name="paixun" value="<?php echo $user['paixun'];?>" datatype="*">
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">状态</label>
            <div class="am-u-sm-9">
              <div class="am-btn-group" data-am-button="">
                <label class="am-btn am-btn-default am-btn-xs lnam">
                  <input type="radio" name="ztai" id="option1" value="0"  <?php echo $user[attribute]==0 || empty($user['attribute'])?'checked':'';?>> 开启
                </label>
                <label class="am-btn am-btn-default am-btn-xs chaoljie">
                  <input type="radio" name="ztai" id="option2" value="1" <?php echo $user[attribute]==1?'checked':'';?>>关闭
                </label>

              </div>
            </div>
          </div>
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" class="am-btn am-btn-primary" value="提交保存">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('js/amazeui.min.js')?>"></script>
<script src="<?php echo base_url('js/from.js')?>"></script>
<script>
  $(".demoform").Validform();
</script>
</body>