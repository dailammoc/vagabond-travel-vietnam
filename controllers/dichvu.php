<?php
class Dichvu_Controller {

	public function __construct()
	{
		//parent::__construct();
	}
	public function index()
	{
			include(DIR_VIEW_ENTERPRISE.'/dichvu/dichvu.html');	
	}
	
	public function chitiet()
	{
		include(DIR_VIEW_ENTERPRISE.'/dichvu/dichvu_chitiet.html');
	}
}
?>