<?php
  ob_start();
if(!isset($_SESSION))
{
session_start();
}  
?>
<?php
if(isset($_SESSION['kt_login_user'])==false){
	$_SESSION['back']=$_SERVER['REQUEST_URI'];
	$_SESSION['error']='Bạn chưa đăng nhâp';
	header('location:dangnhap.php');
	}
?>