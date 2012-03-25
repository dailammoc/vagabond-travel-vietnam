<?php
class Gioithieu_Controller extends HKL_Controller{

	var $gioithieuModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Gioithieu_gioithieuModel');
		$this->gioithieuModel = new Gioithieu_Model();
	}
	public function index()
	{
		$gioithieu = $this -> gioithieuModel -> getGioiThieu();
		include(DIR_VIEW_ENTERPRISE.'/gioithieu/gioithieu.html');
	}
}
?>