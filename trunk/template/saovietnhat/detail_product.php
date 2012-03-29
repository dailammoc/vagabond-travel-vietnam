<?php
	ob_start();
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$p= $_GET['p'];
	$TenSP_KhongDau= $_GET['TenSP_KhongDau'];
	$kq= $db->ChiTietSanPham($TenSP_KhongDau);
	$row= mysql_fetch_assoc($kq);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="http://<?=$_SERVER['SERVER_NAME'];?>"  />
<title>Công ty CP xuất nhập khẩu Sao Việt Nhật - chi tiết sản phẩm - <?=$row['TenSP']?></title>
<meta name="description" content="sao việt nhật - Công ty CP xuất nhập khẩu sao việt nhật." />
<meta name="keywords" content="<?=$row['TenSP']?>, thiet ke in an, giay in hoa don ATM, giay in, thung carton, qua tang quang cao, bieu mau van phong, catalogue lich tet, hang qua tang, cong ty CP xuat nhap khau Sao Viet Nhat." />
<meta name="author" content="Công Ty Sao Việt Nhật | cung cấp giấy in - chuyên cung cấp giấy in, giấy in bill, giấy in nhiệt, thiết kế in ấn..." /> 
<meta name="copyright" content="Copyright (c) 2011 www.saovietnhat.com - Công Ty CP Xuất Nhập Khẩu Sao Việt Nhật"/> 
<!--[if IE 7]> <link href="css/ie.css" rel="stylesheet" type="text/css"> <![endif]-->
<!--[if gt IE 7]> <link rel="stylesheet" type="text/css" href="css/index.css" /> <!--<![endif]-->
<!--[if !IE]>--> <link rel="stylesheet" type="text/css" href="css/index.css" /> <!--<![endif]-->
<link rel="stylesheet" type="text/css" href="css/preview.css"/>
<link rel="stylesheet" type="text/css" href="css/wt-rotator.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>
<script type="text/javascript" src="js/preview.js"></script>
</head>

<body> 
	<div id="wrapper_1">
    
    		<div id="header">
            	<div class="logo">
                	<img src="images/index/logo_svn.png" align="left" /><br /><br /><br /><br /><br />
                    <span class="name_company"> CÔNG TY CP XUẤT NHẬP KHẨU SAO VIỆT NHẬT</span>
                </div>
                <div class="menu_main">
                	<div class="menu_main_left">
                	<?php include "menu_main.php"; ?>
                    </div>
                    <div class="menu_main_right">
                    	<form action="trang-chu.html" method="get" name="search">
                        <input onClick="this.value=''" name="search" type="text" id="search" value="Search here..."  onBlur="if (this.value=='') this.value='Search here...'" />
                        <input name="btn_search" type="image" src="images/index/bt.png" align="right" class="btn_search" />
                        <input name="p" type="hidden" id="p" value="search" />            
       				 </form>    
                    </div>
                </div>
                <div class="slide_header">
                	<?php include "banner.php";?>
                </div>
            </div>
            
    </div>
    
    <div id="wrapper_2">
    		<div id="main">
            	<div class="left">
                	<div class="left_1">
                    	<?php include "menu_left.php";?>
                    </div>
                    <div class="left_2">
                    	<?php include "news_left.php";?>
                    </div>
                    <div class="left_3">
                    	<?php include "support_online.php";?>
                    </div>
                    <div class="left_4">
                    	<?php include "add_link.php";?>
                    </div>
                    <div class="left_5">
                    	<?php include "online_sum.php";?>
                    </div>
                </div>
                <div class="right">
                	<?php 
						if($p==search) include "middle_search.php";
						else include "middle_detail_product.php";
					?>
                </div>
            </div>    	
    </div>
    
    <div id="wrapper_3">
    	<div id="footer">
        	<div class="menu_footer">
            	<ul>
                	<li><a href="trang-chu.html">Trang Chủ</a></li>
                    <li><a href="gioi-thieu.html">Giới Thiệu</a></li>
                    <li><a href="dich-vu.html">Dịch Vụ</a></li>
                    <li><a href="khuyen-mai.html">Khuyến Mãi</a></li>
                    <li><a href="tuyen-dung.html">Tuyển Dụng</a></li>
                    <li><a href="doi-tac.html">Đối Tác</a></li>
                    <li><a href="lien-he.html">Liên Hệ</a></li>
                </ul>
            </div>
            <div class="info_footer">
            	<span>30 Đường Linh Đông - Khu phố 7 - P.Linh Đông - Q.Thủ Đức - TP Hồ Chí Minh</span><br />
                <span>Điện Thoại: (84-08) 6282 2907. Fax (84-08) 6282 2902.</span><br />
                <span>Hotline: 0933 134 668. Mr Sơn.</span><br />
                <span style="font-weight:bold; color:#666666;">Copyright &copy; 2011 <a href="http://saovietnhat.vn">www.saovietnhat.vn</a></span> - Designed by: <a href="http://www.levu.vn" target="_blank">www.levu.vn</a>
            </div>
        </div>
    </div>
</body>
</html>