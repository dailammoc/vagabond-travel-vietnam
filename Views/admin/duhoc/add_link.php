<?php
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app.php');
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app_travel.php');
$faq_id = intval($_GET['faq_id']);
if($faq_id > 0)
	$faq = Table::Fetch('du_hoc_detail',$faq_id);
?>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: URL_HOME_ENTERPRISE + "/images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>
<div id="content-table-inner">
<form action="" method ="POST" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $faq_id?>" name="faq_id">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Title:</th>
			<td><input name="description"type="text" class="inp-form" value="<?php echo $faq['description']?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Link:</th>
			<td><input name = "content"type="text" class="inp-form" value="<?php echo $faq['content']?>"/></td>
			<td></td>
		</tr>
		<tr>
	<th>Hình:</th>
	<td><input type="file" class="file_1" name="hinh"/></td>
	<td>
	
	</td>
	</tr>
	<?php if($faq['hinh']){?>
	<tr>
		<td></td>
		<td><a href="<?php echo DIR_IMG_ENTERPRISE.$faq['hinh']?>" target="_blank"><?php echo DIR_IMG_ENTERPRISE.$faq['hinh']?></a></td>
	</tr>
	<?php }?>
		
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
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