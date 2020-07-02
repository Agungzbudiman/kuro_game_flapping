/*
Navicat MySQL Data Transfer

Source Server         : my sql
Source Server Version : 100316
Source Host           : localhost:3306
Source Database       : flapping_bird

Target Server Type    : MYSQL
Target Server Version : 100316
File Encoding         : 65001

Date: 2020-06-17 17:21:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'admin', 'c8837b23ff8aaa8a2dde915473ce0991', '7');
INSERT INTO `tbl_user` VALUES ('2', 'frank', 'e10adc3949ba59abbe56e057f20f883e', '0');
SET FOREIGN_KEY_CHECKS=1;
