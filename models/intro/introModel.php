<?php
class Intro_Model{
	public function getIntro($id){
		$intro = Table::Fetch('intro',$id);
		return $intro;
	}
	
	public function getIntroAll($id){
		$intro = db::LimitQuery('intro');
		return $intro;
	}
}
?>