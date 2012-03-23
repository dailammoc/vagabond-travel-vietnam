<?php
//require_once(dirname(dirname(dirname(__FILE__))) . '/app.php');
class ZUser
{
	const SECRET_KEY = '@4!@#$%@';

	static public function GenPassword($p) {
		return md5($p . self::SECRET_KEY);
	}

	static public function Create($user_row) {
		$user_row['password'] = self::GenPassword($user_row['password']);
		$user_row['create_time'] = $user_row['login_time'] = time();
		$user_row['ip'] = Utility::GetRemoteIp();
		$user_row['secret'] = md5(Utility::GenSecret(12));
		$user_row['id'] = DB::Insert('user', $user_row);
		//vudinh 05052011
		//initialize credit account for new user
		self::CreateUserCredit($user_row);
		//vudinh end

		$_rid = abs(intval(cookieget('_rid')));
		if ($_rid) {
			$r_user = Table::Fetch('user', $_rid);//reference user
			if ( $r_user ) ZInvite::Create($r_user, $user_row);

			//update table user_credit by order (vudinh 05052011)
			$IN = ZSystem::GetINI();
			$user_credit = Table::Fetch('user_credit',$_rid,'user_id');
			Table::UpdateCache('user_credit', $user_credit['id'],array(
					'credit' => $user_credit['credit'] + abs(intval($IN['system']['credit'])) + 1, //+ ($team['credit_reward']*$quan),
			));
			//end
			/*begin update topup_logs*/
			$content = "ZUser.class.phh";
			$date_topup = date('H:i:s d-m-Y',time());
			$dataInsert = array(
				'user_id'=> $user_credit['id'],
				'amount'=> abs(intval($IN['system']['credit'])) + 1,
				'content'=> $content,
				'topup_by'=> 0,
				'topup_time'=> $date_topup,
			);
			DB::Insert('topup_logs', $dataInsert);
			/*end update topup_logs*/
		}
		if ( $user_row['id'] == 1 ) {
			Table::UpdateCache('user', $user_row['id'], array(
						'manager'=>'Y',
						'secret' => '',
						));
		}
		return $user_row['id'];
	}
static public function CreateGoogle($user_row) {
		$user_row['id'] = DB::Insert('google_account', $user_row);
		self::CreateUserCredit($user_row);
		$_rid = abs(intval(cookieget('_rid')));
		if ($_rid) {
			$r_user = Table::Fetch('google_account', $_rid);//reference user
			if ( $r_user ) ZInvite::Create($r_user, $user_row);
			$IN = ZSystem::GetINI();
			$user_credit = Table::Fetch('user_credit',$_rid,'user_id');
			Table::UpdateCache('user_credit', $user_credit['id'],array(
					'credit' => $user_credit['credit'] + abs(intval($IN['system']['credit'])) + 1, //+ ($team['credit_reward']*$quan),
			));
			//end
			/*begin update topup_logs*/
			$content = "create Google";
			$date_topup = date('H:i:s d-m-Y',time());
			$dataInsert = array(
				'user_id'=> $user_credit['id'],
				'amount'=> abs(intval($IN['system']['credit'])) + 1,
				'content'=> $content,
				'topup_by'=> 0,
				'topup_time'=> $date_topup,
			);
			DB::Insert('topup_logs', $dataInsert);
			/*end update topup_logs*/
		}
		//if ( $user_row['id'] == 1 ) {
			//Table::UpdateCache('google_account', $user_row['id'], array(
				//		'manager'=>'Y',
					//	'secret' => '',
						//));
		//}
		return $user_row['id'];
	}
static public function CreateYahoo($user_row) {

		$user_row['id'] = DB::Insert('yahoo_account', $user_row);
		self::CreateUserCredit($user_row);
		$_rid = abs(intval(cookieget('_rid')));
		if ($_rid) {
			$r_user = Table::Fetch('yahoo_account', $_rid);
			if ( $r_user ) ZInvite::Create($r_user, $user_row);
			$IN = ZSystem::GetINI();
			$user_credit = Table::Fetch('user_credit',$_rid,'user_id');
			Table::UpdateCache('user_credit', $user_credit['id'],array(
					'credit' => $user_credit['credit'] + abs(intval($IN['system']['credit'])) + 1, //+ ($team['credit_reward']*$quan),
			));
			/*begin update topup_logs*/
			$content = "create Yahoo";
			$date_topup = date('H:i:s d-m-Y',time());
			$dataInsert = array(
				'user_id'=> $user_credit['id'],
				'amount'=> abs(intval($IN['system']['credit'])) + 1,
				'content'=> $content,
				'topup_by'=> 0,
				'topup_time'=> $date_topup,
			);
			DB::Insert('topup_logs', $dataInsert);
			/*end update topup_logs*/

		}
		//if ( $user_row['id'] == 1 ) {
			//Table::UpdateCache('google_account', $user_row['id'], array(
				//		'manager'=>'Y',
					//	'secret' => '',
						//));
		//}
		return $user_row['id'];
	}
static public function CreateFacebook($user_row) {
		$user_row['id'] = DB::Insert('facebook_account', $user_row);
		self::CreateUserCredit($user_row);
		$_rid = abs(intval(cookieget('_rid')));
		if ($_rid) {
			$r_user = Table::Fetch('facebook_account', $_rid);//reference user
			if ( $r_user ) ZInvite::Create($r_user, $user_row);
			$IN = ZSystem::GetINI();
			$user_credit = Table::Fetch('user_credit',$_rid,'user_id');
			Table::UpdateCache('user_credit', $user_credit['id'],array(
					'credit' => $user_credit['credit'] + abs(intval($IN['system']['credit'])) + 1, //+ ($team['credit_reward']*$quan),
			));
			//end
			/*begin update topup_logs*/
			$content = "create Facebook";
			$date_topup = date('H:i:s d-m-Y',time());
			$dataInsert = array(
				'user_id'=> $user_credit['id'],
				'amount'=> abs(intval($IN['system']['credit'])) + 1,
				'content'=> $content,
				'topup_by'=> 0,
				'topup_time'=> $date_topup,
			);
			DB::Insert('topup_logs', $dataInsert);
			/*end update topup_logs*/
		}
		//if ( $user_row['id'] == 1 ) {
			//Table::UpdateCache('google_account', $user_row['id'], array(
				//		'manager'=>'Y',
					//	'secret' => '',
						//));
		//}
		return $user_row['id'];
	}
static public function CreateDealhunter($user_row) {
		$user_row['id'] = DB::Insert('dealhunter_account', $user_row);
		self::CreateUserCredit($user_row);
		$_rid = abs(intval(cookieget('_rid')));
		if ($_rid) {
			$r_user = Table::Fetch('dealhunter_account', $_rid);//reference user
			if ( $r_user ) ZInvite::Create($r_user, $user_row);
			$IN = ZSystem::GetINI();
			$user_credit = Table::Fetch('user_credit',$_rid,'user_id');
			Table::UpdateCache('user_credit', $user_credit['id'],array(
					'credit' => $user_credit['credit'] + abs(intval($IN['system']['credit'])) + 1, //+ ($team['credit_reward']*$quan),
			));
			//end
			/*begin update topup_logs*/
			$content = "create DealHunter";
			$date_topup = date('H:i:s d-m-Y',time());
			$dataInsert = array(
				'user_id'=> $user_credit['id'],
				'amount'=> abs(intval($IN['system']['credit'])) + 1,
				'content'=> $content,
				'topup_by'=> 0,
				'topup_time'=> $date_topup,
			);
			DB::Insert('topup_logs', $dataInsert);
			/*end update topup_logs*/
		}
		//if ( $user_row['id'] == 1 ) {
			//Table::UpdateCache('google_account', $user_row['id'], array(
				//		'manager'=>'Y',
					//	'secret' => '',
						//));
		//}
		return $user_row['id'];
	}
	static public function GetUser($user_id) {
		if (!$user_id) return array();
		return DB::GetTableRow('user', array('id' => $user_id));
	}

