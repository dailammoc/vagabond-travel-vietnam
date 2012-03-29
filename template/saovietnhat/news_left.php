<?php
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$kq= $db->Tin('tintuc');
?>
<div class="news">
	<div class="title_1">Tin tức</div>
    <?php while($row = mysql_fetch_assoc($kq)){?>
	<div class="news_box">
    	<div class="image_news">
        	<a href="chi-tiet-tin/<?=$row['TieuDe_KhongDau']?>.html"><img src="<?=$row['UrlHinh']?>"  title="<?=$row['TieuDe']?>"/></a>
        </div>
        <div class="tomtat_news">
        	<?=$row['TomTat']?><a href="chi-tiet-tin/<?=$row['TieuDe_KhongDau']?>.html" title="Chi tiết <?=$row['TieuDe']?>"><span class="readmore">Xem tiếp...</span></a>
        </div>
    </div>
    <?php } ?>
</div>
