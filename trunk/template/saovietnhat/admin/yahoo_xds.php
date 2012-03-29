<?php 
require_once "classquantriSP.php";
$kq=isset($_GET['kq'])?intval($_GET['kq']):0;
$tt=isset($_GET['tt'])?intval($_GET['tt']):0;
if($kq==1)
	echo '<script>alert(\'Cập nhập tin tức thành công!\')</script>';
if($tt==1)
	echo '<script>alert(\'Tin tức đã được thêm thành công!\')</script>';
if (isset($qt)==false) $qt = new quantriSP;		

$pageSize = 12;
$pageNum = 1;
if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
settype($pageNum,"int");

$kq = $qt->ListTinTuc($pageNum, $pageSize, 'tintuc', 'idTin');
$totalRows = $qt->DemSoSP('tintuc');
?>

<style>
.action a{ color: #FF0000; }
.action a:hover{ color: #00FF00; text-decoration:none}
.thanhphantrang { text-align:center; }
.thanhphantrang a{margin-right:5px; text-decoration:none;}
</style>

<table border=1 cellpadding=5  cellspacing=0  width=800  align=center style="overflow:hidden" bordercolor="#CCCCCC" class="center">
<tr>
  <th colspan="8" align="right"><a href="?p=tintuc_t"><img src="images/add.png" title="thêm" border="0" /></a></th>
  </tr>
<tr>
   <th> Tiên Đề </th>  
   <th> Tóm Tắt </th>   
   <th> Thứ Tự </th>       
   <th> Action </th>
</tr>

<!—-bắt đầu lặp -->
<?php while ($row = mysql_fetch_array($kq)) { ?>

<tr class="hang">
   <td align="center">
		<?=$row['TieuDe']?>
   </td>

   <td valign=top align="left">
		<?=$row['TomTat']?>
   </td> 
   <td valign=top align="center">
		<?=$row['ThuTu']?>
   </td>  
   <td width="50" align="center" class="action">
    <a href="?p=tintuc_c&idTin=<?=$row['idTin']?><?php $p_g=isset($_GET['pageNum'])?intval($_GET['pageNum']):1;echo '&pageNum='.$p_g;?>"><img src="images/edit.png" title="chỉnh" border="0" /></a> 
    | <a href="xoa.php?table=tintuc&key=idTin&idSP=<?=$row['idTin']?>"  onclick="return confirm('Bạn có thực sự muốn xóa tin này?');"><img src="images/delete.png" title="xóa" border="0" /></a> 
   </td>
</tr>

<?php } ?>

<!— kết thúc lặp -->

</table>
            <div id="navigation" align="center" ><?php echo $qt->pagesListLimit($totalRows, $pageSize, 3);?> </div>

</body>
</html>
