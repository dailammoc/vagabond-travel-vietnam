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
		if($_POST){
			//DB::Debug();
			$intro_id = abs(intval($_POST['intro_id']));
			$intro_record = $_POST;
			$intro_record['id'] = $intro_id;
			$intro_arr = Table::Fetch('intro',$intro_id);
			$insert = array('ten_dia_diem','title','gioi_thieu','hinh_dai_dien','hinh_1','hinh_2','hinh_3');
			$intro_record['hinh_dai_dien'] = upload_image_dir('hinh_dai_dien', 'intro');
			$intro_record['hinh_1'] = upload_image_dir('hinh_1',$intro_arr['hinh_1'], 'intro');
			$intro_record['hinh_2'] = upload_image_dir('hinh_2', 'intro');
			$intro_record['hinh_3'] = upload_image_dir('hinh_3', 'intro');
			$table = new Table('intro', $intro_record);
			
			if($intro_id > 0)
				$table -> update($insert);
			else 
				$table -> insert($insert);
		}	
		$intro = $this -> newModel -> getIntroAll();		
		include(DIR_VIEW_ENTERPRISE.'/admin/intro/intro.html');		
	}
	public function dichvu($type)
	{
		parent::__construct();
		$this->model->Model('Dichvu_dichvuModel');
		$this->newModel = new Dichvu_Model();
		$dichvu = $this -> newModel -> getDichVu();
		$loaidichvu = $this -> newModel -> getLoaiDichVu();		
		$loaidichvu = array_combine(Utility::GetColumn($loaidichvu,'id'), Utility::GetColumn($loaidichvu,'ten_dich_vu'));
		if($type == 'add'){
			include(DIR_VIEW_ENTERPRISE.'/admin/dichvu/add.html');
		}
		else
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
		
		if($type == 'loaitour'){
			if($_POST){
				$loai_tour_record = $_POST;
				$loai_tour_record['id'] = abs(intval($_POST['phuongtien_id']));
				$loai_tour_record['ten_phuong_tien'] = $_POST['ten_phuong_tien'];				
				$insert = array('ten_phuong_tien');
				$table = new Table('loai_phuong_tien', $loai_tour_record);
				if($loai_tour_record['id'] > 0)
					$table -> update($insert);
				else 
					$table -> insert($insert);
			}
			
			$loaitour = $this -> newModel -> getLoaiTour();
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/loaitour.html');
		}
		if($type == 'phuongtien'){
			if($_POST){
				$loai_tour_record = $_POST;
				$loai_tour_record['id'] = abs(intval($_POST['phuongtien_id']));
				$loai_tour_record['ten_phuong_tien'] = $_POST['ten_phuong_tien'];				
				$insert = array('ten_phuong_tien');
				$table = new Table('loai_phuong_tien', $loai_tour_record);
				if($loai_tour_record['id'] > 0)
					$table -> update($insert);
				else 
					$table -> insert($insert);
			}
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
			$diemkhoihanh = $this -> newModel -> getDiemKhoiHanh();
			$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
		
			$diemden = $this -> newModel -> getDiemDen();
			$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
			
			$phuongtien = $this -> newModel -> getLoaiPhuongTienAll();
			$phuongtien = array_combine(Utility::GetColumn($phuongtien,'id'), Utility::GetColumn($phuongtien,'ten_phuong_tien'));
			
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/add.html');
		}
		if($type == 'vemaybay'){
			//parent::__construct();
			$this->model->Model('Vemaybay_vemaybayModel');
			$this->newModel = new Vemaybay_Model();
			$vemaybay = $this -> newModel -> getLoaiVeMayBay();
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/vemaybay.html');
		}
		if($type == ''){
			unset($_SESSION['notify']);
			unset($_SESSION['notify_color']);
			$filename='tour';
			$_SESSION['path'] = 'tour';
		if($_POST){
				//DB::Debug();
				//print_r($_POST);
				$tour = $_POST;
				$tour['id'] = abs(intval($_POST['tour_id']));
				$tour_arr = Table::Fetch('tour',$tour['id']);
				$tour['gio_di'] = strtotime($_POST['gio_di']);
				$tour['gio_den'] = strtotime($_POST['gio_den']);
				
				$d = $_POST['d_ngaydi'];
				$m = $_POST['m_ngaydi'];
				$y = $_POST['y_ngaydi'];
				$string = $d."-".$m."-".$y;
				$tour['ngay_di'] = strtotime($string);
				
				$d = $_POST['d_ngayve'];
				$m = $_POST['m_ngayve'];
				$y = $_POST['y_ngayve'];
				$string = $d."-".$m."-".$y;
				$tour['ngay_ve'] = strtotime($string);
				
				$gia_tour = $_POST['gia_tour'];
				$gia_tour = str_replace('.', '', $gia_tour);
				$tour['gia_tour'] = intval($gia_tour);
				$tour['hinh'] = upload_image_dir('hinh',$tour['hinh'], 'tour');
				$tour['date_create'] = time();
				$insert = array('id_loai_tour','title','slogon_tour','intro','content','so_ngay','ngay_di','ngay_ve','gio_di','gio_den','id_diem_khoi_hanh','id_diem_den','gia_tour','id_phuong_tien','ma_so_phuong_tien','hinh','max_so_nguoi','min_so_nguoi','date_create');
				$table = new Table('tour', $tour);			
				if($tour['id'] > 0){
					$table -> update($insert);
					$_SESSION['notify'] = "Sửa Thành Công";
					$_SESSION['notify_color'] = "yellow";
				}
				else {
					$table -> insert($insert);
					$_SESSION['notify'] = "Thêm  Thành Công";
					$_SESSION['notify_color'] = "blue";
				}
			}
			$tour = $this -> newModel -> getTour();
			$loaitour = $this -> newModel -> getLoaiTour();
			$loaitour = array_combine(Utility::GetColumn($loaitour,'id'), Utility::GetColumn($loaitour,'ten_loai'));
			$diemkhoihanh = $this -> newModel -> getDiemKhoiHanh();
			$diemkhoihanh = array_combine(Utility::GetColumn($diemkhoihanh,'id'), Utility::GetColumn($diemkhoihanh,'ten_dia_diem'));
			
			$diemden = $this -> newModel -> getDiemDen();
			$diemden = array_combine(Utility::GetColumn($diemden,'id'), Utility::GetColumn($diemden,'ten_dia_diem'));
			
			$phuongtien = $this -> newModel -> getLoaiPhuongTienAll();
			$phuongtien = array_combine(Utility::GetColumn($phuongtien,'id'), Utility::GetColumn($phuongtien,'ten_phuong_tien'));
			include(DIR_VIEW_ENTERPRISE.'/admin/tour/tour.html');
		}
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