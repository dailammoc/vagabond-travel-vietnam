<?php
class Thongtin_Model{
	public function getGioiThieu(){
		$gioithieu = Table::Fetch('gioi_thieu',1);
		return $gioithieu;
	}
}