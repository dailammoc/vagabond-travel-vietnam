<?php
/* import other */
import('current');
import('utility');
import('mailer');
import('sms');
import('upgrade');

function template($tFile) {
	global $INI;
	if ( 0===strpos($tFile, 'manage') ) {
		return __template($tFile);
	}
	if ($INI['skin']['template']) {
		$templatedir = DIR_TEMPLATE. '/' . $INI['skin']['template'];
		$checkfile = $templatedir . '/html_header.html';
		if ( file_exists($checkfile) ) {
			return __template($INI['skin']['template'].'/'.$tFile);
		}
	}
	return __template($tFile);
}



function render($tFile, $vs=array()) {
	ob_start();
	foreach($GLOBALS AS $_k=>$_v) {
		${$_k} = $_v;
	}
	foreach($vs AS $_k=>$_v) {
		${$_k} = $_v;
	}
	include template($tFile);
	return render_hook(ob_get_clean());
}
function stripUnicodemoi($str){
	if(!$str) return false;

	$str=strip_tags($str);

	$marTViet=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
"ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề"
	,"ế","ệ","ể","ễ",
"ì","í","ị","ỉ","ĩ",
"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
	,"ờ","ớ","ợ","ở","ỡ",
"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
"ỳ","ý","ỵ","ỷ","ỹ",
"đ",
"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
	,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
"Ì","Í","Ị","Ỉ","Ĩ",
"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
	,"Ờ","Ớ","Ợ","Ở","Ỡ",
"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
"Đ");

	$marKoDau=array("a","a","a","a","a","a","a","a","a","a","a"
	,"a","a","a","a","a","a",
"e","e","e","e","e","e","e","e","e","e","e",
"i","i","i","i","i",
"o","o","o","o","o","o","o","o","o","o","o","o"
	,"o","o","o","o","o",
"u","u","u","u","u","u","u","u","u","u","u",
"y","y","y","y","y",
"d",
"A","A","A","A","A","A","A","A","A","A","A","A"
	,"A","A","A","A","A",
"E","E","E","E","E","E","E","E","E","E","E",
"I","I","I","I","I",
"O","O","O","O","O","O","O","O","O","O","O","O"
	,"O","O","O","O","O",
"U","U","U","U","U","U","U","U","U","U","U",
"Y","Y","Y","Y","Y",
"D");
	$str= str_replace($marTViet,$marKoDau,trim($str));
	return $str;
}
function stripUnicode($str){
	if(!$str) return false;
	$unicode = array(
	'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
	'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
	'd'=>'đ',
	'd'=>'Đ',
	'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
	'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	'i'=>'í|ì|ỉ|ĩ|ị',
	'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
	'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
	'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
	'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
	'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
	'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
	'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Y',
	);
	foreach($unicode as $nonUnicode=>$uni)
	$str = preg_replace("/($uni)/i",$nonUnicode,$str);
	return $str;
}
function rewrite($title)
{
	$str=stripUnicode($title);
	$str=strtolower(str_replace(" ","-",$str));
	return $str;
}

function render_hook($c) {
	global $INI;
	$c = preg_replace('#href="/#i', 'href="'.WEB_ROOT.'/', $c);
	$c = preg_replace('#src="/#i', 'src="'.WEB_ROOT.'/', $c);
	$c = preg_replace('#action="/#i', 'action="'.WEB_ROOT.'/', $c);

	/* theme */
	$page = strval($_SERVER['REQUEST_URI']);
	if($INI['skin']['theme'] && !preg_match('#/manage/#i',$page)) {
		$themedir = WWW_ROOT. '/static/theme/' . $INI['skin']['theme'];
		$checkfile = $themedir. '/css/index.css';
		if ( file_exists($checkfile) ) {
			$c = preg_replace('#/static/css/#', "/static/theme/{$INI['skin']['theme']}/css/", $c);
			$c = preg_replace('#/static/img/#', "/static/theme/{$INI['skin']['theme']}/img/", $c);
		}
	}
	return $c;
}

function output_hook($c) {
	global $INI;
	if ( 0==abs(intval($INI['system']['gzip'])))  die($c);
	$HTTP_ACCEPT_ENCODING = $_SERVER["HTTP_ACCEPT_ENCODING"];
	if( strpos($HTTP_ACCEPT_ENCODING, 'x-gzip') !== false )
	$encoding = 'x-gzip';
	else if( strpos($HTTP_ACCEPT_ENCODING,'gzip') !== false )
	$encoding = 'gzip';
	else $encoding == false;
	if (function_exists('gzencode')&&$encoding) {
		$c = gzencode($c);
		header("Content-Encoding: {$encoding}");
	}
	$length = strlen($c);
	header("Content-Length: {$length}");
	die($c);
}

$lang_properties = array();
function I($key) {
	global $lang_properties, $LC;
	if (!$lang_properties) {
		$ini = DIR_ROOT . '/i18n/' . $LC. '/properties.ini';
		$lang_properties = Config::Instance($ini);
	}
	return isset($lang_properties[$key]) ?
	$lang_properties[$key] : $key;
}

function json($data, $type='eval') {
	$type = strtolower($type);
	$allow = array('eval','alert','updater','dialog','mix', 'refresh');
	if (false==in_array($type, $allow))
	return false;
	Output::Json(array( 'data' => $data, 'type' => $type,));
}

function redirect($url=null) {
	header("Location: {$url}");
	exit;
}
function write_php_file($array, $filename=null){
	$v = "<?php\r\n\$INI = ";
	$v .= var_export($array, true);
	$v .=";\r\n?>";
	return file_put_contents($filename, $v);
}

function write_ini_file($array, $filename=null){
	$ok = null;
	if ($filename) {
		$s =  ";;;;;;;;;;;;;;;;;;\r\n";
		$s .= ";; SYS_INIFILE\r\n";
		$s .= ";;;;;;;;;;;;;;;;;;\r\n";
	}
	foreach($array as $k=>$v) {
		if(is_array($v))   {
			if($k != $ok) {
				$s  .=  "\r\n[{$k}]\r\n";
				$ok = $k;
			}
			$s .= write_ini_file($v);
		}else   {
			if(trim($v) != $v || strstr($v,"["))
			$v = "\"{$v}\"";
			$s .=  "$k = \"{$v}\"\r\n";
		}
	}

	if(!$filename) return $s;
	return file_put_contents($filename, $s);
}

function save_config($type='ini') {
	global $INI; $q = ZSystem::GetSaveINI($INI);
	if ( strtoupper($type) == 'INI' ) {
		if (!is_writeable(SYS_INIFILE)) return false;
		return write_ini_file($q, SYS_INIFILE);
	}
	if ( strtoupper($type) == 'PHP' ) {
		if (!is_writeable(SYS_PHPFILE)) return false;
		return write_php_file($q, SYS_PHPFILE);
	}
	return false;
}

function save_system($ini) {
	$system = Table::Fetch('system', 1);
	$ini = ZSystem::GetUnsetINI($ini);
	$value = Utility::ExtraEncode($ini);
	$table = new Table('system', array('value'=>$value));
	if ( $system ) $table->SetPK('id', 1);
	return $table->update(array( 'value'));
}

