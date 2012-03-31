<?php
	require_once (dirname(dirname(dirname(__FILE__))) . '/system/app.php');
	/*
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
	*/
?>

	<div class="boxBooking boderRadius">
                    	<h4 class="title">Đặt tour</h4>
                        <div class="colL">
                        	
                            <label>Điểm khởi hành</label> 
                            	<label>ghggjgh</label><br />
                            <label>Ngày đi</label> <input type="text" class="inpSB" id="ngaydi" value="<?php echo date('d-m-Y',$now)?>"/><br />
                            <label>Ngày về</label> <input type="text" class="inpSB" id="ngayve" value="<?php echo date('d-m-Y',$now)?>"/><br />
                            <label>Họ Tên</label> <input type="text" class="inpSB" id="hoten"/><br />
                            
                        </div>
                        <div class="colR">
                        	
                            <label>Điểm đến</label> 
                            	<select name="" class="selS" id="diemden">
                            		<?php foreach ($diemden as $index => $one){?>
                            			<option value="<?php echo $one['id'] ?>"><?php echo $one['ten_dia_diem'] ?></option>
                            		<?php }?> 
                            	</select><br />
                            <label>Giờ dự kiến</label> 
                            <select name="" class="selS" id="giodukien_di">
                            <?php for($i = 0; $i <24 ; $i++){?>
                            	<option value="<?php echo $i ?>"><?php echo $i ?>h</option>
                            <?php } ?>	
                            </select><br />
                            <label>Giờ dự kiến</label> 
                            <select name="" class="selS" id="giodukien_den">
                            	<?php for($i = 0; $i <24 ; $i++){?>
                            	<option value="<?php echo $i ?>"><?php echo $i ?>h</option>
                            <?php } ?>	
                            </select><br />
                            <label>Điện thoại</label> <input type="text" class="inpSB2" id="dienthoai"/> Email <input id="email"type="text" class="inpSB2" /><br />
                            <div class="padT10"><input type="button" id="datvemaybay_submit"class="bntBK" value="Đặt Tour" /></div>
                        </div>
                        <div class="clr"></div>
                    </div>
