<style>
.txt {width:98%}
.url {width:80%}
</style>
<?php 
	require_once "classquantriSP.php";
	if (isset($qt)==false) $qt = new quantriSP;		

	$kq= $qt->SanPham('loaisb', 'idLSB', -1, 'idLSB', 'DESC');

	if (isset($_POST['btnOK'])==true) {
		$qt->ThemSB();
		header("location:index.php?p=sidebar");
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

  <tr>
    <th>Loại side bar</th>
	<td colspan="2"> 
    <select name="idLSB" id="idLSB" class="txt">
    	<option value="0"> Chọn loại side bar </option>      
            <?php while ($row = mysql_fetch_assoc($kq)) { ?>
					<option value="<?php echo $row['idLSB'];?>"> 
					<?php echo $row['tenLSB'];?> 
                    </option>
			<?php } ?>         
	</select>
    </td>
  </tr>
  
  
  <tr>
    <th>Link</th>
	<td colspan="2"><input type=text name=link id=link class=txt /></td>
  </tr>  

  <tr>
    <th>Url Hình</th>
    <td colspan="2"><input type=text name=urlHinh id=urlHinh class=url /> <input onclick="BrowseServer('Images:/','urlHinh')" type="button" name="btnChonFile" id="btnChonFile" value="Chọn file" /></td>
  </tr>

<tr><td colspan="3" align="center">
	<input type="reset" name="btnxoa" id="btnxoa" value=" Xoá " />
	<input type="submit" name="btnOK" id="btnOK" value="  OK  " />
</td>
</tr>
</table>
</form>