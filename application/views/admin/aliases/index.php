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
 <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="<?php echo base_url('js/amazeui.min.js')?>"></script>
 <script src="<?php echo base_url('js/from.js')?>"></script>
</head>
<body>
<style>
  .wangz_klo{list-style:none;margin:0px;}
  .wangz_klo li{padding:10px;display:inline-block }
</style>
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">增加单页</strong> / <small>Add a single page</small></div>
    </div>
    <hr>
    <div class="am-g">
      <div class=" am-u-md-8 ">
        <form class="am-form am-form-horizontal demoform" action="" method="post" >
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">栏目名称</label>
            <div class="am-u-sm-9">
              <input type="text"  placeholder="" name="title" datatype="*" value="<?php echo $user['title']?>">
              <?php if(!empty($user)){?>
                <input type="hidden" name="id" value="<?php echo $user['id'];?>">
              <?php }?>
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">SEO关键词</label>
            <div class="am-u-sm-9">
              <input type="text"  placeholder="" name="key" datatype="s3-200" value="<?php echo $user['key']?>">
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">SEO描述</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro" placeholder="栏目描述" name="miaos" datatype="s20-250"><?php echo $user['miaos']?></textarea>
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">别名(英文/唯一)</label>
            <div class="am-u-sm-9">
              <input type="text"  placeholder="" name="aliases" datatype="s3-50" value="<?php echo $user['aliases']?>">
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">上级栏目</label>
            <div class="am-u-sm-9">
              <select data-am-selected="{btnSize: 'sm'}" datatype="*" name="uid">
                <option value="0" selected = "selected">--顶级栏目--</option>
                <?php foreach ($list as $v):?>
                  <option value="<?php echo $v['id']?>" <?php if($v['id']==$user['uid']){echo 'selected = "selected"';}?>><?php echo $v['title']?></option>
                <?php endforeach?>
              </select>
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">栏目图片</label>
            <div class="am-u-sm-9">
              <input type="text"   name="image"  id="image1" value="<?php echo $user['image']?>">
              <small>系统支持jpg,png,gif,bmp,文件大小不超过1M</small>
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">内容</label>
            <script src="<?php echo base_url('js/bjq/kindeditor-min.js')?>"></script>
            <script src="<?php echo base_url('js/bjq/lang/zh_CN.js')?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('js/bjq/themes/default/default.css')?>">
            <div class="am-u-sm-9">
              <script>
                  var editor;
                  KindEditor.ready(function(K) {
                      editor = K.create('textarea[name="content"]', {
                          allowFileManager: true
                      });
                  })
                      </script>
              <textarea name="content" style="width:800px;height:400px;visibility:hidden;"><?php echo $user['content']?></textarea>
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
</script>
</body>
</html>