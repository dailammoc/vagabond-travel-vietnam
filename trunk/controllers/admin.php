<?php
class Admin_Controller extends HKL_Controller{

	var $newModel;
	public function __construct()
	{
		
	}
	public function index()
	{
		parent::__construct();
		$this->model->Model('Admin_adminModel');
		$this->newModel = new Admin_Model();
		include(DIR_VIEW_ENTERPRISE.'/admin/login.html');
	}
	
	public function login($id)
	{
		
	}
	
	public function intro($type)
	{
		parent::__construct();
		$this->model->Model('Intro_introModel');
		$this->newModel = new Intro_Model();
		$intro = $this -> newModel -> getIntroAll();
		if($type == 'add'){
			include(DIR_VIEW_ENTERPRISE.'/admin/intro/add.html');
		}
		//include(DIR_VIEW_ENTERPRISE.'/admin/intro/intro.html');
	}
	public function dichvu()
	{
		parent::__construct();
		$this->model->Model('Dichvu_dichvuModel');
		$this->newModel = new Dichvu_Model();
		$dichvu = $this -> newModel -> getDichVu();
		$loaidichvu = $this -> newModel -> getLoaiDichVu();		
		$loaidichvu = array_combine(Utility::GetColumn($loaidichvu,'id'), Utility::GetColumn($loaidichvu,'ten_dich_vu'));
		include(DIR_VIEW_ENTERPRISE.'/admin/dichvu/dichvu.html');
	}
	
	public function gioithieu()
	{
		parent::__construct();
		$this->model->Model('Gioithieu_gioithieuModel');
		$this->newModel = new Gioithieu_Model();
		$gioithieu = $this -> newModel -> getGioiThieu();
		//$loaidichvu = $this -> newModel -> getLoaiDichVu();		
		//$loaidichvu = array_combine(Utility::GetColumn($loaidichvu,'id'), Utility::GetColumn($loaidichvu,'ten_dich_vu'));
		include(DIR_VIEW_ENTERPRISE.'/admin/gioithieu/gioithieu.html');
	}
	
	public function donhang($type)
	{
		parent::__construct();
		$this->model->Model('Donhang_donhangModel');
		$this->newModel = new Donhang_Model();
		if($type == 'tour'){
			DB::Debug();
			$donhang = $this -> newModel -> getDonHangTour();
			$tour = $this -> newModel -> getTour();
			$tour = array_combine(Utility::GetColumn($tour,'id'), Utility::GetColumn($tour,'title'));
			include(DIR_VIEW_ENTERPRISE.'/admin/donhang/tour.html');
		}
		if($type == 'vemaybay'){
			$donhang = $this -> newModel -> getDonHangMayBay();
			$diemkhoihanh = $this -> newModel -> getDiemKhoiHanh();
			$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
			$diemden = $this -> newModel -> getDiemDen();
			$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
			$loaive = array('1' => 'Khứ Hồi Trong Nước','2' => 'Một Chiều Trong Nước', '3' => 'Khứ Hồi Quốc Tế','4' => 'Một Chiều Quốc Tế');
			include(DIR_VIEW_ENTERPRISE.'/admin/donhang/vemaybay.html');
		}
		//$loaidichvu = $this -> newModel -> getLoaiDichVu();		
		//$loaidichvu = array_combine(Utility::GetColumn($loaidichvu,'id'), Utility::GetColumn($loaidichvu,'ten_dich_vu'));
		//include(DIR_VIEW_ENTERPRISE.'/admin/gioithieu/gioithieu.html');
	}
	
	public function tour($type)
	{
		parent::__construct();
		$this->model->Model('Tour_tourModel');
		$this->newModel = new Tour_Model();
		$tour = $this -> newModel -> getTour();
		$loaitour = $this -> newModel -> getLoaiTour();
		$loaitour = array_combine(Utility::GetColumn($loaitour,'id'), Utility::GetColumn($loaitour,'ten_loai'));
		$diemkhoihanh = $this -> newModel -> getDiemKhoiHanh();
		$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
		
		$diemden = $this -> newModel -> getDiemDen();
		$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
		
		$phuongtien = $this -> newModel -> getLoaiPhuongTienAll();
		$phuongtien = array_combine(Utility::GetColumn($phuongtien,'id'), Utility::GetColumn($phuongtien,'ten_phuong_tien'));
		if($type == 'loaitour'){
			$loaitour = $this -> newModel -> getLoaiTour();
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/loaitour.html');
		}
		if($type == 'phuongtien'){
			$phuongtien = $this -> newModel -> getLoaiPhuongTienAll();
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/phuongtien.html');
		}
		if($type == 'diemkhoihanh'){
			$diemkhoihanh = $this -> newModel -> getDiemKhoiHanh();
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/diemkhoihanh.html');
		}
		if($type == 'diemden'){
			$diemden = $this -> newModel -> getDiemDen();
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/diemden.html');
		}
		if($type == 'add'){
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/add.html');
		}
		if($type == 'vemaybay'){
			//parent::__construct();
			$this->model->Model('Vemaybay_vemaybayModel');
			$this->newModel = new Vemaybay_Model();
			$vemaybay = $this -> newModel -> getLoaiVeMayBay();
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/vemaybay.html');
		}
		if($type == '')
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/tour.html');
	}
	public function thongtin($type){
		parent::__construct();
		$this->model->Model('Thongtin_thongtinModel');
		$this->newModel = new Thongtin_Model();
		if($type == 'lienhe'){
			
		}
	}
}
?>