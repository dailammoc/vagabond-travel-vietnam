<?php
class ZEnterprise
{
	const SECRET_KEY = '@4!@#$%@';

	static public function GenPassword($p) {
		return md5($p . self::SECRET_KEY);
	}

	static public function Create($partner_row) {
	}

	static public function GetPartner($partner_id) {
		if (!$partner_id) return array();
		return Table::FetchForce('enterprise', $partner_id);
	}
	
	static public function GetPartnerBranch($partner_branch_id) {
		if (!$partner_branch_id) return array();
		return Table::FetchForce('partner_branch', $partner_branch_id);
	}

	static public function GetEnterpriseLogin($username, $password, $en=true) {
		if($en) $password = self::GenPassword($password);
		return DB::GetTableRow('enterprise_info', array(
					'username' => $username,
					'password' => $password,
		));
	}
	static public function UpdateEnterpriseLoginInfo($data) {
		return Table::FastUpdate($data['table'],$data['update']);
	}
	static public function GetPartnerBranchLoginCookie($cname='ru') {
		$cv = cookieget($cname);
		if ($cv) {
			$zone = base64_decode($cv);
			$p = explode('@', $zone, 2);
			return DB::GetTableRow('partner_branch', array(
				'id' => $p[0],
				'password' => $p[1],
			));
		}
		return Array();
	}

	static public function GetLoginPartner() {
		if(isset($_SESSION['partner_id'])) {
			return self::GetPartner($_SESSION['partner_id']);
		}
		return array();
	}

	static public function Login($partner_id) {
		Session::Set('partner_id', $partner_id);
	}
}
?>