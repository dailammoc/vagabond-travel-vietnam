<?php 
require_once "classquantriSP.php";
if (isset($qt)==false) $qt = new quantriSP;		
$kq=isset($_GET['kq'])?intval($_GET['kq']):0;
$tt=isset($_GET['tt'])?intval($_GET['tt']):0;
if($kq==1)
	echo '<script>alert(\'Cập nhập sản phẩm thành công!\')</script>';
if($tt==1)
	echo '<script>alert(\'Thêm sản phẩm thành công!\')</script>';
$pageSize = 12;
$pageNum = 1;
if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
settype($pageNum,"int");

$kq = $qt->ListSP($pageNum, $pageSize, 'sanpham', 'idSP');
$totalRows = $qt->DemSoSP('sanpham');
 if(isset($_GET['chungloai']) && $_GET['chungloai']!=-1)
 {
    $r_temp=mysql_fetch_array(mysql_query('SELECT * FROM `chungloai` WHERE idCL='.$_GET['chungloai']));
	$result_cl=mysql_query('SELECT idCL, TenCL FROM `chungloai` where idCL<>'.$_GET['chungloai']);
}
else
    $result_cl=mysql_query('SELECT idCL, TenCL FROM `chungloai`');
if(isset($_GET['loai_sp']) && $_GET['loai_sp']!=-1)
{
    $r_temp_l=mysql_fetch_array(mysql_query('SELECT * FROM `loaisanpham` WHERE idCL='.$_GET['chungloai'].' and idLoai='.$_GET['loai_sp']));
	$result_l=mysql_query('SELECT * FROM `loaisanpham` where  idCL='.$_GET['chungloai'].' and idLoai<>'.$_GET['loai_sp']);
}
else
    $result_l=mysql_query('SELECT * FROM `loaisanpham` WHERE idCL='.$_GET['chungloai']);
?>

<style>
.action a{ color: #FF0000; }
.action a:hover{ color: #00FF00; text-decoration:none}
.thanhphantrang { text-align:center; }
.thanhphantrang a{margin-right:5px; text-decoration:none;}
</style>

<table border=1 cellpadding=5  cellspacing=0  width=800  align=center style="overflow:hidden" bordercolor="#CCCCCC" class="center">
<tr>
  <th colspan="8" align="right"><a href="?p=sp_t<?php if(isset($_GET['chungloai'])) echo '&chungloai='.$_GET['chungloai'];if(isset($_GET['loai_sp'])) echo '&loaisp='.$_GET['loai_sp'];?>"><img src="images/add.png" title="thêm" border="0" /></a></th>
  <form name="timkiem" method="get" action="index.php">
		   <p><b>CHỌN CHỦNG LOẠI</b><br />
		   <?php echo '<input type="hidden" name="p" value="sanpham" /></p>';?>
	<select name="chungloai">
	<?php
	   if(isset($_GET['chungloai']) && $_GET['chungloai']!=-1) 
	      echo '<option value="'.$_GET['chungloai'].'">'.$r_temp['TenCL'].'</option>';
	   echo '<option value="-1">Tất cả</option>';
	   while($row_cloai=mysql_fetch_array($result_cl))
	      echo '<option value="'.$row_cloai['idCL'].'">'.$row_cloai['TenCL'].'</option>';
	?>
	  </select>
	<input type="submit" name="submit1" value="Show" /></p>
	<?php
	if(isset($_GET['chungloai']) && $_GET['chungloai']!=-1)
	{
	   echo '<p><b>CHỌN LOẠI SẢN PHẨM</b><br />';
	  echo '<select name="loai_sp">';
	   if(isset($_GET['loai_sp']) && $_GET['loai_sp']!=-1) 
	      echo '<option value="'.$_GET['loai_sp'].'">'.$r_temp_l['TenLoai'].'</option>';
	   echo '<option value="-1">Tất cả</option>';
	   while($row_loai=mysql_fetch_array($result_l))
	      echo '<option value="'.$row_loai['idLoai'].'">'.$row_loai['TenLoai'].'</option>';
	  echo '</select>
	<input type="submit" name="submit2" value="Show" /></p>';
	}
	?>
	</form>
  </tr>
<tr>
   <th> Tên sản phẩm </th>  
   <th> Mô Tả </th>   
   <th> Giá </th>      
   <th> Hình </th> 
   <th> Thứ Tự </th> 
   <th> Action </th>
</tr>
<?php
   if(isset($_GET['chungloai']) && $_GET['chungloai']!=-1)
   {
      $kq=mysql_query('SELECT * FROM `sanpham` where idCL='.$_GET['chungloai']);
   }
   if(isset($_GET['loai_sp']) && $_GET['loai_sp']!=-1)
   {
      $kq=mysql_query('SELECT * FROM `sanpham` where idLoai='.$_GET['loai_sp']);
   }
?>
<!—-bắt đầu lặp -->
<?php while ($row = mysql_fetch_array($kq)) { ?>

<tr class="hang">

   <td valign=midle align="left" width="200">
		<?=$row['TenSP']?>
   </td>
   <td valign=top align="left">
		<?=$row['MoTa']?>
   </td>  

   <td valign=midle align="center">
		<?=$row['Gia']?>
   </td>
   
   <td valign=midle align="center">
		<?php echo '<img height="50" width="50" src="http://saovietnhat.vn/'.$row['UrlHinh'].'" alt="'.$row['TenSP'].'" />';?>
   </td> 
   <td valign=midle align="center">
		<?=$row['ThuTu']?>
   </td>  
   <td width="50" align="center" class="action">
    <a href="?p=sp_c&idSP=<?=$row['idSP']?><?php $p_g=isset($_GET['pageNum'])?intval($_GET['pageNum']):1;echo '&pageNum='.$p_g;?>"><img src="images/edit.png" title="chỉnh" border="0" /></a> 
    | <a href="xoa.php?table=sanpham&key=idSP&idSP=<?=$row['idSP']?>"  onclick="return confirm('Bạn có thực sự muốn xóa sản phẩm này không?');"><img src="images/delete.png" title="xóa" border="0" /></a> 
   </td>
</tr>

<?php } ?>

<!— kết thúc lặp -->

</table>
            <div id="navigation" align="center" ><?php if(!isset($_GET['chungloai']) || $_GET['chungloai']==-1) echo $qt->pagesListLimit($totalRows, $pageSize, 3);?> </div>

</body>
</html>
