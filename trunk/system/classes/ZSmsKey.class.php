<?php

class ZZeroOrder {
	static public function confirmBySMS($mobile, $confirmKey){
		$smsKey = Table::Fetch('smskey',$mobile,'mobile');
		if($smsKey['key'] == $confirmKey){
			return true;
		}else{
			return false;
		}
		return true;
	}
}
?>