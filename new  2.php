<?php
	//for($i = 66; $i <67; $i++){
	$string = "http://thuvien.garena.vn/index.php?option=com_dota&view=hero&ItemID=490&layout=default_detail&id=67&tmpl=component";
	$content = file_get_contents($string);
	//print_r($content);
	//$content;
	$pos1 = stripos($content, '<dd>');
	$pos2 = stripos($content, '</dd>');
	//echo $pos1;
	$len =  strlen($content);
	$rest = substr($content, $pos1, $pos2 - $len); 
	$handle = fopen("text.txt", "w");
	fwrite($handle, $rest);
	
	$pos1 = stripos($rest, '<br />');
	echo substr($rest, $pos1+6); 
	//echo $rest;
?>
