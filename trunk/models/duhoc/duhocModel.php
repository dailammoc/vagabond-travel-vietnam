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
}