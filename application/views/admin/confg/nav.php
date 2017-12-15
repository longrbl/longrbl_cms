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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">自定义菜单</strong> / <small>Custom menu</small></div>
    </div>
    <hr>
   <div class="am-g">
    <div class="am-u-sm-12 am-u-md-6">
     <div class="am-btn-toolbar">
      <div class="am-btn-group am-btn-group-xs">
       <button type="button" class="am-btn am-btn-default" onclick="addnav()"><span class="am-icon-plus"></span> 新增导航</button>
      </div>
     </div>
    </div>
   </div>
    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>ID</th><th>标题</th><th>增加时间</th><th>排序</th><th>状态</th><th>管理</th>
          </tr>
          </thead>
          <tbody style="font-size:13px;">
          <?php foreach($list as $k=>$v):?>
            <tr>
              <td><?php echo $v['id']?></td>
              <td><?php echo $v['title'];?></td>
              <td><?php echo date('Y/m/d h:i:s',$v['time']);?></td>
              <td><?php echo $v['paixun']?></td>
              <td><?php echo $v['ztai']==1?'<span class="am-badge am-badge-danger">关闭</span>':'<span class="am-badge am-badge-success">开启</span>'?></td>
              <td>
                <div class="am-dropdown" data-am-dropdown="">
                  <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle=""><span class="am-icon-cog"></span> <span class="am-icon-caret-down"></span></button>
                  <ul class="am-dropdown-content">
                    <li><a href="#" onclick="addnav(<?php echo $v['id']?>)">编辑</a></li>
                    <li><a href="javascript:sc(<?php echo $v['id']?>)">删除</a></li>
                  </ul>
                </div>
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

function addnav(id=0) {
    layer.open({
        type: 2,
        title: '增加自定义导航',
        shadeClose: true,
        shade: 0.8,
        area: ['40%', '50%'],
        content: '<?php echo base_url('/admin/confg/nav_add?id=')?>'+id,end: function(index){
            location.replace(location);
        } });
}



</script>
</body>