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
	
	public function getDiemDenTrongNuoc(){
		$diemden = DB::LimitQuery('loai_diem_den',array(
			'condition' => array('type' => 1)
		));
		return $diemden;
	}
	
	public function getDiemKhoiHanhTrongNuoc(){
		$diemkhoihanh = DB::LimitQuery('loai_diem_khoi_hanh',array(
			'condition' => array('type' => 1)
		));
		return $diemkhoihanh;
	}
	
	public function getDiemDenNgoaiNuoc(){
		$diemden = DB::LimitQuery('loai_diem_den',array(
			'condition' => array('type' => 2)
		));
		return $diemden;
	}
	
	public function getDiemKhoiHanhNgoaiNuoc(){
		$diemkhoihanh = DB::LimitQuery('loai_diem_khoi_hanh',array(
			'condition' => array('type' => 2)
		));
		return $diemkhoihanh;
	}
	
	public function getLoaiVeMayBay(){
		$loaivemaybay = DB::LimitQuery('loai_ve_may_bay');
		return $loaivemaybay;
	}
	
	public function getBangGiaMayBay(){
		$banggiamaybay = db::LimitQuery('info_detail',array(
			'condition'=> array('id_info' => 1),
			'one'=> true
		));
		return $banggiamaybay;
	}
	
	public function getInfoMuaVeMayBay(){
		$banggiamaybay = db::LimitQuery('info_detail',array(
			'condition'=> array('id_info' => 2),
			//'one'=> true
		));
		return $banggiamaybay;
	}
	
	public function getInfoQuyDinhHangKhong(){
		$banggiamaybay = db::LimitQuery('info_detail',array(
			'condition'=> array('id_info' => 3),
			//'one'=> true
		));
		return $banggiamaybay;
	}
	
	public function getInfoTruocChuyenBay(){
		$banggiamaybay = db::LimitQuery('info_detail',array(
			'condition'=> array('id_info' => 4),
			//'one'=> true
		));
		return $banggiamaybay;
	}
	public function getNewsById($id){
		$news = Table::Fetch('info_detail',$id);
		return $news;
	}
}
?>