<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/app.php');
class ZAdvertise{
	
	static public function genRandomString() {
		$length = 6;
		$characters = '123456789abcdfghijklmnpqrstuvxyz';
		$string = '';
		for ($p = 0; $p < $length; $p++) {
			$string .= $characters[mt_rand(0, strlen($characters)-1)];
		}
		return $string;
	}
	
	static public function genConfirmCodeForAd(){
		$check_code = self::genRandomString();
		$conditionConfCode = array ('check_code' => $check_code);
		$lstConfs = DB::LimitQuery ('confirm_advertise', array (
			'condition' => $conditionConfCode
		));
		if(count($lstConfs) > 0){
			self::genConfirmCodeForAd();
		}
		return $check_code;
	}
}
?>