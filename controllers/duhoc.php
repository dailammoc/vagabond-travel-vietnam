<?php
class Duhoc_Controller extends HKL_Controller{

	var $duhocModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Duhoc_duhocModel');
		$this->duhocModel = new Duhoc_Model();
	}
	public function index()
	{
		
		$duhoc = $this -> duhocModel -> getDuhoc();
		$duhoc_detail = $this -> duhocModel -> getDuhocDetail();
		$duhoc_detail_des = array_combine(Utility::GetColumn($duhoc_detail,'id_du_hoc'), Utility::GetColumn($duhoc_detail,'description'));
		
		$link_tai_lieu = $this -> duhocModel -> getLinkTaiLieu();
		$nhung_dieu_can_biet = $this -> duhocModel -> getNhungDieuCanBiet();
		include(DIR_VIEW_ENTERPRISE.'/duhoc/duhoc.html');
	}

	public function my()
	{
	
		include(DIR_VIEW_ENTERPRISE.'/duhoc/duhoc_my.html');
	}
}
?>