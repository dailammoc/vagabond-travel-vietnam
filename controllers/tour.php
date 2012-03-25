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
		include(DIR_VIEW_ENTERPRISE.'/tour/trongnuoc.html');
	}
	public function chitiet($id)
	{
		$tour = $this -> tourModel -> getTourById($id);
		include(DIR_VIEW_ENTERPRISE.'/tour/chitiet.html');
	}
}
?>