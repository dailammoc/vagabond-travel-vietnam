<!DOCTYPE html>
<html lang="en">
<head>
<title>Administrator - Quan ly 51deal.vn</title>
<meta charset="utf-8">
<!-- Global stylesheets -->
<link href="<?php echo URL_HOME_ENTERPRISE;?>/static/css/common.css" rel="stylesheet" type="text/css">
<link href="<?php echo URL_HOME_ENTERPRISE;?>/static/css/login.css" rel="stylesheet" type="text/css">
<script src="<?php echo URL_HOME_ENTERPRISE;?>/static/lib/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo URL_HOME_ENTERPRISE;?>/static/lib/common.js" type="text/javascript"></script>
</head>
<body>
	<div class="block-border">
		<div class="block-content">
			<h1 style="display:none">ERROR</h1>
			<div class="block-header">
			Lỗi
			</div>
			<div style="text-align:center;margin-top:10px;">
			<?php
				 if($error) 
				 {
					echo $error;
				 }
				 else 
				 {
				 	echo 'Trang web không tồn tại';
				 }?><br/>
			<a href="<?php echo URL_HOME;?>">Quay về trang chủ</a>
			</div>
		</div>
	</div>
</body>
</html>