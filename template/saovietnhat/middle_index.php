<?php
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$pageSize = 12;
	$pageNum = 1;
	if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
	settype($pageNum,"int");
	$totalRows=0;
	$kq= $db->SanPhamPhanTrang($pageNum, $pageSize);	
	$totalRows = $db->DemSanPhamPhanTrang();
	$kq1= $db->SanPham('sanpham',3);
?>
<div class="news_product">
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
    <div class="thanhphantrang" align="center"> 
				<?php echo $db->pagesLinkSanPham($totalRows, $pageNum, $pageSize);?> 
	</div>
</div>
<div class="salest_product">
	<div class="title_2">Sản phẩm bán chạy</div>
    <?php while ($row1 = mysql_fetch_assoc($kq1)){?>
    <div class="product_1">
    	<div class="image_product">
        	<a href="chi-tiet-san-pham/<?=$row1['TenSP_KhongDau']?>.html"><img src="<?=$row1['UrlHinh']?>" title="<?=$row1['TenSP']?>" /></a>
        </div>
        <div class="content_product">
        	<a href="chi-tiet-san-pham/<?=$row1['TenSP_KhongDau']?>.html" title="<?=$row1['TenSP']?>"><span class="name_product"><?=$row1['TenSP']?></span></a><br>
        </div>
        <div class="bottom_product">
        	<span class="price">Giá : <?php if($row1['Gia']==0) echo "Liên hệ"; else echo number_format($row1['Gia'])." VNĐ"?></span>
            <a href="chi-tiet-san-pham/<?=$row1['TenSP_KhongDau']?>.html"><img src="images/index/btn_detail.jpg" align="right" title="Chi tiết sản phẩm"/></a>
        </div>
    </div>
    <?php }?>
</div>