<?php
	require_once (dirname(dirname(dirname(__FILE__))) . '/system/app.php');
	$tour_id = $_GET['tour_id'];
	$tour = Table::Fetch('tour',$tour_id);
	
	$diemkhoihanh = db::LimitQuery('loai_diem_khoi_hanh');
	$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
	
	$diemden = db::LimitQuery('loai_diem_den');
	$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
	
?>
<script src="<?php echo URL_HOME ?>/scripts/function.js"></script>
<script src="<?php echo URL_HOME ?>/scripts/jquery.meio.mask.js"></script>
<script>
	$(document).ready(function(){
		$('#dienthoai_order').setMask({
			mask:'999999999999',
			type : 'reverse'
		})
		$('#email_order').blur(function(){
			email = $('#email_order').val();
			validate(email);
		});
	});
</script>
<style>
	#simplemodal-container {
		background-color: transparent;
		border: none;
	}
</style>
	<div class="boxBooking boderRadius">
                    	<h4 class="title">Đặt tour</h4>
                    	<input type="hidden" id="tour_id_hidden" value="<?php echo $tour_id?>">
                        <div class="colL">
                        	
                            <label>Điểm khởi hành</label> 
                            	<label><?php echo $diemkhoihanh[$tour['id_diem_khoi_hanh']]?></label><br /><br />
                            <label>Ngày đi</label> <input disabled = "disabled" type="text" class="inpSB" id="ngaydi" value="<?php echo date('d-m-Y',$tour['ngay_di'])?>"/><br />
                            <label>Ngày về</label> <input disabled = "disabled" type="text" class="inpSB" id="ngayve" value="<?php echo date('d-m-Y',$tour['ngay_ve'])?>"/><br />
                            <label>Họ Tên</label> <input type="text" class="inpSB" id="hoten_order"/><br />
                            
                        </div>
                        <div class="colR"> 	
                            <label>Điểm đến</label> 
                            	<label><?php echo $diemden[$tour['id_diem_den']]?></label><br /><br />
                            <label>Điện thoại</label> <input type="text" class="inpSB2" style="margin-bottom:10px;width:160px"id="dienthoai_order"/><br />
                            <label>Email</label> <input id="email_order"type="text" class="inpSB2" style="margin-bottom:10px;width:160px"/><br />
                            <label>Địa Chỉ</label> <input type="text" class="inpSB2" id="diachi_order" style="margin-bottom:10px;width:160px"/><br />
                            
                            
                        </div>
                        <div class="padT10"><input type="button" id="order_tour_submit"class="bntBK" value="Đặt Tour" /></div>
                        <div class="clr"></div>
                    </div>
