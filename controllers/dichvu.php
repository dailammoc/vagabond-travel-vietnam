<?php
class Dichvu_Controller extends HKL_Controller{

	var $dichvuModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Dichvu_dichvuModel');
		$this->dichvuModel = new Dichvu_Model();
		$_SESSION['sdt_travel_viendang'] = "08.3838.6969<br/>Ext:   227";
	}
	public function index()
	{	
		$loai_dich_vu = $this -> dichvuModel -> getLoaiDichVu();
		$ten_dich_vu = array_combine(Utility::GetColumn($loai_dich_vu,'id'), Utility::GetColumn($loai_dich_vu,'ten_dich_vu'));
		$dich_vu = 	$this -> dichvuModel -> getDichVu();
		include(DIR_VIEW_ENTERPRISE.'/dichvu/dichvu.html');	
	}
	
	public function chitiet($id)
	{
		$dich_vu = $this->dichvuModel -> getDichVuById($id);
		$loai_dich_vu = $this -> dichvuModel -> getLoaiDichVuById($dich_vu['id_loai_dv']);
		include(DIR_VIEW_ENTERPRISE.'/dichvu/chitiet.html');
	}
}
?>