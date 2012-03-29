<?php
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$idInFo = $_GET['idInFo'];
	$kq= $db->InFo($idInFo);
	$row= mysql_fetch_assoc($kq);
?>
<div class="introduction">
	<div class="title_3">
    	<?=$row['Ten']?>
    </div>
    <div class="content_introduction">
    	<?=$row['ChiTiet']?>
    </div>
</div>