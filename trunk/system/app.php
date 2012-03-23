<?php
require_once('application.php');
//require_once(dirname(__FILE__) . '/include/library/sdkamz/sdk.class.php');
define('DIR_PARENT', str_replace('\\','/',dirname(dirname(__FILE__))));
define('DIR_SYSTEM_CORE',DIR_PARENT.'/system/core');
/* process currefer*/
$currefer = uencode(strval($_SERVER['REQUEST_URI']));

/* session,cache,configure,webroot register */
Session::Init();
$INI = ZSystem::GetINI();
define('URL_HOME',$INI['system']['wwwprefix']);
$AJAX = ('XMLHttpRequest' == @$_SERVER['HTTP_X_REQUESTED_WITH']);
if (false==$AJAX) { 
    header('Content-Type: text/html; charset=UTF-8;');
} else {
    header("Cache-Control: no-store, no-cache, must-revalidate");
}
/* end */

//51shop.vn:82
//$google_map_script = "http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAl1TlUXtpA_n6fLVQjke2qxTfgxRcXablz837fEqFTZelw71HBRRJS8VRYtd6AlW0NxQkUAMqJnqr7g";

//51deal.vn
$google_map_script = "http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAl1TlUXtpA_n6fLVQjke2qxQyDfHk3PdPQZV_wuzsz_NKY3-kjBTTRX24xmyz3xbVvQOxOHYOxQfpbQ";

//www.abc.com.vn
//$google_map_script = "http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAl1TlUXtpA_n6fLVQjke2qxRbuqzh9nqC61-M6FBPMK0zfbzk9xRjlBZeOCqmzCjbl6Cc90DLMv0wxA";

/* biz logic */
$currency = $INI['system']['currency'];
//$login_user_id = ZLogin::GetLoginId();
//$login_user = Table::Fetch('user', $login_user_id);
//$list1=Session::Get('list');
//$city = cookie_city(null);
//$hotcities = Table::Fetch('category', $INI['hotcity']);
//$login_partner_branch_id = ZLogin::GetPartnerBranchLoginId();
//$login_partner_branch = Table::Fetch('partner_branch',$login_partner_branch_id);
//if($_GET['pt'])
//	$getAgent = $_GET['pt'];
//else{
//	$host = Utility::SplitStringHttp($_SERVER['HTTP_HOST']);
//	$referer = Utility::SplitStringHttp($_SERVER['HTTP_REFERER']);
//	if($host != $referer)
//		$getAgent = $referer;		
//}
//$zAgent=new ZAgent('agent');
//if($zAgent->checkAgent($getAgent))
//{
//		cookieset('agentname',$getAgent,time()+3600);
//}
////check email click
//if(isset($_GET['emmkt']))
//{
//	ZEmailMarketing::updateClick(strval($_GET['emmkt']));
//}
/////Kiem tra URL co phai la Iframe
//if($_SERVER['SCRIPT_NAME']=='/index_if.php')
//	$_SESSION['iframe']=true;
//if($_SERVER['SCRIPT_NAME']=='/index.php')
//	unset($_SESSION['iframe']);
////End
///* not allow access app.php */
//if($_SERVER['SCRIPT_FILENAME']==__FILE__){
//	Utility::Redirect( WEB_ROOT . '/index.php');
//}

/* end Accountant */
