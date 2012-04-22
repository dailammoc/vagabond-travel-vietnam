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
			));
		return $visa;
	}
	public function getNews(){
		$news = db::LimitQuery('du_hoc_detail',array(
				'condition' => array('id_du_hoc' => 5),
				//'one' => true
			));
		return $news;
	}
}