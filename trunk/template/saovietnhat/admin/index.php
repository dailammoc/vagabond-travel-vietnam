<?php
session_start();
ob_start();
require_once "checklogin.php";
require_once ("classquantriSP.php");
$qt = new quantriSP;	
$p=isset($_GET['p'])?$_GET['p']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS Admin Control</title>
<link href="index.css" rel="stylesheet" type="text/css" />
</head>

<body>

<!--wrapper top-->
<div id="wrapper_top">
	<div id="banner">
    	<div id="ten_web">Saovietnhat.vn<?php echo '<br /><b>Chào <span style="font-size:12px;color:red;">'.$_SESSION['kt_login_user'].'</span></b>';?></div>
        <div id="trangchu"><a href="../index.php" target="_blank"><img src="images/trangchu.jpg" border="0" /></a></div>
        <div id="thoat"><a href="thoat.php"><img src="images/exit.png" align="right" title="thoát" border="0" /> &nbsp;</a></div>
    </div>

</div>
<!--wrapper top-->



<!--wrapper middle-->
<div id="wrapper_middle">
	<div id="left">
		<?php
		  if(!isset($_GET['p']))
		     echo '<div class="menu_item"><a href="index.php"><span style="font-size:12px;color:blue;">Hệ Thống Quản Trị</span></a></div>';
          else
             echo '<div class="menu_item"><a href="index.php">Hệ Thống Quản Trị</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='gioithieu')
		     echo '<div class="menu_item"><a href="?p=gioithieu"><span style="font-size:12px;color:blue;">Giới Thiệu</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=gioithieu">Giới Thiệu</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='dichvu')
		     echo '<div class="menu_item"><a href="?p=dichvu"><span style="font-size:12px;color:blue;">Dịch Vụ</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=dichvu">Dịch Vụ</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='khuyenmai')
		     echo '<div class="menu_item"><a href="?p=khuyenmai"><span style="font-size:12px;color:blue;">Khuyến Mãi</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=khuyenmai">Khuyến Mãi</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='tuyendung')
		     echo '<div class="menu_item"><a href="?p=tuyendung"><span style="font-size:12px;color:blue;">Tuyển Dụng</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=tuyendung">Tuyển Dụng</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='doitac')
		     echo '<div class="menu_item"><a href="?p=doitac"><span style="font-size:12px;color:blue;">Đối Tác</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=doitac">Đối Tác</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='lienhe')
		     echo '<div class="menu_item"><a href="?p=lienhe"><span style="font-size:12px;color:blue;">Liên Hệ</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=lienhe">Liên Hệ</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='tintuc')
		     echo '<div class="menu_item"><a href="?p=tintuc"><span style="font-size:12px;color:blue;">Tin Tức</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=tintuc">Tin Tức</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='quangcao')
		     echo '<div class="menu_item"><a href="?p=quangcao"><span style="font-size:12px;color:blue;">Quảng Cáo</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=quangcao">Quảng Cáo</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='chungloai')
		     echo '<div class="menu_item"><a href="?p=chungloai"><span style="font-size:12px;color:blue;">Chủng Loại Sản Phẩm</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=chungloai">Chủng Loại Sản Phẩm</a></div>';		
		?>
		<?php
		  if(isset($_GET['p']) && $_GET['p']=='loaisanpham')
		     echo '<div class="menu_item"><a href="?p=loaisanpham"><span style="font-size:12px;color:blue;">Danh Sách Loại Sản Phẩm</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=loaisanpham">Danh Sách Loại Sản Phẩm</a></div>';		
		?>
    	<?php
		  if(isset($_GET['p']) && $_GET['p']=='sanpham')
		     echo '<div class="menu_item"><a href="?p=sanpham"><span style="font-size:12px;color:blue;">Danh Sách Sản Phẩm</span></a></div>';
          else
             echo '<div class="menu_item"><a href="?p=sanpham">Danh Sách Sản Phẩm</a></div>';		
		?>    		
    </div>
    
    <div id="right">
    	<div id="cms_admin"></div>
        <div id="noidung">


            <div class="tieude_noidung">
            <?php
            if ($p=='sanpham') echo "Quản lý danh sách sản phẩm";
            else if ($p=='sp_t') echo "Thêm sản phẩm";
            else if ($p=='sp_c') echo "Chỉnh sản phẩm";
            else if ($p=='loaisanpham') echo "Quản lý danh sách loại sản phẩm";
            else if ($p=='loai_t') echo "Thêm loại sản phẩm";
            else if ($p=='loai_c') echo "Chỉnh loại sản phẩm";
			else if ($p=='chungloai') echo "Quản lý chủng loại sản phẩm";
            else if ($p=='chungloai_t') echo "Thêm chủng loại sản phẩm";
            else if ($p=='chungloai_c') echo "Chỉnh chủng loại sản phẩm";
            else if ($p=='sidebar') echo "Quản lý danh sách side bar";
            else if ($p=='sidebar_t') echo "Thêm side bar";
            else if ($p=='sidebar_c') echo "Chỉnh side bar";			
            else if ($p=='gioithieu') echo "Cập Nhập Thông Tin Giới Thiệu";	
            else if ($p=='dichvu') echo "Cập Nhập Thông Tin Dịch Vụ";		
            else if ($p=='khuyenmai') echo "Cập Nhập Thông Tin Khuyến Mãi";		
            else if ($p=='tuyendung') echo "Cập Nhập Thông Tin Tuyển Dụng";	
            else if ($p=='doitac') echo "Cập Nhập Thông Tin Đối Tác";	
            else if ($p=='lienhe') echo "Cập Nhập Thông Tin Liên Hệ";		
            else if ($p=='tintuc') echo "Danh Sách Tin Tức";
            else if ($p=='tintuc_t') echo "Thêm Tin Tức";			
            else if ($p=='tintuc_c') echo "Cập Nhập Tin Tức";	
            else if ($p=='quangcao') echo "Danh Sách Quảng Cáo";
            else if ($p=='quangcao_t') echo "Thêm Quảng Cáo";			
            else if ($p=='quangcao_c') echo "Cập Nhập Quảng Cáo";			
            else if ($p=='banner') echo "Quản lý banner";	
            else if ($p=='nhapkho') echo "Quản Lý Nhập/Xuất Kho";	
            else if ($p=='history') echo "Lịch Sử Nhập/Xuất Kho";				
            else if ($p=='thoat') include "thoat.php";	
            ?>							
            </div>
            
            
            <div>
            <?php
            if ($p=='sanpham') include "sp_xds.php";
            else if ($p=='sp_t') include "sp_t.php";
            else if ($p=='sp_c') include "sp_c.php";	
			
			else if ($p=='loaisanpham') include "loai_xds.php";
            else if ($p=='loai_t') include "loai_t.php";
            else if ($p=='loai_c') include "loai_c.php";
			
			else if ($p=='chungloai') include "chungloai_xds.php";	
			else if ($p=='chungloai_c') include "chungloai_c.php";
			else if ($p=='chungloai_t') include "chungloai_t.php"; 
			
            else if ($p=='sidebar') include "sidebar_xds.php";
            else if ($p=='sidebar_t') include "sidebar_t.php";
            else if ($p=='sidebar_c') include "sidebar_c.php";				
            else if ($p=='gioithieu') include "gioithieu_c.php";
            else if ($p=='dichvu') include "dichvu_c.php";		
            else if ($p=='khuyenmai') include "khuyenmai_c.php";	
			else if ($p=='tuyendung') include "tuyendung_c.php";
            else if ($p=='doitac') include "doitac_c.php";	
            else if ($p=='lienhe') include "lienhe_c.php";	
			
            else if ($p=='tintuc') include "tintuc_xds.php";	
			else if ($p=='tintuc_c') include "tintuc_c.php";
			else if ($p=='tintuc_t') include "tintuc_t.php";  
			
			else if ($p=='quangcao') include "quangcao_xds.php";	
			else if ($p=='quangcao_c') include "quangcao_c.php";
			else if ($p=='quangcao_t') include "quangcao_t.php";  
			
            else if ($p=='banner') include "banner.php";	
            else if ($p=='nhapkho') include "n_kho.php";			
            else if ($p=='history') include "history_kho.php";			
            else if ($p=='thoat') include "thoat.php";		
            else include "chuthich.php";
            ?>        
            </div>
            

        
        </div>
    </div>

</div>
<!--wrapper middle-->



<!--wrapper bottom-->

<div id="wrapper_bottom">

	<div id="footer">
    	<div id="copyright">SAOVIETNHAT | © 2011 - All rights reserved.</div>
    </div>

</div>


<!--wrapper bottom-->
</body>
</html>
