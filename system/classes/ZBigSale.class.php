<?php
class ZBigSale {
	static public function genRandomReferer() {
		$length = 5;
		$characters = 'abcdefghijklmnopqrstuvwxyz';
		$string = '';
		for ($p = 0; $p < $length; $p++) {
			$string .= $characters[mt_rand(0, strlen($characters)-1)];
		}
		return $string;
	}

	static public function genRandomStringForBigSaleCode() {
		$length = 5;
		$characters = '0123456789';
		$string = '';
		for($p = 0; $p < $length; $p ++) {
			$string .= $characters [mt_rand ( 0, strlen ( $characters ) - 1 )];
		}
		return $string;
	}

	static public function genCheckCode($team_id) {
			$lats_record=DB::LimitQuery('confirm_salesoff_big',array(
					'condition' => array('team_id' => $team_id),
					'one'=>true,
					'select'=>'check_code',
					'order' => 'order by check_code DESC'
				));
				$str=$lats_record['check_code'];
				if(count($lats_record)==0)
					$check_code="1";
				else
				{
					for($i=0;$i<strlen($str);$i++)
					{
						if($str[$i]>0)
						{
							$u=$i;
							break;
						}
					}
					$check_code=substr($str,$u);
					$check_code=intval($check_code)+1;
				}
				$check_code=self::insertZero($check_code);
				$conditionConfCode = array ('check_code' => $check_code,'team_id'=>$team_id );
				$lstConfs = DB::LimitQuery ( 'confirm_salesoff_big', array ('condition' => $conditionConfCode ));
				if (count ( $lstConfs ) > 0) {
					self::genCheckCode ($team_id);
				}
				return $check_code;
	}

	static public function genRefererCode($team_id){
		//$code_referer=sha1(uniqid(mt_rand(). $salt,true));
		$code_referer=self::genRandomReferer();
		$conditionConfCode = array ('code_referer' => $code_referer,'team_id'=>$team_id);
		$lstConfs = DB::LimitQuery ('salesoff_order', array (
				'condition' => $conditionConfCode,
				'one'=>true

		)
		);
		if(count($lstConfs) > 0){
			self::genRefererCode($team_id);
		}
		return $code_referer;
	}

	static public function createCheckCode($arr){
		return DB::InsertNumberAsVarchar('confirm_salesoff_big', $arr);
	}
	

	static public function getTeamSaleOff()
	{
		$now=time();
		return DB::LimitQuery('team',array(
					'condition'=>array(
						'salesoff_big'=>"Y",
						"salesoff"=>"Y",
						"begin_time <  {$now}",
						"end_time > {$now}"
		),
					'select'=>'id,title,salesoff_big,salesoff,begin_time,end_time',
					'one'=>true
		));
	}
	static public function getTeamSaleOffEnd()
	{
		$now=time();
		return DB::LimitQuery('team',array(
					'condition'=>array(
						'salesoff_big'=>"Y",
						"salesoff"=>"Y"
						),
					'select'=>'id,title,salesoff_big,salesoff,begin_time,end_time',
					'order'=>'order by id DESC',
					'one'=>true
		));
	}
	static public function getNumberCodeSaleOff($team_id)
	{
		$number= Table::Count('confirm_salesoff_big',array('team_id'=>$team_id));
		return $number;

	}

	static public function checkUsedDealSms1($login_user,$begin_time,$end_time){
		$begin_time=date('d-m-Y H:i:s',$begin_time);
		$end_time=date('d-m-Y H:i:s',$end_time);
		$check_used_sms = DB::LimitQuery ( 'confirm_tbl',
		array ('condition' => array (
						'status' => 'used', 
						'user_id' => $login_user, 
						"str_to_date(updated_time,'%Y-%m-%d %H:%i:%s') >str_to_date( '" .$begin_time . "','%d-%m-%Y %H:%i:%s')",
						 "str_to_date(updated_time,'%Y-%m-%d %H:%i:%s') < str_to_date( '" . $end_time . "','%d-%m-%Y %H:%i:%s')" ), 
						'one' => true ) );
		if (count ( $check_used_sms )>0)
		return $check_used_cash;
		else
		return 0;
	}

	static public function checkUsedDealSms2($login_user,$begin_time,$end_time){
		$begin_time=date('d-m-Y H:i:s',$begin_time);
		$end_time=date('d-m-Y H:i:s',$end_time);
		$check_used_sms = DB::LimitQuery ( 'confirm_tbl',
		array ('condition' => array (
						'status' => 'used', 
						'user_id' => $login_user, 
						"str_to_date(updated_time,'%Y-%m-%d %H:%i:%s') >str_to_date( '" .$begin_time . "','%d-%m-%Y %H:%i:%s')",
						 "str_to_date(updated_time,'%Y-%m-%d %H:%i:%s') < str_to_date( '" . $end_time . "','%d-%m-%Y %H:%i:%s')" ), 
						'one' => true ) );
		if (count ( $check_used_sms )>0)
		return $check_used_cash;
		else
		return 0;
	}

