<?php
class Home_Controller {

	public function __construct()
	{
		//parent::__construct();
	}
	public function index()
	{
			include(DIR_VIEW_ENTERPRISE.'/home/home.html');	
	}

}
?>