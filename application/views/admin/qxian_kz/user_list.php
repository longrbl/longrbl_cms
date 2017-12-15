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

<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">管理员列表</strong> / <small>managers</small></div>
        </div>
        <hr>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                    <tr>
                        <th>ID</th><th>管理员名称</th><th>角色</th><th>增加时间</th><th>描述</th><th>管理</th>
                    </tr>
                    </thead>
                    <tbody style="font-size:13px;">
                    <?php foreach($list as $v):?>
                        <tr>
                            <td><?php echo $v['uid']?></td>
                            <td><?php echo $v['name']?></td>
                            <td><?php echo $v['title']?></td>
                            <td><?php echo date('Y/m/d h:i:s',$v['time']);?></td>
                            <td><?php echo $v['miaos']?></td>
                            <td>
                                <?php if($v['id']!='1'){?>
                                    <div class="am-dropdown" data-am-dropdown="">
                                        <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle=""><span class="am-icon-cog"></span> <span class="am-icon-caret-down"></span></button>
                                        <ul class="am-dropdown-content">
                                            <li><a href="<?php echo site_url('/admin/qxian_kz/add_user/'.$v['uid'])?>">编辑</a></li>
                                            <?php if($v['uid']!=1){?>
                                            <li><a href="javascript:sc(<?php echo $v['uid']?>)">删除</a></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                <?php }else{?>
                                    <span class="am-badge">不可以编辑</span>
                                <?php }?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('js/amazeui.min.js')?>"></script>
<script src="<?php echo base_url('js/layer.js')?>"></script>
<script>
    function sc(id) {
        $.ajax({
            url: '',
            data: {id:id},
            dataType: 'json',
            type: 'post',
            success: function (a) {
                layer.msg(a.title,function () {
                    location.reload();
                });
            }
        });
    }
</script>
</body>