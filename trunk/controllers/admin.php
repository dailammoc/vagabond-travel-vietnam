<?php
class Admin_Controller extends HKL_Controller{

	var $newModel;
	public function __construct()
	{
		
	}
	public function index()
	{
	}
	
	public function login($id)
	{
		parent::__construct();
		$this->model->Model('Admin_adminModel');
		$this->newModel = new Admin_Model();
		include(DIR_VIEW_ENTERPRISE.'/admin/login.html');
	}
	public function dichvu()
	{
		parent::__construct();
		$this->model->Model('Dichvu_dichvuModel');
		$this->newModel = new Dichvu_Model();
		$dichvu = $this -> newModel -> getDichVu();
		print_r($dichvu);
	}
	public function tour()
	{
		parent::__construct();
		$this->model->Model('Dichvu_dichvuModel');
		$this->newModel = new Dichvu_Model();
		echo "123";
	}
}
?>