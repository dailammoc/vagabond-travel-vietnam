<?php
class Lienhe_Controller extends HKL_Controller{

	public function __construct()
	{
		parent::__construct();
		$_SESSION['sdt_travel_viendang'] = "08.3838.6969<br/>Ext:  100";
	}
	public function index()
	{
		include(DIR_VIEW_ENTERPRISE.'/lienhe/lienhe.html');
	}
}
?>