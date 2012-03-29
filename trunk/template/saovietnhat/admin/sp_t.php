<style>
.txt {width:98%}
.url {width:80%}
</style>
<?php 
	require_once "classquantriSP.php";
	if (isset($qt)==false) $qt = new quantriSP;		
	if(isset($_GET['chungloai']) && $_GET['chungloai']!=-1)
		$kq1=mysql_query('SELECT * FROM `loaisanpham` where idCL='.$_GET['chungloai']);
	else
        $kq1=mysql_query('SELECT * FROM `loaisanpham`');
	if(isset($_GET['loaisp']) && $_GET['loaisp']!=-1)
	    $kq1=mysql_query('SELECT * FROM `loaisanpham` where idLoai='.$_GET['loaisp']);
	if (isset($_POST['btnOK'])==true) {
		if($qt->ThemSP()==1)
		    header("location:index.php?p=sanpham&tt=1");
	    else
		   echo '<script language="javascript">alert(\'Có lỗi xảy ra khi thêm sản phẩm!\')</script>';	
    }
	if(mysql_num_rows(mysql_query('SELECT ThuTu FROM `sanpham`'))==0)
		   $max_tt=1;
	else
	{
		$result_max=mysql_query('SELECT max(ThuTu) FROM `sanpham`');
		$row_max=mysql_fetch_array($result_max);
		$max_tt=$row_max[0]+1;
	}
	if(isset($_GET['chungloai']) && $_GET['chungloai']!=-1)
	{
	   $result_chungloai=mysql_query('SELECT * FROM `chungloai` where idCL='.$_GET['chungloai']);
	}
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
<table width="780" border="1" cellspacing="0" cellpadding="5" align="center" bordercolor="#CCCCCC">
  <?php
    if(isset($_GET['chungloai']) && $_GET['chungloai']!=-1)
	{
  echo '<tr>
    <th>Chủng Loại Sản Phẩm</th>
      <td colspan="2"> 
      	<select name="idcLoai" id="idcLoai">';
                while ($row12=mysql_fetch_assoc($result_chungloai)){ 
                $idcLoai = $row12['idCL'];
                $tencLoai = $row12['TenCL'];
                $s = "";
                if ($idcLoai==$row12['idCL']) $s = "selected='selected'";
                echo "<option value={$idcLoai} {$s} > {$tencLoai} </option>";
                }
  		echo '</select>
 	  </td>
  </tr>';
   }
   ?>
  <tr>
    <th>Loại Sản Phẩm</th>
      <td colspan="2"> 
      	<select name="idLoai" id="idLoai">
            <?php 
                while ($row1=mysql_fetch_assoc($kq1)){ 
                $idLoai = $row1['idLoai'];
                $tenLoai = $row1['TenLoai'];
                $s = "";
                if ($idLoai==$row['idLoai']) $s = "selected='selected'";
                echo "<option value={$idLoai} {$s} > {$tenLoai} </option>";
                }
            ?>
  		</select>
 	  </td>
  </tr>
 
   <tr>
    <th>Tên Sản Phẩm</th>
	<td colspan="2"><input type=text name=tenSP id=tenSP class=txt /></td>
  </tr>
  <tr>
    <th>Thứ Tự</th>
	<td colspan="2"><input type=text name=thutu id=thutu value="<?=$max_tt?>" /></td>
  </tr>
  <tr>
    <th>Giá</th>
	<td colspan="2"><input type=text name=gia id=gia /></td>
  </tr>
  <tr>
    <th>Url Hình</th>
    <td colspan="2"><input type="text" name="urlHinh" id="urlHinh" class="url" /> <input onclick="BrowseServer('Images:/','urlHinh')" type="button" name="btnChonFile1" id="btnChonFile1" value="Chọn file" /></td>
  </tr>
  <tr><td colspan=3><b>Mô Tả</b><textarea name="MoTa" id="MoTa" class="txt" /></textarea> 
<script type="text/javascript">
var editor = CKEDITOR.replace( 'MoTa',{
	width: '780px',
	uiColor : '#9AB8F3',
	language:'vi',
	skin:'v2',		
	filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
	filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
	filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',	 	
	toolbar:[
	['Source','-','Save','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	['Styles','Format','Font','FontSize'],
	['TextColor','BGColor'],
	['Maximize', 'ShowBlocks','-','About']
	]
});		
</script>
</td></tr>

  <tr><td colspan=3><b>Chi Tiết</b><textarea name="chiTiet" id="chiTiet" class="txt" /></textarea> 
<script type="text/javascript">
var editor = CKEDITOR.replace( 'chiTiet',{
	width: '780px',
	uiColor : '#9AB8F3',
	language:'vi',
	skin:'v2',		
	filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
	filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
	filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',	 	
	toolbar:[
	['Source','-','Save','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	['Styles','Format','Font','FontSize'],
	['TextColor','BGColor'],
	['Maximize', 'ShowBlocks','-','About']
	]
});		
</script>
</td></tr>

<tr><td colspan="3" align="center">
	<input type="submit" name="btnOK" id="btnOK" value="  Thêm  " />
	<a href="index.php?p=sanpham" style="text-decoration:none"><input type="button" name="btnOK" id="btnOK" value="  CLOSE  " /></a>
</td>
</tr>
</table>
</form>