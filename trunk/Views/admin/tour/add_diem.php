<?php
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app.php');
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app_travel.php');
$intro_id = $_GET['intro_id'];
$intro = Table::Fetch('intro',$intro_id);
?>
<div id="content-table-inner">
<form action="" method ="POST">
<input name="loaidiem_id"type="hidden" value="<?php echo $loaidiem_id?>">
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