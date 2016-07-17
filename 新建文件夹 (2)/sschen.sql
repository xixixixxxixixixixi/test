/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : sschen

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-06-14 22:59:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for de_activity
-- ----------------------------
DROP TABLE IF EXISTS `de_activity`;
CREATE TABLE `de_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `submitter` varchar(255) DEFAULT NULL,
  `add_time` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of de_activity
-- ----------------------------
INSERT INTO `de_activity` VALUES ('11', '校园歌手大赛', '<p>简直碉堡了<br/></p>', '1314', '2016-06-10', '575ae042b627b.jpg');
INSERT INTO `de_activity` VALUES ('12', '流行音乐交流', '<p>cool 到不行<br/></p>', '1314', '2016-06-10', '575ae07ba1721.jpg');
INSERT INTO `de_activity` VALUES ('13', '歪果仁 呐呐呐', '<p>唱吧<br/></p>', '1314', '2016-06-10', '575ae0aa9c4a5.jpg');
INSERT INTO `de_activity` VALUES ('14', '彩虹跑', '<p>可爱<br/></p>', '1314', '2016-06-10', '575ae114428eb.jpg');
INSERT INTO `de_activity` VALUES ('15', '交谊舞会', '<p>大家很兴奋 很开心 。。。。<br/></p>', '1314', '2016-06-10', '575ae1894aa64.jpg');
INSERT INTO `de_activity` VALUES ('17', '成年儿童节', '<p>大家都是成年人<br/></p>', '1314', '2016-06-11', '575ba8edace83.jpg');

-- ----------------------------
-- Table structure for de_admin
-- ----------------------------
DROP TABLE IF EXISTS `de_admin`;
CREATE TABLE `de_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `limit` varchar(255) DEFAULT NULL,
  `login_time` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of de_admin
-- ----------------------------
INSERT INTO `de_admin` VALUES ('3', '1234', '81dc9bdb52d04dc20036dbd8313ed055', '1', null, null, null);
INSERT INTO `de_admin` VALUES ('4', 'root', '81dc9bdb52d04dc20036dbd8313ed055', '1', '2016-06-14 20:33:07', '::1', null);
INSERT INTO `de_admin` VALUES ('5', '111', '698d51a19d8a121ce581499d7b701668', '0', '2016-06-10 23:01:23', null, null);
INSERT INTO `de_admin` VALUES ('6', '122', 'a0a080f42e6f13b3a2df133f073095dd', '0', '2016-06-13 12:36:05', '::1', null);
INSERT INTO `de_admin` VALUES ('7', '1111', 'b59c67bf196a4758191e42f76670ceba', '0', null, null, '导弹6班');
INSERT INTO `de_admin` VALUES ('8', '你好', '194ce5d0b89c47ff6b30bfb491f9dc26', '0', '2016-06-14 20:18:35', '::1', '飞机社');
INSERT INTO `de_admin` VALUES ('9', '13140110068', '202cb962ac59075b964b07152d234b70', '0', '2016-06-14 20:40:49', '::1', '剪刀脚社');
INSERT INTO `de_admin` VALUES ('10', '1313', '202cb962ac59075b964b07152d234b70', '0', null, null, '剪刀脚社');
INSERT INTO `de_admin` VALUES ('11', '123', '202cb962ac59075b964b07152d234b70', '0', null, null, '骑马射箭社');
INSERT INTO `de_admin` VALUES ('12', 'ttt', '9990775155c3518a0d7917f7780b24aa', '1', null, null, '飞机社');
INSERT INTO `de_admin` VALUES ('13', 'fff', 'ece926d8c0356205276a45266d361161', '1', null, null, '飞机社');
INSERT INTO `de_admin` VALUES ('14', 'ert', '202cb962ac59075b964b07152d234b70', '1', null, null, '');

-- ----------------------------
-- Table structure for de_login
-- ----------------------------
DROP TABLE IF EXISTS `de_login`;
CREATE TABLE `de_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `legal` tinyint(4) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of de_login
-- ----------------------------
INSERT INTO `de_login` VALUES ('14', '13140110068', '81dc9bdb52d04dc20036dbd8313ed055', '1', '2016-06-13 13:11:57', '导弹6班', '长江');
INSERT INTO `de_login` VALUES ('15', '13140110067', '202cb962ac59075b964b07152d234b70', '1', '2016-06-14 20:20:34', '剪刀脚社', '狗剩');

-- ----------------------------
-- Table structure for de_money
-- ----------------------------
DROP TABLE IF EXISTS `de_money`;
CREATE TABLE `de_money` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) DEFAULT NULL,
  `matter` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `submitter` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of de_money
-- ----------------------------
INSERT INTO `de_money` VALUES ('6', '开放', '不说了', '400', '1234', null, null);
INSERT INTO `de_money` VALUES ('7', '开放', '不说了', '400', '1234', null, null);
INSERT INTO `de_money` VALUES ('8', '123fdffdd1', '1', '123fdf1', '1234', null, null);
INSERT INTO `de_money` VALUES ('9', '123', '1213', '12123', '1234', null, null);
INSERT INTO `de_money` VALUES ('10', '13', '13', '13', '1234', null, null);
INSERT INTO `de_money` VALUES ('11', '听', 't', '听', '1234', null, null);
INSERT INTO `de_money` VALUES ('12', '123fdffdd13', '13', '13', '1234', null, null);
INSERT INTO `de_money` VALUES ('13', 'd', 'd', 'd', '1234', '2016-06-08', '飞机社');
INSERT INTO `de_money` VALUES ('14', 'dalanqiu', '123', '100', '1234', '2016-06-09', '飞机社');
INSERT INTO `de_money` VALUES ('15', '看球', '大家一起看球·', '200', '222', '2016-06-10', '飞机社');
INSERT INTO `de_money` VALUES ('16', '123fdffd', '12', '21', '13140110068', '2016-06-13', '导弹6班');
INSERT INTO `de_money` VALUES ('17', '23', '23', '12123', '13140110068', '2016-06-13', '导弹6班');
INSERT INTO `de_money` VALUES ('18', '2', '1', '1', '13140110068', '2016-06-13', '导弹6班');
INSERT INTO `de_money` VALUES ('19', '1', '1', '1', '13140110068', '2016-06-13', '导弹6班');
INSERT INTO `de_money` VALUES ('20', 'd', '1', '12', '13140110068', '2016-06-13', '导弹6班');
INSERT INTO `de_money` VALUES ('21', '123', '12', '12', '13140110068', '2016-06-13', '导弹6班');
INSERT INTO `de_money` VALUES ('22', 'df', '12', '12', '13140110068', '2016-06-13', '导弹6班');

-- ----------------------------
-- Table structure for de_organization
-- ----------------------------
DROP TABLE IF EXISTS `de_organization`;
CREATE TABLE `de_organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `deposit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of de_organization
-- ----------------------------
INSERT INTO `de_organization` VALUES ('3', '飞机社', '9090');
INSERT INTO `de_organization` VALUES ('4', '导弹6班', '12112');
INSERT INTO `de_organization` VALUES ('6', '剪刀脚社', '12345');
INSERT INTO `de_organization` VALUES ('7', '骑马射箭社', null);
