-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3308
-- 生成日期： 2020-07-05 07:46:44
-- 服务器版本： 8.0.18
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `db_tushu`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(13) DEFAULT NULL COMMENT '管理员帐号',
  `pwd` varchar(50) DEFAULT NULL COMMENT '管理员密码',
  `Levels` varchar(1) NOT NULL COMMENT '管理权限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `pwd`, `Levels`) VALUES
(1, '123456', '123456', '');

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `reid` int(6) NOT NULL COMMENT '上级分类id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`id`, `name`, `reid`) VALUES
(10, '文学', 0),
(11, '历史类', 10),
(12, '理科', 0),
(13, '数学', 12),
(14, '国外', 0),
(15, '国外文学', 14),
(16, '国外书籍', 14),
(21, '名家名作', 20),
(20, '小说', 0),
(22, '世界名著', 20),
(23, '中国现当代诗歌', 10),
(24, '散文随笔', 10),
(25, '文学史', 10),
(26, '现当代小说', 20);

-- --------------------------------------------------------

--
-- 表的结构 `chubanshe`
--

DROP TABLE IF EXISTS `chubanshe`;
CREATE TABLE IF NOT EXISTS `chubanshe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `chubanshe`
--

INSERT INTO `chubanshe` (`id`, `name`) VALUES
(1, '北京大学出版社'),
(2, '清华大学出版社'),
(4, '百花洲文艺出版社'),
(5, '重庆大学出版社'),
(6, '上海译文出版社'),
(7, '九州出版社');

-- --------------------------------------------------------

--
-- 表的结构 `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(50) NOT NULL,
  `linkurl` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `links`
--

INSERT INTO `links` (`id`, `linkname`, `linkurl`) VALUES
(9, 'd', 'd'),
(10, 'dsa', 'asd');

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

DROP TABLE IF EXISTS `liuyan`;
CREATE TABLE IF NOT EXISTS `liuyan` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `replay` text NOT NULL,
  `rtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `liuyan`
--

INSERT INTO `liuyan` (`id`, `userid`, `title`, `content`, `addtime`, `replay`, `rtime`) VALUES
(6, '123456', '123', '123', '2020-06-04 00:42:13', '', '0000-00-00 00:00:00'),
(5, '507571755', '88', '88', '2020-06-01 08:13:47', '555', '2020-06-02 10:23:08');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `title` varchar(50) NOT NULL COMMENT '新闻公告名称',
  `content` text NOT NULL COMMENT '新闻公告内容',
  `addtime` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `addtime`) VALUES
(1, '起啊桑达', '阿斯阿萨德', '2012-10-06 11:40:33');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(125) DEFAULT NULL COMMENT '订单号',
  `spc` varchar(125) DEFAULT NULL,
  `slc` varchar(125) DEFAULT NULL,
  `shouhuoren` varchar(25) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `dizhi` varchar(125) DEFAULT NULL,
  `youbian` varchar(10) DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `shff` varchar(25) DEFAULT NULL,
  `zfff` varchar(25) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `xiadanren` varchar(25) DEFAULT NULL,
  `zt` varchar(50) DEFAULT NULL,
  `total` varchar(25) DEFAULT NULL,
  `liuyan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`id`, `orderid`, `spc`, `slc`, `shouhuoren`, `sex`, `dizhi`, `youbian`, `tel`, `email`, `shff`, `zfff`, `time`, `xiadanren`, `zt`, `total`, `liuyan`) VALUES
