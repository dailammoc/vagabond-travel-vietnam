<?php
class Gioithieu_Controller extends HKL_Controller{

	var $gioithieuModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Gioithieu_gioithieuModel');
		$this->gioithieuModel = new Gioithieu_Model();
		$_SESSION['sdt_travel_viendang'] = "08.3838.6969<br/>Ext:  100";
	}
	public function index()
	{
		$gioithieu = $this -> gioithieuModel -> getGioiThieu();
		include(DIR_VIEW_ENTERPRISE.'/gioithieu/gioithieu.html');
	}
}
?>