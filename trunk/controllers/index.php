<?php
class Index_Controller {

	public function __construct()
	{
		//parent::__construct();
	}
	public function index()
	{
		include(DIR_VIEW_ENTERPRISE.'/intro/intro.html');
	}

}
?>