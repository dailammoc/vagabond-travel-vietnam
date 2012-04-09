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
			'condition'=> array('id_info' => 2),
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
}
?>