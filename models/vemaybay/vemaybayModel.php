<?php
class Vemaybay_Model{
	public function getDiemDen(){
		$diemden = DB::LimitQuery('loai_diem_den');
		return $diemden;
	}
	
	public function getDiemKhoiHanh(){
		$diemkhoihanh = DB::LimitQuery('loai_diem_khoi_hanh');
		return $diemkhoihanh;
	}
	
	public function getLoaiVeMayBay(){
		$loaivemaybay = DB::LimitQuery('loai_ve_may_bay');
		return $loaivemaybay;
	}
}
?>