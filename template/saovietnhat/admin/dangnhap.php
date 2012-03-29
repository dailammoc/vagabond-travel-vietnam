<?php 
	session_start(); 
if (isset($_POST['btnLog'])==true){	
	//code xử lý đặt ở đây
	require_once("classquantriSP.php"); 
	$qt= new quantriSP;
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	if (get_magic_quotes_gpc()== false) {
	$username=trim(mysql_real_escape_string($username));
	$password=trim(mysql_real_escape_string($password));
	}

	$sql = sprintf("	SELECT * FROM user
			 	WHERE username='%s' AND password ='%s'",
				$username, $password);
	$user = mysql_query($sql);	
	if (mysql_num_rows($user)==1) {//Thành công	
	  $row_user = mysql_fetch_assoc($user);
	  $_SESSION['kt_login_user'] = $row_user['username'];
	  $_SESSION['quyen'] = $row_user['Phanquyen'];
	  header("location: index.php");
	} else { //Thất bại
    header("location: dangnhap.php");
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="index.css" rel="stylesheet" type="text/css" />


<style>
#wrapper_login {width:382px; margin:auto; min-height:357px; background-color:#f1f1f1; position: fixed}
</style>

<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script>
$(document).ready(function(){
	top= $(window).height() /2 - 178.5;
	$("#wrapper_login").css ("top", top + "px");			
	left= $(window).width() /2 - 191;	
	$("#wrapper_login").css ("left", left + "px");	
});	
</script>
</head>

<body>

<div id="wrapper_login">

	<div id="header"></div>
    
	<form id="form1" name="form1" method="post" action="" >
    
    	<div class="text">Username</div>
        <input name="username"  id="username" type="text" class="input" />        
        <div class="clear"></div>
        
        <div class="text">Password</div>
        <input name="password" id="password" type="password" class="input" />
        <div class="clear"></div>        
        <input name="btnLog" id="btnLog" type="submit" value="Đăng nhập" class="submit" />
    </form>
</div>

</body>
</html>