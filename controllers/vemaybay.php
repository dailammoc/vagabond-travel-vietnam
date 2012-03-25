<?php
class Vemaybay_Controller extends HKL_Controller{

	var $vemaybayModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Vemaybay_vemaybayModel');
		$this->vemaybayModel = new Vemaybay_Model();
	}
	public function index()
	{
		$now = time();
		$diemkhoihanh = $this -> vemaybayModel -> getDiemKhoiHanh();
		$diemden = $this -> vemaybayModel -> getDiemDen();
		include(DIR_VIEW_ENTERPRISE.'/vemaybay/vemaybay.html');
	}
}
?>