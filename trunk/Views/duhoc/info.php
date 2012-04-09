<?php
require_once (dirname(dirname(dirname(__FILE__))) . '/system/app.php');
$type = $_GET['type'];
$condition = array();
if($type == 'gioithieu')
	$condition = array('id_du_hoc' => 3);
if($type == 'visa')
	$condition = array('id_du_hoc' => 4);
if($type == 'news')
	$condition = array('id_du_hoc' => 5);
	
$record = db::LimitQuery('du_hoc_detail',array(
	'condition' => $condition,
	'one' => true
));
//echo "<h2>GIỚI THIỆU</h2>"."<br />";
echo $record['content'];
?>
