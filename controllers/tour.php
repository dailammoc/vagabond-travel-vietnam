<?php
class Tour_Controller {

	public function __construct()
	{
	
	}
	public function index()
	{
		include(DIR_VIEW_ENTERPRISE.'/tour/nhat.html');
	}
	public function nhatky()
	{
		include(DIR_VIEW_ENTERPRISE.'/tour/nhatky_tour.html');
	}
	public function nuocngoai()
	{
		include(DIR_VIEW_ENTERPRISE.'/tour/tour_nuocngoai_chitiet.html');
	}
}
?>