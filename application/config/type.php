<?php
/**
 * 后台栏目方法
 */
$type_name = array(
 array(
  'name' => '系统设置',//栏目名称
  'link' => '/admin/confg/index',//链接
  'class' => 'am-icon-cogs',//ico
  'id' => 'xtsz',
  'class_array' => array(
   array(
    'name' => '网站设置',
    'link' => '/admin/confg/index',
   ),
   array(
    'name' => '自定义菜单',
    'link' => '/admin/confg/nav/',
   ),
   array(
    'name' => '增加控制器',
    'link' => '/admin/confg/kzq/',
   ),
   array(
    'name' => '控制器列表',
    'link' => '/admin/confg/kzq_list/',
   )
  )
 ),
 array(
  'name' => '权限设置',//栏目名称
  'link' => '/admin/qxian_kz/',//链接
  'class' => 'am-icon-building',//ico
  'id' => 'qxiansz',
  'class_array' => array(
   array(
    'name' => '增加角色',
    'link' => '/admin/qxian_kz/add',
   ),
   array(
    'name' => '角色管理',
    'link' => '/admin/qxian_kz/add_list',
   ), array(
    'name' => '增加管理员',
    'link' => '/admin/qxian_kz/add_user',
   ),
   array(
    'name' => '管理员列表',
    'link' => '/admin/qxian_kz/user_list',
   )
  )
 ),
 array(
  'name' => '文章系统',//栏目名称
  'link' => '/admin/news/index',//链接
  'class' => 'am-icon-building-o',//ico
  'id' => 'wenzxt',
  'class_array' => array(
   array(
    'name' => '增加文章',
    'link' => '/admin/news/index',
   ),
   array(
    'name' => '文章列表',
    'link' => '/admin/news/news_list',
   ),
   array(
    'name' => '增加栏目',
    'link' => '/admin/news/add_lnam',
   ),
   array(
    'name' => '栏目列表',
    'link' => '/admin/news/add_list',
   ),
   array(
    'name' => '回收站',
    'link' => '/admin/news/hsxian',
   ),
  )
 ),
 array(
  'name' => '单页管理',//栏目名称
  'link' => '/admin/aliases/',//链接
  'class' => 'am-icon-envira',//ico
  'id' => 'aliases',
  'class_array' => array(
   array(
    'name' => '增加单页',
    'link' => '/admin/aliases/index',
   ), array(
    'name' => '单页管理',
    'link' => '/admin/aliases/list_',
   )
  )
 ),
 array(
  'name' => '产品管理',//栏目名称
  'link' => '/admin/product/',//链接
  'class' => 'am-icon-shopping-basket',//ico
  'id' => 'Product',
  'class_array' => array(
   array(
    'name' => '增加产品',
    'link' => '/admin/product/index',
   ), array(
    'name' => '产品列表',
    'link' => '/admin/product/product_list/1',
   )
  , array(
    'name' => '分类增加',
    'link' => '/admin/product/add_lanm',
   ), array(
    'name' => '分类列表',
    'link' => '/admin/product/list_',
   ), array(
    'name' => '回收箱',
    'link' => '/admin/product/product_list/2',
   )
  )
 ),
 array(
  'name' => '留言系统',//栏目名称
  'link' => '/admin/liuyan/',//链接
  'class' => 'am-icon-commenting',//ico
  'id' => 'liuyanxt',
  'class_array' => array(
   array(
    'name' => '留言管理',
    'link' => '/admin/liuyan/index',
   )
  )
 ),
 array(
  'name' => '友情链接',//栏目名称
  'link' => '/admin/link/',//链接
  'class' => 'am-icon-random',//ico
  'id' => 'link',
  'class_array' => array(
   array(
    'name' => '增加链接',
    'link' => '/admin/link/index',
   ),
   array(
    'name' => '链接管理',
    'link' => '/admin/link/link_list',
   )
  )
 ), array(
  'name' => '幻灯片管理',//栏目名称
  'link' => '/admin/slide/',//链接
  'class' => 'am-icon-cubes',//ico
  'id' => 'add_gg',
  'class_array' => array(
   array(
    'name' => '增加幻灯片',
    'link' => '/admin/slide/index',
   ),
   array(
    'name' => '幻灯片列表',
    'link' => '/admin/slide/add_list',
   )
  )
 ),

);