/*
Navicat MySQL Data Transfer

Source Server         : phpproject
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : travel

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-04-01 01:04:16
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dich_vu
-- ----------------------------
INSERT INTO `dich_vu` VALUES ('1', '1', 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>', 'pic/tour.jpg', '0');
INSERT INTO `dich_vu` VALUES ('2', '2', 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>', 'pic/tour.jpg', '0');
INSERT INTO `dich_vu` VALUES ('3', '3', 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>', 'pic/tour.jpg', '0');
INSERT INTO `dich_vu` VALUES ('4', '3', 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>\r\nNectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib. Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.\r\n<br>\r\n<br>', 'pic/tour.jpg', '0');

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
INSERT INTO `gioi_thieu` VALUES ('1', '<img src=\"images/pic/tour2.jpg\" class=\"imgL\"> <div class=\"title\">Nectetuer adipiscing elit. Maurip sfermentum dictum magna.</div>\r\n                 Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br>', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of intro
-- ----------------------------
INSERT INTO `intro` VALUES ('1', 'ha-long-bay', 'images/pic/gal03.jpg', 'Vịnh Hạ Long', 'Vịnh Hạ Long là một vịnh nhỏ thuộc phần bờ Tây vịnh Bắc Bộ tại khu vực biển Đông Bắc Việt Nam', 'images/pic/gal01.jpg', 'images/pic/gal02.jpg', 'images/pic/gal03.jpg', '0');
INSERT INTO `intro` VALUES ('2', 'phong-nha', 'images/pic/gal02.jpg', 'Động Phong Nha', 'Động Phong Nha được coi là \"Thiên Nam đệ nhất động\" của Việt Nam', 'images/pic/gal02.jpg', 'images/pic/gal03.jpg', 'images/pic/gal01.jpg', '0');
INSERT INTO `intro` VALUES ('3', 'ngu-hanh-son', 'images/pic/gal01.jpg', 'Ngũ Hành Sơn', 'Năm ngọn núi vươn ra như năm ngón tay có tên theo ngũ hành: Kim Sơn, Mộc Sơn, Thổ Sơn, Thủy Sơn và Hỏa', 'images/pic/gal03.jpg', 'images/pic/gal01.jpg', 'images/pic/gal02.jpg', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loai_dich_vu
-- ----------------------------
INSERT INTO `loai_dich_vu` VALUES ('1', 'VISA DU HỌC & ĐỊNH CƯ');
INSERT INTO `loai_dich_vu` VALUES ('2', 'DỊCH THUẬT CÔNG CHỨNG');
INSERT INTO `loai_dich_vu` VALUES ('3', 'ĐẶT KHÁCH SẠN');

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
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tour
-- ----------------------------
INSERT INTO `tour` VALUES ('1', '1', 'Fusce interdum. Maecenas 1', 'Paris trang lệ', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed', 'sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\n\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet.', '6', '1333130618', '1333990800', '5', '16', '1', '1', '13000000', '1', '', 'pic/tourH1.jpg', '0', '0', null, null, null, '0');
INSERT INTO `tour` VALUES ('2', '1', 'Fusce interdum. Maecenas 2', 'Paris trang lệ', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed', 'sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\n\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet.', '7', '1333130618', '1333990800', '5', '16', '2', '2', '14000000', '3', '', 'pic/tourH1.jpg', '0', '0', null, null, null, '0');
INSERT INTO `tour` VALUES ('3', '2', 'Fusce interdum. Maecenas 1', 'Paris trang lệ', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\n\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet.', '7', '1333130618', '1333990800', '5', '15', '1', '3', '13000000', '1', 'MS01', 'pic/tourH1.jpg', '0', '0', null, null, null, '0');
INSERT INTO `tour` VALUES ('4', '3', 'Fusce interdum. Maecenas 1', 'Paris trang lệ', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', 'sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br /><br />\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br /><br />\r\n\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet.', '8', '1333130618', '1333990800', '5', '16', '1', '4', '13000000', '1', '', 'pic/tourH1.jpg', '0', '0', null, null, null, '0');

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
