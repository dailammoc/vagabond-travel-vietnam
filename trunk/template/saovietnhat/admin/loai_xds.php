<?php 
require_once "classquantriSP.php";
$kq=isset($_GET['kq'])?intval($_GET['kq']):0;
$tt=isset($_GET['tt'])?intval($_GET['tt']):0;
if($kq==1)
	echo '<script>alert(\'Cập nhập loại thành công!\')</script>';
if($tt==1)
	echo '<script>alert(\'Thêm loại thành công!\')</script>';
if (isset($qt)==false) $qt = new quantriSP;		

$pageSize = 12;
$pageNum = 1;
if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
settype($pageNum,"int");

$kq = $qt->ListTinTuc($pageNum, $pageSize, 'loaisanpham', 'idLoai');
$totalRows = $qt->DemSoSP('loaisanpham');
 if(isset($_POST['chungloai']) && $_POST['chungloai']!=-1)
 {
     $r_temp=mysql_fetch_array(mysql_query('SELECT * FROM `chungloai` WHERE idCL='.$_POST['chungloai']));
	  $result_cl=mysql_query('SELECT idCL, TenCL FROM `chungloai` where idCL<>'.$_POST['chungloai']);
 }
else
    $result_cl=mysql_query('SELECT idCL, TenCL FROM `chungloai`');
?>

<style>
.action a{ color: #FF0000; }
.action a:hover{ color: #00FF00; text-decoration:none}
.thanhphantrang { text-align:center; }
.thanhphantrang a{margin-right:5px; text-decoration:none;}
</style>

<table border=1 cellpadding=5  cellspacing=0  width=800  align=center style="overflow:hidden" bordercolor="#CCCCCC" class="center">
<tr>
  <th colspan="7" align="right"><a href="?p=loai_t<?php if(isset($_POST['chungloai']) && $_POST['chungloai']!=-1) echo '&clt='.$_POST['chungloai'];?>"><img src="images/add.png" title="thêm" border="0" /></a></th>
  <form name="timkiem" method="post" action="index.php?p=loaisanpham">
	   <b>CHỌN CHỦNG LOẠI</b><br />
	<select name="chungloai">
	<?php
	   if(isset($_POST['chungloai']) && $_POST['chungloai']!=-1) 
	      echo '<option value="'.$_POST['chungloai'].'">'.$r_temp['TenCL'].'</option>';
	   echo '<option value="-1">Tất cả</option>';
	   while($row_cloai=mysql_fetch_array($result_cl))
	      echo '<option value="'.$row_cloai['idCL'].'">'.$row_cloai['TenCL'].'</option>';
	?>
	  </select>
	<input type="submit" name="submit1" value="Show" />
  </form>
    </tr>
<tr>
   <th> Tên loại sản phẩm</th>
    <th> Thứ Tự </th>
   <th> Action </th>
</tr>
<?php
   if(isset($_POST['submit1']) && $_POST['chungloai']!=-1)
   {
      $kq=mysql_query('SELECT * FROM `loaisanpham` where idCL='.$_POST['chungloai']);
   }
?>
<!—-bắt đầu lặp -->
<?php while ($row = mysql_fetch_assoc($kq)) { ?>

<tr class="hang">
   <td valign=top>
		<?=$row['TenLoai']?>
   </td>
   <td valign=top>
		<?=$row['ThuTu']?>
   </td>
 
   <td width="100" align="center" class="action">
    <a href="?p=loai_c&idSP=<?=$row['idLoai']?>"><img src="images/edit.png" title="chỉnh" border="0" /></a> 
    | <a href="xoa.php?table=loaisanpham&key=idLoai&idSP=<?=$row['idLoai']?>"  onclick="return confirm('Bạn muốn thực sự muốn xóa loại sản phẩm này?');"><img src="images/delete.png" title="xóa" border="0" /></a>
   </td>
</tr>

<?php } ?>

<!— kết thúc lặp -->

</table>
<p class="thanhphantrang"><?php if(!isset($_POST['chungloai']) || $_POST['chungloai']==-1) echo $qt->pagesListLimit($totalRows, $pageSize, 3);?> </p>

</body>
</html>
