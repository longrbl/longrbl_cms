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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">角色管理员</strong> / <small>Role manager</small></div>
        </div>
        <hr>
        <div class="am-g">
            <div class=" am-u-md-8 ">
                <form class="am-form am-form-horizontal demoform" action="" method="post" >
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">管理员名称</label>
                        <div class="am-u-sm-9">
                            <input type="text"  placeholder="" name="name" datatype="*" value="<?php echo $user['name']?>">
                            <?php if(!empty($user)){?>
                                <input type="hidden" name="id" value="<?php echo $user['uid'];?>">
                            <?php }?>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">管理员密码</label>
                        <div class="am-u-sm-9">
                            <input type="password"  placeholder="" name="userpassword" datatype="*" >
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">重复密码</label>
                        <div class="am-u-sm-9">
                            <input type="password"  placeholder="" name="userpassword2" datatype="*"  recheck="userpassword">

                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">状态</label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="ztai" value="2" style="margin:10px;" datatype="*" errormsg="请选择" <?php echo $user['ztai']=='2' || empty($user['ztai'])?'checked':'';?>>开启
                            <input type="radio" name="ztai" value="1" style="margin:10px;" <?php echo $user['ztai']=='1'?'checked':'';?>>关闭
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">选择角色</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{btnSize: 'sm'}" datatype="*" name="zuo_uid">
                                <?php foreach ($list as $v):?>
                                <?php if($v['id']!=1 || $user['uid']==1){?>
                                <option value="<?php echo $v['id']?>" <?php if($v['id']==$user['zuo_uid']){echo 'selected = "selected"';}?>><?php echo $v['name']?></option>
                                <?php }?>
                            <?php endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">管理员描述</label>
                        <div class="am-u-sm-9">
                            <textarea class="" rows="5" id="user-intro" placeholder="角色的简单描述" name="miaos" datatype="*"><?php echo $user['miaos']?></textarea>
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