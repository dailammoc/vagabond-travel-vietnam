<style>
.txt {width:98%}
.url {width:80%}
</style>
<?php 
	require_once "classquantriSP.php";
    $kq=isset($_GET['kq'])?intval($_GET['kq']):0;
    if($kq==1)
	    echo '<script>alert(\'Cập nhập thành công!\')</script>';
	if (isset($qt)==false) $qt = new quantriSP;		

	$giaTri = 3;
	
	$kq = $qt->info($giaTri);
	
	$row = mysql_fetch_assoc($kq);

	if (isset($_POST['btnOK'])==true) {
		$kq=$qt->ChinhTT($giaTri);
		if($kq==1)
		   header("location:index.php?p=khuyenmai&kq=1");
		else
		   echo '<script>alert(\'Cập nhập không thành công!\')</script>';
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
<table width="800" border="1" cellspacing="0" cellpadding="5" align="center" bordercolor="#CCCCCC">


<tr>
    <th>Tiên Đề</th>
	<td colspan="2"><input type="text" name="tenGT" id="tenGT" class="txt" value="<?=$row['Ten']?>" /></td>
</tr>

  <tr><td colspan=3><b>Chi Tiết</b><br/><textarea name="chiTiet" id="chiTiet" class="txt" /><?=$row['ChiTiet']?></textarea> 
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

  
<tr>
    <td colspan="3" align="center">
        <input type="submit" name="btnOK" id="btnOK" value="  UPDATE  " />
		<a href="index.php" style="text-decoration:none"><input type="button" name="btnOK" id="btnOK" value="  CLOSE  " /></a>
    </td>
</tr>
</table>
</form>