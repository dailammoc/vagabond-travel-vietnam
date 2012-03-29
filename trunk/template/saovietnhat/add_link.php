<?php
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$kq= $db->TinTuc('quangcao');
?>
<div class="branch">
	<div class="title_1">Liên kết quảng cáo</div>
    <?php while($row = mysql_fetch_assoc($kq)){?>
    	<div class="image_logo">
        	<a href="<?=$row['Link']?>" target="_blank"><img src="<?=$row['UrlHinh']?>"  title="<?=$row['Ten']?>"/></a>
        </div>
    <?php } ?>
</div>
