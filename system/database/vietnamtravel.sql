-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2012 at 11:49 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vietnamtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dich_vu`
--

CREATE TABLE IF NOT EXISTS `dich_vu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LOAI_DV` int(11) NOT NULL,
  `TITLE` varchar(200) CHARACTER SET utf8 NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 NOT NULL,
  `CONTENT` text CHARACTER SET utf8 NOT NULL,
  `HINH` varchar(200) CHARACTER SET utf8 NOT NULL,
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dich_vu`
--

INSERT INTO `dich_vu` (`ID`, `ID_LOAI_DV`, `TITLE`, `DESCRIPTION`, `CONTENT`, `HINH`, `HIDE`) VALUES
(1, 1, 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', '<img src="images/pic/tour2.jpg" class="imgL"> <div class="title">Nectetuer adipiscing elit. Maurip sfermentum dictum magna.</div>\r\n                 Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br>', 'images/pic/tour.jpg', 0),
(2, 2, 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', '<img src="images/pic/tour2.jpg" class="imgL"> <div class="title">Nectetuer adipiscing elit. Maurip sfermentum dictum magna.</div>\n                 Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br>', 'images/pic/tour.jpg', 0),
(3, 3, 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', '<img src="images/pic/tour2.jpg" class="imgL"> <div class="title">Nectetuer adipiscing elit. Maurip sfermentum dictum magna.</div>\n                 Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br>', 'images/pic/tour.jpg', 0),
(4, 3, 'Fusce interdum. Maecenas', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', '<img src="images/pic/tour2.jpg" class="imgL"> <div class="title">Nectetuer adipiscing elit. Maurip sfermentum dictum magna.</div>\n                 Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br>', 'images/pic/tour.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gioi_thieu`
--

CREATE TABLE IF NOT EXISTS `gioi_thieu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CONTENT` text CHARACTER SET utf8 NOT NULL,
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gioi_thieu`
--

INSERT INTO `gioi_thieu` (`ID`, `CONTENT`, `HIDE`) VALUES
(1, '<h4 class="titleALl">Giới thiệu</h4>\r\n                    \r\n                	<div class="alignJ"><img src="images/pic/tour2.jpg" class="imgL"> <div class="title">Nectetuer adipiscing elit. Maurip sfermentum dictum magna.</div>\r\n                 Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br> Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.  Nectetuer adipiscing elit. Maurip sfermentum dictum magna. Sed laor eet aliquam leot tellus dolor, dapib.<br><br>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE IF NOT EXISTS `lien_he` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HO_TEN` varchar(50) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NOI_DUNG` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loai_dich_vu`
--

CREATE TABLE IF NOT EXISTS `loai_dich_vu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_DICH_VU` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loai_dich_vu`
--

INSERT INTO `loai_dich_vu` (`ID`, `TEN_DICH_VU`) VALUES
(1, 'VISA DU HỌC & ĐỊNH CƯ'),
(2, 'DỊCH THUẬT CÔNG CHỨNG'),
(3, 'ĐẶT KHÁCH SẠN');

-- --------------------------------------------------------

--
-- Table structure for table `loai_diem_khoi_hanh`
--

CREATE TABLE IF NOT EXISTS `loai_diem_khoi_hanh` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_DIA_DIEM` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loai_diem_khoi_hanh`
--

INSERT INTO `loai_diem_khoi_hanh` (`ID`, `TEN_DIA_DIEM`) VALUES
(1, 'TP HỒ CHÍ MINH'),
(2, 'HÀ NỘI'),
(3, 'ĐÀ NẴNG'),
(4, 'CẦN THƠ'),
(5, 'NHA TRANG');

-- --------------------------------------------------------

--
-- Table structure for table `loai_phuong_tien`
--

CREATE TABLE IF NOT EXISTS `loai_phuong_tien` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_PHUONG_TIEN` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `loai_phuong_tien`
--

INSERT INTO `loai_phuong_tien` (`ID`, `TEN_PHUONG_TIEN`) VALUES
(1, 'MÁY BAY'),
(2, 'XE KHÁCH'),
(3, 'XE LỬA'),
(4, 'TÀU THỦY');

-- --------------------------------------------------------

--
-- Table structure for table `loai_tour`
--

CREATE TABLE IF NOT EXISTS `loai_tour` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_LOAI` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loai_tour`
--

INSERT INTO `loai_tour` (`ID`, `TEN_LOAI`) VALUES
(1, 'TOUR HOT'),
(2, 'TOUR NƯỚC NGOÀI'),
(3, 'TOUR TRONG NƯỚC');

-- --------------------------------------------------------

--
-- Table structure for table `order_tour`
--

CREATE TABLE IF NOT EXISTS `order_tour` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TOUR` int(11) NOT NULL,
  `HO_TEN` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_khuyen_mai`
--

CREATE TABLE IF NOT EXISTS `thong_tin_khuyen_mai` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE IF NOT EXISTS `tour` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LOAI_TOUR` int(11) NOT NULL,
  `TITLE` varchar(200) CHARACTER SET utf8 NOT NULL,
  `INTRO` text CHARACTER SET utf8 NOT NULL,
  `CONTENT` text CHARACTER SET utf8 NOT NULL,
  `NGAY_DI` datetime NOT NULL,
  `NGAY_VE` datetime NOT NULL,
  `ID_DIEM_KHOI_HANH` int(11) NOT NULL,
  `GIA_TOUR` int(11) NOT NULL,
  `ID_PHUONG_TIEN` int(11) NOT NULL,
  `HINH` varchar(200) CHARACTER SET utf8 NOT NULL,
  `HIDE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`ID`, `ID_LOAI_TOUR`, `TITLE`, `INTRO`, `CONTENT`, `NGAY_DI`, `NGAY_VE`, `ID_DIEM_KHOI_HANH`, `GIA_TOUR`, `ID_PHUONG_TIEN`, `HINH`, `HIDE`) VALUES
(1, 1, 'Fusce interdum. Maecenas 1', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed', '<img width="252" height="121" class="imgL" src="images/pic/tour.jpg"/>\r\n                        	<div class="title">Fusce interdum. Maecenas </div>\r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br/><br/>\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br/><br/>\r\n\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br/><br/>\r\n<img width="252" height="121" class="imgR" src="images/pic/tour.jpg"/>\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. ', '2012-03-12 00:00:00', '0000-00-00 00:00:00', 1, 13000000, 1, 'images/pic/tourH1.jpg', 0),
(2, 1, 'Fusce interdum. Maecenas 2', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed', '<img width="252" height="121" class="imgL" src="images/pic/tour.jpg"/>\n                        	<div class="title">Fusce interdum. Maecenas </div>\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br/><br/>\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \n<br/><br/>\n\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br/><br/>\n<img width="252" height="121" class="imgR" src="images/pic/tour.jpg"/>\n                        \nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. ', '2012-03-21 00:00:00', '0000-00-00 00:00:00', 2, 14000000, 3, 'images/pic/tourH1.jpg', 0),
(3, 2, 'Fusce interdum. Maecenas 1', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', '<img width="252" height="121" class="imgL" src="images/pic/tour.jpg"/>\r\n                        	<div class="title">Fusce interdum. Maecenas </div>\r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br/><br/>\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br/><br/>\r\n\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br/><br/>\r\n<img width="252" height="121" class="imgR" src="images/pic/tour.jpg"/>\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. ', '2012-03-12 00:00:00', '0000-00-00 00:00:00', 1, 13000000, 1, 'images/pic/tourH1.jpg', 0),
(4, 3, 'Fusce interdum. Maecenas 1', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem', '<img width="252" height="121" class="imgL" src="images/pic/tour.jpg"/>\r\n                        	<div class="title">Fusce interdum. Maecenas </div>\r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br/><br/>\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. \r\n<br/><br/>\r\n\r\nAenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. <br/><br/>\r\n<img width="252" height="121" class="imgR" src="images/pic/tour.jpg"/>\r\n                        \r\nsagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sit sagittis. Fusce elit ligula,  Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sito. Cras ullamcorper nibh. Sed laoreet. Lorem ipsum dolor sitsagittis. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo. Cras ullamcorper nibh. Sed laoreet. ', '2012-03-12 00:00:00', '0000-00-00 00:00:00', 1, 13000000, 1, 'images/pic/tourH1.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
