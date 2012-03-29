<?php 
require_once "classquantriSP.php";
if (isset($qt)==false) $qt = new quantriSP;		

$pageSize = 12;
$pageNum = 1;
if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
settype($pageNum,"int");

$kq = $qt->ListSP($pageNum, $pageSize, 'sidebar', 'idSB');
$totalRows = $qt->DemSoSP('sidebar');
?>

<style>
.action a{ color: #FF0000; }
.action a:hover{ color: #00FF00; text-decoration:none}
.thanhphantrang { text-align:center; }
.thanhphantrang a{margin-right:5px; text-decoration:none;}
</style>

<table border=1 cellpadding=5  cellspacing=0  width=800  align=center style="overflow:hidden" bordercolor="#CCCCCC" class="center">

<tr>
  <th colspan="8" align="right"><a href="?p=sidebar_t"><img src="images/add.png" title="thêm" border="0" /></a></th>
  </tr>
  
<tr>
   <th> idSB </th>
   <th> Loại sidebar</th>
   <th> Link</th>   
   <th> Action </th>
</tr>

<!—-bắt đầu lặp -->
<?php while ($row = mysql_fetch_assoc($kq)) { ?>

<tr class="hang">
   <td align="center">
		<?=$row['idSB']?>
   </td>
   
   <td valign=top>
		<?php 
			$giaTri= $row['idLSB'];
			$kq1= $qt->SanPham ('loaisb', 'idLSB', $giaTri, 'idLSB', 'DESC');
			$row1= mysql_fetch_assoc ($kq1);
			echo $row1['tenLSB'];
		?>
   </td>

   <td align="center">
		<?=$row['link']?>
   </td>
   
   <td width="100" align="center" class="action">
    <a href="?p=sidebar_c&idSP=<?=$row['idSB']?>"><img src="images/edit.png" title="chỉnh" border="0" /></a>     
    | <a href="xoa.php?table=sidebar&key=idSB&idSP=<?=$row['idSB']?>"  onclick="return confirm('Xoá hả');"><img src="images/delete.png" title="xóa" border="0" /></a>     
   </td>
</tr>

<?php } ?>

<!— kết thúc lặp -->

</table>
<p class="thanhphantrang"><?php echo $qt->pagesListLimit($totalRows, $pageSize, 3);?> </p>

</body>
</html>
