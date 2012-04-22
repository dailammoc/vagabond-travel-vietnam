<?php
class Tour_Model{
	public function getTour(){
		$tour = DB::LimitQuery('tour',array(
		'order' => 'ORDER BY id DESC'
		));
		return $tour;
	}
	public function countTourByLoaiTour($id){
		$count = Table::Count('tour',array(
			'id_loai_tour' => $id
		));
		return $count + 1;
	}
	public function getLoaiTour(){
		$loaitour = DB::LimitQuery('loai_tour');
		return $loaitour;
	}
	public function getLoaiTourById($id){
		$loaitour = Table::Fetch('loai_tour',$id);
		return $loaitour;
	}
	public function getLoaiPhuongTien($id){
		$loaiphuongtien = Table::Fetch('loai_phuong_tien',$id);
		return $loaiphuongtien;
	}
	public function getLoaiPhuongTienAll(){
		$loaiphuongtien = db::LimitQuery('loai_phuong_tien');
		return $loaiphuongtien;
	}
	public function getTourByLoaiTour($id,$offset,$pagesize){
		$tourByLoaiTour = DB::LimitQuery('tour',array(
			'condition' => array('id_loai_tour' => $id),
			'order' => 'ORDER BY id DESC',
			'size' => $pagesize,
			'offset' => $offset,
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
	public function getDiemKhoiHanhById($id){
		$diemkhoihanh = Table::Fetch('loai_diem_khoi_hanh',$id);
		return $diemkhoihanh;
	}
	public function getDiemDen(){
		$diemkhoihanh = DB::LimitQuery('loai_diem_den');
		return $diemkhoihanh;
	}
	public function getDiemDenById($id){
		$diemkhoihanh = Table::Fetch('loai_diem_den',$id);
		return $diemkhoihanh;
	}
	public function search($diemkhoihanh,$diemden){
		$condition = array();
		if($diemkhoihanh != 0)
			$condition[] = array('id_diem_khoi_hanh'=>$diemkhoihanh);
		if($diemden != 0)
			 $condition[] = array('id_diem_den'=>$diemden);
		$result = DB::LimitQuery('tour',array('condition'=>$condition));
		return $result;
	}
	public function getNhatKy(){
		$nhatky = DB::LimitQuery('nhat_ky_tour');
		return $nhatky;
	}
	public function getNhatKyImage(){
		$nhatky = DB::LimitQuery('nhat_ky_tour_images');
		return $nhatky;
	}
}