<?php
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app.php');
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app_travel.php');
$tour_id = $_GET['tour_id'];
$tour = Table::Fetch('tour',$tour_id);
$loaitour = Table::Fetch('loai_tour',$tour['id_loai_tour']);
?>
<div id="content-table-inner">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Title:</th>
			<td><span><?php echo $tour['title']?></span></td>
			
		</tr>
		<tr>
			<th valign="top">Sologon:</th>
			<td><span><?php echo $tour['slogon_tour']?></span></td>
			<th valign="top">Loại tour</th>
			<td><span><?php echo $loaitour['ten_loai']?></span></td>
		</tr>
		</tr>
	</table>
	<!-- end id-form  -->
	</td>	
</tr>
<tr>
	<td>Intro</td>
	<td><span><?php echo $tour['intro']?></span></td>
</tr>
<tr>
<td><img src="<?php echo DIR_IMG_ENTERPRISE ?>shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>

</div>