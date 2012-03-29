<?php
class Home_Model{
	public function getTourHot(){
		$tourhot = DB::LimitQuery('tour',array(
			'condition' => array('id_loai_tour' => 1),
			'order' => 'ORDER BY id DESC'
		));
		return $tourhot;
	}
	public function getTourNuocNgoai(){
		$tourhot = DB::LimitQuery('tour',array(
			'condition' => array('id_loai_tour' => 2),
			'order' => 'ORDER BY id DESC'
		));
		return $tourhot;
	}
	public function getTourTrongNuoc(){
		$tourhot = DB::LimitQuery('tour',array(
			'condition' => array('id_loai_tour' => 3),
			'order' => 'ORDER BY id DESC'
		));
		return $tourhot;
	}
}
?>