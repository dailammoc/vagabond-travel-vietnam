<?php
require_once (dirname(dirname(dirname(__FILE__))) . '/system/app.php');
$gioithieu = db::LimitQuery('du_hoc_detail',array(
	'condition' => array('id_du_hoc' => 3),
	'one' => true
));
echo "<h2>GIỚI THIỆU</h2>"."<br />";
echo $gioithieu['content'];
?>
