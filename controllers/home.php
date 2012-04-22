<?php
class Home_Controller extends HKL_Controller{

	var $homeModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Home_homeModel');
		$this->homeModel = new Home_Model();
	}
	public function index()
	{
		//unset($_SESSION['sdt_travel_viendang']);
		//$_SESSION['sdt_travel_viendang'] = "08.3838.6969";
		$tour_hot =  $this -> homeModel -> getTourHot();
		$tour_nuoc_ngoai =  $this -> homeModel -> getTourNuocNgoai();
		$tour_trong_nuoc =  $this -> homeModel -> getTourTrongNuoc();	
		include(DIR_VIEW_ENTERPRISE.'/home/home.html');	
	}

}
?>