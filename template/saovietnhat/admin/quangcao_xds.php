<?php 
require_once "classquantriSP.php";
$kq=isset($_GET['kq'])?intval($_GET['kq']):0;
$tt=isset($_GET['tt'])?intval($_GET['tt']):0;
if($kq==1)
	echo '<script>alert(\'Cập nhập thành công!\')</script>';
if($tt==1)
	echo '<script>alert(\'Thêm quảng cáo thành công!\')</script>';
if (isset($qt)==false) $qt = new quantriSP;		

$pageSize = 12;
$pageNum = 1;
if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
settype($pageNum,"int");

$kq = $qt->ListTinTuc($pageNum, $pageSize, 'quangcao', 'idQuangCao');
$totalRows = $qt->DemSoSP('quangcao');
?>

<style>
.action a{ color: #FF0000; }
.action a:hover{ color: #00FF00; text-decoration:none}
.thanhphantrang { text-align:center; }
.thanhphantrang a{margin-right:5px; text-decoration:none;}
</style>

<table border=1 cellpadding=5  cellspacing=0  width=800  align=center style="overflow:hidden" bordercolor="#CCCCCC" class="center">
<tr>
  <th colspan="8" align="right"><a href="?p=quangcao_t"><img src="images/add.png" title="thêm" border="0" /></a></th>
  </tr>
<tr>
   <th> Tiên Đề </th>  
   <th> Hình </th>   
   <th> Link </th>       
   <th> Action </th>
</tr>

<!—-bắt đầu lặp -->
<?php while ($row = mysql_fetch_array($kq)) { ?>

<tr class="hang">
   <td align="center">
		<?=$row['Ten']?>
   </td>

   <td valign=top align="center">
		<?php echo '<img height="43" width="186" src="http://saovietnhat.vn/'.$row['UrlHinh'].'" alt="'.$row['Ten'].'" />';?>
   </td> 
   <td valign=top align="center">
		<?=$row['Link']?>
   </td>  
   <td width="50" align="center" class="action">
    <a href="?p=quangcao_c&idTin=<?=$row['idQuangCao']?><?php $p_g=isset($_GET['pageNum'])?intval($_GET['pageNum']):1;echo '&pageNum='.$p_g;?>"><img src="images/edit.png" title="chỉnh" border="0" /></a> 
    | <a href="xoa.php?table=quangcao&key=idQuangCao&idSP=<?=$row['idQuangCao']?>"  onclick="return confirm('Bạn có thực sự muốn xóa quảng cáo này?');"><img src="images/delete.png" title="xóa" border="0" /></a> 
   </td>
</tr>

<?php } ?>

<!— kết thúc lặp -->

</table>
            <div id="navigation" align="center" ><?php echo $qt->pagesListLimit($totalRows, $pageSize, 3);?> </div>

</body>
</html>
