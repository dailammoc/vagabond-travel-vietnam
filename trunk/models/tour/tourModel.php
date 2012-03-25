<?php
class Tour_Model{
	public function getTour(){
		$tour = DB::LimitQuery('tour');
		return $tour;
	}
	public function getLoaiTour(){
		$loaitour = DB::LimitQuery('loai_tour');
		return $loaitour;
	}
	public function getLoaiPhuongTien($id){
		$loaiphuongtien = Table::Fetch('loai_phuong_tien',$id);
		return $loaiphuongtien;
	}
	public function getTourByLoaiTour($id){
		$tourByLoaiTour = DB::LimitQuery('tour',array(
			'condition' => array('id_loai_tour' => $id)
		));
		return $tourByLoaiTour;
	}
	public function getTourById($id){
		$tour = Table::Fetch('tour',$id);
		return $tour;
	}
	public function getDiemKhoiHanh(){
		$diemkhoihanh = DB::LimitQuery('loai_diem_khoi_hanh');
		return $diemkhoihanh;
	}
	public function getDiemDen(){
		$diemkhoihanh = DB::LimitQuery('loai_diem_den');
		return $diemkhoihanh;
	}
	
}