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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">系统配置</strong> / <small>system config</small></div>

    </div>
    <hr>
    <div class="am-tabs am-margin" data-am-tabs="{noSwipe:1}">
      <ul class="am-tabs-nav am-nav am-nav-tabs">
        <li class="am-active"><a href="#tab1">基本信息</a></li>
        <li><a href="#tab2">短信设置</a></li>
      </ul>
      <div class="am-tabs-bd" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="am-tab-panel am-fade  am-active am-in" id="tab1">
          <form class="am-form" action="" method="post">
            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">网站标题</div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm" name="title" value="<?php echo $wangz_confg['title']?>">
               <input type="hidden" class="am-input-sm" name="type" value="wangzsz">
              </div>
              <div class="am-hide-sm-only am-u-md-6"></div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">SEO关键词</div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" class="am-input-sm" name="key" value="<?php echo $wangz_confg['key']?>">
              </div>
            </div>
            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">SEO描述</div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm" name="miaos" value="<?php echo $wangz_confg['miaos']?>">
              </div>
              <div class="am-hide-sm-only am-u-md-6"></div>
            </div>
            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">网站状态</div>
              <div class="am-u-sm-8 am-u-md-10">
                <div class="am-btn-group" data-am-button="">
                  <label class="am-btn am-btn-default am-btn-xs">
                    <input type="radio" name="options" id="option1"value="1" <?php echo $wangz_confg['options']==1 || empty($wangz_confg['options'])?'checked':''?>>开启
                  </label>
                  <label class="am-btn am-btn-default am-btn-xs">
                    <input type="radio" name="options" id="option2" value="2" <?php echo $wangz_confg['options']==2?'checked':''?>>关闭
                  </label>
                </div>
              </div>
            </div>
            <div class="am-margin">
              <input  type="submit" class="am-btn am-btn-primary am-btn-xs" value="提交保存">
            </div>
          </form>
        </div>
       <div class="am-tab-panel am-fade  am-active am-in" id="tab2">
        <form class="am-form" action="" method="post">
         <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">Access Key ID</div>
          <div class="am-u-sm-8 am-u-md-4">
           <input type="text" class="am-input-sm" name="kid" value="<?php echo $duanx['kid']?>">
           <input type="hidden" class="am-input-sm" name="type" value="duanx">
          </div>
          <div class="am-hide-sm-only am-u-md-6"></div>
         </div>
         <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">Access Key Secret</div>
          <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
           <input type="text" class="am-input-sm" name="Secret" value="<?php echo $duanx['Secret']?>">
          </div>
         </div>
         <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">短信开关</div>
          <div class="am-u-sm-8 am-u-md-10">
           <div class="am-btn-group" data-am-button="">
            <label class="am-btn am-btn-default am-btn-xs">
             <input type="radio" name="options" id="option1"value="1" <?php echo $duanx['options']==1 || empty($duanx['options'])?'checked':''?>>开启
            </label>
            <label class="am-btn am-btn-default am-btn-xs">
             <input type="radio" name="options" id="option2" value="2" <?php echo $duanx['options']==2?'checked':''?>>关闭
            </label>
           </div>
          </div>
         </div>
         <div class="am-margin">
          <input  type="submit" class="am-btn am-btn-primary am-btn-xs" value="提交保存">
         </div>
        </form>
       </div>
      </div>
    </div>

  </div>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('js/amazeui.min.js')?>"></script>
<script src="<?php echo base_url('js/from.js')?>"></script>
<script>
  $(".demoform").Validform();
  $(function(){
    $('.wangz_koiii').click(function(){
      $(this).parents('li').find('input').attr('checked','checked');
    });
  });
</script>
</body>