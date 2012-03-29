<?php
	require_once "classdb.php";
	if (isset($db)==false) $db= new db;
	$kq = $db->TieuDe('chungloai');
?>
<script>
	$(document).ready(function(){
		$('.menu_left_sub').hide();
    	$('.ten_cl').mouseover(function() {
			$('.menu_left_sub').hide();
			$(this).parent().children(".menu_left_sub").slideToggle();
   		 }); //function click('.menu_left_main') 
		 
		 $('.li_2').mouseover(function() {
		 	$(this).removeClass('li_2');
			$(this).addClass('li_2_hover');
		 });
		 $('.li_2').mouseout(function() {
		 	$(this).removeClass('li_2_hover');
			$(this).addClass('li_2');	
		 });	
	});
</script>
<div class="menu_left">
	<div class="title_1">Danh mục sản phẩm</div>
	<ul class="menu_left_main">
    	<?php while($row = mysql_fetch_assoc($kq)){?>
			<li class="li_1">
			<span class="ten_cl"><?=$row['TenCL']?></span>
            <?php 
				$idCL = $row['idCL'];
				$kq1 = $db->TieuDeLoai($idCL);
			?>
				<ul class="menu_left_sub">
					<?php while($row1 = mysql_fetch_assoc($kq1)){?>
                        <li class="li_2"><a href="san-pham/<?=$row1['TenLoai_KhongDau']?>.html" title="<?=$row1['TenLoai']?>"><?=$row1['TenLoai']?></a></li>
                     <?php }?>
				</ul>
           </li>
        <?php }?>
    </ul>
</div>