/* user relative */
function need_login($force=false) {
	if ( isset($_SESSION['user_id']) ) {
		if (is_post()) {
			unset($_SESSION['loginpage']);
			unset($_SESSION['loginpagepost']);
		}
		return $_SESSION['user_id'];
	}
	if ( is_get() ) {
		if(strpos($_SERVER['REQUEST_URI'],'umail') > 0){
			$current_url = explode('?', $_SERVER['REQUEST_URI']);
			$_SERVER['REQUEST_URI'] = $current_url[0];
		}
		global $INI;
		$host = rtrim($INI['system']['wwwprefix'],'/');
		Session::Set('loginpage', $host.$_SERVER['REQUEST_URI']);
	} else {
		Session::Set('loginpage', $_SERVER['HTTP_REFERER']);
		Session::Set('loginpagepost', json_encode($_POST));
	}
	return redirect(WEB_ROOT . '/account/loginup.php');
}
function need_login_mb($url) {
	if ( isset($_SESSION['user_id']) ) {
		if (is_post()) {
			unset($_SESSION['loginpage']);
			unset($_SESSION['loginpagepost']);
		}
		return $_SESSION['user_id'];
	}
	if ( is_get() ) {
		Session::Set('loginpage', $_SERVER['REQUEST_URI']);
	} else {
		Session::Set('loginpage', $_SERVER['HTTP_REFERER']);
		Session::Set('loginpagepost', json_encode($_POST));
	}
	return redirect($url);
}

function need_post() {
	return is_post() ? true : redirect(WEB_ROOT . '/index.php');
}
function need_manager($super=false) {
	if ( ! is_manager() ) {
		redirect( WEB_ROOT . '/manage/login.php' );
	}
	if ( ! $super ) return true;
	if ( abs(intval($_SESSION['user_id'])) == 1 ) return true;
	/*return redirect( WEB_ROOT . '/manage/misc/index.php');*/
}

//vudinh on 09062011: add role for customer_service
function need_customer_service($super = false) {
	if(is_manager()){
		return true;
	}
	if (! is_customer_service ()) {
		Session::Set('error', 'Bạn không có quyền truy cập chức năng này. Hãy liên hệ với Admin!');
		redirect ( WEB_ROOT . '/manage/login.php' );
	}
	if (! $super)
	return true;
	if (abs ( intval ( $_SESSION ['user_id'] ) ) == 1)
	return true;
	/*return redirect( WEB_ROOT . '/manage/misc/index.php');*/
}
// tuyen nguyen code
function need_sales($super = false) {
	if(is_manager()){
		return true;
	}
	if(is_sales()){
		return true;
	}
	if (! is_sales()) {
		Session::Set('error', 'Bạn không có quyền truy cập chức năng này. Hãy liên hệ với Admin!');
		redirect ( WEB_ROOT . '/manage/login.php' );
	}
	if (! $super)
	return true;
	if (abs ( intval ( $_SESSION ['user_id'] ) ) == 1)
	return true;
}
function need_accountant($super = false) {
	if(is_manager()){
		return true;
	}
	if(is_accountant()){
		return true;
	}
	if (! is_accountant()) {
		Session::Set('error', 'Bạn không có quyền truy cập chức năng này. Hãy liên hệ với Admin!');
		redirect ( WEB_ROOT . '/manage/login.php' );
	}
	if (! $super)
	return true;
	if (abs ( intval ( $_SESSION ['user_id'] ) ) == 1)
	return true;
}

function need_marketing($super = false) {
	if(is_manager()){
		return true;
	}
	if (! is_marketing ()) {
		Session::Set('error', 'Bạn không có quyền truy cập chức năng này. Hãy liên hệ với Admin!');
		redirect ( WEB_ROOT . '/manage/login.php' );
	}
	if (! $super)
	return true;
	if (abs ( intval ( $_SESSION ['user_id'] ) ) == 1)
	return true;
}

function get_permission_dealinfo($super = false) {
	if(is_manager()){
		return 1;
	}
	if(is_accountant()){
		return 2; // ke toan
	}
	if(is_sales()){
		return 3; // sale
	}
	if (! is_accountant()&&(! is_sales())&&(! is_manager())) {
		Session::Set('error', 'Bạn không có quyền truy cập chức năng này. Hãy liên hệ với Admin!');
		redirect ( WEB_ROOT . '/manage/login.php' );
	}
	if (! $super)
	return true;
	if (abs ( intval ( $_SESSION ['user_id'] ) ) == 1)
	return true;
}

function check_valid_deal_sale($dealid,$saleid)
{
	$option=array(
	'condition' => array(
	'id' => $dealid,
	'sales_id' => $saleid
	),
	);
	$check=DB::LimitQuery('team',$option);
	if(empty($check))
	{
		return 0; // user k dc xem

	}
	else
	{
		return 1; //user duoc quyen xem deal
	}
}

// end

function need_partner_login($super = false) {
	if (! is_partner_branch_login ()) {
		Session::Set('error', 'Bạn không có quyền truy cập chức năng này!');
		redirect ( WEB_ROOT . '/partner/account/login.php' );
	}
	if (! $super)
	return true;
}


function need_partner() {
	return is_partner() ? true : redirect( WEB_ROOT . '/biz/login.php');
}

function need_auth($b=true) {
	global $AJAX, $INI, $login_user;
	if (is_string($b)) {
		$auths = $INI['authorization'][$login_user['id']];
		$b = is_manager(true)||in_array($b, $auths);
	}
	if (true===$b) {
		return true;
	}
	if ($AJAX) json('no permission', 'alert');
	Session::Set('error', 'no permission');
	redirect( WEB_ROOT . '/account/login.php');
}

function is_manager($super=false) {
	global $login_user;
	if ( ! $super ) return ($login_user['manager'] == 'Y');
	return $login_user['id'] == 1;
}

//vudinh on 09062011: add role for customer_service
function is_customer_service() {
	global $login_user;
	if($login_user ['id'] == 1){
		return true;
	}else{
		return ($login_user ['customer_service'] == 'Y');
	}
}

// tuyen nguyen code
function is_sales() {
	global $login_user;
	if($login_user ['id'] == 1){
		return true;
	}else{
		return ($login_user ['sales'] == 'Y');
	}
}
function is_accountant() {
	global $login_user;
	if($login_user ['id'] == 1){
		return true;
	}else{
		return ($login_user ['accountant'] == 'Y');
	}
}
function is_marketing() {
	global $login_user;
	if($login_user ['id'] == 1){
		return true;
	}else{
		return ($login_user ['marketing'] == 'Y');
	}
}

// end
function is_partner_branch_login() {
	return isset($_SESSION['partner_branch_id']);
}

function is_partner() {
	return ($_SESSION['partner_id']>0);
}

function is_newbie(){ return (cookieget('newbie')!='N'); }
function is_get() { return ! is_post(); }
function is_post() {
	return strtoupper($_SERVER['REQUEST_METHOD']) == 'POST';
}

function is_login() {
	return isset($_SESSION['user_id']);
}

function get_loginpage($default=null) {
	$loginpage = Session::Get('loginpage', true);
	if ($loginpage)  return $loginpage;
	if ($default) return $default;
	return WEB_ROOT . '/index.php';
}
function get_loginpagefb($default=null) {
	$loginpage = Session::Get('loginpage', true);
	if ($loginpage)  return $loginpage;
	if ($default) return $default;
	return WEB_ROOT . '/fb/index.php';
}


function cookie_city($city) {
	global $INI;
	if($city) {
		cookieset('city', $city['id']);
		return $city;
	}
	$city_id = cookieget('city');

	if (!$city_id) {
		$city = get_city();
		if (!$city) {
			$city = Table::Fetch('category', $INI['hotcity'][0]);
		}
		if ($city) cookie_city($city);
		return $city;
	} else {
		if (in_array($city_id, $INI['hotcity'])) {
			return Table::Fetch('category', $city_id);
		}
		$city = Table::Fetch('category', $INI['hotcity'][0]);
	}
	return $city;
}

function cookieset($k, $v, $expire=0) {
	$pre = substr(md5($_SERVER['HTTP_HOST']),0,4);
	$k = "{$pre}_{$k}";
	if ($expire==0) {
		$expire = time() + 365 * 86400;
	} else {
		$expire += time();
	}
	setCookie($k, $v, $expire, '/');
}

