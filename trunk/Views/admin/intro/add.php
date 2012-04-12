<?php
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app.php');
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app_travel.php');
$intro_id = $_GET['intro_id'];
$intro = Table::Fetch('intro',$intro_id);
?>
<div id="content-table-inner">
<form action="intro" method ="POST">
<input name="intro_id"type="hidden" value="<?php echo $intro_id?>">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Tên Địa Điểm:</th>
			<td><input name="ten_dia_diem"type="text" class="inp-form" value="<?php echo $intro['ten_dia_diem']?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Title:</th>
			<td><input name = "title"type="text" class="inp-form" value="<?php echo $intro['title']?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Giới Thiệu:</th>
			<td><textarea name = "gioi_thieu"rows="" cols="" class="form-textarea" ><?php echo $intro['gioi_thieu']?></textarea></td>
			<td></td>
		</tr>
		
		<tr>	
	<th>Hình đại diện:</th>
	<td><input type="file" class="file_1" name="hinh_dai_dien"/></td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div>
	</td>
	</tr>
	<tr><td></td><td><a href="" target="_blank"><?php echo $intro['hinh_dai_dien']?></a></td></tr>
	<tr>	
	<th>Image 1:</th>
	<td><input type="file" class="file_1" name="hinh_1"/></td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div>
	</td>
	</tr>
	<tr><td></td><td><?php echo $intro['hinh_1']?></td></tr>
	<tr>
	<th>Image 2:</th>
	<td>  <input type="file" class="file_1" name="hinh_2"/></td>
	<td><div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div></td>
	</tr>
	<tr><td></td><td><?php echo $intro['hinh_2']?></td></tr>
	<tr>
	<th>Image 3:</th>
	<td><input type="file" class="file_1" name="hinh_3"/></td>
	<td><div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div></td>
	</tr>
	<tr><td></td><td><?php echo $intro['hinh_3']?></td></tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	<!-- end id-form  -->

	</td>
	
</tr>
<tr>
<td><img src="<?php echo DIR_IMG_ENTERPRISE ?>shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
</form>
</div>