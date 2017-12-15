-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?12 �?15 �?05:16
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ci_php`
--

-- --------------------------------------------------------

--
-- 表的结构 `ci_admin_user`
--

CREATE TABLE IF NOT EXISTS `ci_admin_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mima` varchar(33) NOT NULL,
  `ztai` int(1) NOT NULL COMMENT '1禁止登录',
  `time` varchar(12) NOT NULL,
  `zuo_uid` int(11) NOT NULL,
  `miaos` varchar(500) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ci_admin_user`
--

INSERT INTO `ci_admin_user` (`uid`, `name`, `mima`, `ztai`, `time`, `zuo_uid`, `miaos`) VALUES
(1, 'admin', 'c9fd5a365f3c34a2f1277e471c568b5b', 2, '1483700302', 1, '超级管理员有系统所有的权限'),
(3, 'longrbl', 'c9fd5a365f3c34a2f1277e471c568b5b', 2, '1482735648', 3, '一般角色');

-- --------------------------------------------------------

--
-- 表的结构 `ci_admin_zu`
--

CREATE TABLE IF NOT EXISTS `ci_admin_zu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `qxian` longtext NOT NULL,
  `time` int(11) NOT NULL,
  `ztai` int(1) NOT NULL DEFAULT '0' COMMENT '1禁止登陆',
  `miaos` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ci_admin_zu`
--

INSERT INTO `ci_admin_zu` (`id`, `name`, `qxian`, `time`, `ztai`, `miaos`) VALUES
(1, '超级管理员', 'all', 1482312453, 2, '可以获取这个系统所有的权限'),
(2, '管理员', 'a:18:{i:0;s:16:"/admin/qxian_kz/";i:1;s:19:"/admin/qxian_kz/add";i:2;s:24:"/admin/qxian_kz/add_list";i:3;s:24:"/admin/qxian_kz/add_user";i:4;s:25:"/admin/qxian_kz/user_list";i:5;s:17:"/admin/news/index";i:6;s:17:"/admin/news/index";i:7;s:21:"/admin/news/news_list";i:8;s:20:"/admin/news/add_lnam";i:9;s:20:"/admin/news/add_list";i:10;s:18:"/admin/news/hsxian";i:11;s:14:"/admin/liuyan/";i:12;s:19:"/admin/liuyan/index";i:13;s:16:"/admin/chanjian/";i:14;s:21:"/admin/chanjian/index";i:15;s:13:"/admin/slide/";i:16;s:18:"/admin/slide/index";i:17;s:21:"/admin/slide/add_list";}', 1482810934, 2, '管理员可以管理员系统大部分功能'),
(3, '文章发布员', 'a:7:{i:0;s:17:"/admin/news/index";i:1;s:17:"/admin/news/index";i:2;s:21:"/admin/news/news_list";i:3;s:20:"/admin/news/add_list";i:4;s:18:"/admin/news/hsxian";i:5;s:14:"/admin/liuyan/";i:6;s:19:"/admin/liuyan/index";}', 1486181231, 2, '获取指定的用户权限');

-- --------------------------------------------------------

--
-- 表的结构 `ci_aliases`
--

CREATE TABLE IF NOT EXISTS `ci_aliases` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '单页面',
  `title` varchar(200) DEFAULT '0' COMMENT '标题',
  `key` varchar(250) DEFAULT '0' COMMENT '关键词',
  `miaos` varchar(300) DEFAULT '0' COMMENT '描述',
  `aliases` varchar(20) DEFAULT '0' COMMENT '别名',
  `uid` int(11) DEFAULT '0' COMMENT '上级栏目',
  `image` varchar(200) DEFAULT '0' COMMENT '图片',
  `content` longtext COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `ci_aliases`
--

INSERT INTO `ci_aliases` (`id`, `title`, `key`, `miaos`, `aliases`, `uid`, `image`, `content`) VALUES
(1, '山东分公司答复过', '是大法官', '是梵蒂冈', '', 0, '', 's地方个'),
(2, '公司介绍11', '公司介绍', '公司介绍公司介绍公司介绍公司介绍公司介绍公司介绍', 'sdfsdf', 1, '/attached/image/20161226/20161226212403_45115.jpg', '公司介绍公司介绍公司介绍公司介绍公司介绍公司介绍公司介绍公司介绍公司介绍'),
(3, '是的方式的', 's地方水电费', '水电费水电费水电费水电费水电费水电费水电费水电费水电费水电费水电费水电费', 'sdfsdf', 1, '/attached/image/20161226/20161226212403_45115.jpg', '是打发斯蒂芬阿斯顿发斯蒂芬'),
(4, '地方个撒旦法规', 'a房贷gas多个', 'a是打发斯蒂芬尴尬水电费a是打发斯蒂芬尴尬水电费a是打发斯蒂芬尴尬水电费', 'sdfsdf', 0, '', '阿斯顿发斯蒂芬阿斯蒂芬');

