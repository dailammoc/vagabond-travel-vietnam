<?php
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$giatri = $_GET['TenLoai_KhongDau'];
	$kq1= $db->CTSanPhamURL($giatri);
	$row1= mysql_fetch_assoc($kq1);
	$idLoai= $row1['idLoai'];
	$kq= $db->DanhMucSanPham($idLoai);
?>
<div class="catalogue_product">
	<div class="title_2">Sản phẩm mới</div>
    <?php while ($row = mysql_fetch_assoc($kq)){?>
    <div class="product_1">
    	<div class="image_product">
        	<a href="chi-tiet-san-pham/<?=$row['TenSP_KhongDau']?>.html"><img src="<?=$row['UrlHinh']?>" title="<?=$row['TenSP']?>" /></a>
        </div>
        <div class="content_product">
        	<a href="chi-tiet-san-pham/<?=$row['TenSP_KhongDau']?>.html" title="<?=$row['TenSP']?>"><span class="name_product"><?=$row['TenSP']?></span></a><br>
        </div>
        <div class="bottom_product">
        	<span class="price">Giá : <?php if($row['Gia']==0) echo "Liên hệ"; else echo number_format($row['Gia'])." VNĐ"?></span>
            <a href="chi-tiet-san-pham/<?=$row['TenSP_KhongDau']?>.html"><img src="images/index/btn_detail.jpg" align="right" title="Chi tiết sản phẩm"/></a>
        </div>
    </div>
    <?php }?>
</div>