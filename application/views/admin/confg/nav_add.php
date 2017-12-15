<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>后台系统</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
 <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('css/amazeui.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('css/index.css')?>">
 <script src="<?php echo base_url('/js/from.js')?>"></script>
</head>
<body>
<div class="am-tab-panel am-fade am-active am-in" id="tab2">
 <form class="am-form am-form-horizontal demoform" action="" method="post" >
  <div class="am-g am-margin-top">
   <div class="am-u-sm-4 am-u-md-2 am-text-right">
    标题
   </div>
   <div class="am-u-sm-8 am-u-md-4">
    <input type="text" class="am-input-sm" name="title" datatype="*" value="<?php echo $add['title']?>">
    <input type="hidden" name="id" value="<?php echo $add['id']?>">
   </div>
   <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
  </div>
  <div class="am-g am-margin-top">
   <div class="am-u-sm-4 am-u-md-2 am-text-right">
    上级
   </div>
   <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
    <select data-am-selected="{btnSize:'sm'}" name="uid">
     <option value="0" >---顶级栏目---</option>
     <?php foreach($list as $v):?>
     <option value="<?php echo $v['id']?>" <?php echo $add['uid']==$v['id']?'selected':''?>><?php echo $v['title']?></option>
     <?php endforeach?>
    </select>
   </div>
  </div>
  <div class="am-g am-margin-top">
   <div class="am-u-sm-4 am-u-md-2 am-text-right">
    URL
   </div>
   <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
    <input type="text" class="am-input-sm" name="link"  value="<?php echo $add['link']?>">
   </div>
  </div>

  <div class="am-g am-margin-top">
   <div class="am-u-sm-4 am-u-md-2 am-text-right">
    排序
   </div>
   <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
    <input type="text" class="am-input-sm" name="paixun" datatype="*1-50" value="<?php echo $add['paixun']?>">
   </div>
  </div>
  <div class="am-g am-margin-top">
   <div class="am-u-sm-4 am-u-md-2 am-text-right">
    描述
   </div>
   <div class="am-u-sm-8 am-u-md-4">
    <input type="text" class="am-input-sm" name="miaos" datatype="*" value="<?php echo $add['miaos']?>">
   </div>
   <div class="am-hide-sm-only am-u-md-6"></div>
  </div>

  <div class="am-form-group" style="margin-top:20px;">
   <div class="am-u-sm-9 am-u-sm-push-3">
    <input type="submit" class="am-btn am-btn-primary" value="提交保存">
   </div>
  </div>
 </form>
</div>

<script>
    $(".demoform").Validform();
</script>

</body>
</html>