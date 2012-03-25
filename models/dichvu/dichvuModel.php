<?php
class Dichvu_Model{
	public function getLoaiDichVu(){
		$loaidichvu  = DB::LimitQuery('loai_dich_vu');
		return $loaidichvu;
	}
	
	public function getLoaiDichVuById($id){
		$loaidichvu = Table::Fetch('loai_dich_vu',$id);
		return $loaidichvu;
	}
	
	public function getDichVu(){
		$dichvu  = DB::LimitQuery('dich_vu');
		return $dichvu;
	}
	
	public function getDichVuById($id){
		$dichvu = Table::Fetch('dich_vu',$id);
		return $dichvu;
	}
}
?>