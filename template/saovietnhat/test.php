<?php
$Hits=0;
$CountFile = "text.txt";
$CF = fopen ($CountFile, "r");
$Hits = fread ($CF,
filesize ($CountFile));
fclose ($CF);
if(!isset($_COOKIE['count'])){
	$Hits++;
	$CF = fopen ($CountFile, "w");
	fwrite ($CF, $Hits);
	fclose($CF);
	setcookie('count','1');	
}
	echo number_format($Hits);
?>