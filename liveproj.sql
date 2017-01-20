-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-20 06:53:26
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `liveproj`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `handlelog` char(32) NOT NULL COMMENT '操作日志',
  PRIMARY KEY (`aid`),
  UNIQUE KEY `adminname` (`adminname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `t_admin`
--

INSERT INTO `t_admin` (`aid`, `adminname`, `password`, `handlelog`) VALUES
(1, 'admin', 'admin123', '');

-- --------------------------------------------------------

--
-- 表的结构 `t_charge_log`
--

CREATE TABLE IF NOT EXISTS `t_charge_log` (
  `uid` int(11) unsigned NOT NULL COMMENT '用户唯一id',
  `time` int(10) DEFAULT NULL COMMENT '充值时间戳',
  `charge` int(10) DEFAULT NULL COMMENT '充值额度',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_if_auhtor`
--

CREATE TABLE IF NOT EXISTS `t_if_auhtor` (
  `uid` int(11) NOT NULL,
  `author_type` varchar(20) NOT NULL COMMENT '认证类型',
  `author_name` char(20) NOT NULL,
  `real_name` char(20) NOT NULL COMMENT '真实姓名',
  `author_comment` char(32) NOT NULL COMMENT '+v说明',
  `account_img_forward` char(32) NOT NULL COMMENT '身份证正面',
  `account_img_back` char(32) NOT NULL COMMENT '身份证正面',
  `account_img_hand` char(32) NOT NULL COMMENT '手持身份证',
  `account_number` int(11) NOT NULL COMMENT '身份证号码'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='用户认证信息表 ';

-- --------------------------------------------------------

--
-- 表的结构 `t_live`
--

CREATE TABLE IF NOT EXISTS `t_live` (
  `uid` int(11) unsigned NOT NULL COMMENT '用户唯一id',
  `streamid` varchar(128) NOT NULL COMMENT '直播流id',
  `type` tinyint(2) DEFAULT NULL COMMENT '直播分类',
  `groupid` varchar(128) DEFAULT NULL COMMENT '直播间群组id',
  `title` varchar(128) DEFAULT NULL COMMENT '直播标题',
  `frontcover` varchar(255) DEFAULT NULL COMMENT '封面地址',
  `location` varchar(128) DEFAULT '火星' COMMENT '地理位置',
  `pushurl` varchar(255) NOT NULL DEFAULT '' COMMENT '推流地址',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0:上线 1:下线',
  `viewercount` int(11) NOT NULL DEFAULT '0' COMMENT '观看数量',
  `forbidflag` tinyint(2) DEFAULT NULL COMMENT '禁止标识',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`uid`),
  KEY `streamid` (`streamid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_private_msg`
--

CREATE TABLE IF NOT EXISTS `t_private_msg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '私信id',
  `sender` int(11) NOT NULL DEFAULT '0' COMMENT '发送方',
  `receiver` int(11) NOT NULL DEFAULT '0' COMMENT '接收方',
  `type` tinyint(2) DEFAULT '0' COMMENT '消息类型: 1系统消息 2普通文本消息 3普通语音消息',
  `content` varchar(512) DEFAULT NULL COMMENT '消息内容',
  `status` tinyint(2) DEFAULT '0' COMMENT '消息状态: 1未读 2已读 3删除',
  `sendtime` int(10) NOT NULL DEFAULT '0' COMMENT '发送时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `t_prop`
--

CREATE TABLE IF NOT EXISTS `t_prop` (
  `uid` int(11) NOT NULL,
  `diamond` int(11) NOT NULL,
  `usediamond` int(11) NOT NULL,
  `red` int(11) NOT NULL,
  `leftred` int(11) NOT NULL,
  `jifen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='用户资产，包括钻石红票这些';

-- --------------------------------------------------------

--
-- 表的结构 `t_stat`
--

CREATE TABLE IF NOT EXISTS `t_stat` (
  `to_be_author` int(11) DEFAULT NULL COMMENT '认证待审核',
  `author_not_pass` int(11) DEFAULT NULL COMMENT '认证未通过',
  `recharge` int(11) DEFAULT NULL COMMENT '充值单',
  `common` int(11) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `robot` int(11) DEFAULT NULL,
  `userall` int(11) DEFAULT NULL COMMENT '会员总数',
  `showing` int(11) DEFAULT NULL,
  `finished_show` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_stat`
--

INSERT INTO `t_stat` (`to_be_author`, `author_not_pass`, `recharge`, `common`, `author`, `robot`, `userall`, `showing`, `finished_show`) VALUES
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, 12, 45, 153, 23, 123, 55, 23);

-- --------------------------------------------------------

--
-- 表的结构 `t_topic`
--

CREATE TABLE IF NOT EXISTS `t_topic` (
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='话题列表';

-- --------------------------------------------------------

--
-- 表的结构 `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户唯一id',
  `wxuid` varchar(128) DEFAULT NULL COMMENT '用户微信id',
  `qquid` varchar(128) DEFAULT NULL COMMENT '用户QQid',
  `mobile` varchar(32) DEFAULT NULL COMMENT '用户手机号',
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `status` char(20) NOT NULL COMMENT '用户状态，机器人、认证、普通',
  `level` int(11) NOT NULL COMMENT '等级',
  `fans` int(11) NOT NULL,
  `follows` int(11) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `if_author` tinyint(20) NOT NULL COMMENT '是否认证',
  `author` char(20) NOT NULL COMMENT '未认证或认证未通过',
  `regdate` int(10) NOT NULL COMMENT '用户注册时间',
  `lastlogintime` int(10) NOT NULL COMMENT '用户上次登录时间',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12000001 ;

--
-- 转存表中的数据 `t_user`
--

INSERT INTO `t_user` (`uid`, `wxuid`, `qquid`, `mobile`, `username`, `password`, `status`, `level`, `fans`, `follows`, `province`, `city`, `gender`, `if_author`, `author`, `regdate`, `lastlogintime`) VALUES
(12000000, NULL, NULL, NULL, '', '', '', 0, 0, 0, '', '', 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `t_user_mobile`
--

CREATE TABLE IF NOT EXISTS `t_user_mobile` (
  `mobile` varchar(32) NOT NULL COMMENT '用户手机号',
  `uid` int(11) unsigned NOT NULL COMMENT '手机用户关联的用户id',
  `pwd` char(32) DEFAULT NULL COMMENT '密码',
  `salt` varchar(16) DEFAULT NULL COMMENT '随机盐',
  PRIMARY KEY (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_user_profile`
--

CREATE TABLE IF NOT EXISTS `t_user_profile` (
  `uid` int(11) unsigned NOT NULL COMMENT '用户唯一id',
  `nickname` varchar(64) DEFAULT NULL COMMENT '用户昵称',
  `signature` varchar(256) DEFAULT NULL COMMENT '个性签名',
  `sex` tinyint(1) unsigned DEFAULT '0' COMMENT '用户性别，1为男性，2为女性',
  `province` varchar(64) DEFAULT NULL COMMENT '用户省份',
  `city` varchar(64) DEFAULT NULL COMMENT '用户城市',
  `country` varchar(32) DEFAULT NULL COMMENT '用户国家',
  `headimgurl` varchar(256) DEFAULT NULL COMMENT '用户头像url',
  `follow` int(11) DEFAULT '0' COMMENT '关注数量',
  `follower` int(11) DEFAULT '0' COMMENT '粉丝数量',
  `level` int(11) DEFAULT '0' COMMENT '用户当前等级',
  `exp` int(11) DEFAULT '0' COMMENT '用户当前经验',
  `diamond` int(11) DEFAULT '0' COMMENT '用户剩余钻石',
  `income` int(11) DEFAULT '0' COMMENT '用户收益',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_user_qq`
--

CREATE TABLE IF NOT EXISTS `t_user_qq` (
  `qquid` varchar(128) NOT NULL COMMENT 'QQ用户唯一标识',
  `uid` int(11) unsigned NOT NULL COMMENT 'QQ用户关联的用户id',
  `nickname` varchar(64) DEFAULT NULL COMMENT 'QQ用户昵称',
  `sex` tinyint(1) unsigned DEFAULT NULL COMMENT 'QQ用户性别，1为男性，2为女性',
  `headimgurl` varchar(256) DEFAULT NULL COMMENT 'QQ用户头像url',
  PRIMARY KEY (`qquid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_user_relation`
--

CREATE TABLE IF NOT EXISTS `t_user_relation` (
  `uid` int(11) unsigned NOT NULL COMMENT '用户唯一id',
  `follow` int(11) NOT NULL COMMENT '关注对象',
  `type` tinyint(2) DEFAULT '0' COMMENT '1关注 2粉丝',
  PRIMARY KEY (`uid`,`follow`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_user_wx`
--

CREATE TABLE IF NOT EXISTS `t_user_wx` (
  `wxuid` varchar(128) NOT NULL COMMENT '微信用户唯一标识',
  `uid` int(11) unsigned NOT NULL COMMENT '微信用户关联的用户id',
  `nickname` varchar(64) DEFAULT NULL COMMENT '微信用户昵称',
  `sex` tinyint(1) unsigned DEFAULT NULL COMMENT '微信用户性别，1为男性，2为女性',
  `province` varchar(64) DEFAULT NULL COMMENT '微信用户省份',
  `city` varchar(64) DEFAULT NULL COMMENT '微信用户城市',
  `country` varchar(32) DEFAULT NULL COMMENT '微信用户国家',
  `headimgurl` varchar(256) DEFAULT NULL COMMENT '微信用户头像url',
  PRIMARY KEY (`wxuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
