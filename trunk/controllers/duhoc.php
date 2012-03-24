<?php
class Duhoc_Controller {

	public function __construct()
	{
		//parent::__construct();
	}
	public function index()
	{
		
			//Utility::Redirect(URL_HOME_ENTERPRISE.'/html');
		include(DIR_VIEW_ENTERPRISE.'/duhoc/duhoc.html');
	}

	public function duhoc_my()
	{
	
		//Utility::Redirect(URL_HOME_ENTERPRISE.'/html');
		include(DIR_VIEW_ENTERPRISE.'/duhoc/duhoc_my.html');
	}
}
?>