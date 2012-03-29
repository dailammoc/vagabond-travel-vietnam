<style>
.txt {width:98%}
.url {width:80%}
</style>
<?php 
	require_once "classquantriSP.php";
	$clt=isset($_GET['clt'])?intval($_GET['clt']):-1;
	if (isset($qt)==false) $qt = new quantriSP;		

    if (isset($_POST['btnOK'])==true) {
	   if($qt->Them_loai()==1)
		    header("location:index.php?p=loaisanpham&tt=1");
	   else
	      echo '<script language="javascript">alert(\'Thêm loại không thành công!\')</script>';
    }
	if(mysql_num_rows(mysql_query('SELECT ThuTu FROM `loaisanpham`'))==0)
		   $max_tt=1;
	else
	{
		$result_max=mysql_query('SELECT max(ThuTu) FROM `loaisanpham`');
		$row_max=mysql_fetch_array($result_max);
		$max_tt=$row_max[0]+1;
	}
	if($clt>0)
	{
	  $row_temp=mysql_fetch_array(mysql_query('SELECT * FROM `chungloai` WHERE idCL='.$clt));
	  $result_cl=mysql_query('SELECT * FROM `chungloai` where idCL<>'.$clt);
	}
	else
	  $result_cl=mysql_query('SELECT * FROM `chungloai`');
?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>

<script type="text/javascript">
function BrowseServer( startupPath, functionData ){
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
	finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
	finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
	finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
	finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn	
	finder.popup(); // Bật cửa sổ CKFinder
} //BrowseServer

function SetFileField( fileUrl, data ){
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}
function ShowThumbnails( fileUrl, data ){	
	var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
	document.getElementById( 'thumbnails' ).innerHTML +=
	'<div class="thumb">' +
	'<img src="' + fileUrl + '" />' +
	'<div class="caption">' +
	'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
	'</div>' +
	'</div>';
	document.getElementById( 'preview' ).style.display = "";
	return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn
}
</script>

<form action="" method="post" name="form_qt">
<table width="800" border="1" cellspacing="0" cellpadding="5" align="center" bordercolor="#CCCCCC">


<tr>
    <th>Tên loại sản phẩm</th>
	<td colspan="2"><input type="text" name="tenLoai" id="tenLoai" class="txt" /></td>
</tr>
<tr>
    <th>Chọn chủng loại sản phẩm</th>
	<td colspan="2"><select name="chungloai">
	<?php
	   if($clt>0)
	      echo '<option value="'.$row_temp['idCL'].'">'.$row_temp['TenCL'].'</option>';
	   while($row_cloai=mysql_fetch_array($result_cl))
	      echo '<option value="'.$row_cloai['idCL'].'">'.$row_cloai['TenCL'].'</option>';
	?>
	  </select></td>
</tr>

   <tr>
    <th>Thứ tự</th>
	<td colspan="2"><input name="thutu" type="text" id="thutu" size="10" value="<?=$max_tt?>" /></td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="submit" name="btnOK" id="btnOK" value="  Thêm  " />
		<a href="index.php?p=loaisanpham" style="text-decoration:none"><input type="button" name="btnOK" id="btnOK" value="  CLOSE  " /></a>
    </td>
</tr>
</table>
</form>