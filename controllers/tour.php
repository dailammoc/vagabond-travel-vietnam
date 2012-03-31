<?php
class Tour_Controller extends HKL_Controller{

	var $tourModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Tour_tourModel');
		$this->tourModel = new Tour_Model();
	}
	public function index()
	{
		
	}
	public function nhatky()
	{
		$tour = $this -> tourModel -> getTour();
		include(DIR_VIEW_ENTERPRISE.'/tour/nhatky.html');
	}
	public function nuocngoai()
	{
		$tour = $this -> tourModel -> getTourByLoaiTour(2);
		$diemkhoihanh = $this -> tourModel -> getDiemKhoiHanh();
		$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
		$diemden = $this -> tourModel -> getDiemDen();
		$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
		include(DIR_VIEW_ENTERPRISE.'/tour/nuocngoai.html');
	}
	public function trongnuoc()
	{
		$tour = $this -> tourModel -> getTourByLoaiTour(3);
		$diemkhoihanh = $this -> tourModel -> getDiemKhoiHanh();
		$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
		$diemden = $this -> tourModel -> getDiemDen();
		$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
		include(DIR_VIEW_ENTERPRISE.'/tour/trongnuoc.html');
	}
	public function chitiet($id)
	{
		$tour = $this -> tourModel -> getTourById($id);
		$loai_tour = $this -> tourModel -> getLoaiTourById($tour['id_loai_tour']);
		$diemkhoihanh = $this -> tourModel -> getDiemKhoiHanhById($tour['id_diem_khoi_hanh']);
		$diemden = $this -> tourModel -> getDiemDenById($tour['id_diem_den']);
		$loaiphuongtien = $this -> tourModel -> getLoaiPhuongTien($tour['id_phuong_tien']);
		include(DIR_VIEW_ENTERPRISE.'/tour/chitiet.html');
	}
	public function search($diemkhoihanh,$diemden)
	{
		$tour = $this -> tourModel -> search($diemkhoihanh, $diemden);
		if(count($tour) > 0){			
			$diemkhoihanh = $this -> tourModel -> getDiemKhoiHanh();
			$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
			$diemden = $this -> tourModel -> getDiemDen();
			$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
		}
		include(DIR_VIEW_ENTERPRISE.'/tour/search_result.html');
	}
}
?>