<?php
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$TieuDe_KhongDau = $_GET['TieuDe_KhongDau'];
	$kq= $db->ChiTietTin($TieuDe_KhongDau);
	$row= mysql_fetch_assoc($kq);
	$idTin = $row['idTin'];
	$kq1 = $db->TincungLoai($idTin);
?>
<div class="introduction">
	<div class="title_3">
    	Chi Tiết tin tức
    </div>
    <div class="content_introduction">
    	<span class="title_news"><?=$row['TieuDe']?></span><br /><br />
    	<span class="content_news"><?=$row['NoiDung']?></span>
    </div>
    <div class="similiar_news">
    	<span>Các tin khác</span><br><br>
    	<?php while ($row1 = mysql_fetch_assoc($kq1)){?>
        	<span class="similiar_title"><img src="images/tintuc/icon_cungloai.jpg" /><a href="chi-tiet-tin/<?=$row1['TieuDe_KhongDau']?>.html"><?=$row1['TieuDe']?></a></span><br>
        <?php }?>
    </div>
</div>