	static public function checkUsedDealCash($login_user,$begin_time,$end_time, $order_id)
	{
		$check_used_cash = DB::LimitQuery ( 'order',
		array (
						 'condition' => array (
						 'status_id' => 5, 
						 'user_id' => $login_user,
		 				'id' => $order_id,
						  'service' => 'cashpayment',
						  "create_time > {$begin_time}",
						  "create_time < {$end_time}" ),
		) );

		if (count ( $check_used_cash )>0)
		return $check_used_cash;
		else
		return 0;
	}

	static public function checkJoinSaleOff($team_id,$login_user)
	{
		//check user has join saleoff
		$join_user=DB::LimitQuery('salesoff_order',array(
					'condition'=>array('team_id'=>$team_id,'user_id'=>$login_user),
					'one'=>true
		));
		if(count($join_user)>0)
		return true;
		else
		return false;
	}

	static public function checkJoinSaleOffFaceBook($team_id,$login_user)
	{
		//check user has join saleoff
		$join_user=DB::LimitQuery('salesoff_order',array(
					'condition'=>array('team_id'=>$team_id,'user_id'=>$login_user,'login_fb'=>"N"),
					'one'=>true
		));
		if(count($join_user)>0)
		return true;
		else
		return false;
	}

	static public function showCheckCode($team_id,$login_user){
		$rs=DB::LimitQuery ( 'confirm_salesoff_big',
		array ('condition' =>array('user_id'=>$login_user,'team_id'=>$team_id)));
		return $rs;
	}

	static public function totalUserJoin($team_id)
	{
		$number_join=DB::LimitQuery('salesoff_order',array(
		'condition'=>array(
			'team_id'=>$team_id,
			"str_to_date(created_time,'%d-%m-%Y %H:%i:%s') < str_to_date('".date('d-m-Y')." 09:00:00','%d-%m-%Y %H:%i:%s')"),
			'select'=>'count(*) as total',
			'one'=>true
		));
		return $number_join;
	}

	static public function insertZero($number)
	{
		if(strlen($number)<5)
		{
			$len=5-strlen($number);
			for($i=0;$i<$len;$i++)
			$zero.='0';
			$number=$zero.$number;
		}
		return $number;
	}

	static public function updateTotalCode($user_id,$team_id)
	{
		/*$update=DB::LimitQuery('salesoff_order',array(
			'condition'=>array(
				'team_id'=>$team_id,
				'user_id'=>$user_id),
			'select'=>'total_code',
			'one'=>true
		));*/
		$condition = array( 
			'user_id' => $user_id, 
			'team_id' => $team_id
		);
		$count = Table::Count('confirm_salesoff_big',$condition);
		DB::Update('salesoff_order',array('user_id'=>$user_id,'team_id'=>$team_id),array('total_code'=>$count));
	}

	static public function updateLoginFacebook($user_id,$team_id)
	{
		DB::Update('salesoff_order',array('user_id'=>$user_id,'team_id'=>$team_id),array('login_fb'=>'Y'));
	}

	static public function createSmallAward($code_award,$team_id)
	{
		$code2=$code_award+51;
		$code3=$code_award-51;
		$code_award=self::insertZero($code_award);
		$code2=self::insertZero($code2);
		$code3=self::insertZero($code3);
		$code_award=$code_award.','.$code2.','.$code3;
		$user_award=DB::LimitQuery('confirm_salesoff_big',array(
		'condition'=>array(
			'team_id'=>$team_id,
			'check_code in ('.$code_award.')')
		));
		return $user_award;
	}
	
static public function createSmallAwardOnePerDay($team_id)
	{
		$user_award=DB::LimitQuery('confirm_salesoff_big',array(
		'condition'=>array(
			'team_id'=>$team_id,
			'check_code in ('.$code_award.')')
		));
		return $user_award;
	}

	static public function createBigAward($code_award,$team_id)
	{
		$code_award=self::insertZero($code_award);
		$user_award=DB::LimitQuery('confirm_salesoff_big',array(
														'condition'=>array(
															'team_id'=>$team_id,
															'check_code'=>$code_award
														),
														'one'=>true
		));
		return $user_award;
	}

	static public function createDateAward($arr)
	{
		return DB::InsertNumberAsVarchar('lottery_date',$arr);
	}

	static public function createUserSmallAward($arr)
	{
		return DB::InsertNumberAsVarchar('lottery_salesoff',$arr);
	}

	static public function createUserLuckyAward($team_id)
	{
		$user_award=DB::LimitQuery('salesoff_order',array(
			'condition' => array('team_id' => $team_id),
			'order'=>'order by total_code desc, id asc',
			'size'=>5
		));
		return $user_award;
	}

	static public function showListCodeMember($teamId,$size,$offset)
	{

		$listmember=DB::LimitJoinQuery('salesoff_order','confirm_salesoff_big',array(
		'on'=>'salesoff_order.user_id=confirm_salesoff_big.user_id and salesoff_order.team_id=confirm_salesoff_big.team_id',
		'condition'=>array(
		'salesoff_order.team_id'=>$teamId
		),
		'select'=>'confirm_salesoff_big.id as id ,confirm_salesoff_big.created_time as created_time,fullname,mobile,check_code',
		'size'=>$size,
		'offset'=>$offset,
		'order'=>'order by id'
		));
		return $listmember;
	}

}

?>