	static public function GetLoginCookie($cname='ru') {
		$cv = cookieget($cname);
		if ($cv) {
			$zone = base64_decode($cv);
			$p = explode('@', $zone, 2);
			return DB::GetTableRow('user', array(
				'id' => $p[0],
				'password' => $p[1],
			));
		}
		return Array();
	}

	static public function GetLogin($email, $password, $en=true) {
		if($en) $password = self::GenPassword($password);
		$field = strpos($email, '@') ? 'email' : 'username';
		return DB::GetTableRow('user', array(
					$field => $email,
					'password' => $password,
		));
	}

	/*static public function GetPartnerBranchLogin($username, $password, $en=true) {
		if($en) $password = self::GenPassword($password);
		return DB::GetTableRow('partner_branch', array(
					'username' => $username,
					'password' => $password,
		));
	}*/

	static public function CreateUserCredit($user){
		$user_credit['user_id'] = $user['id'];
		//$user_credit['updated_time'] = time();
		$user_credit['updated_time'] = date('d-m-Y H:i:s', time());
		$user_credit['credit'] = 0;
		$user_credit['mark'] = 0;
		DB::Insert('user_credit',$user_credit);
	}

	//add by Vudinh 27052011
	static public function genRandomString() {
	    $length = 3;
	    $characters = '123456789abcdfghjkmnpqrstuvxyz';
	    $string = '';
	    for ($p = 0; $p < $length; $p++) {
	        $string .= $characters[mt_rand(0, strlen($characters)-1)];
	    }
	    return $string;
	}

