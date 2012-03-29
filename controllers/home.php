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
		$tour_hot =  $this -> homeModel -> getTourHot();
		$tour_nuoc_ngoai =  $this -> homeModel -> getTourNuocNgoai();
		$tour_trong_nuoc =  $this -> homeModel -> getTourTrongNuoc();	
		include(DIR_VIEW_ENTERPRISE.'/home/home.html');	
	}

}
?>