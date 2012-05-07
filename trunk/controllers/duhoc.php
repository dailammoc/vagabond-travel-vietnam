<?php
class Duhoc_Controller extends HKL_Controller{

	var $duhocModel;
	public function __construct()
	{
		parent::__construct();
		$this->model->Model('Duhoc_duhocModel');
		$this->duhocModel = new Duhoc_Model();
		$_SESSION['sdt_travel_viendang'] = "08.3838.6969<br />Ext:   224-131";
	}
	public function index()
	{
		$duhoc = $this -> duhocModel -> getDuhoc();
		$duhoc_detail = $this -> duhocModel -> getDuhocDetail();
		$duhoc_detail_des = array_combine(Utility::GetColumn($duhoc_detail,'id_du_hoc'), Utility::GetColumn($duhoc_detail,'description'));
		
		$link_tai_lieu = $this -> duhocModel -> getLinkTaiLieu();
		$nhung_dieu_can_biet = $this -> duhocModel -> getNhungDieuCanBiet();
		include(DIR_VIEW_ENTERPRISE.'/duhoc/duhoc.html');
	}

	public function my($type)
	{
		//$duhoc_detail = $this -> duhocModel -> getDuhocDetail();
		//$duhoc_detail_des = array_combine(Utility::GetColumn($duhoc_detail,'id_du_hoc'), Utility::GetColumn($duhoc_detail,'description'));
		if($type == 'faq'){
			$faq = $this -> duhocModel -> getMyFAQ();
			include(DIR_VIEW_ENTERPRISE.'/duhoc/faq.html');	
		}
		else if($type == 'link'){
			$faq = $this -> duhocModel -> getMyLink();
			include(DIR_VIEW_ENTERPRISE.'/duhoc/link.html');
		}
		else{
			$duhoc_my = $this -> duhocModel -> getDuhocMy();
			include(DIR_VIEW_ENTERPRISE.'/duhoc/duhoc_my.html');
		}
	}
	public function quocte($type,$param)
	{
		if($type == 'faq'){
			$faq = $this -> duhocModel -> getQuocTeFAQ();
			include(DIR_VIEW_ENTERPRISE.'/duhoc/faq.html');	
		}
		else if($type == 'link'){
			if(intval($param >0)){
				$faq = $this -> duhocModel -> getQuocTeLinkChiTiet(intval($param));
				include(DIR_VIEW_ENTERPRISE.'/duhoc/link.html');
			}
			else{
				$link = $this -> duhocModel -> getQuocTeLink();
				include(DIR_VIEW_ENTERPRISE.'/duhoc/link_all.html');
			}
		}
		else{
			$duhoc_my = $this -> duhocModel -> getDuhocQuocTe();
			include(DIR_VIEW_ENTERPRISE.'/duhoc/duhoc_quocte.html');
		}
	}
	public function visa($type){
		if(intval($type) >0){
			$news = $this -> duhocModel -> getVisaById($type);
			include(DIR_VIEW_ENTERPRISE.'/duhoc/news_chitiet.html');
		}
		else{
			$visa = $this -> duhocModel -> getVisa();
			include(DIR_VIEW_ENTERPRISE.'/duhoc/visa.html');
		}
	}
	public function news($type){
		if(intval($type) >0){
			$news = $this -> duhocModel -> getNewsById($type);
			include(DIR_VIEW_ENTERPRISE.'/duhoc/news_chitiet.html');
		}
		else{
			$news = $this -> duhocModel -> getNews();
			include(DIR_VIEW_ENTERPRISE.'/duhoc/news.html');
		}
	}
	public function gioithieu(){
		$news = $this -> duhocModel -> getGioiThieu();
		include(DIR_VIEW_ENTERPRISE.'/duhoc/gioithieu.html');
	}
}
?>