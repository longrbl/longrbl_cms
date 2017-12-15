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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">角色增加</strong> / <small>Role increase</small></div>
        </div>
        <hr>
        <div class="am-g">
            <div class=" am-u-md-8 ">
                <form class="am-form am-form-horizontal demoform" action="" method="post" >
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">角色名称</label>
                        <div class="am-u-sm-9">
                            <input type="text"  placeholder="" name="name" datatype="s3-7" value="<?php echo $user['name']?>">
                            <?php if(!empty($user)){?>
                                <input type="hidden" name="id" value="<?php echo $user['id'];?>">
                            <?php }?>
                            <small>建立角色管理组</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">状态</label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="ztai" value="2" style="margin:10px;" datatype="*" errormsg="请选择" <?php echo $user['ztai']=='2'?'checked':'';?>>开启
                            <input type="radio" name="ztai" value="1" style="margin:10px;" <?php echo $user['ztai']=='1'?'checked':'';?>>关闭
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">角色描述</label>
                        <div class="am-u-sm-9">
                            <textarea class="" rows="5" id="user-intro" placeholder="角色的简单描述" name="miaos" datatype="s5-250"><?php echo $user['miaos']?></textarea>
                            <small>用户组的简单描述</small>
                        </div>
                    </div>
                    <?php $key = unserialize($user['qxian']);?>
                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">权限列表</label>
                        <div class="am-u-sm-9">
                            <lu>
                                <?php foreach($list as $v):?>
                                <li>
                                    <p><input type="checkbox" name="qian[]" value="<?php echo $v['link']?>" class="wangz_koiii" <?php if(in_array($v['link'],$key)){echo 'checked';}?>><?php echo $v['name']?></p>
                                    <?php if(!empty($v['class_array'])){?>
                                    <ol class="wangz_klo">
                                            <?php foreach ($v['class_array'] as $k):?>
                                                <li><input type="checkbox" name="qian[]" value="<?php echo $k['link']?>" <?php if(in_array($k['link'],$key)){echo 'checked';}?>><?php echo $k['name']?></li>
                                            <?php endforeach;?>
                                    </ol>
                                    <?php }?>
                                </li>
                                <?php endforeach;?>
                            </lu>
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
    $(function(){
        $('.wangz_koiii').click(function(){
            $(this).parents('li').find('input').attr('checked','checked');
        });
    });
</script>
</body>