<?php
session_start();
unset ($_SESSION['kt_login_user']);
header ("location:dangnhap.php");
?>