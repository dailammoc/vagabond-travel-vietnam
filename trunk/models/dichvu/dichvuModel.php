<?php
class Dichvu_Model{
	public function getLoaiDichVu(){
		$loaidichvu  = DB::LimitQuery('loai_dich_vu',array(
			'order' => 'ORDER BY id DESC'
		));
		return $loaidichvu;
	}
	
	public function getLoaiDichVuById($id){
		$loaidichvu = Table::Fetch('loai_dich_vu',$id);
		return $loaidichvu;
	}
	
	public function getDichVu(){
		$dichvu  = DB::LimitQuery('dich_vu',array(
			'order' => 'ORDER BY id DESC'
		));
		return $dichvu;
	}
	
	public function getDichVuById($id){
		$dichvu = Table::Fetch('dich_vu',$id);
		return $dichvu;
	}
}
?>