function cookieget($k) {
	$pre = substr(md5($_SERVER['HTTP_HOST']),0,4);
	$k = "{$pre}_{$k}";
	return strval($_COOKIE[$k]);
}

function moneyit($k) {
	return rtrim(rtrim(sprintf('%.1f',$k), '0'), '.');
}

function formatMoney($k) {
	/*$k = sprintf('%.0f',$k);
	 $replaced = preg_replace("/(?<=\d)(?=(\d{3})+(?!\d))/",".",$k);
	 if ($replaced != $k) {
	 $k = $replaced;
	 } */
	return number_format($k);
}

function debug($v, $e=false) {
	global $login_user_id;
	if ($login_user_id==100000) {
		echo "<pre>";
		var_dump( $v);
		if($e) exit;
	}
}

function getparam($index=0, $default=0) {
	if (is_numeric($default)) {
		$v = abs(intval($_GET['param'][$index]));
	} else $v = strval($_GET['param'][$index]);
	return $v ? $v : $default;
}
function getpage() {
	$c = abs(intval($_GET['page']));
	return $c ? $c : 1;
}
function pagestring($count, $pagesize) {
	$p = new Pager($count, $pagesize, 'page');
	return array($pagesize, $p->offset, $p->genBasic());
}

function uencode($u) {
	return base64_encode(urlEncode($u));
}
function udecode($u) {
	return urlDecode(base64_decode($u));
}

/* share link */
function share_facebook($team) {
	global $login_user_id;
	global $INI;
	if ($team)  {
		$query = array(
				'u' => $INI['system']['wwwprefix'] . "/team.php?id={$team['id']}&r={$login_user_id}",
				't' => $team['title'],
		);
	}
	else {
		$query = array(
				'u' => $INI['system']['wwwprefix'] . "/r.php?r={$login_user_id}",
				't' => $INI['system']['sitename'] . '(' .$INI['system']['wwwprefix']. ')',
		);
	}

	$query = http_build_query($query);
	return 'http://www.facebook.com/sharer.php?'.$query;
}


function share_twitter($team) {
	global $login_user_id;
	global $INI;
	if ($team)  {
		$query = array(
				'status' => $INI['system']['wwwprefix'] . "/team.php?id={$team['id']}&r={$login_user_id}" . ' ' . $team['title'],
		);
	}
	else {
		$query = array(
				'status' => $INI['system']['wwwprefix'] . "/r.php?r={$login_user_id}" . ' ' . $INI['system']['sitename'] . '(' .$INI['system']['wwwprefix']. ')',
		);
	}

	$query = http_build_query($query);
	return 'http://twitter.com/?'.$query;
}
function share_renren($team) {
	global $login_user_id;
	global $INI;
	if ($team)  {
		$query = array(
				'link' => $INI['system']['wwwprefix'] . "/team.php?id={$team['id']}&r={$login_user_id}",
				'title' => $team['title'],
		);
	}
	else {
		$query = array(
				'link' => $INI['system']['wwwprefix'] . "/r.php?r={$login_user_id}",
				'title' => $INI['system']['sitename'] . '(' .$INI['system']['wwwprefix']. ')',
		);
	}

	$query = http_build_query($query);
	return 'http://share.renren.com/share/buttonshare.do?'.$query;
}

function share_kaixin($team) {
	global $login_user_id;
	global $INI;
	if ($team)  {
		$query = array(
				'rurl' => $INI['system']['wwwprefix'] . "/team.php?id={$team['id']}&r={$login_user_id}",
				'rtitle' => $team['title'],
				'rcontent' => strip_tags($team['summary']),
		);
	}
	else {
		$query = array(
				'rurl' => $INI['system']['wwwprefix'] . "/r.php?r={$login_user_id}",
				'rtitle' => $INI['system']['sitename'] . '(' .$INI['system']['wwwprefix']. ')',
				'rcontent' => $INI['system']['sitename'] . '(' .$INI['system']['wwwprefix']. ')',
		);
	}
	$query = http_build_query($query);
	return 'http://www.kaixin001.com/repaste/share.php?'.$query;
}

function share_douban($team) {
	global $login_user_id;
	global $INI;
	if ($team)  {
		$query = array(
				'url' => $INI['system']['wwwprefix'] . "/team.php?id={$team['id']}&r={$login_user_id}",
				'title' => $team['title'],
		);
	}
	else {
		$query = array(
				'url' => $INI['system']['wwwprefix'] . "/r.php?r={$login_user_id}",
				'title' => $INI['system']['sitename'] . '(' .$INI['system']['wwwprefix']. ')',
		);
	}
	$query = http_build_query($query);
	return 'http://www.douban.com/recommend/?'.$query;
}

function share_sina($team) {
	global $login_user_id;
	global $INI;
	if ($team)  {
		$query = array(
				'url' => $INI['system']['wwwprefix'] . "/team.php?id={$team['id']}&r={$login_user_id}",
				'title' => $team['title'],
		);
	}
	else {
		$query = array(
				'url' => $INI['system']['wwwprefix'] . "/r.php?r={$login_user_id}",
				'title' => $INI['system']['sitename'] . '(' .$INI['system']['wwwprefix']. ')',
		);
	}
	$query = http_build_query($query);
	return 'http://v.t.sina.com.cn/share/share.php?'.$query;
}

function share_mail($team) {
	global $login_user_id;
	global $INI;
	if (!$team) {
		$team = array(
				'title' => $INI['system']['sitename'] . '(' . $INI['system']['wwwprefix'] . ')',
		);
	}
	$pre[] = "Got a good webiste - {$INI['system']['sitename']}, they organise a great team-buy deal everyday, worth to check!";
	if ( $team['id'] ) {
		$pre[] = "Today's Deal: {$team['title']}";
		$pre[] = "Detail: {$team['summary']}";
		$pre[] = $INI['system']['wwwprefix'] . "/team.php?id={$team['id']}&r={$login_user_id}";
		$pre = mb_convert_encoding(join("\n\n", $pre), 'UTF-8', 'UTF-8');
		$sub = "Interested in: {$team['title']}";
	} else {
		$sub = $pre[] = $team['title'];
	}
	$sub = mb_convert_encoding($sub, 'UTF-8', 'UTF-8');
	$query = array( 'subject' => $sub, 'body' => $pre, );
	$query = http_build_query($query);
	return 'mailto:?'.$query;
}

function domainit($url) {
	if(strpos($url,'//')) { preg_match('#[//]([^/]+)#', $url, $m);
	} else { preg_match('#[//]?([^/]+)#', $url, $m); }
	return $m[1];
}

// that the recursive feature on mkdir() is broken with PHP 5.0.4 for
function RecursiveMkdir($path) {
	if (!file_exists($path)) {
		RecursiveMkdir(dirname($path));
		@mkdir($path, 0777);
	}
}

