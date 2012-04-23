<?php
class Duhoc_Model{
	public function getDuhoc(){
		$duhoc = DB::LimitQuery('du_hoc');
		return $duhoc;
	}
	
	public function getDuhocDetail(){
		$duhoc = DB::LimitQuery('du_hoc_detail');
		return $duhoc;
	}
	public function getDuhocMy(){
		$duhoc = DB::LimitQuery('du_hoc_detail',array(
			'condition' => array('id_du_hoc' => 1),
			'one' => true
		));
		return $duhoc;
	}
	public function getMyFAQ(){
		$duhoc = DB::LimitQuery('du_hoc_detail',array(
			'condition' => array('id_du_hoc' => 8),
			'order' => 'ORDER BY id DESC'
		));
		return $duhoc;
	}
	public function getMyLink(){
		$duhoc = DB::LimitQuery('du_hoc_detail',array(
			'condition' => array('id_du_hoc' => 6),
			'order' => 'ORDER BY id DESC'
		));
		return $duhoc;
	}
	public function getQuocTeFAQ(){
		$duhoc = DB::LimitQuery('du_hoc_detail',array(
			'condition' => array('id_du_hoc' => 9),
			'order' => 'ORDER BY id DESC'
		));
		return $duhoc;
	}
	public function getQuocTeLink(){
		$duhoc = DB::LimitQuery('du_hoc_detail',array(
			'condition' => array('id_du_hoc' => 7),
			'order' => 'ORDER BY id DESC'
		));
		return $duhoc;
	}
	public function getLinkTaiLieu(){
		$tailieu = db::LimitQuery('info_detail',array(
			'condition' => array('id_info'=>6),
			'one' => true,
		));
		return $tailieu;
	}
	
	public function getNhungDieuCanBiet(){
		$dieucanbiet = db::LimitQuery('info_detail',array(
			'condition' => array('id_info'=>5)
		));
		return $dieucanbiet;
	}
	public function getVisa(){
		$visa = db::LimitQuery('du_hoc_detail',array(
				'condition' => array('id_du_hoc' => 4),
				//'one' => true
				'order' => 'ORDER BY id DESC'
			));
		return $visa;
	}
	public function getNews(){
		$news = db::LimitQuery('du_hoc_detail',array(
				'condition' => array('id_du_hoc' => 5),
				//'one' => true
				'order' => 'ORDER BY id DESC'
			));
		return $news;
	}
	
	public function getMyBaiViet(){
		$news = db::LimitQuery('du_hoc_detail',array(
				'condition' => array('id_du_hoc' => 1),
				'one' => true
			));
		return $news;
	}
	public function getQuocTeBaiViet(){
		$news = db::LimitQuery('du_hoc_detail',array(
				'condition' => array('id_du_hoc' => 2),
				'one' => true
			));
		return $news;
	}
	public function getGioiThieu(){
		$news = db::LimitQuery('du_hoc_detail',array(
				'condition' => array('id_du_hoc' => 3),
				'one' => true
			));
		return $news;
	}
}