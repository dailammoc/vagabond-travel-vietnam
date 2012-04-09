<?php
class Donhang_Model{
	public function getDonHangTour(){
		$donhang = db::LimitQuery('order_tour');
		return $donhang;
	}
	
	public function getDonHangMayBay(){
		$donhang = db::LimitQuery('ve_may_bay');
		return $donhang;
	}
	
	public function getTour(){
		$tour = db::LimitQuery('tour');
		return $tour;
	}
	
	public function getDiemKhoiHanh(){
		$diemkhoihanh = db::LimitQuery('loai_diem_khoi_hanh');
		return $diemkhoihanh;
	}
	
	public function getDiemDen(){
		$diemden = db::LimitQuery('loai_diem_den');
		return $diemden;
	}
}