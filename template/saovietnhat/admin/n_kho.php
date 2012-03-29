<style>
.txt {width:98%}
.url {width:80%}
</style>
<?php 
	require_once "classquantriSP.php";
	if (isset($qt)==false) $qt = new quantriSP;		

	if (isset($_POST['btnOK'])==true) {
		$error=$qt->NhapKho();
	#header("location:index.php?p=nhapkho");
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
    <th>Mã Sản Phẩm</th>
	<td colspan="2"><input type=text name=maSP id=MaSP value="
	<?php 
	       if(isset($_GET['m']))
		   { 
		        if(($_GET['m'])!='') 
				    echo base64_decode($_GET['m']);
		   }
	?>" /></td>
</tr>
<tr>
<th>Số Lượng</th>
	<td colspan="2"><input type=text name=soLuong id=soLuong /></td>
</tr>
  <tr>
    <th>Chọn hình thức</th>
	<td colspan="2"><select name="kho">
	  <option value="nhap">Nhập Kho</option>
	  <option value="xuat">Xuất Kho</option>
	  </select></td>
</tr>
<th>Ghi Chú</th>
	<td colspan="2"><label for="textarea"></label>
<textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="reset" name="btnxoa" id="btnxoa" value=" Cancel " />
        <input type="submit" name="btnOK" id="btnOK" value="Đồng ý  " />
    </td>
</tr>
</table>
</form>
<?php
   echo '<p align="center" style="color:#F00; font-size:14px;">'.$error.'</p>';
?>
 <?php 
require_once "classquantriSP.php";
if (isset($qt)==false) $qt = new quantriSP;		

$pageSize = 12;
$pageNum = 1;
if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
settype($pageNum,"int");

$kq = $qt->ListSP($pageNum, $pageSize, 'sanpham', 'idSP');
$totalRows = $qt->DemSoSP('sanpham');
?>

<style>
.action a{ color: #FF0000; }
.action a:hover{ color: #00FF00; text-decoration:none}
.thanhphantrang { text-align:center; }
.thanhphantrang a{margin-right:5px; text-decoration:none;}
</style>

<table border=1 cellpadding=5  cellspacing=0  width=800  align=center style="overflow:hidden" bordercolor="#CCCCCC" class="center">
<tr>
  <form name="timkiem" method="post" action="index.php?p=nhapkho">
  <p>
  	<input type="text" name="timkiem_text" id="timkiem_text"  onfocus="if(this.value =='Tìm kiếm theo tên' ) this.value=''" onblur="if(this.value=='') this.value='Tìm kiếm theo tên'" value="Tìm kiếm theo tên" size="40" />
	<input type="submit" name="timkiem" value="Tìm Kiếm" />
	</p>
	</form>
  </tr>
<tr>
   <th> Tên Sản Phẩm </th>  
   <th> Mã Sản Phẩm </th>   
   <th> Tên Loại Sản Phẩm </th>
   <th> Giá </th>      
   <th> Số Lượng Trong Kho </th>  
   <th> Action </th>   
</tr>

<!—-bắt đầu lặp -->
<?php
if(isset($_POST['timkiem']) && $_POST['timkiem_text']!='')
{
       $result_timkiem=mysql_query('SELECT * FROM `sanpham` WHERE TenSP like "%'.trim($_POST['timkiem_text']).'%"');
	   $kq=$result_timkiem;
}
?>
<?php while ($row = mysql_fetch_array($kq)) { ?>

<tr class="hang">

   <td valign=top align="left">
		<?=$row['TenSP']?>
   </td>
   <td valign=top align="center">
		<?=$row['MA_SP']?>
   </td>
   <td align="center">
		<?php 
			$giaTri= $row['idLoai'];
			$kq1= $qt->SanPham ('loaisp', 'idLoai', $giaTri, 'idLoai', 'DESC');
			$row1= mysql_fetch_assoc ($kq1);
			echo $row1['TenLoai'];
		?>
   </td>   


   <td valign=top>
		<?=$row['Gia']?>
   </td>
   <td valign="top"  align="center">
		<?php
		       $result_kho=mysql_query('SELECT * FROM `khohang` WHERE id_sanpham='.$row['idSP']);
			   $row_kho=mysql_fetch_array($result_kho);
			   if(isset($row_kho['soluong']))
         		   echo $row_kho['soluong']; 
			   else
			       echo 0;
		?>
   </td>   
      <td width="50" align="center" class="action">
	  <a href="<?php if($row['MA_SP']!='') echo 'index.php?p=nhapkho&idt='.$row['idSP'].'&m='.base64_encode($row['MA_SP']); else echo 'index.php?p=sp_c&idSP='.$row['idSP'];?>"><button type="button" <?php if($row['MA_SP']=='') echo 'onclick="return confirm(\'Sản phẩm chưa có mã. Bạn có muốn cập nhập mã của sản phẩm này không?\')"';?>><img src="images/add.png" title="chỉnh" border="0" /></button></a>
  </td>
</tr>

<?php } ?>

<!— kết thúc lặp -->

</table>
            <div id="navigation" align="center" ><?php if($_POST['timkiem_text']=='') echo $qt->pagesListLimit($totalRows, $pageSize, 3);?> </div>

</body>
</html>