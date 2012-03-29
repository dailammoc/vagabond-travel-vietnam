<script type="text/javascript" src="js/highslide.js"></script>
<link rel="stylesheet" type="text/css" href="cs/highslide.css" />
<script type="text/javascript">
    hs.graphicsDir = 'images/graphics/';
    hs.outlineType = 'rounded-white';
</script>
<?php
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$TenSP_KhongDau= $_GET['TenSP_KhongDau'];
	$kq= $db->ChiTietSanPham($TenSP_KhongDau);
	$row= mysql_fetch_assoc($kq);
	$idSP = $row['idSP'];
	$idLoai = $row['idLoai'];
	$kq1 = $db->SanPhamCungLoai($idLoai,9, $idSP);
?>
<div class="detail_product">
	<div class="title_2">Chi tiết sản phẩm </div>
    <div class="detail_product_detail">
    	<div class="detail_name_product">
        	<?=$row['TenSP']?>
        </div>
        <div class="detail_image">
        	<a id="thumb1" href="<?=$row['UrlHinh']?>" class="highslide" onclick="return hs.expand(this)">
        		<img src="<?=$row['UrlHinh']?>" title="<?=$row['TenSP']?>" />
            </a>
        </div>
        <div class="detail_content_product">
        	<span class="price_detail">Giá : <?php if($row['Gia']==0) echo "Liên hệ"; else echo number_format($row['Gia'])." VNĐ"?></span><br><hr />
            <span class="info">Thông tin chi tiết</span><br />
        	<?=$row['ChiTiet']?>
        </div>
    </div>
</div>
<div class="similiar_product">
	<div class="title_2">Sản phẩm cùng loại </div>
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