-- --------------------------------------------------------

--
-- 表的结构 `ci_confg`
--

CREATE TABLE IF NOT EXISTS `ci_confg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(50) NOT NULL,
  `value` varchar(600) NOT NULL,
  `time` int(13) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`key`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `ci_confg`
--

INSERT INTO `ci_confg` (`id`, `key`, `value`, `time`) VALUES
(1, 'wangz_confg', '{"title":"\\u7f51\\u7ad9\\u7cfb\\u7edf\\u5f00\\u53d12","key":"\\u5b9a\\u5236\\u5f00\\u53d1","miaos":"\\u7cfb\\u7edf\\u5f00\\u53d1\\u57fa\\u7840\\u6846\\u67b6,xy hubasdb jhasd","options":"1"}', 1512010126),
(2, 'duanx', '{"kid":"5445645646546546546","type":"duanx","Secret":"984646546546464","options":"2"}', 1512010988);

-- --------------------------------------------------------

--
-- 表的结构 `ci_Controller`
--

CREATE TABLE IF NOT EXISTS `ci_controller` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限控制列表',
  `function` varchar(150) NOT NULL COMMENT '类型',
  `pid` int(11) NOT NULL COMMENT '上级id',
  `time` int(11) NOT NULL,
  `url` varchar(300) NOT NULL COMMENT '控制器的值',
  `ico` varchar(50) NOT NULL COMMENT ' 图标',
  `classid` varchar(10) NOT NULL COMMENT '类id',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `ci_Controller`
--

INSERT INTO `ci_Controller` (`id`, `function`, `pid`, `time`, `url`, `ico`, `classid`) VALUES
(1, '系统设置', 0, 1487927609, '/admin/confg/index', 'am-icon-cogs', 'xtsz'),
(2, '网站设置', 1, 1487927657, '/admin/confg/index', '', ''),
(3, '自定义菜单', 1, 1487927668, '/admin/confg/nav/', '', ''),
(4, '增加控制器', 1, 1487927681, '/admin/confg/kzq/', '', ''),
(5, '控制器列表', 1, 1487927693, '/admin/confg/kzq_list/', '', ''),
(6, '权限设置', 0, 1487927759, '/admin/qxian_kz/', 'am-icon-building', 'qxiansz'),
(7, '增加角色', 6, 1487927773, '/admin/qxian_kz/add', '', ''),
(8, '角色管理', 6, 1487927787, '/admin/qxian_kz/add_list', '', ''),
(9, '增加管理员', 6, 1487927801, '/admin/qxian_kz/add_user', '', ''),
(10, '管理员列表', 6, 1487927813, '/admin/qxian_kz/user_list', '', ''),
(11, '文章系统', 0, 1487929185, '/admin/news/index', 'am-icon-building-o', 'wenzxt'),
(12, '增加文章', 11, 1487929198, '/admin/news/index', '', ''),
(13, '文章列表', 11, 1487929210, '/admin/news/news_list', '', ''),
(14, '增加栏目', 11, 1487929222, '/admin/news/add_lnam', '', ''),
(15, '栏目列表', 11, 1487929237, '/admin/news/add_list', '', ''),
(16, '回收站', 11, 1487929251, '/admin/news/hsxian', '', ''),
(17, '留言系统', 0, 1487929272, '/admin/liuyan/', 'am-icon-commenting', 'liuyanxt'),
(18, '留言管理', 17, 1487929283, '/admin/liuyan/index', '', ''),
(19, '插件系统', 0, 1487929314, '/admin/chanjian/', 'am-icon-sitemap', 'chajianxt'),
(20, '插件管理', 19, 1487929327, '/admin/chanjian/index', '', ''),
(21, '友情链接', 0, 1487929347, '/admin/link/', 'am-icon-random', 'link'),
(22, '增加链接', 21, 1487929361, '/admin/link/index', '', ''),
(23, '链接管理', 21, 1487929377, '/admin/link/link_list', '', ''),
(24, '广告管理', 0, 1487929398, '/admin/slide/', 'am-icon-cubes', 'add_gg'),
(25, '增加广告', 24, 1487929410, '/admin/slide/index', '', ''),
(26, '广告列表', 24, 1487929422, '/admin/slide/add_list', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `ci_link`
--

CREATE TABLE IF NOT EXISTS `ci_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `paixun` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `ztai` int(11) NOT NULL DEFAULT '0' COMMENT '1不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ci_liuyan`
--

