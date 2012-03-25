<?php
class Intro_Controller {

	var $introModel;
	public function __construct()
	{
		$this->model->Model('Intro_introModel');
		$this->introModel = new Intro_Model();
	}
	public function index()
	{
		
			//Utility::Redirect(URL_HOME_ENTERPRISE.'/html');
		include(DIR_VIEW_ENTERPRISE.'/intro/intro.html');
	}

}
?>