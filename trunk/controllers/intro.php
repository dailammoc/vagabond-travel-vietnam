<?php
class Intro_Controller {

	public function __construct()
	{
		//parent::__construct();
	}
	public function index()
	{
		
			//Utility::Redirect(URL_HOME_ENTERPRISE.'/html');
		include(DIR_VIEW_ENTERPRISE.'/intro/intro.html');
	}

}
?>