<?php
	require_once "classquantriSP.php";
	if (isset($qt)==false) $qt = new quantriSP;		

	$giaTri = $_GET['idSP']; 
	$table= $_GET['table'];
	$key= $_GET['key'];
	
	$qt->XoaSP($table, $key, $giaTri);
	header("location:index.php?p=$table");
	
?>