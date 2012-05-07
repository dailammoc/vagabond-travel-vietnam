<?php
	require_once (dirname(dirname(dirname(__FILE__))) . '/system/app.php');
	$date = $_GET['date'];
	$year = substr($date, 0,4);
	$month = substr($date, 4,2);
	$day = substr($date, 6,2);
	$string = $day .'-'.$month .'-'.$year;
	$int_date =  strtotime($string);
	$int_date_end = $int_date + 86400;
	
	$tour = db::LimitQuery('tour',array(
		'condition' => array('ngay_di >='.$int_date,'ngay_di <='.$int_date_end),
			));
	$diemkhoihanh = db::LimitQuery('loai_diem_khoi_hanh');
	$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
	
	$diemden = db::LimitQuery('loai_diem_den');
	$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
	if(count($tour) > 0){
?>
<link href="<?php echo DIR_CSS_ENTERPRISE ?>setup.css" rel="stylesheet" type="text/css" />
<link href="<?php echo DIR_CSS_ENTERPRISE ?>style.css" rel="stylesheet" type="text/css" />
	<h4 class="titleALl">Kết quả Tìm kiếm</h4>
                    
                    <div class="pageDetail ">
                    
                    	<div class="blogTourTab">
                        	<table width="100%" border="1" cellpadding="3">
                              <tr class="rowTop">
                                <td>Chương trình</td>
                                <td>Số ngày</td>
                                <td>Giá (VNĐ)</td>
                                <td>Ngày đi</td>
                                <td>Ngày về</td>
                                <td>Chuyến bay đi</td>
                                <td>Giời đi</td>
                                <td>Giờ đến</td>
                                <td>Số chỗ còn nhận</td>
                              </tr>
                              <?php foreach($tour as $index => $one) {?>
                              <?php if($one['hide'] == 0) {?>
                              	<tr>                          
                                <td class="titleT"><?php echo $diemkhoihanh[$one['id_diem_khoi_hanh']].'-'. $diemden[$one['id_diem_den']]; ?></td>
                                <td><?php echo $one['so_ngay']?></td>
                                <td><?php echo number_format($one['gia_tour'],0,'','.')?></td>
                                <td><?php echo date('d-m-Y',$one['ngay_di'])?></td>
                                <td><?php echo date('d-m-Y',$one['ngay_ve'])?></td>
                                <td><?php echo $one['ma_so_phuong_tien']?></td>
                                <td><?php echo $one['gio_di']?></td>
                                <td><?php echo $one['gio_den']?></td>
                                <td>9<br />
                                <a href="<?php echo URL_HOME?>/tour/chitiet/<?php echo $one['id']?>" class="bntB2" target="_blank">Chi Tiết</a>
                                </td>
                              </tr>
                              <?php } }?>
                           
                            </table>

                        </div>
<?php		
	}
	else 
		echo "<h1 align='center'>Không Có Dữ Liệu</h1>"
?>
