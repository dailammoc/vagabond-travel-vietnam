<?php
	require_once "classquantriSP.php";
	if (isset($qt)==false) $qt = new quantriSP;		
	$giaTri = $_GET['idCL'];  
	$loaisp = $qt->CTSanPham('loaisp', 'idCL', $giaTri);
?>
<?php while ($row_loaisp = mysql_fetch_assoc($loaisp)) { ?>
	<option value="<?php echo $row_loaisp['idLoai'];?>">
	<?php echo $row_loaisp['tenLoai'];?> 
	</option>
<?php } ?>
