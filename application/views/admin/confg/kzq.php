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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">增加控制器</strong> / <small>Add controller</small></div>
    </div>
    <hr>
    <div class="am-g">
      <div class=" am-u-md-8 ">
        <form class="am-form am-form-horizontal demoform" action="" method="post" >
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">名称</label>
            <div class="am-u-sm-9">
              <input type="text"  placeholder="" name="function" datatype="*" value="<?php echo $user['function']?>">
              <?php if(!empty($user)){?>
                <input type="hidden" name="id" value="<?php echo $user['id'];?>">
              <?php }?>
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">URL</label>
            <div class="am-u-sm-9">
              <input type="text"  placeholder="" name="url" datatype="*" value="<?php echo $user['url']?>">
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">ICO</label>
            <div class="am-u-sm-9">
              <input type="text"  placeholder="" name="ico"  value="<?php echo $user['ico']?>">
            </div>
          </div>
         <div class="am-form-group">
          <label for="user-name" class="am-u-sm-3 am-form-label">类ID</label>
          <div class="am-u-sm-9">
           <input type="text"  placeholder="" name="classid"  value="<?php echo $user['classid']?>">
          </div>
         </div>
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">顶级控制器</label>
            <div class="am-u-sm-9">
              <select data-am-selected="{btnSize: 'sm'}" datatype="*" name="pid">
                <option value="0" selected = "selected">--顶级控制器--</option>
                <?php foreach ($list as $v):?>
                  <option value="<?php echo $v['id']?>" <?php if($v['id']==$user['pid']){echo 'selected = "selected"';}?>><?php echo $v['function']?></option>
                <?php endforeach?>
              </select>
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
<script src="<?php echo base_url('js/bjq/kindeditor-min.js')?>"></script>
<script src="<?php echo base_url('js/bjq/lang/zh_CN.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('js/bjq/themes/default/default.css')?>">
<script>
    $(".demoform").Validform();
    KindEditor.ready(function(K) {
        var editor = K.editor({
            allowFileManager : true
        });
        K('#image1').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    imageUrl : K('#image1').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('#image1').val(url);
                        editor.hideDialog();
                    }
                });
            });
        });
    });
    $(function(){
        var leix =<?php echo $user['leix']?$user['leix']:0;?>;
        if(leix==2){
            $("#tiaot").text('内容');
            $("#xgainr").html('<textarea  rows="20"  name="content" datatype="*"><?php echo $user['content']?></textarea>');
            $.getScript('<?php echo base_url('js/bjq/kindeditor-min.js')?>', function() {
                KindEditor.basePath = '<?php echo base_url('js/bjq/')?>';
                KindEditor.create('textarea[name="content"]');
            });
        }
        if(leix==3){
            $("#tiaot").text('');
            $("#xgainr").html('');
        }
        if(leix==1){
            $("#tiaot").text('URL链接');
            $("#xgainr").html('<input type="text"   name="url" datatype="url" value="<?php echo $user['url']?>" >');
        }

        $('.lnam').click(function () {
            $("#tiaot").text('');
            $("#xgainr").html('');
        });
        $('.danyem').click(function(){
            $("#tiaot").text();
            $("#xgainr").html();
            $("#tiaot").text('内容');
            $("#xgainr").html('<textarea  rows="20"  name="content" datatype="*"></textarea>');
            $.getScript('<?php echo base_url('js/bjq/kindeditor-min.js')?>', function() {
                KindEditor.basePath = '<?php echo base_url('js/bjq/')?>';
                KindEditor.create('textarea[name="content"]');
            });
        });
        $(".chaoljie").click(function () {
            $("#tiaot").text();
            $("#xgainr").html();
            $("#tiaot").text('URL链接');
            $("#xgainr").html('<input type="text"   name="url" datatype="url" >');
        });

    });
</script>
</body>