CREATE TABLE IF NOT EXISTS `ci_liuyan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `sji` varchar(12) NOT NULL,
  `beiz` varchar(500) NOT NULL,
  `time` varchar(13) NOT NULL,
  `ztai` int(1) NOT NULL DEFAULT '0' COMMENT '1已查看',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ci_nav`
--

CREATE TABLE IF NOT EXISTS `ci_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `aliases` varchar(200) NOT NULL COMMENT '别名',
  `time` int(13) NOT NULL,
  `paixun` int(2) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- 表的结构 `ci_news_article`
--

CREATE TABLE IF NOT EXISTS `ci_news_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `key` varchar(200) NOT NULL,
  `miaos` varchar(300) NOT NULL,
  `uid` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `attribute` int(1) NOT NULL COMMENT '1推荐2热门3人气',
  `time` varchar(13) NOT NULL,
  `liuliang` int(11) NOT NULL,
  `ztai` int(11) NOT NULL COMMENT '1正常2删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ci_news_article`
--

INSERT INTO `ci_news_article` (`id`, `title`, `key`, `miaos`, `uid`, `image`, `attribute`, `time`, `liuliang`, `ztai`) VALUES
(1, '框架内受到菲尼克斯地方就可能受到罚款就可能是地方', '看手机电脑防守打法就可能是地方', '加快速度你付款你看就是电脑付款今年水电费水电费', 1, '', 2, '1511858652', 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `ci_news_article_content`
--

CREATE TABLE IF NOT EXISTS `ci_news_article_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `ci_news_article_content`
--

INSERT INTO `ci_news_article_content` (`id`, `uid`, `content`) VALUES
(4, 1, '阿斯顿发斯蒂芬阿斯顿发斯蒂芬阿斯顿发斯蒂芬');

-- --------------------------------------------------------

--
-- 表的结构 `ci_news_confg`
--

CREATE TABLE IF NOT EXISTS `ci_news_confg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `key` varchar(300) NOT NULL,
  `miaos` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `content` longtext NOT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `leix` int(1) NOT NULL COMMENT '1url2单页3栏目',
  `time` varchar(13) NOT NULL,
  `url` varchar(200) NOT NULL,
  `aliases` varchar(50) DEFAULT NULL COMMENT '别名',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `leix` (`leix`),
  KEY `uid_2` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ci_news_confg`
--

INSERT INTO `ci_news_confg` (`id`, `title`, `key`, `miaos`, `image`, `content`, `uid`, `leix`, `time`, `url`, `aliases`) VALUES
(1, '公司新闻', '公司新闻', '公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻', '/attached/image/20161226/20161226212403_45115.jpg', '', 0, 3, '1511924634', '', 'gsxwen'),
(2, '行业新闻', '行业新闻行业新闻行业新闻行业新闻行业新闻行业新闻行业新闻行业新闻', '行业新闻行业新闻行业新闻行业新闻行业新闻行业新闻行业新闻行业新闻行业新闻', '', '', 0, 3, '1511924609', '', 'hanyexwen'),
(3, '其他栏目', '其他栏目', '其他栏目其他栏目其他栏目其他栏目其他栏目其他栏目', '', '', 1, 3, '1511924620', '', 'qtaxwen');

-- --------------------------------------------------------

--
-- 表的结构 `ci_product_article`
--

CREATE TABLE IF NOT EXISTS `ci_product_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `key` varchar(200) NOT NULL,
  `miaos` varchar(300) NOT NULL,
  `uid` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `attribute` int(1) NOT NULL COMMENT '1推荐2热门3人气',
  `time` varchar(13) NOT NULL,
  `liuliang` int(11) NOT NULL,
  `ztai` int(11) NOT NULL COMMENT '1正常2删除',
  `image_list` varchar(400) DEFAULT NULL COMMENT '副图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ci_product_confg`
--

CREATE TABLE IF NOT EXISTS `ci_product_confg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `key` varchar(300) NOT NULL,
  `miaos` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `content` longtext NOT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `leix` int(1) NOT NULL COMMENT '1url2单页3栏目',
  `time` varchar(13) NOT NULL,
  `url` varchar(200) NOT NULL,
  `aliases` varchar(50) DEFAULT NULL COMMENT '别名',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `leix` (`leix`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ci_product_content`
--

CREATE TABLE IF NOT EXISTS `ci_product_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ci_slide`
--

CREATE TABLE IF NOT EXISTS `ci_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL,
  `paixun` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `imgsa` varchar(400) NOT NULL,
  `ztai` int(11) NOT NULL DEFAULT '0' COMMENT '1不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
