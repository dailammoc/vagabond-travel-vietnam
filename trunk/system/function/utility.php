<?php
function get_city($ip=null) {
	global $INI;
	$cities = option_category('city');
	$ip = ($ip) ? $ip : Utility::GetRemoteIP();
	$url = "http://open.baidu.com/ipsearch/s?wd={$ip}&tn=baiduip";
	$res = mb_convert_encoding(Utility::HttpRequest($url), 'UTF-8', 'UTF-8');
	if ( preg_match('#来自：<b>(.+)</b>#Ui', $res, $m) ) {
		foreach( $cities AS $cid=>$cname) {
			if ( FALSE !== strpos($m[1], $cname) ) {
				return Table::Fetch('category', $cid);
			}
		}
	}
	return array();
}

function mail_zd($email) {
	global $option_mail;
	if ( ! Utility::ValidEmail($email) ) return false;
	preg_match('#@(.+)$#', $email, $m);
	$suffix = strtolower($m[1]);
	return $option_mail[$suffix];
}

global $option_gender;
$option_gender = array(
		'M' => 'Nam',
		'F' => 'Nữ',
		);
global $option_pay;
$option_pay = array(
		'pay' => 'Paid',
		'unpay' => 'Unpaid',
		);
global $option_service;
$option_service = array(
                'paypal' => 'Paypal',
		'alipay' => 'Alipay',
		'tenpay' => 'Tenpay',
		'chinabank' => 'Chinabank',
		'cash' => 'Cash',
		'credit' => 'Credit',
		'other' => 'Others',
		);
global $option_delivery;
$option_delivery = array(
		'express' => 'Express Delivery',
		'coupon' => 'Coupon',
		'pickup' => 'Selfwithdraw',
		);
global $option_flow;
$option_flow = array(
	'buy' => 'Buy',
	'invite' => 'Invite',
	'store' => 'Store',
	'withdraw' => 'Withdraw',
	'coupon' => 'Rebate',
	'refund' => 'Refund',
	'register' => 'Register',
	'charge' => 'Charge',
);
global $option_mail;
$option_mail = array(
	'gmail.com' => 'https://mail.google.com/',
	'yahoo.com' => 'http://mail.yahoo.com/',
);
global $option_cond;
$option_cond= array(
	'Y' => 'Group as number of buyers',
	'N' => 'Group as numbers of product',
);
