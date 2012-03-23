<?php
class ZEmailMarketing {
	static public function genCheckCode(){
		$check_code=sha1(uniqid(mt_rand(). $salt,true));
		$conditionConfCode = array ('check_code' => $check_code);
		$lstConfs = DB::LimitQuery ('email_marketing', array (
			'condition' => $conditionConfCode

		));
		if(count($lstConfs) > 0){
			self::genCheckCode();
		}
		return $check_code;
	}


	static public function updateClick($code){
		$lstConfs = DB::LimitQuery ('email_marketing', array (
			'condition' => array('check_code'=>$code),
			'one'=>true
		));
		if(count($lstConfs) > 0){
			Table::UpdateCache('email_marketing', array('check_code'=>$code),array("number_click"=>$lstConfs['number_click']+1));
		}
	}

}
?>