	static public function genRandomStringForZeroCode() {
	    $length = 4;
	    $characters = '123456789abcdfghijklmnpqrstuvxyz';
	    $string = '';
	    for ($p = 0; $p < $length; $p++) {
	        $string .= $characters[mt_rand(0, strlen($characters)-1)];
	    }
	    return $string;
	}

	static public function genRandomStringForCheckCode() {
	    $length = 6;
	    $characters = '123456789abcdfghjkmnpqrstuvxyz';
	    $string = '';
	    for ($p = 0; $p < $length; $p++) {
	        $string .= $characters[mt_rand(0, strlen($characters)-1)];
	    }
	    return $string;
	}
	static public function genRandomStringForTopupCardGroup() {
	    $length = 3;
	    $characters = '123456789abcdfghjkmnpqrstuvxyz';
	    $string = '';
	    for ($p = 0; $p < $length; $p++) {
	        $string .= $characters[mt_rand(0, strlen($characters)-1)];
	    }
	    $record = DB::LimitQuery('topup_card_group',array(
		'condition'=>array('group_code'=>$string),
		));
		if(count($record) >0)
			self::genRandomStringForTopupCardGroup();
	    return $string;
	}

	static public function genarateCodeForTopUpCardGroup($groupId,$groupCode) {
	    $length = 5;
	    $characters = '123456789abcdfghjkmnpqrstuvxyz';
	    $string = '';
	    for ($p = 0; $p < $length; $p++) {
	        $string .= $characters[mt_rand(0, strlen($characters)-1)];
	    }
	    $code_md5 = md5($groupCode.$string,false);
	    $code = substr($code_md5, 0,8);
	    $record = DB::LimitQuery('topup_card_detail',array(
		'condition'=>array('topup_code'=>$code,'group_id'=>$groupId),
		));
		if(count($record) >0)
			self::genarateCodeForTopUpCardGroup($groupId,$groupCode);
	    return $code;
	}

	static public function genConfirmCodeForDeal($teamId){
		$confirmKey = self::genRandomString();
		$confirmCode = $teamId.$confirmKey;

		$conditionConfCode = array ('team_id' => $teamId, 'confirm_code' => $confirmCode);
		$lstConfs = DB::LimitQuery ('confirm_tbl', array (
			'condition' => $conditionConfCode
			/*'order' => 'ORDER BY id DESC',
			'one' => false*/
		));
		if(count($lstConfs) > 0){
			self::genConfirmCodeForDeal($teamId);
		}
			return $confirmCode;
		/*$listConfCode = Utility::GetColumn ( $lstConfs, 'confirm_code' );
		if (array_search ( $confirmCode, $listConfCode ) !== false || array_search ( strtoupper($confirmCode), $listConfCode ) !== false) {
			self::genConfirmCodeForDeal($teamId);
		}
			return $confirmCode;*/

	}

	static public function genSalesOffCodeBySalesOffId($id){
		$countChar = strlen($id);
		if($countChar >= 5){
			return substr($id,-5);
		}else{
			return $id;
		}
		/*else if ($countChar == 1){
			return '00'.strval($id);
		}else if($countChar == 2){
			return '0'.strval($id);
		}*/
	}

}