(4, '20121227205016', '1', '1', '123', '男', '重庆', '444444', '44111111', '11111@qq.com', '普通平邮', '建设银行汇款', '2012-12-27 20:50:16', 'z0001', '已发货', '500', '阿斯'),
(7, '2020064084429', '@6@@@@@@@', '1@1@1@1@1@1@1@1@', '53', '男', '2542', '50555', '54245', '24524@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 08:44:29', '123456', '未作任何处理', '85', '542'),
(5, '2020061160858', '22', '1', '哈哈', '男', '重庆', '555', '18716668827', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-01 16:08:58', '507571755', '未作任何处理', '4800', ''),
(6, '2020061172713', '2@', '1@', '彭', '男', '重庆', '555', '18716668827', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-01 17:27:13', '507571755', '已收货', '4800', ''),
(8, '2020064084501', '@6@@@@@@@@@@', '1@1@1@1@1@1@1@1@1@1@1@', '哈哈', '男', '542', '2542', '1512452', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 08:45:01', '123456', '未作任何处理', '85', '522'),
(9, '2020064084548', '@6@@@@@@@@@@@@@', '1@1@1@1@1@1@1@1@1@1@1@1@1@1@', '+6', '男', '65356', '653', '365', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 08:45:48', '123456', '未作任何处理', '85', '55'),
(10, '2020064084557', '@6@@@@@@@@@@@@@@', '1@1@1@1@1@1@1@1@1@1@1@1@1@1@1@', '8585', '男', '8585', '858', '5855', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 08:45:57', '123456', '未作任何处理', '85', '555'),
(11, '2020064085533', '@8@', '1@1@', '555', '男', '555', '55555', '555', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 08:55:33', '123456', '未作任何处理', '23', '55'),
(12, '2020064090624', '@8@@@@', '1@1@1@1@1@', '88', '男', '888', '88', '8', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 09:06:24', '123456', '未作任何处理', '23', '55'),
(13, '2020064090704', '@@@@@1@@', '1@@1@1@1@1@1@', '5555', '男', '555', '555', '54245', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 09:07:04', '123456', '未作任何处理', '500', '5'),
(14, '2020064090844', '@@@@@1@@@@', '1@@1@1@1@1@1@1@1@', '53', '男', '555', '555', '54245', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 09:08:44', '123456', '未作任何处理', '500', '5'),
(15, '2020064091350', '@@@@@1@@@@@', '1@@1@1@1@1@1@1@1@1@', '53', '男', '555', '555', '54245', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 09:13:50', '123456', '未作任何处理', '500', '5'),
(16, '2020064091400', '@@@@@1@@@@@@', '1@@1@1@1@1@1@1@1@1@1@', '53', '男', '555', '555', '54245', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 09:14:00', '123456', '未作任何处理', '500', '5'),
(17, '2020064091606', '@@@@@1@@@@@@@@', '1@@1@1@1@1@1@1@1@1@1@1@1@', '535', '男', '555', '555', '54245', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 09:16:06', '123456', '未作任何处理', '500', '5'),
(18, '2020064095534', '1@', '1@', '5355', '男', '555', '555', '54245', '507571755@qq.com', '普通平邮', '建设银行汇款', '2020-06-04 09:55:34', '123456', '已发货', '500', '5'),
(19, '20200622221756', '6@', '1@', '6', '男', '6', '6', '6', '6@qq.com', '普通平邮', '建设银行汇款', '2020-06-22 22:17:56', '123456', '未作任何处理', '85', '6'),
(20, '20200622222452', '6@@@@@@', '1@1@1@1@1@1@', 'abc', '男', '重庆', '02433', '110', '111@qq.com', '普通平邮', '交通银行汇款', '2020-06-22 22:24:52', '123456', '未作任何处理', '85', '中通'),
(21, '20200622223727', '@6@', '1@1@', '123', '男', '123', '1233', '123', '123@qq.com', '普通平邮', '建设银行汇款', '2020-06-22 22:37:27', '123456', '未作任何处理', '85', '走中通'),
(22, '20200623083011', '@6@@', '1@1@1@', '哈哈', '男', '重庆', '0114', '156984758', '47@qq.com', '普通平邮', '建设银行汇款', '2020-06-23 08:30:11', '123456', '已发货', '85', '凤凰凤凰花');

-- --------------------------------------------------------

--
-- 表的结构 `shu`
--

DROP TABLE IF EXISTS `shu`;
CREATE TABLE IF NOT EXISTS `shu` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL COMMENT '图书名称',
  `jianjie` mediumtext COMMENT '图书介绍',
  `xinghao` varchar(25) DEFAULT NULL COMMENT '图书型号',
  `tupian` varchar(200) DEFAULT NULL COMMENT '图书图片',
  `shuliang` int(4) DEFAULT NULL COMMENT '图书数量',
  `cishu` int(4) DEFAULT NULL COMMENT '卖出次数',
  `tuijian` int(4) DEFAULT NULL COMMENT '是否推荐',
  `dalei` int(4) DEFAULT NULL COMMENT '大类id',
  `xiaolei` int(4) NOT NULL COMMENT '小类id',
  `huiyuanjia` varchar(25) DEFAULT NULL COMMENT '会员价',
  `shichangjia` varchar(25) DEFAULT NULL COMMENT '市场价',
  `chubanshe` varchar(25) DEFAULT NULL COMMENT '出版社id',
  `tejia` int(2) DEFAULT NULL COMMENT '是否特价',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `shu`
--

INSERT INTO `shu` (`id`, `name`, `jianjie`, `xinghao`, `tupian`, `shuliang`, `cishu`, `tuijian`, `dalei`, `xiaolei`, `huiyuanjia`, `shichangjia`, `chubanshe`, `tejia`, `addtime`) VALUES
(1, '辛夷坞暖伤青春作品全集', '全新修订版，暖伤青春代言人辛夷坞\"致青春\"纯爱经典 感动集结 豪华软精装 全国独家新增6篇新番外', '22854471', 'admin/upimages/2.jpg', 9, 3, 1, 14, 15, '500', '5001', '2', 1, '2000-02-10 03:00:00'),
(2, '严歌苓作品集', '小姨多鹤 一个女人的史诗 扶桑 第九个寡妇 铁梨花）：当代华语第一女作家严歌苓代表作一套收齐  ', '22854474', 'admin/upimages/3.jpg', 78, 2, 1, 10, 11, '480', '580', '2', 1, '2000-03-04 04:00:00'),
(4, '美丽新世界', '西安市大实打实大大上的v发v的方便的方法的个人', '9787510880803', 'admin/upimages/5.jpg', 68, 0, 1, 20, 21, '56', '56', '7', 1, '0000-00-00 00:00:00'),
(5, '渺小一生', '54额撒旦发射点发射点吧v吃不吃别人个人个人二', '9787811167177', 'admin/upimages/6.jpg', 800, 0, 1, 14, 15, '35', '68', '4', 1, '0000-00-00 00:00:00'),
(6, '人间失格', '国防部v吧v才能地图和个人Greg特瑞个人版', '9787811167174', 'admin/upimages/7.jpg', 499, 1, 1, 14, 16, '85', '85', '5', 1, '0000-00-00 00:00:00'),
(7, '是谁杀了我', '上厕所的次数处处都是v程序', '9787811167155', 'admin/upimages/8.jpg', 100, 0, 0, 20, 22, '32', '32', '6', 1, '0000-00-00 00:00:00'),
(8, '罪与罚', '看见，没那么绑定的分别是到了', '978781116111', 'admin/upimages/9.jpg', 200, 0, 0, 14, 16, '23', '33', '4', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tushu`
--

DROP TABLE IF EXISTS `tushu`;
CREATE TABLE IF NOT EXISTS `tushu` (
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `isbn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `classification` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tushu`
--

INSERT INTO `tushu` (`name`, `isbn`, `price`, `classification`) VALUES
('一个人的好天气', '4254245', '35', '文学');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `dongjie` int(4) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `sfzh` varchar(25) DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `qq` varchar(25) DEFAULT NULL,
  `dizhi` varchar(100) DEFAULT NULL,
  `youbian` varchar(25) DEFAULT NULL,
  `truename` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `pwd`, `dongjie`, `email`, `sfzh`, `tel`, `qq`, `dizhi`, `youbian`, `truename`) VALUES
(3, 'ztest', '123456', 0, '111@11.com', '1', '11', '1123', '10000', '1', '1232'),
(6, '123456', '123456', 0, '507571755@qq.com', '500109199508014321', '18716668827', '507571755', '重庆', '666', '彭思');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
