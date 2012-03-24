-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2012 at 05:02 AM
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
-- Table structure for table `intro`
--

CREATE TABLE IF NOT EXISTS `intro` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`ID`, `TEN_DIA_DIEM`, `HINH_DAI_DIEN`, `TITLE`, `GIOI_THIEU`, `HINH_1`, `HINH_2`, `HINH_3`, `HIDE`) VALUES
(1, 'ha-long-bay', 'images/pic/gal03.jpg', 'Ha Long Bay', 'sagittis. Fusce elit ligula, Aenean. Sed laoreet. Aenean pede. Phasellus porta. Ut dictum nonummy diam. Sed a leo.', 'images/pic/gal01.jpg', 'images/pic/gal02.jpg', 'images/pic/gal03.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
