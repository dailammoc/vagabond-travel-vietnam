<?php
/**
 
 */
class ZLogin
{
	static public $cookie_name = 'ru';
	static public $cookie_name_partner_branch = 'pbu';

    static public function GetLoginId() {
        $user_id = abs(intval(Session::Get('user_id')));
		if (!$user_id) {
			$u = ZUser::GetLoginCookie(self::$cookie_name);
			$user_id = abs(intval($u['id']));
		}
		if ($user_id) self::Login($user_id);
		return $user_id;
    }

    //vudinh on 30062011
	static public function GetPartnerBranchLoginId() {
        $partner_branch_id = abs(intval(Session::Get('partner_branch_id')));
		if (!$partner_branch_id) {
			$u = ZPartner::GetPartnerBranchLoginCookie(self::$cookie_name_partner_branch);
			$partner_branch_id = abs(intval($u['id']));
		}
		if ($partner_branch_id) self::PartnerBranchLogin($partner_branch_id);
		return $partner_branch_id;
    }

	static public function Login($user_id) {
		Session::Set('user_id', $user_id);
		return true;
	}
	
	static public function PartnerBranchLogin($partner_branch_id) {
		Session::Set('partner_branch_id', $partner_branch_id);
		return true;
	}

    static public function NeedLogin() {
        $user_id = self::GetLoginId();
        return $user_id ? $user_id : False;
    }

	static public function Remember($user) {
		$zone = "{$user['id']}@{$user['password']}";
		cookieset(self::$cookie_name, base64_encode($zone), 30*86400);
	}

	static public function NoRemember() {
		cookieset(self::$cookie_name, null, -1);	
	}
	
	static public function PartnerBranchNoRemember() {
		cookieset(self::$cookie_name_partner_branch, null, -1);	
	}
}
