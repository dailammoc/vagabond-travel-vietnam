<?php
	$search = $_GET['search'];            
	$pageSize = 12;
	$pageNum = 1;
	if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
	if ($pageNum<=0) $pageNum=1;
	$totalRows = 0;				
	$kq = $db->TimKiem($search,$pageSize,$pageNum,$totalRows);				
?>
<div class="catalogue_product">
	<div class="title_2">KẾT QUẢ TÌM KIẾM</div>
       <br /><span class="thongbao">Tìm được <?php echo $totalRows?> sản phẩm</span><br />           
    	<?php  while ($row= mysql_fetch_assoc($kq)) { ?>
    	<div class="product_1">
              <div class="image_product">
                <a href="chi-tiet-san-pham/<?=$row['TenSP_KhongDau']?>.html"><img src="<?=$row['UrlHinh']?>" title="<?=$row['TenSP']?>" /></a>
              </div>
              <div class="content_product">
                <a href="chi-tiet-san-pham/<?=$row['TenSP_KhongDau']?>.html" title="<?=$row['TenSP']?>"><span class="name_product"><?=$row['TenSP']?></span></a><br>
            </div>
            <div class="bottom_product">
                <span class="price">Giá : <?php if($row['Gia']==0) echo "Liên hệ"; else echo number_format($row['Gia'])." VNĐ"?></span>
                <a href="chi-tiet-san-pham/<?=$row['TenSP_KhongDau']?>.html"><img src="images/index/btn_detail.jpg" align="right" title="Chi tiết sản phẩm"/></a>
            </div>
        </div>     
		<?php } ?>                                 
			<div id="navigation" align="center">
				<?php echo $db->pagesListLimit($totalRows,$pageSize,3); ?>                  
            </div> 				
</div>

