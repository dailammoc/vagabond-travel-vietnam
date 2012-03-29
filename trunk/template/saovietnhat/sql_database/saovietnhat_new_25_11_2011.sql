-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2011 at 11:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saovietnhat_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `chungloai`
--

CREATE TABLE IF NOT EXISTS `chungloai` (
  `idCL` int(11) NOT NULL AUTO_INCREMENT,
  `TenCL` varchar(100) NOT NULL,
  `TenCL_KhongDau` varchar(100) NOT NULL,
  `ThuTu` int(4) NOT NULL,
  PRIMARY KEY (`idCL`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `chungloai`
--

INSERT INTO `chungloai` (`idCL`, `TenCL`, `TenCL_KhongDau`, `ThuTu`) VALUES
(1, 'Thiết kế in ấn', 'thiet-ke-in-an', 1),
(2, 'Giấy hóa đơn ATM', 'giay-hoa-don-ATM', 2),
(3, 'Giấy nhật ký ATM', 'giay-nhat-ky-ATM', 3),
(4, 'Giấy in Bill', 'giay-in-bill', 4),
(5, 'Thùng carton', 'thung-carton', 5),
(6, 'Quà tặng quảng cáo', 'qua-tang-quang-cao', 6);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `idInFo` int(11) NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) NOT NULL,
  `Ten_KhongDau` varchar(255) NOT NULL,
  `ChiTiet` text NOT NULL,
  `ThuTu` int(4) NOT NULL,
  PRIMARY KEY (`idInFo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`idInFo`, `Ten`, `Ten_KhongDau`, `ChiTiet`, `ThuTu`) VALUES
(1, 'Giới Thiệu', 'gioi-thieu', '<p>\r\n	C&Ocirc;NG TY CỔ PHẦN XUẤT NHẬP KHẨU SAO VIỆT NHẬT</p>\r\n', 1),
(2, 'Dịch vụ', 'dich-vu', '<p style="font-weight:bold; font-size:20px; text-align:center; color:#106DA7;">\r\n	<span>C&ocirc;ng ty cổ phần xuất nhập khẩu Sao Việt Nhật</span><br />\r\n	<span>Chuy&ecirc;n cung cấp c&aacute;c dịch vụ:</span></p>\r\n<p>\r\n	<span style="padding-left:20px; line-height:25px; font-weight:bold; color:#FF0000;">Thiết kế in ấn</span><br />\r\n	<span style="padding-left:40px; "> - Biểu mẫu văn ph&ograve;ng</span><br />\r\n	<span style="padding-left:40px;"> - Cataalogue lịch tết 2012</span><br />\r\n	<span style="padding-left:40px;"> - T&uacute;i-hộp giấy cao cấp</span><br />\r\n	<span style="padding-left:20px; line-height:25px; font-weight:bold; color:#FF0000;">Giấy h&oacute;a đơn ATM</span><br />\r\n	<span style="padding-left:40px;"> - giấy in h&oacute;a đơn ATM</span><br />\r\n	<span style="padding-left:20px; line-height:25px; font-weight:bold; color:#FF0000;">Giấy nhật k&yacute; ATM</span><br />\r\n	<span style="padding-left:40px;"> - Giấy nhật k&yacute;</span><br />\r\n	<span style="padding-left:20px; line-height:25px; font-weight:bold; color:#FF0000;">Giấy in Bill</span><br />\r\n	<span style="padding-left:40px;"> - Giấy nhiệt in Bill</span><br />\r\n	<span style="padding-left:40px;"> - Giấy Ford in Bill</span><br />\r\n	<span style="padding-left:20px; line-height:25px; font-weight:bold; color:#FF0000;">Th&ugrave;ng carton</span><br />\r\n	<span style="padding-left:40px;"> - Th&ugrave;ng carton 3-5 lớp</span><br />\r\n	<span style="padding-left:20px; line-height:25px; font-weight:bold; color:#FF0000;">Qu&agrave; tặng quảng c&aacute;o</span><br />\r\n	<span style="padding-left:40px;"> - N&oacute;n bảo hiểm</span><br />\r\n	<span style="padding-left:40px;"> - H&agrave;ng qu&agrave; tặng</span><br />\r\n	<span style="padding-left:40px;"> - &Aacute;o mưa in logo</span><br />\r\n	<span style="padding-left:40px;"> - D&ugrave; quảng c&aacute;o</span></p>\r\n', 2),
(3, 'Khuyến mãi', 'khuyen-mai', '<p style="font-weight:bold; font-size:15px; color:#ff0000;">\r\n	Chương tr&igrave;nh khuyến m&atilde;i đặc biệt gi&agrave;nh cho đại l&yacute; ph&acirc;n phối giấy cảm nhiệt (thernal paper)</p>\r\n<p>\r\n	Bắt đầu từ ng&agrave;y 15-10-2011, tất cả c&aacute;c đại l&yacute; ph&acirc;n phối sản phẩm của giấy do c&ocirc;ng ty cung cấp đều được khuyến m&atilde;i tr&ecirc;n 1% tổng đơn h&agrave;ng bằng sản phẩm c&ugrave;ng loại, h&agrave;ng khuyến m&atilde;i được giao c&ugrave;ng với xố lượng trong đơn đặt h&agrave;ng.</p>\r\n<p>\r\n	Th&ocirc;ng tin khuyến m&atilde;i của c&ocirc;ng ty sẽ li&ecirc;n tục được cập nhật tới qu&yacute; kh&aacute;ch h&agrave;ng...</p>\r\n', 3),
(4, 'Tuyển dụng', 'tuyen-dung', '<p style="text-align:center; font-size:20px; font-weight:bold; color:#106DA7;">\r\n	Th&ocirc;ng b&aacute;o tuyển dụng</p>\r\n<p style="color:#FF0000; font-weight:bold;">\r\n	1-&nbsp;Tuyển dụng nh&acirc;n vi&ecirc;n giao nhận h&agrave;ng</p>\r\n<p>\r\n	Y&ecirc;u cầu tr&igrave;nh độ&nbsp;&nbsp; : Kh&ocirc;ng -&nbsp; c&oacute; xe gắn m&aacute;y - R&agrave;nh đường s&agrave;i g&ograve;n.<br />\r\n	Số lượng tuyển&nbsp;&nbsp;&nbsp;&nbsp; : 02<br />\r\n	Thời gian thử việc&nbsp;:&nbsp;1 th&aacute;ng<br />\r\n	Mức lương: Thoả thuận</p>\r\n<p style="color:#FF0000; font-weight:bold;">\r\n	2. 05 Nh&acirc;n vi&ecirc;n kinh doanh</p>\r\n<p>\r\n	Y&ecirc;u cầu:<br />\r\n	- Tốt nghiệp đại học khối kinh tế, thương mại,... (ưu ti&ecirc;n xếp loại Kh&aacute; trở l&ecirc;n)<br />\r\n	- Nhanh nhẹn, giao tiếp tốt<br />\r\n	- C&oacute; tố chất v&agrave; y&ecirc;u th&iacute;ch c&ocirc;ng việc kinh doanh<br />\r\n	- C&oacute; kinh nghiệm kinh doanh (c&aacute;c sản phẩm c&ocirc;ng nghệ cao, ưu ti&ecirc;n kh&ocirc;ng bắt buộc) tối&nbsp; thiểu 01 năm =&gt; với NV kinh doanh.<br />\r\n	- Tiếng Anh giao tiếp v&agrave; đọc hiểu</p>\r\n<p style="font-weight:bold; color:#FF0000;">\r\n	Người tr&uacute;ng tuyển sẽ được hưởng c&aacute;c chế độ:</p>\r\n<p>\r\n	+ Hỗ trợ ph&iacute;&nbsp; sử dụng mobile, xăng xe đi lại&hellip; t&ugrave;y theo vị tr&iacute; c&ocirc;ng việc.<br />\r\n	+ C&oacute; thể thỏa thuận th&ecirc;m t&ugrave;y thuộc v&agrave;o kinh nghiệm v&agrave; khả năng l&agrave;m việc.<br />\r\n	+ Ngo&agrave;i lương cứng, c&aacute;c c&aacute; nh&acirc;n h&ograve;an th&agrave;nh th&agrave;nh c&ocirc;ng việc c&oacute; thể nhận được lương mềm v&agrave; c&aacute;c khoản thưởng doanh số h&agrave;ng qu&yacute;.<br />\r\n	+ Được đ&oacute;ng BHXH, BHYT theo quy định Nh&agrave; nước.<br />\r\n	+ Thường xuy&ecirc;n c&oacute; cơ hội tham gia c&aacute;c kh&oacute;a đ&agrave;o tạo n&acirc;ng cao nghiệp vụ chuy&ecirc;n m&ocirc;n trong v&agrave; ngo&agrave;i nước.</p>\r\n<p style=" font-weight:bold; color:#FF0000;">\r\n	Hồ sơ dự tuyển gồm:</p>\r\n<p>\r\n	- Sơ yếu l&yacute; lịch c&oacute; dấu địa phương cư tr&uacute;<br />\r\n	- Đơn xin việc (viết tay)<br />\r\n	- 02 ảnh 4 X 6<br />\r\n	- Giấy chứng nhận sức khỏe (mới cấp trong v&ograve;ng 06 th&aacute;ng)<br />\r\n	- Bản sao bằng cấp chứng chỉ li&ecirc;n quan</p>\r\n<p>\r\n	<em><span lang="VI">Xin vui l&ograve;ng kh&ocirc;ng li&ecirc;n lạc qua điện thoại nộp hồ sơ phỏng vấn trực tiếp.</span></em></p>\r\n', 4),
(5, 'Đối tác', 'Doi-tac', '<p>\r\n	Nội dung đang được cập nhật...</p>\r\n', 5),
(6, 'Liên hệ', 'lien-he', '<p style="text-align:center;">\r\n	<span style="font-weight:bold; font-size:18px; color:#106DA7;">C&ocirc;ng ty cổ phần xuất nhập khẩu Sao Việt Nhật</span><br />\r\n	<span style="color:#FF0000;">SAO VIET NHAT&nbsp;IMPORT&nbsp;EXPORT&nbsp;JOINT STOCK CAMPANY</span></p>\r\n<p>\r\n	<span style="font-weight:bold;">Địa chỉ:</span> 30 Linh Đ&ocirc;ng, Khu Phố 7, Phường&nbsp;Linh Đ&ocirc;ng, Quận Thủ&nbsp;Đức,&nbsp;TP HCM<br />\r\n	<span style="font-weight:bold;">Điện Thoại:</span> (84-08) 6282 2907&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight:bold;">Fax:</span> (84-08) 6282 2902<br />\r\n	<span style="font-weight:bold;">Hotline:</span> 0933 134 668<br />\r\n	<span style="font-weight:bold;">MST:</span> 0309930811<br />\r\n	<span style="font-weight:bold;">Email:</span> <a href="mailto:saovietnhatjsc@gmail.com">saovietnhatjsc@gmail.com</a><br />\r\n	<span style="font-weight:bold;">Website:</span> <a href="http://www.saovietnhat.vn">www.saovietnhat.vn</a></p>\r\n', 6);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `idLoai` int(11) NOT NULL AUTO_INCREMENT,
  `idCL` int(11) NOT NULL,
  `TenLoai` varchar(100) NOT NULL,
  `TenLoai_KhongDau` varchar(100) NOT NULL,
  `ThuTu` int(4) NOT NULL,
  PRIMARY KEY (`idLoai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`idLoai`, `idCL`, `TenLoai`, `TenLoai_KhongDau`, `ThuTu`) VALUES
(1, 1, 'Biểu mẫu văn phòng', 'bieu-mau-van-phong', 1),
(2, 1, 'Catalogue lịch tết 2012', 'catalogue-lich-tet-2012', 2),
(3, 1, 'Túi, hộp giấy cao cấp', 'tui-hop-giay-cao-cap', 3),
(4, 2, 'Giấy in hóa đơn ATM', 'giay-in-hoa-don-ATM', 4),
(5, 3, 'Giấy nhật ký', 'giay-nhat-ky', 5),
(6, 4, 'Giấy nhiệt in Bill', 'giay-nhiet-in-bill', 6),
(7, 4, 'Giấy ford in Bill', 'giay-ford-in-bill', 7),
(8, 5, 'Thùng carton 3-5 lớp', 'thung-carton-3-5-lop', 8),
(9, 6, 'Nón bảo hiểm', 'non-bao-hiem', 9),
(10, 6, 'Hàng quà tặng', 'hang-qua-tang', 10),
(11, 6, 'Áo mưa in logo', 'Ao-mua-in-logo', 11),
(12, 6, 'Dù quảng cáo', 'du-quang-cao', 12);

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE IF NOT EXISTS `quangcao` (
  `idQuangCao` int(11) NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) NOT NULL,
  `UrlHinh` varchar(255) NOT NULL,
  `Link` varchar(100) NOT NULL,
  PRIMARY KEY (`idQuangCao`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`idQuangCao`, `Ten`, `UrlHinh`, `Link`) VALUES
(1, 'Website levuepos', 'images/logo_thuonghieu/logo_levu.jpg', 'http://www.levuepos.com');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `idSP` int(11) NOT NULL AUTO_INCREMENT,
  `idCL` int(11) NOT NULL,
  `idLoai` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `TenSP_KhongDau` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  `ChiTiet` text NOT NULL,
  `Gia` int(11) NOT NULL,
  `UrlHinh` varchar(100) NOT NULL,
  `ThuTu` int(4) NOT NULL,
  PRIMARY KEY (`idSP`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idCL`, `idLoai`, `TenSP`, `TenSP_KhongDau`, `MoTa`, `ChiTiet`, `Gia`, `UrlHinh`, `ThuTu`) VALUES
(1, 6, 9, 'Nón bảo hiểm in logo quảng cáo', 'non-bao-hiem-in-logo', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/non-bao-hiem-in-logo.jpg', 22),
(2, 6, 9, 'Nón bảo hiểm quảng cáo', 'non-bao-hiem', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/non-bao-hiem.jpg', 23),
(3, 6, 11, 'Áo mưa logo', 'ao-mua-logo', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/ao-mua-logo.jpg', 24),
(4, 6, 11, 'Áo mưa in logo', 'ao-mua-in-logo', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/ao-mua-in-logo.jpg', 25),
(5, 6, 12, 'Dù in logo quảng cáo', 'du-in-logo-quang-cao', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/du-in-logo-quang-cao.jpg', 26),
(6, 6, 12, 'Dù in logo quảng cáo - 2', 'du-in-logo-quang-cao-2', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/du-in-logo-quang-cao-2.jpg', 27),
(10, 1, 1, 'Tiêu đề bao thư', 'tieu-de-bao-thu', 'Đang cập nhật', 'Đang cập nhật', 0, 'images/sanpham/tieu-de-bao-thu.jpg', 1),
(11, 1, 1, 'Ấn phẩm ngân hàng', 'an-pham-ngan-hang', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/an-pham-ngan-hang.jpg', 2),
(12, 1, 1, 'Ấn phẩm bệnh viện', 'an-pham-benh-vien', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/an-pham-benh-vien.jpg', 3),
(13, 1, 1, 'Ấn chỉ ngân hàng VIETTINBANK', 'an-chi-ngan-hang-viettinbank', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/an-chi-ngan-hang.jpg', 4),
(14, 1, 2, 'Lịch treo tường 13 tờ', 'lich-treo-tuong-13-to', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/lich-treo-tuong-13-to.jpg', 5),
(15, 1, 2, 'Lịch treo tường 7 tờ', 'lich-treo-tuong-7-to', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/lich-treo-tuong-7-to.jpg', 6),
(16, 1, 2, 'Lịch để bàn', 'lich-de-ban', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/lich-de-ban.jpg', 7),
(17, 1, 2, 'Lịch để bàn 2', 'lich-de-ban-2', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/lich-de-ban-2.jpg\r\n', 8),
(18, 1, 2, 'Lịch 13 tờ - 2', 'lich-13-to-2', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/lich-13-to-2.jpg', 9),
(19, 1, 2, 'Lịch 7 tờ - 2', 'lich-7-to-2', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/lich-7-to-2.jpg', 10),
(20, 1, 2, 'Lịch 5 tờ', 'lich-5-to', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/lich-5-to.jpg', 11),
(21, 1, 2, 'Lịch để bàn - 1', 'lich-de-ban-1', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/lich-de-ban-1.jpg', 12),
(22, 1, 3, 'Túi - hộp giấy cao cấp', 'tui-hop-giay-cao-cap', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/tui-hop-giay-cao-cap.jpg', 13),
(23, 1, 3, 'Biểu mẫu hàng in ấn', 'bieu-mau-hang-in-an', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/bieu-mau-hang-in-an.jpg', 14),
(24, 1, 3, 'Hộp  giấy cao cấp', 'hop-giay-cao-cap', 'Đang cập nhật...', 'Đang cập nhật...', 0, 'images/sanpham/hop-giay-cao-cap.jpg', 15),
(25, 2, 4, 'Hóa đơn ATM', 'hoa-don-atm', 'Nhập khẩu in ấn hóa đơn ATM trên giấy cảm nhiệt, hóa đơn ATM vietcombank, aAgribank, vietinbank, BIDV.v.v.\r\n\r\nKỷ thuật in: in offset mặt trước in logo theo mẫu chuẩn của ngân hàng trung ương của các hệ thống ngân hàng.\r\n\r\nMặt sau in vạch đen. kích thước cuộn 80 x 180 mm. giấy trắng độ nhạy nhiệt cao, độ lưu trữ lâu, không nối.', 'Nhập khẩu in ấn hóa đơn ATM trên giấy cảm nhiệt, hóa đơn ATM vietcombank, aAgribank, vietinbank, BIDV.v.v.\r\n\r\nKỷ thuật in: in offset mặt trước in logo theo mẫu chuẩn của ngân hàng trung ương của các hệ thống ngân hàng.\r\n\r\nMặt sau in vạch đen. kích thước cuộn 80 x 180 mm. giấy trắng độ nhạy nhiệt cao, độ lưu trữ lâu, không nối.', 0, 'images/sanpham/hoa-don-atm.jpg', 16),
(26, 3, 5, 'Giấy in nhật ký ATM', 'giay-in-nhat-ky-atm', 'Giấy cảm nhiệt dùng in nhật ký ATM: 57 x 80mm - 80 x80mm - 80 x 90mm - 80 x 100mm\r\n\r\ngiấy trắng độ nhạy nhiệt cao lưu trữ trong thời gian dài, không nối giao hàng nhanh.\r\n\r\ndùng cho tất cả các loại máy ATM Vietcombank, Agribank, Vietinbank,.v..v..', 'Giấy cảm nhiệt dùng in nhật ký ATM: 57 x 80mm - 80 x80mm - 80 x 90mm - 80 x 100mm\r\n\r\ngiấy trắng độ nhạy nhiệt cao lưu trữ trong thời gian dài, không nối giao hàng nhanh.\r\n\r\ndùng cho tất cả các loại máy ATM Vietcombank, Agribank, Vietinbank,.v..v..', 0, 'images/sanpham/giay-in-nhat-ky-atm.jpg', 17),
(27, 4, 6, 'Giấy in nhiệt Bill', 'giay-in-nhiet-bill', 'Giấy cảm nhiệt dùng in bill tính tiền nhà hàng, siêu thị, Nhà sách, Quán coffe, Máy ghi điện, Lấy số ...v.v... ', 'Giấy cảm nhiệt dùng in bill tính tiền nhà hàng, siêu thị, Nhà sách, Quán coffe, Máy ghi điện, Lấy số ...v.v... ', 0, 'images/sanpham/giay-in-nhiet-bill.jpg', 18),
(28, 4, 7, 'Giấy ford in Bill', 'giay-ford-in-bill', 'SẢN XUẤT GIẤY FORT IN BILL MÁY TÍNH TIỀN SIÊU THỊ, NHÀ SÁCH, NHÀ HÀNG,. V.V. KHỔ GIẤY: 75mm X 30m - 44mm X 30m và sản xuất theo nhu cầu của khách hàng. ', 'SẢN XUẤT GIẤY FORT IN BILL MÁY TÍNH TIỀN SIÊU THỊ, NHÀ SÁCH, NHÀ HÀNG,. V.V. KHỔ GIẤY: 75mm X 30m - 44mm X 30m và sản xuất theo nhu cầu của khách hàng. ', 0, 'images/sanpham/giay-ford-in-bill.jpg', 19),
(29, 5, 8, 'Thùng carton 3-7 lớp', 'thung-carton-3-7-lop', 'SẢN XUẤT THÙNG CARTON 3-7 LỚP, BỒI, BẾ THÀNH PHẨM, IN LỤA, IN OFFSET,.V.V. ', 'SẢN XUẤT THÙNG CARTON 3-7 LỚP, BỒI, BẾ THÀNH PHẨM, IN LỤA, IN OFFSET,.V.V. ', 0, 'images/sanpham/thung-carton-3-7-lop.jpg', 20),
(30, 5, 8, 'Thùng carton 5 lớp', 'thung-carton-5-lop', '<p>\r\n	Đang cập nhật...</p>\r\n', '<p>\r\n	Đang cập nhật...</p>\r\n', 0, 'images/sanpham/thung-carton-5-lop.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `idTin` int(11) NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(255) NOT NULL,
  `TieuDe_KhongDau` varchar(255) NOT NULL,
  `TomTat` varchar(1000) NOT NULL,
  `UrlHinh` varchar(255) NOT NULL,
  `NoiDung` text NOT NULL,
  `ThuTu` int(4) NOT NULL,
  PRIMARY KEY (`idTin`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`idTin`, `TieuDe`, `TieuDe_KhongDau`, `TomTat`, `UrlHinh`, `NoiDung`, `ThuTu`) VALUES
(1, 'Ngành giấy Việt Nam: Khó khăn đang chất chồng', 'giay-viet-nam-kho-khan-chong-chat', 'Cả chỉ tiêu dùng trong nước và xuất khẩu giấy thời gian qua.', 'images/tintuc/giay-viet-nam-kho-khan-chong-chat.jpg', '<img src="images/tintuc/giay-viet-nam-kho-khan-chong-chat.jpg" align="left" style="padding-right:10px;"/>\r\n<span>Cả chỉ tiêu dùng trong nước và xuất khẩu giấy thời gian qua   đều giảm, ngành giấy Việt Nam hiện đang phải đối mặt với rất   nhiều khó khăn.</span>\r\n  <p>Ông Vũ Ngọc Bảo, Tổng thư ký Hiệp  hội Giấy và Bột giấy Việt Nam cho biết: Giá bột, giá giấy  loại sau khi liên tục giảm từ tháng 10/2008 đến hết quý I/2009  đã bắt đầu tăng trở lại do Trung Quốc đẩy mạnh nhập khẩu mặt  hàng này.</p>\r\n  <p> Nhưng giá giấy trong nước thời gian  qua không thể tăng theo giá bột, giá giấy loại nên sản xuất  quý II/2009 tuy khá hơn quý I/2009, nhưng trên thực tế hiệu quả  lại thấp hơn.</p>\r\n  <p> Tổng sản lượng giấy tiêu dùng  trong nước hai quý đầu năm nay đã tới 9% so với cùng kỳ 2008.  Trong đó, tiêu dùng giấy in báo giảm tới 20% do nhiều cơ quan  báo chí phải cắt giảm lượng phát hành. Giấy dùng làm bao bì  công nghiệp phục vụ xuất khẩu cũng giảm 15% so với cùng kỳ  năm trước.</p>\r\n  <p>Nhu cầu đối với giấy viết tuy  không thay đổi về số lượng, nhưng “Thực tế cầu về mặt hàng  này đã giảm do lượng tiêu thụ năm sau bao giờ cũng cao hơn năm  trước”, ông Bảo cho biết thêm.</p>\r\n  <p>Cũng trong hai quý đầu năm, sản  xuất của toàn ngành đã giảm 15% so với cùng kỳ năm trước  nhưng doanh thu lại giảm tới 20- 25%.</p>\r\n  <p>Lượng giấy còn nằm trong kho của  cả ngành ước tính khoảng 15.000-  20.000 tấn (dù con số này  được đánh giá là không lớn so với mức tồn của đầu năm là  70.000 tấn).</p>\r\n  <p>Đặc biệt, sáu tháng đầu năm 2009,  ngành chỉ xuất khẩu được  22.000 tấn giấy các loại, giảm tới  74% so với cùng kỳ năm ngoái (84.000 tấn).</p>\r\n  <p>Dự báo về nhu cầu tiêu dùng giấy  trong năm 2010, ông Võ Sỹ Dởng, Chủ tịch Hiệp hội cho rằng:  Lượng tiêu thụ gần như không tăng so với năm 2009. Thứ nhất, giá  nguyên liệu (bột, giấy loại) và các chi phí sản xuất khác như  điện, than đều có xu hướng tiếp tục tăng. Điều này sẽ làm  tăng chi phí sản xuất, kéo theo giá bán cũng bị đội lên,  khiến nhu cầu tiêu thụ giấy trên toàn cầu giảm.</p>\r\n  <p>Thứ hai, nhu cầu đối với giấy in  báo sẽ  tiếp tục giảm hơn năm 2009 vì thông tin trên các kênh  truyền hình, truyền thanh,  Internet ngày càng phong phú và kịp  thời nên quảng cáo trên báo giấy dần được chuyển sang các kênh  này.</p>\r\n  <p>Tuy nhiên, ngành vẫn có điểm  “sáng” đó là xuất khẩu giấy sẽ tăng do công suất của các nhà  máy sản xuất giấy tissue sẽ phục hồi và cuối 2009 và xuất  khẩu giấy vàng mã sẽ tăng trở lại.</p>\r\n  <p>Theo đó, để vượt qua những khó  khăn trong giai đoạn hiện nay, Hiệp hội Giấy và Bột giấy kiến  nghị các cơ quan chức năng cần ổn định chính sách thuế đối  với ngành giấy theo đúng lộ trình đã cam kết khi gia nhập WTO.</p>\r\n  <p>Tiếp đến, hoạt động thu gom, buôn  bán giấy đã qua sử dụng để sản xuất giấy cần được miễn  thuế (mức thuế hiện nay là 10%). Bên cạnh đó, cần sớm ban  hành quy định chỉ sử dụng giấy có độ trắng 82-85 ISO đối với  sách học tập, vở, giấy văn phòng để hạn chế sử dụng chất  tẩy trong ngành công nghiệp này. Và cần coi cây nguyên liệu  giấy là cây công nghiệp để có quy hoạch phát triển vùng nguyên  liệu cho toàn ngành.</p>\r\n', 1),
(2, 'Lạm phát 4 tháng gần 10%', 'lam-phat-4-thang-tang', 'Tổng cục Thống kê cho biết tốc độ tăng CPI trong tháng 4 của cả nước.', 'images/tintuc/lam-phat.jpg', '<p><img src="images/tintuc/lam-phat-4-thang-tang.jpg" title="Diễn biến chỉ số giá tiêu dùng (CPI) 4 tháng đầu năm 2011. Số liệu: GSO">\r\n    </p>\r\n<p>\r\n  <span>Tổng cục   Thống kê cho biết tốc độ tăng CPI trong tháng 4 của cả nước là 3,32%.   Tính từ đầu năm, chỉ số giá tiêu dùng đã tăng 9,64%, vượt qua mức cho   phép.  Tăng giá mạnh nhất trong rổ hàng hóa tính CPI là các nhóm hàng và dịch   vụ giao thông (6,04%), chủ yếu do tác động của quyết định điều chỉnh giá   xăng dầu vào cuối tháng 3. So với thời điểm cuối năm 2010, giá cả tại   nhóm này đã tăng hơn 15,2%.</span> \r\n</p>\r\n<p>Chi   phí vận chuyển tăng cao cũng tác động lớn đến giá cả các mặt hàng khác.   Giá hàng ăn và dịch vụ ăn uống tăng tới 4,5% (cao gấp rưỡi mức tăng   của tháng Tết),   trong đó, giá thực phẩm tăng hơn 5,6%, ăn uống ngoài gia đình tăng   3,31%. Giá nhà ở (gồm cả tiền thuê nhà, điện, nước, chất đốt…) và vật   liệu xây dựng cũng tăng 4,38%.</p>\r\n  <p>Ngay   cả bưu chính viễn thông, nhóm hàng thường xuyên giảm giá trong những   tháng trước, cũng tăng nhẹ 0,02% trong tháng 4. Các mặt hàng còn lại đều   tăng giá trên 1%. Riêng chỉ số giá vàng và đôla Mỹ (không tính vào CPI)   giảm lần lượt 1,2% và 1,6%.</p>\r\n  <p>Mức tăng CPI vượt trên 3% trong tháng 4 của cả nước vốn đã được dự báo sau khi Hà Nội, TP HCM và   một số tỉnh lần lượt công bố giá tiêu dùng tại địa phương mình. Tuy   nhiên, tốc độ tăng giá tới 3,32% được xem là khá bất ngờ. Con số này   cũng góp phần đưa lạm phát của 4 tháng đầu năm lên mức xấp xỉ 10%, vượt   qua mức Quốc hội cho phép gần 3%. So với tháng 4/2010, mặt bằng giá hiện   tại cũng đã cao hơn khoảng 17,6%.</p>\r\n', 2),
(3, 'Ngành giấy đang có dấu hiệu phục hồi', 'nganh-giay-dang-co-dau-hieu-phuc-hoi', 'Sản xuất giấy qu&yacute; I-2009 tăng 11% so với qu&yacute; IV-2008, nhưng.\r\n', 'images/tintuc/nganh-giay-dang-phuc-hoi.jpg', '<p>\r\n	<img src="images/tintuc/nganh-giay-dang-phuc-hoi.jpg" /></p>\r\n<p>\r\n	<span>Sản xuất giấy qu&yacute; I-2009 tăng 11% so với qu&yacute; IV-2008, nhưng so với c&ugrave;ng kỳ năm trước chỉ bằng 56%. Sản xuất th&aacute;ng 4-2009 cao hơn th&aacute;ng 3 v&agrave; bằng 67% so với th&aacute;ng 4-2008. Tồn kho giấy đ&atilde; giảm mạnh v&agrave; trở lại mức b&igrave;nh thường. Đ&aacute;ng lưu &yacute;, sản xuất giấy in b&aacute;o v&agrave; giấy in viết (hai loại giấy chịu ảnh hưởng của việc giảm thuế nhập khẩu v&agrave; gian lận thương mại) đ&atilde; dần phục hồi, th&aacute;ng 3 ti&ecirc;u thụ đạt 80% so với c&ugrave;ng kỳ năm trước</span></p>\r\n<p>\r\n	Theo dự b&aacute;o của Hiệp hội Giấy v&agrave; bột giấy Việt Nam, trong qu&yacute; II-2009, sản xuất v&agrave; ti&ecirc;u thụ giấy sẽ ở mức 82-85% so với trước suy tho&aacute;i kinh tế. Trước những th&aacute;ch thức của khủng hoảng kinh tế, ng&agrave;nh giấy đ&atilde; thực hiện nhiều giải ph&aacute;p bước đầu c&oacute; t&aacute;c dụng. Dấu hiệu phục hồi đ&atilde; c&oacute;, nhưng chưa chắc chắn. Tuy nhi&ecirc;n, c&oacute; thể khẳng định sản xuất v&agrave; ti&ecirc;u thụ giấy sẽ cao hơn năm 2008. Sản xuất c&oacute; khả năng tăng 12% v&agrave; ti&ecirc;u thụ tăng 2%. Xuất khẩu giấy tăng v&agrave; nhập khẩu giấy giảm do huy động năng lực sản xuất mới l&agrave;m ra giấy chất lượng cao thay thế giấy nhập khẩu. C&ograve;n sớm để khẳng định ng&agrave;nh giấy đ&atilde; bước qua khủng hoảng, nhưng những g&igrave; diễn ra trong những th&aacute;ng qua cho thấy ng&agrave;nh n&agrave;y đang từng bước phục hồi v&agrave; c&oacute; khả năng tăng trưởng. Điều n&agrave;y, trước hết l&agrave; nhờ khả năng ph&aacute;t huy nội lực của c&aacute;c DN trong ng&agrave;nh. Ti&ecirc;u d&ugrave;ng suy giảm đột ngột, tồn kho cao vọt, n&ecirc;n thời gian đầu ng&agrave;nh giấy chưa bắt kịp với những biến động của nền kinh tế, do đ&atilde; quen với tốc độ tăng trưởng hằng năm 16-18% suốt 20 năm qua. Nhưng ngay sau đ&oacute;, c&aacute;c DN nhanh ch&oacute;ng r&agrave; so&aacute;t lại to&agrave;n bộ hệ thống quản l&yacute; v&agrave; sản xuất, lấy mục ti&ecirc;u duy tr&igrave; sản xuất ở mức tối đa, sắp xếp để bảo to&agrave;n lực lượng lao động (c&oacute; thể thiếu việc nhưng kh&ocirc;ng mất việc). H&agrave;ng loạt c&aacute;c biện ph&aacute;p được &aacute;p dụng như ho&agrave;n thiện d&acirc;y chuyền sản xuất; cải tiến kỹ thuật; giảm ti&ecirc;u hao nguy&ecirc;n liệu, năng lượng, lao động; tăng cường biện ph&aacute;p kỹ thuật trong xử l&yacute; chất thải; đẩy mạnh ti&ecirc;u thụ; đ&aacute;nh gi&aacute; lại c&aacute;c dự &aacute;n đầu tư để quyết định tạm ngừng hay đẩy nhanh tiến độ; t&iacute;nh lại phương &aacute;n kinh doanh chấp nhận giảm l&atilde;i; &aacute;p dụng ch&iacute;nh s&aacute;ch ti&ecirc;u thụ linh hoạt&hellip; Nhờ những biện ph&aacute;p tổng thể, hầu hết c&aacute;c DN đ&atilde; dần ổn định sản xuất, kinh doanh trong bối cảnh kinh tế suy tho&aacute;i. B&ecirc;n cạnh đ&oacute;, Bộ C&ocirc;ng thương hỗ trợ trực tiếp hoặc kiến nghị với Ch&iacute;nh phủ những biện ph&aacute;p gi&uacute;p ng&agrave;nh duy tr&igrave; sản xuất, ổn định việc l&agrave;m. Bộ C&ocirc;ng thương v&agrave; Bộ T&agrave;i ch&iacute;nh thường xuy&ecirc;n l&agrave;m việc với Hiệp hội Giấy v&agrave; bột giấy Việt Nam để th&aacute;o gỡ kh&oacute; khăn cho DN. Những quyết định về thuế suất thuế nhập khẩu, thuế GTGT, thời hạn nộp thuế GTGT với thiết bị đầu tư nhập khẩu&hellip; đ&atilde; thực sự g&oacute;p phần k&iacute;ch th&iacute;ch ti&ecirc;u d&ugrave;ng v&agrave; sản xuất giấy. Hiệp hội Giấy v&agrave; bột giấy cũng thường xuy&ecirc;n b&aacute;o c&aacute;o t&igrave;nh h&igrave;nh của ng&agrave;nh, cung cấp c&aacute;c th&ocirc;ng tin cần thiết kh&aacute;c v&agrave; đề đạt kịp thời những kiến nghị của c&aacute;c DN với c&aacute;c ng&agrave;nh chức năng&hellip;; th&ocirc;ng tin kịp thời đến c&aacute;c DN diễn biến thị trường tr&ecirc;n thế giới, trong khu vực v&agrave; trong nước; đưa ra những dự b&aacute;o trong từng thời kỳ để c&aacute;c DN tham khảo, tổ chức nhiều hội nghị, hội thảo để đ&aacute;nh gi&aacute; kịp thời t&igrave;nh h&igrave;nh v&agrave; thống nhất c&aacute;c giải ph&aacute;p h&agrave;nh động...</p>\r\n<p>\r\n	B&agrave;i học lớn r&uacute;t ra từ khả năng tho&aacute;t khỏi suy tho&aacute;i của ng&agrave;nh giấy l&agrave; b&ecirc;n cạnh những trợ gi&uacute;p của Ch&iacute;nh phủ th&ocirc;ng qua việc nới lỏng c&aacute;c ch&iacute;nh s&aacute;ch t&agrave;i kh&oacute;a để hỗ trợ tăng trưởng kinh tế, c&ograve;n c&oacute; sự ph&aacute;t huy nội lực của c&aacute;c DN ng&agrave;nh giấy Việt Nam.</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phanquyen` int(11) NOT NULL,
  `Kho` int(11) NOT NULL,
  `Hoten` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dienthoai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `Phanquyen`, `Kho`, `Hoten`, `Diachi`, `Email`, `Dienthoai`) VALUES
(1, 'admin', '47ec2dd791e31e2ef2076caf64ed9b3d', 0, 1, 'Admin', 'Sai Gon', 'admin@h2cmall.com', '123456789'),
(2, 'khosaigon_admin', '47ec2dd791e31e2ef2076caf64ed9b3d', 2, 2, 'Nguyen Van A', 'Sai Gon', 'vana@gmail.com', '123456789'),
(3, 'khosaigon_user', '47ec2dd791e31e2ef2076caf64ed9b3d', 202, 2, 'Nguyen Van B', 'Sai Gon', 'vanb@gmail.com', '123456788');

-- --------------------------------------------------------

--
-- Table structure for table `yahoo`
--

CREATE TABLE IF NOT EXISTS `yahoo` (
  `idYahoo` int(11) NOT NULL AUTO_INCREMENT,
  `Nick` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PhongBan` varchar(100) NOT NULL,
  `DienThoai` varchar(20) NOT NULL,
  PRIMARY KEY (`idYahoo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `yahoo`
--

INSERT INTO `yahoo` (`idYahoo`, `Nick`, `Name`, `PhongBan`, `DienThoai`) VALUES
(1, 'quangsonsvn', 'Mr Sơn', 'Tư vấn bán hàng', '0933 134 668'),
(2, 'quangsonsvn', 'Mr Quang', 'Kinh doanh', '0122 261 1102'),
(3, 'toduyenkv', 'Miss Duyên', 'Kế toán', '0914 567 883');
