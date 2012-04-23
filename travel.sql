/*
Navicat MySQL Data Transfer

Source Server         : phpproject
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : travel

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-04-24 03:16:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clip_pages`
-- ----------------------------
DROP TABLE IF EXISTS `clip_pages`;
CREATE TABLE `clip_pages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PAGE` varchar(100) CHARACTER SET utf8 NOT NULL,
  `LINK_CLIP` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clip_pages
-- ----------------------------
INSERT INTO `clip_pages` VALUES ('1', 'trang-chu', '#');
INSERT INTO `clip_pages` VALUES ('2', 'gioi-thieu', '#');
INSERT INTO `clip_pages` VALUES ('3', 'lien-he', '#');
INSERT INTO `clip_pages` VALUES ('4', 'tour-nuoc-ngoai', '#');
INSERT INTO `clip_pages` VALUES ('5', 'tour-trong-nuoc', '#');
INSERT INTO `clip_pages` VALUES ('6', 'du-hoc', '#');
INSERT INTO `clip_pages` VALUES ('7', 've-may-bay', '#');
INSERT INTO `clip_pages` VALUES ('8', 'dich-vu', '#');
INSERT INTO `clip_pages` VALUES ('9', 'nhat-ky-tour', '#');

-- ----------------------------
-- Table structure for `dich_vu`
-- ----------------------------
DROP TABLE IF EXISTS `dich_vu`;
CREATE TABLE `dich_vu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LOAI_DV` int(11) NOT NULL,
  `TITLE` varchar(200) CHARACTER SET utf8 NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 NOT NULL,
  `CONTENT` text CHARACTER SET utf8 NOT NULL,
  `HINH` varchar(200) CHARACTER SET utf8 NOT NULL,
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dich_vu
-- ----------------------------
INSERT INTO `dich_vu` VALUES ('1', '1', 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>', 'pic/tour.jpg', '0');
INSERT INTO `dich_vu` VALUES ('2', '2', 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>', 'pic/tour.jpg', '0');
INSERT INTO `dich_vu` VALUES ('3', '3', 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>', 'pic/tour.jpg', '0');
INSERT INTO `dich_vu` VALUES ('4', '3', 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>', 'pic/tour.jpg', '0');
INSERT INTO `dich_vu` VALUES ('5', '2', '123', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', '<p>\r\n	Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br />\r\n	<br />\r\n	Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br />\r\n	<br />\r\n	Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br />\r\n	<br />\r\n	Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br />\r\n	&nbsp;</p>', '', '0');
INSERT INTO `dich_vu` VALUES ('6', '1', '123', '123', '<p>\r\n	123</p>', 'dichvu/2012/0423/13351921218505.jpg', '0');

-- ----------------------------
-- Table structure for `du_hoc`
-- ----------------------------
DROP TABLE IF EXISTS `du_hoc`;
CREATE TABLE `du_hoc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of du_hoc
-- ----------------------------
INSERT INTO `du_hoc` VALUES ('1', 'Du Học Mỹ');
INSERT INTO `du_hoc` VALUES ('2', 'Du Học Các Nước Khác');
INSERT INTO `du_hoc` VALUES ('3', 'Giới thiệu');
INSERT INTO `du_hoc` VALUES ('4', 'Visa Thành Công');
INSERT INTO `du_hoc` VALUES ('5', 'Thông Tin mới');
INSERT INTO `du_hoc` VALUES ('6', 'Các Trường Ở Mỹ Liên Kết Với Eduvisa');
INSERT INTO `du_hoc` VALUES ('7', 'Các Trường Quốc Tế Liên Kết Với Eduvisa');
INSERT INTO `du_hoc` VALUES ('8', 'Những Câu Hỏi Thường Gặp');
INSERT INTO `du_hoc` VALUES ('9', 'Những Câu Hỏi Thường Gặp');

-- ----------------------------
-- Table structure for `du_hoc_detail`
-- ----------------------------
DROP TABLE IF EXISTS `du_hoc_detail`;
CREATE TABLE `du_hoc_detail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_DU_HOC` int(11) NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 NOT NULL,
  `CONTENT` text CHARACTER SET utf8 NOT NULL,
  `HINH` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of du_hoc_detail
-- ----------------------------
INSERT INTO `du_hoc_detail` VALUES ('1', '1', '123', '<p>\r\n	456</p>', null);
INSERT INTO `du_hoc_detail` VALUES ('2', '2', 'Lorem ipsum dolor sit actetuer adipiscing elit. Praesent vulum molestie lacunean nonummy hendrerit mauasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce', '', null);
INSERT INTO `du_hoc_detail` VALUES ('3', '3', '', '<p>\r\n	gioithieu</p>', null);
INSERT INTO `du_hoc_detail` VALUES ('4', '4', 'description12', '<p>\r\n	Lorem ipsum dolor sit actetuer adipiscing elit. Praesent vulum molestie lacunean nonummy hendrerit mauasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce</p>', null);
INSERT INTO `du_hoc_detail` VALUES ('5', '5', 'content', 'Lorem ipsum dolor sit actetuer adipiscing elit. Praesent vulum molestie lacunean nonummy hendrerit mauasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce', null);
INSERT INTO `du_hoc_detail` VALUES ('6', '6', '123', 'Lorem ipsum dolor sit actetuer adipiscing elit. Praesent vulum molestie lacunean nonummy hendrerit mauasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce', null);
INSERT INTO `du_hoc_detail` VALUES ('7', '8', 'hoi1', 'Lorem ipsum dolor sit actetuer adipiscing elit. Praesent vulum molestie lacunean nonummy hendrerit mauasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce', null);
INSERT INTO `du_hoc_detail` VALUES ('8', '9', '123', '567', null);
INSERT INTO `du_hoc_detail` VALUES ('9', '8', '555', '5555123', null);
INSERT INTO `du_hoc_detail` VALUES ('10', '9', '888', '8888', null);
INSERT INTO `du_hoc_detail` VALUES ('11', '6', '0', '0', null);
INSERT INTO `du_hoc_detail` VALUES ('12', '7', 'quoc te1', 'quocte', 'duhoc/2012/0424/13352074887015.jpg');
INSERT INTO `du_hoc_detail` VALUES ('13', '0', '1', '<p>\r\n	1</p>', null);
INSERT INTO `du_hoc_detail` VALUES ('14', '5', '4', '<p>\r\n	4</p>', null);
INSERT INTO `du_hoc_detail` VALUES ('15', '4', 'visa', '<p>\r\n	visa</p>', null);

-- ----------------------------
-- Table structure for `gioi_thieu`
-- ----------------------------
DROP TABLE IF EXISTS `gioi_thieu`;
CREATE TABLE `gioi_thieu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CONTENT` text CHARACTER SET utf8 NOT NULL,
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gioi_thieu
-- ----------------------------
INSERT INTO `gioi_thieu` VALUES ('1', '<ol>\r\n	<li style=\"margin-left: 49.5pt;\">\r\n		<strong>LỜI NGỎ:</strong></li>\r\n</ol>\r\n<p style=\"margin-left:13.5pt;\">\r\n	X&atilde; hội ng&agrave;y c&agrave;ng ph&aacute;t triển, cuộc sống ng&agrave;y c&agrave;ng bận rộn v&agrave; đầy lo toan. Đ&atilde; bao giờ ch&uacute;ng ta thử g&aacute;c bỏ những bộn bề để c&ugrave;ng gia đ&igrave;nh, bạn b&egrave;, đồng nghiệp tận hưởng niềm vui khi đặt ch&acirc;n đến những miền đất mới lạ v&agrave; kh&aacute;m ph&aacute; th&ecirc;m nhiều điều th&uacute; vị vốn c&oacute; từ cuộc sống?</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Vietnam Travel rất h&acirc;n hạnh được đồng h&agrave;nh c&ugrave;ng bạn trải nghiệm những khoảnh khắc đặc biệt n&agrave;y.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	<strong>LĨNH VỰC HOẠT ĐỘNG:</strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Kinh Doanh Lữ H&agrave;nh Quốc Tế</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đ&acirc;y l&agrave; lĩnh vực hoạt động chủ lực của ch&uacute;ng t&ocirc;i từ những ng&agrave;y đầu th&agrave;nh lập.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Với phong c&aacute;ch phục vụ chuy&ecirc;n nghiệp, ch&uacute;ng t&ocirc;i đ&atilde; tạo được uy t&iacute;n, cũng như sự tin cậy của kh&aacute;ch h&agrave;ng trong thời gian qua. Từ sự kh&iacute;ch lệ đ&aacute;ng tr&acirc;n trọng đ&oacute;, ch&uacute;ng t&ocirc;i lu&ocirc;n mạnh dạn cải tiến v&agrave; ph&aacute;t triển những chương tr&igrave;nh tham quan du lịch mới, hấp dẫn v&agrave; th&uacute; vị hơn để đ&aacute;p ứng nhu cầu du lịch ng&agrave;y c&agrave;ng đa dạng của kh&aacute;ch h&agrave;ng.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Căn cứ v&agrave;o nội dung v&agrave; mục đ&iacute;ch chuyển đi, hiện tại ch&uacute;ng t&ocirc;i c&oacute; 3 loại h&igrave;nh tour outbound sau:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	<em><u>Du lịch sinh th&aacute;i, nghỉ ngơi, giải tr&iacute;, chữa bệnh, t&igrave;m hiểu văn h&oacute;a, lịch sử:</u></em></p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đ&acirc;y l&agrave; loại h&igrave;nh du lịch được Vietnam Travel xem l&agrave; trọng điểm, n&ecirc;n lu&ocirc;n c&oacute; sự đầu tư đ&uacute;ng đắng để ph&aacute;t triển cả về h&igrave;nh thức, số lượng v&agrave; nội dung. Hiện tại 90% số lượng tour của Vietnam Travel l&agrave; theo loại h&igrave;nh n&agrave;y.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	<em><u>Du lịch thiền tịnh, t&ocirc;n gi&aacute;o, t&iacute;n ngưỡng:</u></em></p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Ngo&agrave;i loại h&igrave;nh du lịch tr&ecirc;n th&igrave; loại du lịch phục vụ đời sống tinh thần t&iacute;n ngưỡng t&ocirc;n gi&aacute;o cũng dần thịnh h&agrave;nh, nhu cầu ng&agrave;y một cao hơn. Do đ&oacute; Vietnam Travel thiết kế 3 tour du lịch đặc th&ugrave; d&agrave;nh ri&ecirc;ng cho du kh&aacute;ch. Đ&acirc;y l&agrave; loại h&igrave;nh được Vietnam Travel đ&aacute;nh gi&aacute; c&oacute; tiềm năng, v&agrave; sẽ ph&aacute;t triển mạnh trong tương lai.&nbsp;&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	ISRAEL &ndash; H&agrave;nh tr&igrave;nh về đất th&aacute;nh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8N7D</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	ẤN ĐỘ - H&agrave;nh tr&igrave;nh về đất phật&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10N9D</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	TRUNG QUỐC &ndash; Nhất đại phật sơn&nbsp;&nbsp;&nbsp;&nbsp; 9N8D</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	<em><u>Du lịch thể thao, kh&aacute;m ph&aacute;, mạo hiểm:</u></em></p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đ&acirc;y l&agrave; loại h&igrave;nh du lịch đang ph&aacute;t triển v&agrave; được giới trẻ trong v&agrave; ngo&agrave;i nước ưa chuộng. Vietnam Travel c&oacute; những sản phẩm đặc th&ugrave; được thiết kế đặc biệt d&agrave;nh ri&ecirc;ng cho c&aacute;c doanh nghiệp như chương tr&igrave;nh tham quan kết hợp xem c&aacute;c giải b&oacute;ng đ&aacute; quốc tế lớn: Seagames, Euro Cup, World Cup, hay tham quan kết hợp xem đua xe c&ocirc;ng thức 1 (F1).</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đừng ngần ngại v&agrave; chần chừ nếu bạn c&oacute; nhu cầu về du lịch, bởi v&igrave; chắc chắn ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng phụ l&ograve;ng tin của bạn, ch&uacute;ng t&ocirc;i sẽ l&agrave;m tất cả để cho chuyến đi của bạn trở n&ecirc;n tuyệt vời nhất.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Những điều l&agrave;m n&ecirc;n sự kh&aacute;c biệt của ch&uacute;ng t&ocirc;i:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đến nay ch&uacute;ng t&ocirc;i c&oacute; hệ thống quan hệ đối t&aacute;c chặt chẽ với hơn 100 c&ocirc;ng ty, đại l&yacute; du lịch tại&nbsp; 20 quốc gia tr&ecirc;n thế giới.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đồng thời ch&uacute;ng t&ocirc;i sở hữu bộ phận tư vấn, phục vụ kh&aacute;ch h&agrave;ng rất t&acirc;m huyết với nghề, biết cảm nhận v&agrave; thấu hiểu t&acirc;m l&yacute; nhanh, c&oacute; thể mang lại những gi&aacute; trị vượt tr&ecirc;n sự mong đợi của kh&aacute;ch h&agrave;ng.&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Ngo&agrave;i ra ch&uacute;ng t&ocirc;i l&agrave; đại l&yacute; ch&iacute;nh thức của hơn 20 h&atilde;ng h&agrave;ng kh&ocirc;ng quốc tế, để đ&aacute;p ứng tối đa nhu cầu v&eacute; cho tour theo y&ecirc;u cầu.&nbsp;&nbsp;&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	B&ecirc;n cạnh đ&oacute;, ch&uacute;ng t&ocirc;i được một đội ngũ hướng dẫn vi&ecirc;n quốc tế chuy&ecirc;n nghiệp hết mực phục vụ, v&agrave; c&ugrave;ng hướng đến một phương ch&acirc;m:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&ldquo;Tất cả cho kh&aacute;ch h&agrave;ng, kh&aacute;ch h&agrave;ng cho tất cả&rdquo;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Kinh Doanh Lữ H&agrave;nh Nội Địa</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	H&agrave;ng năm, ch&uacute;ng t&ocirc;i phục vụ tr&ecirc;n 5.000 lượt kh&aacute;ch đi du lịch trong nước. Với uy t&iacute;n v&agrave; phong c&aacute;ch phục vụ chuy&ecirc;n nghiệp trong lĩnh vực lữ h&agrave;nh, ch&uacute;ng t&ocirc;i đ&atilde; từng tổ chức c&aacute;c đo&agrave;n tour du lịch c&oacute; số lượng tr&ecirc;n 1.000 kh&aacute;ch.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đặc biệt, với hệ thống quản l&yacute; chất lượng dịch vụ lu&ocirc;n được vận h&agrave;nh chặt chẽ b&ecirc;n cạnh mỗi sản phẩm tour b&aacute;n ra, đ&atilde; gi&uacute;p ch&uacute;ng t&ocirc;i đạt được tỷ lệ h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng rất cao l&agrave; 98%. Do đ&oacute; Vietnam Travel c&oacute; thể tự h&agrave;o n&oacute;i rằng lữ h&agrave;nh nội địa l&agrave; thế mạnh của ch&uacute;ng t&ocirc;i.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Với phương ch&acirc;m hợp t&aacute;c v&agrave; ph&aacute;t triển, đặt sự bền vững l&ecirc;n h&agrave;ng đầu, đến nay Vietnam Travel c&oacute; hệ thống đối t&aacute;c th&acirc;n thiết rất lớn tr&ecirc;n to&agrave;n quốc: hơn 200 kh&aacute;ch sạn, tr&ecirc;n 1000 nh&agrave; h&agrave;ng v&agrave; 100 nh&agrave; xe. V&igrave; thế, d&ugrave; đến m&ugrave;a cao điểm hay thấp điểm về du lịch, ch&uacute;ng t&ocirc;i vẫn dễ d&agrave;ng tổ chức những tour kết hợp chơi teambuilding, cắm trại sinh th&aacute;i, hay họp hội nghị, sự kiện cho kh&aacute;ch đo&agrave;n với số lượng lớn.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Kinh Doanh Lữ H&agrave;nh Kh&aacute;ch Quốc Tế Đến Viet Nam (inbound tour)</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Vietnam Travel hiện đang l&agrave; th&agrave;nh vi&ecirc;n ch&iacute;nh thức của c&aacute;c hiệp hội du lịch trong nước v&agrave; quốc tế HTA, PATA, JATA, ASTA. Cộng với sự am tường c&aacute;c tuyến điểm du lịch trong nước. Ch&uacute;ng t&ocirc;i đ&atilde; tổ chức th&agrave;nh c&ocirc;ng nhiều tour du lịch cho c&aacute;c đo&agrave;n kh&aacute;ch quốc tế đến từ nhiều quốc gia kh&aacute;c nhau như: Nga, H&agrave;n Quốc, Trung Quốc, Hoa Kỳ, Nhật Bản.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đ&acirc;y l&agrave; lĩnh vực hoạt động được Vietnam Travel đầu tư mạnh mẽ để ph&aacute;t triển l&acirc;u d&agrave;i.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	23/3</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	5. Dịch Vụ V&eacute; M&aacute;y Bay</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Ch&uacute;ng t&ocirc;i &ndash; Ph&ograve;ng v&eacute; Vietnam Travel l&agrave; một trong những thương hiệu về dịch vụ v&eacute; m&aacute;y bay c&oacute; uy t&iacute;n tại Việt Nam, v&agrave; l&agrave; đại l&yacute; ch&iacute;nh thức của h&atilde;ng Vietnam Airlines, Thai Airways, Malaysia Airlines, Jetstar, Air Mekong c&ugrave;ng hơn 20 h&atilde;ng h&agrave;ng kh&ocirc;ng quốc tế kh&aacute;c. Do đ&oacute; ch&uacute;ng t&ocirc;i lu&ocirc;n c&oacute; những xuất v&eacute; với lịch bay đẹp, v&agrave; thường xuy&ecirc;n c&oacute; những chương tr&igrave;nh ưu đ&atilde;i của c&aacute;c h&atilde;ng h&agrave;ng kh&ocirc;ng trong v&agrave; ngo&agrave;i nước. V&igrave; thế, đến với ch&uacute;ng t&ocirc;i bạn hiếm khi nghe c&acirc;u trả lời l&agrave; hết v&eacute;, v&agrave; bạn sẽ an t&acirc;m về gi&aacute; v&eacute; lu&ocirc;n rẻ hơn nhiều so với gi&aacute; v&eacute; c&ocirc;ng bố của ch&iacute;nh h&atilde;ng.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Ph&ograve;ng v&eacute; Vietnam Travel sở hữu nhiều chuy&ecirc;n vi&ecirc;n tư vấn c&oacute; th&acirc;m ni&ecirc;n trong nghề, lu&ocirc;n nhiệt t&igrave;nh v&agrave; chu đ&aacute;o. Gắn kết với đội ngũ giao nhận đ&ocirc;ng đảo v&agrave; am hiểu mọi địa b&agrave;n trong nội th&agrave;nh. Đến với ch&uacute;ng t&ocirc;i, chắc chắn bạn sẽ h&agrave;i l&ograve;ng d&ugrave; bạn l&agrave; người kh&oacute; t&iacute;nh đến đ&acirc;u.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Những điều l&agrave;m n&ecirc;n sự kh&aacute;c biệt của ch&uacute;ng t&ocirc;i:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Tư vấn chu đ&aacute;o cho bạn về đường bay đẹp ph&ugrave; hợp nhất với h&agrave;nh tr&igrave;nh.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Tư vấn đầy đủ c&aacute;c th&ocirc;ng tin về điểm đến, thủ tục h&agrave;ng kh&ocirc;ng, hải quan.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Hệ thống đăng k&yacute; v&eacute; điện tử nhanh ch&oacute;ng hiện đại.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Giao v&eacute; tận nơi miễn ph&iacute;.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Hướng dẫn đưa đ&oacute;n s&acirc;n bay trong nước &amp; quốc tế.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Giảm gi&aacute; đặc biệt cho kh&aacute;ch định cư, du học v&agrave; lao động ở nước ngo&agrave;i.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Gi&aacute; v&eacute; quốc tế lu&ocirc;n rẻ hơn so với c&ocirc;ng bố từ ch&iacute;nh h&atilde;ng.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đối với kh&aacute;ch mua v&eacute; đo&agrave;n (10 v&eacute; người lớn trở l&ecirc;n), ch&uacute;ng t&ocirc;i sẽ &aacute;p dụng mức gi&aacute; ưu đ&atilde;i đặc biệt v&agrave; c&oacute; chiết khấu cao.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Chấp nhận thanh to&aacute;n qua nhiều h&igrave;nh thức như tiền mặt, chuyển khoản, thẻ t&iacute;n dụng,&hellip;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	6. Trung t&acirc;m du học Eduvisa:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Eduvisa l&agrave; một tập thể gồm những chuy&ecirc;n vi&ecirc;n được đ&agrave;o tạo tại Mỹ v&agrave; c&oacute; gần 10 năm kinh nghiệm về tư vấn du học. Đồng thời Eduvisa c&oacute; mối quan hệ với nhiều trường Đại học, Cao Đẳng uy t&iacute;n h&agrave;ng đầu ở nhiều quốc gia kh&aacute;c nhau.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Do đ&oacute; đến với Eduvisa bạn sẽ cảm nhận được sự phục vụ tận t&igrave;nh chuy&ecirc;n nghiệp v&agrave; nhanh ch&oacute;ng đến kh&ocirc;ng ngờ. Đặc biệt Eduvisa chỉ nhận th&ugrave; lao khi bạn đậu visa.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đến với Eduvisa bạn sẽ kh&ocirc;ng ngại v&igrave; học lực c&ograve;n trung b&igrave;nh, tiếng Anh chưa đủ kh&aacute;, hoặc gia đ&igrave;nh c&oacute; t&agrave;i ch&iacute;nh chưa cao, kh&ocirc;ng c&oacute; th&acirc;n nh&acirc;n tại nước ngo&agrave;i, hay hồ sơ bị từ chối nhiều lần.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Đừng ngần ngại v&agrave; chần chừ nếu bạn c&oacute; nhu cầu. Bởi v&igrave; khi ch&uacute;ng t&ocirc;i nhận hồ sơ nghĩa l&agrave; gần như chắc chắn c&oacute; Visa.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	<em><u>10 dịch vụ tư vấn chu đ&aacute;o của Eduvisa:</u></em></p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Tư vấn chọn trường</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Hướng dẫn phỏng vấn</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Tư vấn thủ tục nhập học</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Tư vấn t&agrave;i ch&iacute;nh du học</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Ho&agrave;n th&agrave;nh thủ tục xin Visa</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Hỗ trợ chuyển trường</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Hỗ trợ dịch thuật</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Hỗ trợ t&igrave;m kiếm học bổng</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Tư vấn visa phụ huynh thăm th&acirc;n</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Tư vấn li&ecirc;n th&ocirc;ng l&ecirc;n cao học</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	4. Dịch vụ l&agrave;m Visa c&aacute;c nước</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Bạn đang cần đi nước ngo&agrave;i trong thời gian sớm nhất. Bạn muốn xin visa đến c&aacute;c nước ph&aacute;t triển nhưng ngại thủ tục phiền h&agrave;, rắc rối. Bạn cần đi c&ocirc;ng t&aacute;c nhưng kh&ocirc;ng c&oacute; thời gian để tự chuẩn bị hồ sơ. H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn giải quyết những kh&oacute; khăn bạn đang gặp phải. Ch&uacute;ng t&ocirc;i sẽ mang đến cho bạn những dịch vụ tiện &iacute;ch nhất.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;Tư vấn miễn ph&iacute; cho kh&aacute;ch h&agrave;ng c&aacute;c vấn đề li&ecirc;n quan đến hoạt động l&agrave;m visa như:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Tư vấn những quy định của ph&aacute;p luật về việc cấp visa.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Tư vấn thủ tục L&agrave;m visa</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Tư vấn chuẩn bị hồ sơ, t&agrave;i liệu chuẩn L&agrave;m visa</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Tư vấn c&aacute;c vấn đề li&ecirc;n quan kh&aacute;c.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;Kiểm tra, đ&aacute;nh gi&aacute; t&iacute;nh ph&aacute;p l&yacute; của c&aacute;c y&ecirc;u cầu tư vấn v&agrave; c&aacute;c giấy tờ của kh&aacute;ch h&agrave;ng:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Vừa l&agrave; C&ocirc;ng Ty Dịch Thuật n&ecirc;n tất cả c&aacute;c giấy tờ ch&uacute;ng t&ocirc;i sẽ dịch thuật, c&ocirc;ng chứng c&aacute;c giấy tờ c&oacute; li&ecirc;n quan.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Vietnam Travel sẽ đại diện ho&agrave;n tất c&aacute;c thủ tục l&agrave;m visa cho kh&aacute;ch h&agrave;ng như:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Sau khi k&yacute; hợp đồng dịch vụ, Vietnam Travel sẽ tiến h&agrave;nh soạn hồ sơ xin L&agrave;m Visa cho kh&aacute;ch h&agrave;ng:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Đại diện l&ecirc;n cơ quan c&oacute; thẩm quyền để nộp hồ sơ xin L&agrave;m Visa cho kh&aacute;ch h&agrave;ng;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Đại diện theo d&otilde;i hồ sơ v&agrave; th&ocirc;ng b&aacute;o kết quả hồ sơ đ&atilde; nộp cho kh&aacute;ch h&agrave;ng;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Đại diện nhận Visa cho kh&aacute;ch h&agrave;ng.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;Dịch vụ hậu m&atilde;i cho kh&aacute;ch h&agrave;ng:</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	- Giảm gi&aacute; 10% cho dịch vụ tiếp theo m&agrave; bạn sử dụng.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Dịch vụ cho thu&ecirc; xe v&agrave; book kh&aacute;ch sạn nhanh ch&oacute;ng</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Dựa v&agrave;o thế mạnh về c&ocirc;ng nghệ th&ocirc;ng tin cũng như đội ngũ am hiểu về lĩnh vực du lịch, Vietnam Travel cung cấp th&ecirc;m dịch vụ đặt ph&ograve;ng kh&aacute;ch sạn v&agrave; cho thu&ecirc; xe với mức gi&aacute; tốt nhất.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Vietnam Travel chuy&ecirc;n phục vụ cho kh&aacute;ch h&agrave;ng người Việt Nam, với ti&ecirc;u ch&iacute; mang tới một dịch vụ tiện &iacute;ch v&agrave; đẳng cấp quốc tế cho người Việt. Hiện tại Vietnam Travel c&oacute; thể đặt ph&ograve;ng tại 1000 kh&aacute;ch sạn nội địa v&agrave; 160,000 kh&aacute;ch sạn quốc tế tại tất cả c&aacute;c quốc gia tr&ecirc;n to&agrave;n thế giới. Ch&iacute;nh v&igrave; thế, Vietnam Travel c&oacute; thể đ&aacute;p ứng gần như tất cả c&aacute;c nhu cầu về kh&aacute;ch sạn của qu&yacute; kh&aacute;ch.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Với 100 đối t&aacute;c nh&agrave; xe uy t&iacute;n, trong nhiều năm qua Vietnam Travel đ&atilde; phục vụ h&agrave;ng ng&agrave;n du kh&aacute;ch, c&aacute;c chuyến xe an to&agrave;n trong nước v&agrave; quốc tế, cũng như g&oacute;p phần cho sự ph&aacute;t triển của ng&agrave;nh du lịch Việt nam.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Sự h&agrave;i l&ograve;ng của du kh&aacute;ch trong mỗi chuyến đi l&agrave; th&agrave;nh c&ocirc;ng của Vietnam Travel.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	<strong>C&Aacute;C GIẢI THƯỞNG:</strong></p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Sau nhiều năm hoạt động kinh doanh du lịch lữ h&agrave;nh, thương hiệu Vietnam Travel đ&atilde; c&oacute; chỗ đứng tr&ecirc;n thị trường, đồng thời tổ chức được rất nhiều chuyến đi th&uacute; vị, để lại ấn tượng s&acirc;u sắc trong l&ograve;ng kh&aacute;ch h&agrave;ng.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	Ng&agrave;y 8/1/2012&nbsp; Li&ecirc;n Hiệp C&aacute;c Hội Khoa Học &amp; Kỹ Thuật Việt Nam đ&atilde; quyết định vinh danh ch&uacute;ng t&ocirc;i với&nbsp; danh hiệu Vietnam Travel &ndash; Thương Hiệu Việt Uy T&iacute;n năm 2012.</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	<strong>M&Ocirc; H&Igrave;NH TỔ CHỨC:</strong></p>\r\n<p style=\"margin-left:13.5pt;\">\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>a.&nbsp;&nbsp;&nbsp; </strong><strong>GIẤY PH&Eacute;P KINH DOANH</strong></p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GIẤY PH&Eacute;P LỮ H&Agrave;NH QUỐC TẾ&nbsp; 79 &ndash; 138/2010/TCDL &ndash; GPLHQT</p>\r\n<p>\r\n	<strong>b.&nbsp;&nbsp;&nbsp; </strong><strong>M&Atilde; SỐ ĐẠI L&Yacute; </strong></p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&Atilde; SỐ ĐẠI L&Yacute; CH&Iacute;NH THỨC VIETNAM AIRLINES : 37982136</p>\r\n<p>\r\n	<strong>c.&nbsp;&nbsp;&nbsp; </strong><strong>ĐƠN VỊ QUẢN L&Yacute;</strong></p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SỞ VĂN H&Oacute;A THỂ THAO V&Agrave; DU LỊCH TH&Agrave;NH PHỐ HỒ CH&Iacute; MINH</p>\r\n<p style=\"margin-left:49.5pt;\">\r\n	<strong>2.&nbsp;&nbsp;&nbsp; </strong><strong>CHIẾN LƯỢC PH&Aacute;T TRIỂN: </strong></p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp; T&acirc;̀m nh&igrave;n và sứ m&ecirc;̣nh</strong></p>\r\n<p style=\"margin-left:.25in;\">\r\n	Sứ mệnh v&agrave; tầm nh&igrave;n của ch&uacute;ng t&ocirc;i h&ograve;a trong &yacute; nghĩa của t&ecirc;n gọi Vietnam Travel.</p>\r\n<p>\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vietnam - Nguồn sống, t&acirc;m huyết v&agrave; kh&aacute;t vọng của ch&uacute;ng t&ocirc;i đều v&igrave; một Việt Nam văn minh v&agrave; ph&aacute;t triển.</p>\r\n<p>\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Travel - Tr&ecirc;n mọi bước đường vươn xa, d&ugrave; kh&oacute; khăn hay trở ngại ch&uacute;ng t&ocirc;i đều để lại ấn tượng đẹp trong l&ograve;ng kh&aacute;ch h&agrave;ng.&nbsp;</p>\r\n<p>\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ch&uacute;ng t&ocirc;i l&agrave; Vietnamtravel&nbsp;&nbsp;</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp; Tri&ecirc;́t lý kinh doanh</strong></p>\r\n<p style=\"margin-left:.5in;\">\r\n	v&nbsp; &nbsp;&nbsp;Lu&ocirc;n tu&acirc;n thủ các quy chu&acirc;̉n vàch&acirc;́t lượng dịch vụ đ&atilde;cam kếtvới khách hàng.</p>\r\n<p style=\"margin-left:.5in;\">\r\n	v&nbsp; &nbsp;&nbsp;Đặt sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng l&agrave;m trọng t&acirc;m cho mọi định hướng kinh doanh.</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp;&nbsp; Giá trị c&ocirc;́t lõi</strong></p>\r\n<p style=\"margin-left:.5in;\">\r\n	v&nbsp; &nbsp;&nbsp;&nbsp;Lợi &iacute;ch kh&aacute;ch h&agrave;ng, c&ocirc;ng tyv&agrave; nh&acirc;n vi&ecirc;n kh&ocirc;ng t&aacute;ch rời nhau.</p>\r\n<p style=\"margin-left:.5in;\">\r\n	v&nbsp; &nbsp;&nbsp;&nbsp;Dịch vụ tốt l&agrave; l&agrave;m tốt ngay từ những việc nhỏ.</p>\r\n<p style=\"margin-left:.5in;\">\r\n	v&nbsp; &nbsp;&nbsp;&nbsp;Sẽ kh&ocirc;ng bao giờ trở th&agrave;nh người dẫn đầu, nếu dễ d&agrave;ng chấp nhận vị tr&iacute; đang đứng.</p>\r\n<p style=\"margin-left:.25in;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:49.5pt;\">\r\n	3.&nbsp;&nbsp;&nbsp; <strong>H&Igrave;NH ẢNH</strong></p>', '0');

-- ----------------------------
-- Table structure for `info`
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', 'Download Bảng giá mới nhất');
INSERT INTO `info` VALUES ('2', 'Mua Vé Máy Bay');
INSERT INTO `info` VALUES ('3', 'Qui Định Hàng Không');
INSERT INTO `info` VALUES ('4', 'Trước Chuyến Bay');
INSERT INTO `info` VALUES ('5', 'Những Thông Tin cần biết khi du học');
INSERT INTO `info` VALUES ('6', 'Download tài liệu');

-- ----------------------------
-- Table structure for `info_detail`
-- ----------------------------
DROP TABLE IF EXISTS `info_detail`;
CREATE TABLE `info_detail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_INFO` int(11) NOT NULL,
  `TITLE` varchar(200) NOT NULL,
  `CONTENT` text NOT NULL,
  `LINK` varchar(200) CHARACTER SET latin1 NOT NULL DEFAULT '#',
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_detail
-- ----------------------------
INSERT INTO `info_detail` VALUES ('1', '2', 'Aenean. Sed laoreet. Aenean pede. a', '', '#', '0');
INSERT INTO `info_detail` VALUES ('2', '2', 'Fusce elit ligula, Aenean. Sed laoreet.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('3', '2', 'Aenean. Sed laoreet. Aenean pede. Phasellus ', '', '#', '0');
INSERT INTO `info_detail` VALUES ('4', '2', 'Fusce elit ligula, Aenean. Sed laoreet.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('5', '2', 'Aenean. Sed laoreet. Aenean pede. Phasellus ', '', '#', '0');
INSERT INTO `info_detail` VALUES ('6', '2', 'Fusce elit ligula, Aenean. Sed laoreete.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('7', '1', 'Fusce elit ligula, Aenean. Sed laoreete.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('8', '3', 'Aenean. Sed laoreet. Aenean pede. a', '', '#', '0');
INSERT INTO `info_detail` VALUES ('9', '3', 'Aenean. Sed laoreet. Aenean pede. Phasellus ', '', '#', '0');
INSERT INTO `info_detail` VALUES ('10', '3', 'Fusce elit ligula, Aenean. Sed laoreet.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('11', '3', 'Fusce elit ligula, Aenean. Sed laoreet.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('12', '3', 'Aenean. Sed laoreet. Aenean pede. Phasellus ', '', '#', '0');
INSERT INTO `info_detail` VALUES ('13', '3', 'Fusce elit ligula, Aenean. Sed laoreete.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('14', '4', 'Aenean. Sed laoreet. Aenean pede. a', '', '#', '0');
INSERT INTO `info_detail` VALUES ('15', '4', 'Fusce elit ligula, Aenean. Sed laoreet.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('16', '4', 'Aenean. Sed laoreet. Aenean pede. Phasellus ', '', '#', '0');
INSERT INTO `info_detail` VALUES ('17', '4', 'Fusce elit ligula, Aenean. Sed laoreet.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('18', '4', 'Aenean. Sed laoreet. Aenean pede. Phasellus ', '', '#', '0');
INSERT INTO `info_detail` VALUES ('19', '4', 'Fusce elit ligula, Aenean. Sed laoreete.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('20', '6', 'Download tài liệu', '', '#', '0');
INSERT INTO `info_detail` VALUES ('21', '5', 'Aenean. Sed laoreet. Aenean pede. a', '', '#', '0');
INSERT INTO `info_detail` VALUES ('22', '5', 'Fusce elit ligula, Aenean. Sed laoreet.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('23', '5', 'Aenean. Sed laoreet. Aenean pede. Phasellus ', '', '#', '0');
INSERT INTO `info_detail` VALUES ('24', '5', 'Fusce elit ligula, Aenean. Sed laoreet.', '', '#', '0');
INSERT INTO `info_detail` VALUES ('25', '5', 'Aenean. Sed laoreet. Aenean pede. Phasellus', '', '#', '0');
INSERT INTO `info_detail` VALUES ('26', '5', 'Fusce elit ligula, Aenean. Sed laoreete.', '', '#', '0');

-- ----------------------------
-- Table structure for `intro`
-- ----------------------------
DROP TABLE IF EXISTS `intro`;
CREATE TABLE `intro` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_DIA_DIEM` varchar(100) CHARACTER SET utf8 NOT NULL,
  `HINH_DAI_DIEN` varchar(200) CHARACTER SET utf8 NOT NULL,
  `TITLE` varchar(100) CHARACTER SET utf8 NOT NULL,
  `GIOI_THIEU` text CHARACTER SET utf8 NOT NULL,
  `HINH_1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `HINH_2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `HINH_3` varchar(200) CHARACTER SET utf8 NOT NULL,
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of intro
-- ----------------------------
INSERT INTO `intro` VALUES ('1', 'THÁI LAN', 'intro', 'THÁI LAN', 'Nổi tiếng với chùa Vàng, chùa Bạc, cung điện Hoàng Gia, cổ thành Ayutthaya, tết Té Nước tháng 4 hằng năm, sexy show.', 'images/pic/gal01.jpg', 'intro', 'intro', '0');
INSERT INTO `intro` VALUES ('2', 'CAMPUCHIA', 'intro', 'CAMPUCHIA', 'Nổi tiếng với hệ thống đền đài Ăng-co kỳ vĩ, trong đó có Ăng-co Vát - một kỳ quan của thế giới.', 'images/pic/gal02.jpg', 'images/pic/gal03.jpg', 'images/pic/gal01.jpg', '0');
INSERT INTO `intro` VALUES ('3', 'SINGAPORE', 'images/pic/gal01.jpg', 'SINGAPORE', 'Nổi tiếng với vườn bách thảo, tác phẩm nghệ thuật ở Ritz – Carlton – Chinatown , đồ điện tử giá rẻ , đu quay lớn nhất thế giới Flyer, phố ẩm thực Geylang.', 'images/pic/gal03.jpg', 'images/pic/gal01.jpg', 'images/pic/gal02.jpg', '0');
INSERT INTO `intro` VALUES ('4', 'HONGKONG', '', 'HONGKONG', 'Nổi tiếng với khu Tsim Sha Tsui (Chiếm Sá Chủi), Narthan road, công viên giải trí Disneyland, \r\nđền thờ thần tài Huỳnh Đại Tiên, Phật Thích Ca lớn nhất thế giới được đúc bằng đồng nặng 226 tấn, đại lộ Ngôi sao.', '', '', '', '0');

-- ----------------------------
-- Table structure for `lien_he`
-- ----------------------------
DROP TABLE IF EXISTS `lien_he`;
CREATE TABLE `lien_he` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HO_TEN` varchar(50) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NOI_DUNG` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lien_he
-- ----------------------------
INSERT INTO `lien_he` VALUES ('1', 'qwe', 'sdsd', 'sdsds');

-- ----------------------------
-- Table structure for `loai_dich_vu`
-- ----------------------------
DROP TABLE IF EXISTS `loai_dich_vu`;
CREATE TABLE `loai_dich_vu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_DICH_VU` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loai_dich_vu
-- ----------------------------
INSERT INTO `loai_dich_vu` VALUES ('1', 'VISA DU HỌC  - ĐỊNH CƯ');
INSERT INTO `loai_dich_vu` VALUES ('2', 'DỊCH THUẬT CÔNG CHỨNG');
INSERT INTO `loai_dich_vu` VALUES ('3', 'ĐẶT KHÁCH SẠN');
INSERT INTO `loai_dich_vu` VALUES ('4', 'test');

-- ----------------------------
-- Table structure for `loai_diem_den`
-- ----------------------------
DROP TABLE IF EXISTS `loai_diem_den`;
CREATE TABLE `loai_diem_den` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_DIA_DIEM` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loai_diem_den
-- ----------------------------
INSERT INTO `loai_diem_den` VALUES ('1', 'THÁI LAN');
INSERT INTO `loai_diem_den` VALUES ('2', 'LÀO');
INSERT INTO `loai_diem_den` VALUES ('3', 'CAMPUCHIA');
INSERT INTO `loai_diem_den` VALUES ('4', 'MỸ');
INSERT INTO `loai_diem_den` VALUES ('5', 'HÀ NỘI');

-- ----------------------------
-- Table structure for `loai_diem_khoi_hanh`
-- ----------------------------
DROP TABLE IF EXISTS `loai_diem_khoi_hanh`;
CREATE TABLE `loai_diem_khoi_hanh` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_DIA_DIEM` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loai_diem_khoi_hanh
-- ----------------------------
INSERT INTO `loai_diem_khoi_hanh` VALUES ('1', 'TP HỒ CHÍ MINH');
INSERT INTO `loai_diem_khoi_hanh` VALUES ('2', 'HÀ NỘI');
INSERT INTO `loai_diem_khoi_hanh` VALUES ('3', 'ĐÀ NẴNG');
INSERT INTO `loai_diem_khoi_hanh` VALUES ('4', 'CẦN THƠ');
INSERT INTO `loai_diem_khoi_hanh` VALUES ('5', 'NHA TRANG');

-- ----------------------------
-- Table structure for `loai_phuong_tien`
-- ----------------------------
DROP TABLE IF EXISTS `loai_phuong_tien`;
CREATE TABLE `loai_phuong_tien` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_PHUONG_TIEN` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loai_phuong_tien
-- ----------------------------
INSERT INTO `loai_phuong_tien` VALUES ('1', 'MÁY BAY');
INSERT INTO `loai_phuong_tien` VALUES ('2', 'XE KHÁCH');
INSERT INTO `loai_phuong_tien` VALUES ('3', 'XE LỬA');
INSERT INTO `loai_phuong_tien` VALUES ('4', 'TÀU THỦY');

-- ----------------------------
-- Table structure for `loai_tour`
-- ----------------------------
DROP TABLE IF EXISTS `loai_tour`;
CREATE TABLE `loai_tour` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_LOAI` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loai_tour
-- ----------------------------
INSERT INTO `loai_tour` VALUES ('1', 'TOUR HOT');
INSERT INTO `loai_tour` VALUES ('2', 'TOUR NƯỚC NGOÀI');
INSERT INTO `loai_tour` VALUES ('3', 'TOUR TRONG NƯỚC');

-- ----------------------------
-- Table structure for `loai_ve_may_bay`
-- ----------------------------
DROP TABLE IF EXISTS `loai_ve_may_bay`;
CREATE TABLE `loai_ve_may_bay` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_LOAI` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loai_ve_may_bay
-- ----------------------------
INSERT INTO `loai_ve_may_bay` VALUES ('1', 'Khứ Hồi Trong Nước');
INSERT INTO `loai_ve_may_bay` VALUES ('2', 'Một Chiều Trong Nước');
INSERT INTO `loai_ve_may_bay` VALUES ('3', 'Khứ Hồi Quốc Tế');
INSERT INTO `loai_ve_may_bay` VALUES ('4', 'Một Chiều Quốc Tế');

-- ----------------------------
-- Table structure for `nhat_ky_tour`
-- ----------------------------
DROP TABLE IF EXISTS `nhat_ky_tour`;
CREATE TABLE `nhat_ky_tour` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE_NHAT_KY` varchar(200) CHARACTER SET utf8 NOT NULL,
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nhat_ky_tour
-- ----------------------------
INSERT INTO `nhat_ky_tour` VALUES ('1', 'Aenean. Sed laoreet. Aenean pede. Phasellus porta', '0');
INSERT INTO `nhat_ky_tour` VALUES ('2', 'Fusce elit ligula, Aenean. Sed laoreet. Aenean pede.', '0');
INSERT INTO `nhat_ky_tour` VALUES ('3', 'Aenean. Sed laoreet. Aenean pede. Phasellus porta', '0');
INSERT INTO `nhat_ky_tour` VALUES ('4', 'Fusce elit ligula, Aenean. Sed laoreet. Aenean pede.', '0');

-- ----------------------------
-- Table structure for `nhat_ky_tour_images`
-- ----------------------------
DROP TABLE IF EXISTS `nhat_ky_tour_images`;
CREATE TABLE `nhat_ky_tour_images` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_NHAT_KY_TOUR` int(11) NOT NULL,
  `HINH` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LOI_BINH` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nhat_ky_tour_images
-- ----------------------------
INSERT INTO `nhat_ky_tour_images` VALUES ('1', '1', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('2', '1', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('3', '1', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('4', '1', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('5', '2', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('6', '2', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('7', '2', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('8', '2', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('9', '3', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('10', '3', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('11', '3', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('12', '4', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');
INSERT INTO `nhat_ky_tour_images` VALUES ('13', '4', 'pic/tourH1.jpg', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean');

-- ----------------------------
-- Table structure for `order_tour`
-- ----------------------------
DROP TABLE IF EXISTS `order_tour`;
CREATE TABLE `order_tour` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TOUR` int(11) NOT NULL,
  `HO_TEN` varchar(200) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(128) DEFAULT NULL,
  `DIEN_THOAI` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of order_tour
-- ----------------------------
INSERT INTO `order_tour` VALUES ('1', '3', '123', '123', '123');
INSERT INTO `order_tour` VALUES ('2', '4', '345', '354', '345');

-- ----------------------------
-- Table structure for `thong_tin_khuyen_mai`
-- ----------------------------
DROP TABLE IF EXISTS `thong_tin_khuyen_mai`;
CREATE TABLE `thong_tin_khuyen_mai` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of thong_tin_khuyen_mai
-- ----------------------------
INSERT INTO `thong_tin_khuyen_mai` VALUES ('1', 'test@yahoo.com');

-- ----------------------------
-- Table structure for `tour`
-- ----------------------------
DROP TABLE IF EXISTS `tour`;
CREATE TABLE `tour` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LOAI_TOUR` int(11) NOT NULL,
  `TITLE` varchar(200) CHARACTER SET utf8 NOT NULL,
  `SLOGON_TOUR` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `INTRO` text CHARACTER SET utf8 NOT NULL,
  `CONTENT` text CHARACTER SET utf8 NOT NULL,
  `SO_NGAY` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NGAY_DI` int(10) NOT NULL,
  `NGAY_VE` int(10) NOT NULL,
  `GIO_DI` int(11) NOT NULL,
  `GIO_DEN` int(11) NOT NULL,
  `ID_DIEM_KHOI_HANH` int(11) NOT NULL,
  `ID_DIEM_DEN` int(11) NOT NULL,
  `GIA_TOUR` int(11) NOT NULL,
  `ID_PHUONG_TIEN` int(11) NOT NULL,
  `MA_SO_PHUONG_TIEN` varchar(10) CHARACTER SET utf8 NOT NULL,
  `HINH` varchar(200) CHARACTER SET utf8 NOT NULL,
  `MAX_SO_NGUOI` int(11) NOT NULL,
  `MIN_SO_NGUOI` int(11) NOT NULL,
  `DATE_CREATE` int(11) DEFAULT NULL,
  `DATE_UPDATE` int(11) DEFAULT NULL,
  `LUOT_XEM` int(11) DEFAULT NULL,
  `ORDER` int(11) DEFAULT NULL,
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tour
-- ----------------------------
INSERT INTO `tour` VALUES ('1', '1', 'Fusce interdum. Maecenas 1', 'Paris trang lệ', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed', 'sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\n\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet.', '6', '1333130618', '1333990800', '5', '16', '1', '1', '13000000', '1', '', 'pic/tourH1.jpg', '0', '5', null, null, null, null, '0');
INSERT INTO `tour` VALUES ('2', '1', 'Fusce interdum. Maecenas 2', 'Paris trang lệ', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed', 'sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\n\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet.', '7', '1333130618', '1333990800', '5', '16', '2', '2', '14000000', '3', '', 'pic/tourH1.jpg', '0', '0', null, null, null, null, '0');
INSERT INTO `tour` VALUES ('3', '2', 'Fusce interdum. Maecenas 1', 'Paris trang lệ', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\n\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet.', '7', '1333130618', '1333990800', '5', '15', '1', '3', '13000000', '1', 'MS01', 'pic/tourH1.jpg', '0', '0', null, null, null, null, '0');
INSERT INTO `tour` VALUES ('4', '3', 'Fusce interdum. Maecenas 2', 'Paris trang lệ', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', '<p>\r\n	<img height=\"75\" src=\"file:///C:%5CUsers%5CVienAlex%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image004.gif\" width=\"664\" /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<br clear=\"ALL\" />\r\n<p>\r\n	&nbsp;</p>\r\n<table cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td height=\"42\">\r\n				<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n					<tbody>\r\n						<tr>\r\n							<td>\r\n								<div>\r\n									<p align=\"center\">\r\n										<strong>CH&Ouml;&Ocirc;NG&nbsp; TR&Igrave;NH&nbsp; DU&nbsp; L&Ograve;CH </strong></p>\r\n								</div>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt=\"Bến Ninh Kiều - Cù Lao Ấu - Cầu Treo Cần Thơ\" height=\"64\" src=\"file:///C:%5CUsers%5CVienAlex%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image005.gif\" width=\"758\" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img align=\"left\" height=\"192\" hspace=\"12\" src=\"file:///C:%5CUsers%5CVienAlex%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image007.jpg\" width=\"240\" /></p>\r\n<p>\r\n	<img align=\"left\" height=\"192\" hspace=\"12\" src=\"file:///C:%5CUsers%5CVienAlex%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image009.jpg\" width=\"215\" /><img align=\"left\" height=\"192\" hspace=\"12\" src=\"file:///C:%5CUsers%5CVienAlex%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image011.jpg\" width=\"216\" /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Thời gian: 2 ng&agrave;y. &nbsp;</strong></p>\r\n<p style=\"margin-left:2.5in;\">\r\n	<strong>Khởi h&agrave;nh: thứ 7 h&agrave;ng tuần.</strong></p>\r\n<p style=\"margin-left:2.5in;\">\r\n	<strong>Phương tiện: đi về bằng xe.</strong></p>\r\n<p>\r\n	<em>C&ograve;n c&oacute; c&aacute;i t&ecirc;n rất đẹp l&agrave; T&acirc;y Đ&ocirc;, Cần Thơ l&agrave; nơi m&agrave; kh&ocirc;ng &iacute;t người muốn đến một lần. Đến với Cần Thơ _ Hậu Giang, c&aacute;c bạn sẽ thấy d&ograve;ng s&ocirc;ng Hậu hiền h&ograve;a. Thấy người thương hồ bu&ocirc;n b&aacute;n ở chợ nổi tr&ecirc;n s&ocirc;ng,&nbsp; c&ograve;n c&oacute; con s&ocirc;ng Phụng Hiệp chảy ra bảy ng&atilde;, địa danh gắn liền với b&agrave;i vọng cổ &ldquo;T&igrave;nh anh b&aacute;n chiếu&rdquo; của soạn giả Viễn Ch&acirc;u ... C&aacute;c bạn sẽ được nghe lại những b&agrave;i ca bất hủ đ&oacute;, khi dừng ch&acirc;n tr&ecirc;n bến Ninh Kiều ...</em></p>\r\n<table align=\"left\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:746px;\" width=\"746\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:92px;height:22px;\">\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					<strong>Ng&agrave;y 1</strong></p>\r\n				<p align=\"center\">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:654px;height:22px;\">\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					<strong>TP.HCM &ndash; CẦN THƠ&nbsp;&nbsp; </strong><em>( Ăn s&aacute;ng, tr</em><em>ưa, chiều )</em><strong>&nbsp;170</strong><strong>Km </strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:92px;height:22px;\">\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:654px;height:22px;\">\r\n				<p style=\"margin-left:12.6pt;\">\r\n					&nbsp;</p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					<strong>&sup2;</strong><strong><em>Buổi s&aacute;ng</em></strong>: Qu&yacute; kh&aacute;ch tập trung tại điểm hẹn<strong><em>, </em></strong><em>xe&nbsp; </em>đưa Du Kh&aacute;ch đi theo lộ tr&igrave;nh Nguyễn Thị Minh Khai, Đồng Khởi, Nguyễn Huệ, L&ecirc; Lợi, Nguyễn Văn Linh... nơi c&oacute; những c&ocirc;ng tr&igrave;nh kiến tr&uacute;c văn h&oacute;a kết nối những th&agrave;nh tựu kinh tế của S&agrave;i G&ograve;nxưa v&agrave; nay như:<strong><em>Dinh Độc Lập, nh&agrave; thờ Đức B&agrave;, nh&agrave; h&aacute;t Th&agrave;nh Phố, chợ Bến Th&agrave;nh,</em></strong> <strong><em>khu đ&ocirc; thị mới Ph&uacute; Mỹ Hưng.</em></strong></p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					Theo quốc lộ 1A, về miền t&acirc;y, qua <strong><em>cầu treo Mỹ Thuận</em></strong>, du kh&aacute;ch c&oacute; dịp ngắm c&acirc;y cầu d&acirc;y văng đầu ti&ecirc;n, hiện đại nhất Đồng Bằng S&ocirc;ng Cửu Long, được khởi c&ocirc;ng x&acirc;y dựng năm 1997 v&agrave; ho&agrave;n th&agrave;nh năm 2000.</p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					Qua cầu Cần Thơ xuống <strong><em>vườn du lịch Mỹ Kh&aacute;nh, </em></strong>du kh&aacute;ch đi xe ngựa dạo chơi trong một kh&ocirc;ng gian xanh của những vườn mận, xo&agrave;i, ch&ocirc;m ch&ocirc;m, m&iacute;t, sầu ri&ecirc;ng&hellip;Nghe đờn ca t&agrave;i tử cải lương Nam Bộ. Tham gia l&agrave;m b&aacute;nh tr&aacute;ng, nấu rượu đế, thưởng thức những m&oacute;n ngon rất d&acirc;n d&atilde; như c&aacute; l&oacute;cnướng ống tre, chuột quay lu, lẩu đồng qu&ecirc;.</p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					<strong>&sup2;</strong><strong><em>Buổi chiều</em></strong>: &nbsp;đo&agrave;n tham quan <strong><em>nh&agrave; cổ B&igrave;nh Thủy</em></strong>, được x&acirc;y dựng từ năm 1870, kiến tr&uacute;c ti&ecirc;u biểu của Nam Bộ, nh&agrave; c&oacute; năm gian hai ch&aacute;i, sườn nh&agrave; bằng gỗ được chạm khắc tinh tế, đi&ecirc;u luyện, c&oacute; vườn lan v&agrave; c&acirc;y xương rồng 40 tuổi, c&ograve;n gọi l&agrave; &ldquo;<strong><em>Kim Lăng Trụ</em></strong>&rdquo;, cao 8 thước, được x&aacute;c lập kỷ lục cao nhất Việt Nam<strong><em>.</em></strong></p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					<strong>&sup2;</strong><strong><em>Buổi tối</em></strong>: &nbsp;xe đưa đo&agrave;n đi <strong><em>bến Ninh Kiều</em></strong>, nằm ở ng&atilde; ba <strong><em>s&ocirc;ng Hậu </em></strong>v&agrave;từng được mệnh danh l&agrave; đệ nhất danh thắng xứ <strong><em>T&acirc;y Đ&ocirc;</em></strong>, du kh&aacute;ch dạo chơi, thưởng thức c&agrave; ph&ecirc; ở c&aacute;c qu&aacute;n Thủy Tạ ven s&ocirc;ng. D&ugrave;ng bữa chiều với c&aacute;c m&oacute;n ăn Nam Bộ tr&ecirc;n du thuyền Cần Thơ v&agrave; lắng nghe những giai điệu ngọt ng&agrave;o của miền s&ocirc;ng nước.</p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					<strong>&sup2;</strong>Sau đ&oacute;, Qu&yacute; kh&aacute;ch c&oacute; thể đi dao chợ đ&ecirc;m T&acirc;y Đ&ocirc;, hoặc về khu đ&ocirc; thị mới C&aacute;i Khế, để kh&aacute;m ph&aacute; n&eacute;t nhộn nhịp, sầm uất của Cần Thơ về đ&ecirc;m.&nbsp;</p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:92px;height:22px;\">\r\n				<p>\r\n					<strong>NG&Agrave;Y 2</strong></p>\r\n			</td>\r\n			<td style=\"width:654px;height:22px;\">\r\n				<p style=\"margin-left:12.6pt;\">\r\n					<strong>CẦN THƠ &ndash; TP.HCM </strong><em>( Ăn s&aacute;ng, trưa )</em><strong>170</strong><strong>Km</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:92px;height:22px;\">\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:654px;height:22px;\">\r\n				<p style=\"margin-left:12.6pt;\">\r\n					&nbsp;<strong>&sup2;</strong><strong><em>Buổi s&aacute;ng</em></strong>, đo&agrave;n xuống đ&ograve; đi <strong><em>chợ nổi C&aacute;i Răng, </em></strong>theo c&aacute;c m&oacute;n h&agrave;ng treo tr&ecirc;n c&acirc;y ch&egrave;o bẻo ở đầu ghe, du kh&aacute;ch c&ugrave;ng mua b&aacute;n với kh&aacute;ch thương hồ miền t&acirc;y, t&igrave;m hiểu n&eacute;t văn h&oacute;a mua b&aacute;n tr&ecirc;n s&ocirc;ng rất đặc trưng của người Nam Bộ.</p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					&nbsp;&nbsp;&nbsp; Chuyến đ&ograve; s&ocirc;ng Hậu tiếp tục đưa kh&aacute;ch qua <strong><em>khu du lịch Ph&ugrave; Sa</em></strong> nằm tr&ecirc;n <strong><em>Cồn Ấu</em></strong>, du kh&aacute;ch bắt đầu một ng&agrave;y vui chơi nơi s&ocirc;ng nước miệt vườn với c&aacute;i th&uacute; c&acirc;u c&aacute;, tắm s&ocirc;ng, ch&egrave;o xuồng, đ&oacute;n ngọn gi&oacute; thổi từ s&ocirc;ng l&ecirc;n, ngắm <strong><em>cầu treo</em></strong> <strong><em>Cần Thơ </em></strong>nối liền hai bờ s&ocirc;ng Hậu mới ho&agrave;n th&agrave;nh.</p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					&nbsp;</p>\r\n				<p style=\"margin-left:12.6pt;\">\r\n					<strong>&sup2;</strong><strong><em>Buổi chiều</em></strong>, trả ph&ograve;ng, xe đưa đo&agrave;n trở về TP.Hồ Ch&iacute; Minh<strong><em>, </em></strong>gh&eacute; vườn tr&aacute;i c&acirc;y theo m&ugrave;a như: sầu ri&ecirc;ng, v&uacute; sữa, sapo ở Ba Dừa, Kim Sơn, Vĩnh Kim<strong><em>, </em></strong>du kh&aacute;ch mua tr&aacute;i c&acirc;y h&aacute;i tại vườn về l&agrave;m qu&agrave;.</p>\r\n				<p>\r\n					<strong>&sup2;</strong>Tiếp tục xe đưa đo&agrave;n l&ecirc;n đường cao tốc Trung Lương - S&agrave;i G&ograve;n, về lại TP.Hồ Ch&iacute; Minh.</p>\r\n				<p>\r\n					<strong>&sup2;</strong>Đến TP.Hồ Ch&iacute; Minh,chia tay tạm biệt, hẹn t&aacute;i ngộ c&ugrave;ng Qu&yacute; kh&aacute;ch.</p>\r\n				<p style=\"margin-left:15.6pt;\">\r\n					&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p style=\"margin-left:2.5in;\">\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p align=\"center\">\r\n	<img height=\"29\" src=\"file:///C:%5CUsers%5CVienAlex%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image012.gif\" width=\"210\" /><strong>GIA&Ugrave; VE&Ugrave; (1 KHA&Ugrave;CH)</strong></p>\r\n<p align=\"center\" style=\"margin-left:2.0in;\">\r\n	&nbsp;</p>\r\n<table align=\"left\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:583px;\" width=\"583\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:187px;height:35px;\">\r\n				<p align=\"center\">\r\n					<strong>Vie&auml;t Nam, Vie&auml;t Kie&agrave;u</strong></p>\r\n			</td>\r\n			<td style=\"width:204px;height:35px;\">\r\n				<p align=\"center\">\r\n					<strong>Phu&iuml; thu ngoa&iuml;i quo&aacute;c</strong></p>\r\n			</td>\r\n			<td style=\"width:192px;height:35px;\">\r\n				<p align=\"center\">\r\n					<strong>Phu&iuml; thu pho&oslash;ng &ntilde;&ocirc;n</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:187px;height:48px;\">\r\n				<p align=\"center\">\r\n					&nbsp;</p>\r\n				<p align=\"center\">\r\n					<strong>1.480</strong><strong>.000 VN&Ntilde;</strong></p>\r\n				<p align=\"center\">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:204px;height:48px;\">\r\n				<p align=\"center\">\r\n					100.000 VN&Ntilde;</p>\r\n			</td>\r\n			<td style=\"width:192px;height:48px;\">\r\n				<p align=\"center\">\r\n					200.000 VN&Ntilde;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p align=\"center\" style=\"margin-left:2.0in;\">\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style=\"margin-left:1.0in;\">\r\n	<strong>[</strong></p>\r\n<p style=\"margin-left:1.0in;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:1.0in;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:1.0in;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<strong><u>GI&Aacute; V&Eacute; BAO GỒM</u></strong>:</p>\r\n<p style=\"margin-left:45.0pt;\">\r\n	v&nbsp;&nbsp; Xe đời mới c&oacute; m&aacute;y lạnh, v&eacute; t&agrave;u đ&ograve; du lịch đưa đ&oacute;n kh&aacute;ch đi theo chương tr&igrave;nh tour.</p>\r\n<p style=\"margin-left:1.0in;\">\r\n	v&nbsp;&nbsp; Kh&aacute;ch sạn ti&ecirc;u chuẩn 2 sao đến 3 sao: Ph&ograve;ng 2 kh&aacute;ch, c&oacute; m&aacute;y lạnh, tivi, tủ lạnh, điện thoại, nước n&oacute;ng, vệ sinh ri&ecirc;ng.</p>\r\n<p align=\"center\">\r\n	<strong>Kh&aacute;ch sạn: </strong>&nbsp;<strong><em>T&Acirc;Y Đ&Ocirc;, NINH KIỀU, PHƯƠNG Đ&Ocirc;NG, NG&Acirc;N H&Agrave;, &Aacute; CH&Acirc;U.</em></strong></p>\r\n<p align=\"center\" style=\"margin-left:17.85pt;\">\r\n	(hoặc c&aacute;c kh&aacute;ch sạn tương đương)</p>\r\n<p style=\"margin-left:1.0in;\">\r\n	v&nbsp;&nbsp; Ăn uống gồm 3 bữa trong ng&agrave;y. Điểm t&acirc;m s&aacute;ng. Ăn trưa v&agrave; chiều l&agrave; cơm phần 4 m&oacute;n, được đổi m&oacute;n thường xuy&ecirc;n theo ẩm thực địa phương. Nếu kh&aacute;ch tự t&uacute;c ăn, v&eacute; tour được trừ: <strong>300.000 đ.</strong></p>\r\n<p style=\"margin-left:17.85pt;\">\r\n	v&nbsp;&nbsp; Hướng dẫn vi&ecirc;n thuyết minh v&agrave; phục vụ cho đo&agrave;n suốt tuyến.</p>\r\n<p style=\"margin-left:17.85pt;\">\r\n	v&nbsp;&nbsp; V&eacute; v&agrave;o cửa c&aacute;c thắng cảnh.</p>\r\n<p style=\"margin-left:.25in;\">\r\n	v&nbsp;&nbsp; Khăn lạnh, nước uống Aquafina tr&ecirc;n đường&nbsp; (1 khăn, 1 chai/ ng&agrave;y).</p>\r\n<p style=\"margin-left:.25in;\">\r\n	v&nbsp;&nbsp; Qu&agrave; tặng, xổ số vui c&oacute; thưởng.</p>\r\n<p style=\"margin-left:.25in;\">\r\n	v&nbsp;&nbsp; Bảo hiểm du lịch (theo quy tắc bảo hiểm Việt Nam).</p>\r\n<p style=\"margin-left:1.0in;\">\r\n	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>GI&Aacute; V&Eacute; KH&Ocirc;NG BAO GỒM</u></strong>:</p>\r\n<p style=\"margin-left:17.85pt;\">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ăn uống ngo&agrave;i chương tr&igrave;nh, v&agrave; c&aacute;c chi ph&iacute; vui chơi giải tr&iacute; c&aacute; nh&acirc;n.</p>\r\n<p style=\"margin-left:17.85pt;\">\r\n	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>GI&Aacute; V&Eacute; TRẺ EM</u></strong>:</p>\r\n<p style=\"margin-left:17.85pt;\">\r\n	- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trẻ em từ 12 tuổi trở l&ecirc;n mua 01 v&eacute;.</p>\r\n<p style=\"margin-left:17.85pt;\">\r\n	- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trẻ em từ 06 đến 11 tuổi mua 1/2 v&eacute;.</p>\r\n<p style=\"margin-left:.5in;\">\r\n	- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trẻ em từ 05 tuổi trở xuống: Kh&ocirc;ng t&iacute;nh v&eacute;, gia đ&igrave;nh tự lo cho b&eacute;. Nhưng 02 người lớn chỉ</p>\r\n<p style=\"margin-left:.5in;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được k&egrave;m 01 trẻ em, nếu trẻ em đi k&egrave;m nhiều hơn th&igrave; từ em thứ 02 trở l&ecirc;n phải mua 1/2 v&eacute;.</p>\r\n<p style=\"margin-left:.5in;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Ti&ecirc;u chuẩn 1/2 v&eacute;: được 01 suất ăn + 01 ghế ngồi v&agrave; ngủ gh&eacute;p chung ph&ograve;ng với gia đ&igrave;nh).</p>\r\n<p>\r\n	&nbsp;</p>\r\n<table align=\"left\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td height=\"0\">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				&nbsp;</td>\r\n			<td>\r\n				<img alt=\"Horizontal Scroll: Tinh teá ñeå thaáu hieåu vaø phuïc vuï chu ñaùo!\r\n\r\n\" height=\"66\" src=\"file:///C:%5CUsers%5CVienAlex%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image013.gif\" width=\"522\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style=\"margin-left:2.0in;\">\r\n	&nbsp;</p>\r\n<p style=\"margin-left:2.0in;\">\r\n	&nbsp;</p>\r\n<br clear=\"ALL\" />\r\n<p style=\"margin-left:2.0in;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p align=\"right\" style=\"margin-left:2.0in;\">\r\n	&nbsp;</p>\r\n<p align=\"right\" style=\"margin-left:2.0in;\">\r\n	&nbsp;</p>\r\n<p align=\"right\" style=\"margin-left:2.0in;\">\r\n	&nbsp;</p>', '8', '1333126800', '1333990800', '1335052800', '1335052800', '1', '1', '13000000', '1', '', '', '0', '0', '1335091923', null, null, null, '0');
INSERT INTO `tour` VALUES ('5', '1', 'test', '', '', '', '', '1334509200', '1334509200', '0', '0', '1', '1', '0', '1', '', 'tour/2012/0416/13345920627820.jpg', '0', '0', '1334592062', null, null, null, '0');
INSERT INTO `tour` VALUES ('6', '1', 'test31', '', '', '', '', '1334509200', '1334509200', '1334966400', '1334966400', '1', '1', '0', '1', '', '', '0', '0', '1335027259', null, null, null, '0');

-- ----------------------------
-- Table structure for `ve_may_bay`
-- ----------------------------
DROP TABLE IF EXISTS `ve_may_bay`;
CREATE TABLE `ve_may_bay` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_DIEM_KHOI_HANH` int(11) NOT NULL,
  `ID_DIEM_DEN` int(11) NOT NULL,
  `ID_LOAI_VE_MAY_BAY` int(11) NOT NULL,
  `NGAY_DI` date NOT NULL,
  `NGAY_VE` date NOT NULL,
  `GIO_DI` time NOT NULL,
  `GIO_VE` time NOT NULL,
  `HO_TEN` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DIEN_THOAI` varchar(20) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ve_may_bay
-- ----------------------------
INSERT INTO `ve_may_bay` VALUES ('1', '1', '1', '2', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'sdsd', '566', 'sdsd');