function resizeImage($originalImage,$toWidth,$toHeight){
	list($width, $height) = getimagesize($originalImage);
	$xscale=$width/$toWidth;
	$yscale=$height/$toHeight;
	if ($yscale>$xscale){
		$new_width = round($width * (1/$yscale));
		$new_height = round($height * (1/$yscale));
	}
	else {
		$new_width = round($width * (1/$xscale));
		$new_height = round($height * (1/$xscale));
	}
	$imageResized = imagecreatetruecolor($new_width, $new_height);
	$imageTmp     = imagecreatefromjpeg ($originalImage);
	imagecopyresampled($imageResized, $imageTmp, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	return $imageResized;
}



function resizeImageToThumnail($originalImage,$toWidth,$toHeight,$pathRez){
	// get image size of img
	$originalSize = getimagesize($originalImage);
	// image width
	$orgWidth = $originalSize[0];
	// image height
	$orgHeigh = $originalSize[1];

	/* $xscale=$orgWidth/$toWidth;
	 $yscale=$orgHeigh/$toHeight;
	 if ($yscale>$xscale){
	 $new_width = $xscale*($toWidth/$yscale);
	 $new_height = $toHeight;
	 }
	 else if ($xscale > $yscale) {
	 $new_width = $toHeight;
	 $new_height = $yscale*($toHeight/$xscale);
	 }else if($xscale == $yscale){
	 $new_width = $toWidth;
	 $new_height = $toHeight;
	 }*/
	$im = imagecreatefromjpeg ($originalImage) or // Read JPEG Image
	$im = imagecreatefrompng ($originalImage) or // or PNG Image
	$im = imagecreatefromgif ($originalImage) or // or GIF Image
	$im = false; // If image is not JPEG, PNG, or GIF

	if (!$im) {
		readfile ($originalImage);
	} else {
		// Create the resized image destination
		$thumb = ImageCreateTrueColor ($toWidth, $toHeight);
		// Copy from image source, resize it, and paste to image destination
		imagecopyresampled ($thumb, $im, 0, 0, 0, 0, $toWidth, $toHeight, $orgWidth, $orgHeigh);
		// Output resized image
		//@ImageJPEG ($thumb);
	}
	return imagejpeg ($thumb,$pathRez);
}


/*function save_thumnail($thumnailimage){
 $year = date('Y'); $day = date('md'); $n = time().rand(1000,9999).'a.jpg';
 $z = $_FILES[$thumnailimage];
 $y = resizeImage($z,50,40);
 }*/

//upload_image('upload_image', null, 'team');
function upload_image($inputname, $image=null, $type='team', $width=440) {
	$year = date('Y'); $day = date('md'); $n = time().rand(1000,9999).'.jpg';
	//$nresize = time().rand(1000,9999).'t.jpg';
	//$z = resizeImage($_FILES[$inputname],50,40);
	$z = $_FILES[$inputname];
	if ($z && strpos($z['type'], 'image')===0 && $z['error']==0) {

		if (!$image) {
			RecursiveMkdir( IMG_ROOT . '/' . "{$type}/{$year}/{$day}" );
			$image = "{$type}/{$year}/{$day}/{$n}";
			//$image_resize = "{$type}/{$year}/{$day}/{$nresize}";
			$path = IMG_ROOT . '/' . $image;
			//$path_resize = IMG_ROOT . '/' . $image_resize;
		} else {
			RecursiveMkdir( dirname(IMG_ROOT .'/' .$image) );
			$path = IMG_ROOT . '/' .$image;
			/*RecursiveMkdir( dirname(IMG_ROOT .'/' .$image_resize) );
			 $path = IMG_ROOT . '/' .$image_resize;*/
		}

		if ($type=='user') {
			Image::Convert($z['tmp_name'], $path, 48, 48, Image::MODE_CUT);
		}
		else if($type=='team') {
			move_uploaded_file($z['tmp_name'], $path);
			//chmod("$path", 0644);
			chmod("$path", 0777);
			/*move_uploaded_file(resizeImage($_FILES[$inputname],50,40), $path_resize);
			 chmod("$path_resize", 0644);*/
		}
		return $image;
	}
	return $image;
}

function upload_table_price($inputname,$id) {
	$link=null;
	$z = $_FILES[$inputname];
	$year = date('Y');
	$day = date('md');
	$pos=strpos($z['name'],'.');
	$name_file_upload=substr($z['name'],0,$pos);
	$name_type_upload=substr($z['name'],$pos);
	$name_img=$name_file_upload.'_'.$id.$name_type_upload;
	if ($z && $z['error']==0)
	{
		RecursiveMkdir( DIR_PARENT . '/upload' . "/{$year}/{$day}" );
		$link = "upload/{$year}/{$day}/{$name_img}";
		$path = DIR_PARENT . '/' .$link;
		move_uploaded_file($z['tmp_name'], $path);
		chmod("$path", 0777);
	}
	return $link;
}

function upload_image_resize($inputname, $image=null, $imageresize=null, $type='team') {
	$year = date('Y');
	$day = date('md');
	$nTime = time().rand(1000,9999);
	$n= $nTime.'.jpg';
	$nresize = $nTime.'rs.jpg';
	$z = $_FILES[$inputname];
	if ($z && strpos($z['type'], 'image')===0 && $z['error']==0) {

		if (!$image) {
			RecursiveMkdir( IMG_ROOT . '/' . "{$type}/{$year}/{$day}" );
			$image = "{$type}/{$year}/{$day}/{$n}";
			$image_resize = "{$type}/{$year}/{$day}/{$nresize}";
			$path = IMG_ROOT . '/' . $image;
			$path_resize = IMG_ROOT . '/' . $image_resize;
		}else {
			RecursiveMkdir( dirname(IMG_ROOT .'/' .$image) );
			$path = IMG_ROOT . '/' .$image;
			RecursiveMkdir( dirname(IMG_ROOT .'/' .$imageresize) );
			$path_resize = IMG_ROOT . '/' .$imageresize;
		}

		if($type=='team') {
			//upload basic image
			move_uploaded_file($z['tmp_name'], $path);
			chmod("$path_resize", 0644);
			resizeImageToThumnail($path, 270,177,$path_resize);
			//chmod("$path_resize", 0644);
			chmod("$path_resize", 0777);
		}
		return $image;
	}
	return $image;
}



function user_image($image=null) {
	global $INI;
	if (!$image) {
		return $INI['system']['imgprefix'] . '/static/img/user-no-avatar.gif';
	}
	return $INI['system']['imgprefix'] . '/static/' .$image;
}

function team_image($image=null) {
	global $INI;
	if (!$image) return null;
	return $INI['system']['imgprefix'] . '/static/' .$image;
}

function userreview($content) {
	$line = preg_split("/[\n\r]+/", $content, -1, PREG_SPLIT_NO_EMPTY);
	$r = '<ul>';
	foreach($line AS $one) {
		$c = explode('|', htmlspecialchars($one));
		$c[2] = $c[2] ? $c[2] : '/';
		$r .= "<li>{$c[0]}<span>--<a href=\"{$c[2]}\" target=\"_blank\">{$c[1]}</a>";
		$r .= ($c[3] ? "({$c[3]})":'') . "</span></li>\n";
	}
	return $r.'</ul>';
}

function team_state(&$team) {
	//$team['close_time'] = 0;
	if ( $team['now_number'] >= $team['min_number'] ) {
		if ($team['max_number']>0) {
			if($team['promotion_id'] != null && $team['promotion_id'] != 0){
				if ( $team['number_promotion_success'] >= $team['max_number'] ){
					if ($team['close_time']==0){
						$team['close_time'] = time();
						Table::UpdateCache('team', $team['id'], array(
									'close_time' => time(),
									'isClosed'   => 'Y',
						));
					}
					return $team['state'] = 'soldout';
				}
			}else if($team['promotion_id'] == null || $team['promotion_id'] == 0){
				if ( $team['now_number']>=$team['max_number'] ){
					if ($team['close_time']==0) {
						$team['close_time'] = time();
						Table::UpdateCache('team', $team['id'], array(
										'close_time' => time(),
										'isClosed'   => 'Y',
						));

					}
					return $team['state'] = 'soldout';
				}
			}
		}


		if ( $team['end_time'] <= time() ) {
			if($team['close_time']==0){
				$team['close_time'] = $team['end_time'];
				Table::UpdateCache('team', $team['id'], array(
									'close_time' => $team['end_time'],
									'isClosed'   => 'Y',
				));

			}
			return $team['state'] = 'success';
		}
	} else {
		if ( $team['end_time'] <= time() ) {
			if($team['close_time']==0){
				$team['close_time'] = $team['end_time'];
				Table::UpdateCache('team', $team['id'], array(
										'close_time' => $team['end_time'],
										'isClosed'   => 'Y',
				));

			}
			return $team['state'] = 'failure';
		}
	}
	return $team['state'] = 'none';
}

function current_team($city_id=0) {
	$today = strtotime(date('Y-m-d'));
	//settype($city_id, 'array'); $city_id[] = 0;
	$cond = array(
	/*'city_id' => $city_id,*/ /*khong can tim deal theo city*/
			"begin_time <= {$today}",
			"end_time > {$today}",
			"close_time" => 0,
			'active' => 'Y',
			'priority' => 'Y'
			);

			//comment by Vudinh 18052011
			/*$team = DB::LimitQuery('team', array(
			 'condition' => $cond,
			 'one' => true,
			 'order' => 'ORDER BY priority DESC, isshowhomepage DESC,begin_time DESC,id DESC',
			 ));*/
			//end comment
			$teamPriority = DB::LimitQuery('team', array(
		'condition' => $cond,
		'one' => true,
			));
			if($teamPriority){
				return $teamPriority;
			}else{
				//begin random deal (Vudinh 18052011)
				unset($cond['priority']);
				$teams = DB::LimitQuery('team', array(
			'condition' => $cond,
				));
				$t_ids = Utility::GetColumn($teams, 'id');
				$rand_keys = array_rand($t_ids,1);
				$team_id = $t_ids[$rand_keys];
				$team = Table::FetchForce('team', $team_id);
				//end random
			}
			return $team;
}

function state_explain($team, $error='false') {
	$state = team_state($team);
	$state = strtolower($state);
	switch($state) {
		case 'none': return 'is active';
		case 'soldout': return 'is soldout';
		case 'failure': if($error) return 'This deal is failed';
		case 'success': return 'is tipped';
		default: return 'is over';
	}
}

function get_zones($zone=null) {
	$zones = array(
		'city' => 'City',
		'group' => 'Deals category',
		'public' => 'Bulletin',
		'grade' => 'User grade',
			'express' => 'Express',
	);
	if ( !$zone ) return $zones;
	if (!in_array($zone, array_keys($zones))) {
		$zone = 'city';
	}
	return array($zone, $zones[$zone]);
}

function down_xls($data, $keynames, $name='dataxls') {
	$xls[] = implode("\t", array_values($keynames));
	foreach($data As $o) {
		$line = array();
		foreach($keynames AS $k=>$v) {
			$line[] = $o[$k];
		}
		$xls[] = implode("\t", $line);
	}
	$xls = join("\n", $xls);
	header('Content-Disposition: attachment; filename="'.$name.'.xls"');
	die(mb_convert_encoding($xls,'UTF-8','UTF-8'));
}

function option_category($zone='city', $force=false) {
	$cache = $force ? 0 : 86400*30;
	$cates = DB::LimitQuery('category', array(
		'condition' => array( 'zone' => $zone, ),
		'cache' => $cache,
	));
	return Utility::OptionArray($cates, 'id', 'name');
}

function getServerUrl() {
	$protocol = 'http';
	if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') {
		$protocol = 'https';
	}
	$host = $_SERVER['HTTP_HOST'];
	$baseUrl = $protocol . '://' . $host;
	if (substr($baseUrl, -1)=='/') {
		$baseUrl = substr($baseUrl, 0, strlen($baseUrl)-1);
	}
	return $baseUrl;
}
function substrwords($text,$maxchar,$end='...'){
	if(strlen($text)>$maxchar){
		$words=explode(" ",$text);
		$output = '';
		$i=0;
		while(1){
			$length = (strlen($output)+strlen($words[$i]));
			if($length>$maxchar){
				break;
			}else{
				$output = $output." ".$words[$i];
				++$i;
			};
		};
	}else{
		$output = $text;
	}
	return $output.$end;
}
/*
 * function safe xss-VietHai-6/6/2011
 * example:
 $text = htmlentities($text);
 $text = str_replace('&lt;b&gt;', '<b>', $text);
 $text = str_replace('&lt;/b&gt;', '<­ /b>', $text);

 */
