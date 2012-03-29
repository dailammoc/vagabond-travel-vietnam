<?php 
require_once "classquantriSP.php";
if (isset($qt)==false) $qt = new quantriSP;		

$pageSize = 12;
$pageNum = 1;
if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
settype($pageNum,"int");

$kq = $qt->ListSP($pageNum, $pageSize, 'gioithieu', 'idGT');
$totalRows = $qt->DemSoSP('gioithieu');
?>

<style>
.action a{ color: #FF0000; }
.action a:hover{ color: #00FF00; text-decoration:none}
.thanhphantrang { text-align:center; }
.thanhphantrang a{margin-right:5px; text-decoration:none;}
</style>

<table border=1 cellpadding=5  cellspacing=0  width=800  align=center style="overflow:hidden" bordercolor="#CCCCCC" class="center">

<tr>
   <th> idGT </th>
   <th> Loại giới thiệu</th>
   <th> Action </th>
</tr>

<!—-bắt đầu lặp -->
<?php while ($row = mysql_fetch_assoc($kq)) { ?>

<tr class="hang">
   <td align="center">
		<?=$row['idGT']?>
   </td>
   
   <td valign=top>
		<?=$row['tenGT']?>
   </td>

   <td width="100" align="center" class="action">
    <a href="?p=gioithieu_c&idSP=<?=$row['idGT']?>"><img src="images/edit.png" title="chỉnh" border="0" /></a>     
   </td>
</tr>

<?php } ?>

<!— kết thúc lặp -->

</table>
<p class="thanhphantrang"><?php echo $qt->pagesListLimit($totalRows, $pageSize, 3);?> </p>

</body>
</html>
