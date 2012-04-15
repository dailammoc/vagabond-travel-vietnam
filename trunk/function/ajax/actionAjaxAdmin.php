<?php
$action = $_POST['action'];
$obj = $_POST['record_id'];
$obj = substr ( $obj, 0, - 1 );
$a = explode(',', $obj);
print_r($a);