function safeXSS( $value ) {
	$value=htmlentities( $value, ENT_QUOTES, 'utf-8' );
	return $value;
}
function clean_input($array){
	if(count($array)){
		foreach ($array as $key => $value) {
			$array[$key]=htmlentities($value, ENT_QUOTES, 'UTF-8');
		}
	}
	return $array;}
	function desafeXSS($text) {
		$value= html_entity_decode($text, ENT_QUOTES, 'UTF-8');
		return $value;
	}

	//end function safe xss

	/*
	 * function filter phone-VietHai-6/6/2011
	 *
	 */
	function filterPhoneDatabase($phone)
	{
		if(preg_match('/\(([0-9]{3})\)[\s]*([0-9]{3})[\-]{1}([0-9]{1,10})$/',$phone,$matches)>0);
		{
			if(strstr($matches[1],'0'))
			$phone= "84".trim(ltrim($matches[1],'0').$matches[2].$matches[3]);
			else
			$phone= "84".trim($matches[1].$matches[2].$matches[3]);
		}
		return $phone;
	}
	//end function filter phone

	/*
	 * function prevent Cross Site Request Forgery-VietHai-6/6/2011
	 *
	 */
	function Token()
	{
		$token=sha1(uniqid(mt_rand(). $salt,true));
		$_SESSION['tokenbuy'] = $token;
		$_SESSION['token-expires'] = time() + 600;//10 minute
		return $token;
	}

	function isValidFormHash($hash,$clear=true){
		$valid=true;
		if (!empty($hash)) {
			if (isset($_SESSION['tokenbuy'])) {
				if($_SESSION['tokenbuy']!=$hash || $_SESSION['token-expires']< time())
				$valid=false;
				if ($clear) unset($_SESSION['tokenbuy']);
			}
		}
		return $valid;
	}
	//check null and empty
	function IsNullAndEmpty($question){
		return (isset($question) && trim($question)!='');
	}

	//check ip
	function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	function catchu($value, $length)
	{
		if($value!=''){
			if(is_array($value)) list($string, $match_to) = $value;
			else { $string = $value; $match_to = $value{0}; }

			$match_start = stristr($string, $match_to);
			$match_compute = strlen($string) - strlen($match_start);

			if (strlen($string) > $length)
			{
				if ($match_compute < ($length - strlen($match_to)))
				{
					$pre_string = substr($string, 0, $length);
					$pos_end = strrpos($pre_string, " ");
					if($pos_end === false) $string = $pre_string."...";
					else $string = substr($pre_string, 0, $pos_end)."...";
				}
				else if ($match_compute > (strlen($string) - ($length - strlen($match_to))))
				{
					$pre_string = substr($string, (strlen($string) - ($length - strlen($match_to))));
					$pos_start = strpos($pre_string, " ");
					$string = "...".substr($pre_string, $pos_start);
					if($pos_start === false) $string = "...".$pre_string;
					else $string = "...".substr($pre_string, $pos_start);
				}
				else
				{
					$pre_string = substr($string, ($match_compute - round(($length / 3))), $length);
					$pos_start = strpos($pre_string, " "); $pos_end = strrpos($pre_string, " ");
					$string = "...".substr($pre_string, $pos_start, $pos_end)."...";
					if($pos_start === false && $pos_end === false) $string = "...".$pre_string."...";
					else $string = "...".substr($pre_string, $pos_start, $pos_end)."...";
				}

				$match_start = stristr($string, $match_to);
				$match_compute = strlen($string) - strlen($match_start);
			}

			return $string;
		}else{
			return $string ='';
		}
	}

	//function gettimevn
	function getTimeVn()
	{
		$now = time() + 7 * 3600;
		$ar = localtime($now,true);
		if ($ar['tm_isdst'])
		{
			$now += 3600;
		}
		return $now;
	}
	//end function

	//function formatTimeVn()
	function formatTimeVn($time)
	{
		$tach = explode(' ',gmstrftime('%c',$time));
		switch ($tach[0])
		{
			case 'Mon': $tach[0] = $lang['thu2']; break;
			case 'Tue': $tach[0] = $lang['thu3']; break;
			case 'Wed': $tach[0] = $lang['thu4']; break;
			case 'Thu': $tach[0] = $lang['thu5']; break;
			case 'Fri': $tach[0] = $lang['thu6']; break;
			case 'Sat': $tach[0] = $lang['thu7']; break;
			case 'Sun': $tach[0] = $lang['chu_nhat']; break;
		}
		switch ($tach[1])
		{
			case 'Jan': $tach[1] = '1'; break;
			case 'Feb': $tach[1] = '2'; break;
			case 'Mar': $tach[1] = '3'; break;
			case 'Apr': $tach[1] = '4'; break;
			case 'May': $tach[1] = '5'; break;
			case 'Jun': $tach[1] = '6'; break;
			case 'Jul': $tach[1] = '7'; break;
			case 'Aug': $tach[1] = '8'; break;
			case 'Sep': $tach[1] = '9'; break;
			case 'Oct': $tach[1] = '10'; break;
			case 'Nov': $tach[1] = '11'; break;
			case 'Dec': $tach[1] = '12'; break;
		}
		return $tach[0] . ' ' . $lang['ngay'] . ' ' . $tach[2] . ' ' . $lang['thang'] . ' ' . $tach[1] . ' ' . $tach[3] . ' ' . $tach[4];
	}
	//end function formatTimeVn

	//function return home facebook or home normal
	function returnHome($id,$title)
	{

		if(isset($_GET['ver']) &&$_GET['ver']=='fb')
		Utility::Redirect (WEB_ROOT . '/fb/');
		else
		Utility::Redirect (  WEB_ROOT . "/team.php?id={$id}&title={$title}"  );
	}

	function returnBuy($id,$title)
	{
		if(isset($_GET['ver']) && $_GET['ver']=='fb')
		Utility::Redirect ( WEB_ROOT . "/team/buy.php?ver=fb&id={$id}&title={$title}" );
		else
		Utility::Redirect ( WEB_ROOT . "/team/buy.php?id={$id}&title={$title}" );
	}


	//end function
	function rewriteTitle($a,$b)
	{
		if($a!=null)
		$title = rewrite($a);
		else
		$title = rewrite($b);
		return $title;
	}
	function includeteamplate($filenormal,$filefb)
	{
		if(isset($_GET['ver']) &&$_GET['ver']=='fb')
		die ( include template ($filefb) );
		else
		die ( include template($filenormal));
	}

	//function use for autocomplete
	function array_to_json( $array ){

		if( !is_array( $array ) ){
			return false;
		}

		$associative = count( array_diff( array_keys($array), array_keys( array_keys( $array )) ));
		if( $associative ){

			$construct = array();
			foreach( $array as $key => $value ){

				// We first copy each key/value pair into a staging array,
				// formatting each key and value properly as we go.

				// Format the key:
				if( is_numeric($key) ){
					$key = "key_$key";
				}
				$key = "\"".$key."\"";

				// Format the value:
				if( is_array( $value )){
					$value = array_to_json( $value );
				} else if( !is_numeric( $value ) || is_string( $value ) ){
					$value = "\"".$value."\"";
				}

				// Add to staging array:
				$construct[] = "$key: $value";
			}

			// Then we collapse the staging array into the JSON form:
			$result = "{ " . implode( ", ", $construct ) . " }";

		} else { // If the array is a vector (not associative):

			$construct = array();
			foreach( $array as $value ){

				// Format the value:
				if( is_array( $value )){
					$value = array_to_json( $value );
				} else if( !is_numeric( $value ) || is_string( $value ) ){
					$value = "'".$value."'";
				}

				// Add to staging array:
				$construct[] = $value;
			}

			// Then we collapse the staging array into the JSON form:
			$result = "[ " . implode( ", ", $construct ) . " ]";
		}

		return $result;
	}
	//end function

	/* function create text node xml */
	function createTextNode($xml,$parent,$child,$content)
	{
		$url=$xml->createElement($child);
		$parent->appendChild($url);
		$textUrl=$xml->createTextNode($content);
		return $url->appendChild($textUrl);
	}

	/* functon filter detail facebook version */
	function filterDetails($detail)
	{
		$detail=preg_replace('/<p style="[^"]*"/is', '<p ',$detail);
		$detail=preg_replace('/<img style="[^"]*"/is', '<img ', $detail);
		return $detail;
	}


	function mobile_device_detect($mobile,$desktop){
		$mobile_browser   = false; // set mobile browser as false till we can prove otherwise
		$user_agent       = $_SERVER['HTTP_USER_AGENT']; // get the user agent value - this should be cleaned to ensure no nefarious input gets executed
		$accept           = $_SERVER['HTTP_ACCEPT']; // get the content accept value - this should be cleaned to ensure no nefarious input gets executed
		$status=false;
		switch(true){ // using a switch against the following statements which could return true is more efficient than the previous method of using if statements
			case (preg_match('/ipad/i',$user_agent)); // we find the word ipad in the user agent
			$status=true;
			break; // break out and skip the rest if we've had a match on the ipad // this goes before the iphone to catch it else it would return on the iphone instead

			case (preg_match('/ipod/i',$user_agent)); // we find the words iphone or ipod in the user agent
			$status=true;
			break; // break out and skip the rest if we've had a match on the iphone or ipod

			case (preg_match('/iphone/i',$user_agent)); // we find the words iphone or ipod in the user agent
			$status=true;
			break; // break out and skip the rest if we've had a match on the iphone or ipod

			case (preg_match('/android/i',$user_agent));  // we find android in the user agent
			$status=true;
			break; // break out and skip the rest if we've had a match on android

			case (preg_match('/nokia/i',$user_agent)); // we find the words iphone or ipod in the user agent
			$status=true;
			break; // break out and skip the rest if we've had a match on the iphone or ipod

			case (preg_match('/opera mini/i',$user_agent)); // we find opera mini in the user agent
			$status=true;
			break; // break out and skip the rest if we've had a match on opera

			case (preg_match('/blackberry/i',$user_agent)); // we find blackberry in the user agent
			$status=true;
			break; // break out and skip the rest if we've had a match on blackberry

			case (preg_match('/(pre\/|palm os|palm|hiptop|avantgo|plucker|xiino|blazer|elaine)/i',$user_agent)); // we find palm os in the user agent - the i at the end makes it case insensitive
			$status=true;
			break; // break out and skip the rest if we've had a match on palm os

			case (preg_match('/(iris|3g_t|windows ce|opera mobi|windows ce; smartphone;|windows ce; iemobile)/i',$user_agent)); // we find windows mobile in the user agent - the i at the end makes it case insensitive
			$status=true;
			break; // break out and skip the rest if we've had a match on windows

			case (preg_match('/(mini 9.5|vx1000|lge |m800|e860|u940|ux840|compal|wireless| mobi|ahong|lg380|lgku|lgu900|lg210|lg47|lg920|lg840|lg370|sam-r|mg50|s55|g83|t66|vx400|mk99|d615|d763|el370|sl900|mp500|samu3|samu4|vx10|xda_|samu5|samu6|samu7|samu9|a615|b832|m881|s920|n210|s700|c-810|_h797|mob-x|sk16d|848b|mowser|s580|r800|471x|v120|rim8|c500foma:|160x|x160|480x|x640|t503|w839|i250|sprint|w398samr810|m5252|c7100|mt126|x225|s5330|s820|htil-g1|fly v71|s302|-x113|novarra|k610i|-three|8325rc|8352rc|sanyo|vx54|c888|nx250|n120|mtk |c5588|s710|t880|c5005|i;458x|p404i|s210|c5100|teleca|s940|c500|s590|foma|samsu|vx8|vx9|a1000|_mms|myx|a700|gu1100|bc831|e300|ems100|me701|me702m-three|sd588|s800|8325rc|ac831|mw200|brew |d88|htc\/|htc_touch|355x|m50|km100|d736|p-9521|telco|sl74|ktouch|m4u\/|me702|8325rc|kddi|phone|lg |sonyericsson|samsung|240x|x320|vx10|nokia|sony cmd|motorola|up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|pocket|kindle|mobile|psp|treo)/i',$user_agent)); // check if any of the values listed create a match on the user agent - these are some of the most common terms used in agents to identify them as being mobile devices - the i at the end makes it case insensitive
			$status=true;
			break; // break out and skip the rest if we've preg_match on the user agent returned true

			case ((strpos($accept,'text/vnd.wap.wml')>0)||(strpos($accept,'application/vnd.wap.xhtml+xml')>0)); // is the device showing signs of support for text/vnd.wap.wml or application/vnd.wap.xhtml+xml
			$status=true;
			break; // break out and skip the rest if we've had a match on the content accept headers

			case (isset($_SERVER['HTTP_X_WAP_PROFILE'])||isset($_SERVER['HTTP_PROFILE'])); // is the device giving us a HTTP_X_WAP_PROFILE or HTTP_PROFILE header - only mobile devices would do this
			$status=true;
			break; // break out and skip the final step if we've had a return true on the mobile specfic headers

			case (in_array(strtolower(substr($user_agent,0,4)),array('1207'=>'1207','3gso'=>'3gso','4thp'=>'4thp','501i'=>'501i','502i'=>'502i','503i'=>'503i','504i'=>'504i','505i'=>'505i','506i'=>'506i','6310'=>'6310','6590'=>'6590','770s'=>'770s','802s'=>'802s','a wa'=>'a wa','acer'=>'acer','acs-'=>'acs-','airn'=>'airn','alav'=>'alav','asus'=>'asus','attw'=>'attw','au-m'=>'au-m','aur '=>'aur ','aus '=>'aus ','abac'=>'abac','acoo'=>'acoo','aiko'=>'aiko','alco'=>'alco','alca'=>'alca','amoi'=>'amoi','anex'=>'anex','anny'=>'anny','anyw'=>'anyw','aptu'=>'aptu','arch'=>'arch','argo'=>'argo','bell'=>'bell','bird'=>'bird','bw-n'=>'bw-n','bw-u'=>'bw-u','beck'=>'beck','benq'=>'benq','bilb'=>'bilb','blac'=>'blac','c55/'=>'c55/','cdm-'=>'cdm-','chtm'=>'chtm','capi'=>'capi','cond'=>'cond','craw'=>'craw','dall'=>'dall','dbte'=>'dbte','dc-s'=>'dc-s','dica'=>'dica','ds-d'=>'ds-d','ds12'=>'ds12','dait'=>'dait','devi'=>'devi','dmob'=>'dmob','doco'=>'doco','dopo'=>'dopo','el49'=>'el49','erk0'=>'erk0','esl8'=>'esl8','ez40'=>'ez40','ez60'=>'ez60','ez70'=>'ez70','ezos'=>'ezos','ezze'=>'ezze','elai'=>'elai','emul'=>'emul','eric'=>'eric','ezwa'=>'ezwa','fake'=>'fake','fly-'=>'fly-','fly_'=>'fly_','g-mo'=>'g-mo','g1 u'=>'g1 u','g560'=>'g560','gf-5'=>'gf-5','grun'=>'grun','gene'=>'gene','go.w'=>'go.w','good'=>'good','grad'=>'grad','hcit'=>'hcit','hd-m'=>'hd-m','hd-p'=>'hd-p','hd-t'=>'hd-t','hei-'=>'hei-','hp i'=>'hp i','hpip'=>'hpip','hs-c'=>'hs-c','htc '=>'htc ','htc-'=>'htc-','htca'=>'htca','htcg'=>'htcg','htcp'=>'htcp','htcs'=>'htcs','htct'=>'htct','htc_'=>'htc_','haie'=>'haie','hita'=>'hita','huaw'=>'huaw','hutc'=>'hutc','i-20'=>'i-20','i-go'=>'i-go','i-ma'=>'i-ma','i230'=>'i230','iac'=>'iac','iac-'=>'iac-','iac/'=>'iac/','ig01'=>'ig01','im1k'=>'im1k','inno'=>'inno','iris'=>'iris','jata'=>'jata','java'=>'java','kddi'=>'kddi','kgt'=>'kgt','kgt/'=>'kgt/','kpt '=>'kpt ','kwc-'=>'kwc-','klon'=>'klon','lexi'=>'lexi','lg g'=>'lg g','lg-a'=>'lg-a','lg-b'=>'lg-b','lg-c'=>'lg-c','lg-d'=>'lg-d','lg-f'=>'lg-f','lg-g'=>'lg-g','lg-k'=>'lg-k','lg-l'=>'lg-l','lg-m'=>'lg-m','lg-o'=>'lg-o','lg-p'=>'lg-p','lg-s'=>'lg-s','lg-t'=>'lg-t','lg-u'=>'lg-u','lg-w'=>'lg-w','lg/k'=>'lg/k','lg/l'=>'lg/l','lg/u'=>'lg/u','lg50'=>'lg50','lg54'=>'lg54','lge-'=>'lge-','lge/'=>'lge/','lynx'=>'lynx','leno'=>'leno','m1-w'=>'m1-w','m3ga'=>'m3ga','m50/'=>'m50/','maui'=>'maui','mc01'=>'mc01','mc21'=>'mc21','mcca'=>'mcca','medi'=>'medi','meri'=>'meri','mio8'=>'mio8','mioa'=>'mioa','mo01'=>'mo01','mo02'=>'mo02','mode'=>'mode','modo'=>'modo','mot '=>'mot ','mot-'=>'mot-','mt50'=>'mt50','mtp1'=>'mtp1','mtv '=>'mtv ','mate'=>'mate','maxo'=>'maxo','merc'=>'merc','mits'=>'mits','mobi'=>'mobi','motv'=>'motv','mozz'=>'mozz','n100'=>'n100','n101'=>'n101','n102'=>'n102','n202'=>'n202','n203'=>'n203','n300'=>'n300','n302'=>'n302','n500'=>'n500','n502'=>'n502','n505'=>'n505','n700'=>'n700','n701'=>'n701','n710'=>'n710','nec-'=>'nec-','nem-'=>'nem-','newg'=>'newg','neon'=>'neon','netf'=>'netf','noki'=>'noki','nzph'=>'nzph','o2 x'=>'o2 x','o2-x'=>'o2-x','opwv'=>'opwv','owg1'=>'owg1','opti'=>'opti','oran'=>'oran','p800'=>'p800','pand'=>'pand','pg-1'=>'pg-1','pg-2'=>'pg-2','pg-3'=>'pg-3','pg-6'=>'pg-6','pg-8'=>'pg-8','pg-c'=>'pg-c','pg13'=>'pg13','phil'=>'phil','pn-2'=>'pn-2','pt-g'=>'pt-g','palm'=>'palm','pana'=>'pana','pire'=>'pire','pock'=>'pock','pose'=>'pose','psio'=>'psio','qa-a'=>'qa-a','qc-2'=>'qc-2','qc-3'=>'qc-3','qc-5'=>'qc-5','qc-7'=>'qc-7','qc07'=>'qc07','qc12'=>'qc12','qc21'=>'qc21','qc32'=>'qc32','qc60'=>'qc60','qci-'=>'qci-','qwap'=>'qwap','qtek'=>'qtek','r380'=>'r380','r600'=>'r600','raks'=>'raks','rim9'=>'rim9','rove'=>'rove','s55/'=>'s55/','sage'=>'sage','sams'=>'sams','sc01'=>'sc01','sch-'=>'sch-','scp-'=>'scp-','sdk/'=>'sdk/','se47'=>'se47','sec-'=>'sec-','sec0'=>'sec0','sec1'=>'sec1','semc'=>'semc','sgh-'=>'sgh-','shar'=>'shar','sie-'=>'sie-','sk-0'=>'sk-0','sl45'=>'sl45','slid'=>'slid','smb3'=>'smb3','smt5'=>'smt5','sp01'=>'sp01','sph-'=>'sph-','spv '=>'spv ','spv-'=>'spv-','sy01'=>'sy01','samm'=>'samm','sany'=>'sany','sava'=>'sava','scoo'=>'scoo','send'=>'send','siem'=>'siem','smar'=>'smar','smit'=>'smit','soft'=>'soft','sony'=>'sony','t-mo'=>'t-mo','t218'=>'t218','t250'=>'t250','t600'=>'t600','t610'=>'t610','t618'=>'t618','tcl-'=>'tcl-','tdg-'=>'tdg-','telm'=>'telm','tim-'=>'tim-','ts70'=>'ts70','tsm-'=>'tsm-','tsm3'=>'tsm3','tsm5'=>'tsm5','tx-9'=>'tx-9','tagt'=>'tagt','talk'=>'talk','teli'=>'teli','topl'=>'topl','hiba'=>'hiba','up.b'=>'up.b','upg1'=>'upg1','utst'=>'utst','v400'=>'v400','v750'=>'v750','veri'=>'veri','vk-v'=>'vk-v','vk40'=>'vk40','vk50'=>'vk50','vk52'=>'vk52','vk53'=>'vk53','vm40'=>'vm40','vx98'=>'vx98','virg'=>'virg','vite'=>'vite','voda'=>'voda','vulc'=>'vulc','w3c '=>'w3c ','w3c-'=>'w3c-','wapj'=>'wapj','wapp'=>'wapp','wapu'=>'wapu','wapm'=>'wapm','wig '=>'wig ','wapi'=>'wapi','wapr'=>'wapr','wapv'=>'wapv','wapy'=>'wapy','wapa'=>'wapa','waps'=>'waps','wapt'=>'wapt','winc'=>'winc','winw'=>'winw','wonu'=>'wonu','x700'=>'x700','xda2'=>'xda2','xdag'=>'xdag','yas-'=>'yas-','your'=>'your','zte-'=>'zte-','zeto'=>'zeto','acs-'=>'acs-','alav'=>'alav','alca'=>'alca','amoi'=>'amoi','aste'=>'aste','audi'=>'audi','avan'=>'avan','benq'=>'benq','bird'=>'bird','blac'=>'blac','blaz'=>'blaz','brew'=>'brew','brvw'=>'brvw','bumb'=>'bumb','ccwa'=>'ccwa','cell'=>'cell','cldc'=>'cldc','cmd-'=>'cmd-','dang'=>'dang','doco'=>'doco','eml2'=>'eml2','eric'=>'eric','fetc'=>'fetc','hipt'=>'hipt','http'=>'http','ibro'=>'ibro','idea'=>'idea','ikom'=>'ikom','inno'=>'inno','ipaq'=>'ipaq','jbro'=>'jbro','jemu'=>'jemu','java'=>'java','jigs'=>'jigs','kddi'=>'kddi','keji'=>'keji','kyoc'=>'kyoc','kyok'=>'kyok','leno'=>'leno','lg-c'=>'lg-c','lg-d'=>'lg-d','lg-g'=>'lg-g','lge-'=>'lge-','libw'=>'libw','m-cr'=>'m-cr','maui'=>'maui','maxo'=>'maxo','midp'=>'midp','mits'=>'mits','mmef'=>'mmef','mobi'=>'mobi','mot-'=>'mot-','moto'=>'moto','mwbp'=>'mwbp','mywa'=>'mywa','nec-'=>'nec-','newt'=>'newt','nok6'=>'nok6','noki'=>'noki','o2im'=>'o2im','opwv'=>'opwv','palm'=>'palm','pana'=>'pana','pant'=>'pant','pdxg'=>'pdxg','phil'=>'phil','play'=>'play','pluc'=>'pluc','port'=>'port','prox'=>'prox','qtek'=>'qtek','qwap'=>'qwap','rozo'=>'rozo','sage'=>'sage','sama'=>'sama','sams'=>'sams','sany'=>'sany','sch-'=>'sch-','sec-'=>'sec-','send'=>'send','seri'=>'seri','sgh-'=>'sgh-','shar'=>'shar','sie-'=>'sie-','siem'=>'siem','smal'=>'smal','smar'=>'smar','sony'=>'sony','sph-'=>'sph-','symb'=>'symb','t-mo'=>'t-mo','teli'=>'teli','tim-'=>'tim-','tosh'=>'tosh','treo'=>'treo','tsm-'=>'tsm-','upg1'=>'upg1','upsi'=>'upsi','vk-v'=>'vk-v','voda'=>'voda','vx52'=>'vx52','vx53'=>'vx53','vx60'=>'vx60','vx61'=>'vx61','vx70'=>'vx70','vx80'=>'vx80','vx81'=>'vx81','vx83'=>'vx83','vx85'=>'vx85','wap-'=>'wap-','wapa'=>'wapa','wapi'=>'wapi','wapp'=>'wapp','wapr'=>'wapr','webc'=>'webc','whit'=>'whit','winw'=>'winw','wmlb'=>'wmlb','xda-'=>'xda-',))); // check against a list of trimmed user agents to see if we find a match
			$status=true;
			break; // break even though it's the last statement in the switch so there's nothing to break away from but it seems better to include it than exclude it
		} // ends the switch
		return $status;
	}

	/* remove slash */
	function strip_slashes_recursive($str)
	{
		while(strchr($str,'\\')) {
			$str = stripslashes($str);
		}
		return $str;
	}

	/* function convert string to interger*/
	function convert_to_number($num)
	{
		return abs(intval($num));
	}

	/* function convert phone*/
	function convert_mobile($mobile)
	{
		$mobile1=substr($mobile,0,3);
		$mobile2=substr($mobile,3,3);
		$mobile3=substr($mobile,6,strlen($mobile)-6);
		$rs='('.$mobile1.') '.$mobile2.'-'.$mobile3;
		return $rs;
	}

	function replaceNull($a)
	{
		return  $a=($a==null)?'&nbsp;':$a;
	}



	function filterTitle($title)
	{
		
		$title=str_replace(" -","",$title);
		$title=str_replace("(","",$title);
		$title=str_replace(")","",$title);
		$title=str_replace("%","",$title);
		$title=str_replace(",","",$title);
		$title=str_replace("&","",$title);
		$title=str_replace("...","",$title);
		$title=trim(stripUnicode($title));
		$title=str_replace(" ","-",$title);
		$title=mb_strtolower($title,'utf-8');
		return $title;
	}
