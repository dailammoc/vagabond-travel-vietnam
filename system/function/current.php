<?php
function current_frontend() {
	global $INI;
	$a = array(
			'/index.php' => 'Giá tốt hiện nay',
			'/team/index.php' => 'Deal trước đây',
			'/team/future_index.php' => 'Deal sắp tới',
			'/help/tour.php' => 'Hướng dẫn mua hàng',
			'/subscribe.php' => 'Nhận thông tin',
	);
	if (abs(intval($INI['system']['forum']))) {
		unset($a['/subscribe.php']);
		$a['/forum/index.php'] = 'Diễn đàn';
	}
	$r = $_SERVER['REQUEST_URI'];
	if (preg_match('#/team#',$r)) $l = '/team/index.php';
	elseif (preg_match('#/help#',$r)) $l = '/help/tour.php';
	elseif (preg_match('#/subscribe#',$r)) $l = '/subscribe.php';
	else $l = '/index.php';
	return current_link(null, $a);
}

function current_frontend2() {
	global $INI;
	if(isset($_SESSION['iframe']))
		$a = array(
				'/index_if.php' => "TRANG CHỦ",
				'/team/tourist.php' =>"DEAL DU LỊCH",
				'/team/cur_index.php' => "DEAL GẦN ĐÂY",
				'http://tonghopdeal.net' => "TỒNG HỢP DEAL",
				//'/help/tour.php' =>"HƯỚNG DẪN",
		);
	else
		$a = array(
				'/index.php' => "TRANG CHỦ",
				'/team/tourist.php' =>"DEAL DU LỊCH",
				'/team/cur_index.php' => "DEAL GẦN ĐÂY",
				'http://tonghopdeal.ne' => "TỒNG HỢP DEAL",
				//'/help/tour.php' =>"HƯỚNG DẪN",
		);
	if (abs(intval($INI['system']['forum']))) {
		unset($a['/subscribe.php']);
		$a['/forum/index.php'] = 'Diễn dàn';
	}
	$r = $_SERVER['REQUEST_URI'];
	if (preg_match('#/team#',$r)) $l = '/team/index.php';
	elseif (preg_match('#/help#',$r)) $l = '/help/tour.php';
	else $l = '/index.php';
	$l2='/index.php';
	return current_link2($l2, $a);
}

function current_backend() {
	global $INI;
	//$login_user_id=$_SESSION['user_id'];
	$user_record = Table::Fetch('user',$_SESSION['user_id']);
	if($user_record['manager']=='Y'||$user_record['id']==1)
	{
		$a = array(
				'/manage/misc/index.php' => 'Home',
				'/manage/team/index.php' => 'Deal',
				'/manage/order/index.php' => 'Đơn hàng',
				'/manage/coupon/index.php' => $INI['system']['couponname'],
				'/manage/user/index.php' => 'Thành viên',
				'/manage/partner/index.php' => 'Đối tác',
				'/manage/market/index.php' => 'Marketing',
				'/manage/category/index.php' => 'Danh mục',
				'/manage/system/index.php' => 'Hệ thống',
				'/manage/agent/index.php' => 'Agent',
				'/manage/express/index.php' => 'Express',
				//'/manage/card/index.php' => 'Card',
				'/manage/enterprise/list.php' => 'Enterprise',
				'/manage/promotion/advertise.php' => 'Khuyến mãi',
				'/account/logout.php' => 'Thoát',
		);
	}
	else
	{
		$a = array(
				'/manage/misc/index.php' => 'Home',
				'/manage/team/index.php' => 'Deal',
				'/manage/order/index.php' => 'Đơn hàng',
				'/manage/coupon/index.php' => $INI['system']['couponname'],
				'/manage/user/index.php' => 'Thành viên',
				'/manage/partner/index.php' => 'Đối tác',
				'/manage/market/index.php' => 'Marketing',
				'/manage/category/index.php' => 'Danh mục',
				'/manage/system/index.php' => 'Hệ thống',
				'/manage/express/index.php' => 'Express',
				//'/manage/card/index.php' => 'Card',
				'/manage/enterprise/list.php' => 'Enterprise',
				'/manage/promotion/advertise.php' => 'Khuyến mãi',
				'/account/logout.php' => 'Thoát',
		);
	}
	$r = $_SERVER['REQUEST_URI'];
	if (preg_match('#/manage/(\w+)/#',$r, $m)) {
		$l = "/manage/{$m[1]}/index.php";
	} else $l = '/manage/misc/index.php';
	return current_link($l, $a);
}

function current_backend_new() {
	global $INI;
	$a = array(
			'/manage/misc/index.php' => 'Home',
			'/manage/team/index.php' => 'Deal',
			'/manage/order/index.php' => 'Đơn hàng',
			'/manage/coupon/index.php' => '<span class="pgg">Phiếu<br /> giảm giá</span>',
			'/manage/user/index.php' => 'Thành viên',
			'/manage/partner/index.php' => 'Đối tác',
			'/manage/market/index.php' => 'Marketing',
			'/manage/category/index.php' => 'Danh mục',
			'/manage/system/index.php' => 'Hệ thống',
			'/account/logout.php' => 'Thoát',
	);
	$r = $_SERVER['REQUEST_URI'];
	if (preg_match('#/manage/(\w+)/#',$r, $m)) {
		$l = "/manage/{$m[1]}/index.php";
	} else $l = '/manage/misc/index.php';
	//return current_link($l, $a);
	return current_link_new($l, $a);
}

function current_biz() {
	global $INI;
	$a = array(
			'/biz/index.php' => 'Home',
			'/biz/settings.php' => 'Đối tác',
			'/biz/coupon.php' => $INI['system']['couponname'] . 'Danh sách',
	);
	$r = $_SERVER['REQUEST_URI'];
	if (preg_match('#/biz/coupon#',$r)) $l = '/biz/coupon.php';
	elseif (preg_match('#/biz/settings#',$r)) $l = '/biz/settings.php';
	else $l = '/biz/index.php';
	return current_link($l, $a);
}

function current_forum($selector='index') {
	global $city;
	$a = array(
			'/forum/index.php' => 'Tất cả',
			'/forum/city.php' => "{$city['name']} Discuss",
			'/forum/public.php' => 'Public Discuss',
	);
	if (!$city) unset($a['/forum/city.php']);
	$l = "/forum/{$selector}.php";
	return current_link($l, $a, true);
}

function current_city($cename, $citys) {
	$link = "/city.php?ename={$cename}";
	$links = array();
	foreach($citys AS $city) {
		$links["/city.php?ename={$city['ename']}"] = $city['name'];
	}
	return current_link($link, $links);
}

function current_coupon_sub($selector='index') {
	$selector = $selector ? $selector : 'index';
	$a = array(
		'/coupon/index.php' => 'not used',
		'/coupon/consume.php' => 'used',
		'/coupon/expire.php' => 'expired',
	);
	$l = "/coupon/{$selector}.php";
	return current_link($l, $a);
}

function current_account($selector='/account/settings.php') {
	global $INI;
	$a = array(
		'/order/index.php' => 'Đơn hàng',
		'/coupon/index.php' => 'Phiếu thưởng',//'My ' . $INI['system']['couponname'],
		'/credit/index.php' => 'Số dư',
		'/account/settings.php' => 'Tài khoản',
	);
	return current_link($selector, $a, true);
}

function current_about($selector='us') {
	global $INI;
	$a = array(
		'/about/us.php' => 'Giới thiệu ' . $INI['system']['abbreviation'],
		'/about/contact.php' => 'Liên hệ',
		'/about/job.php' => 'Công việc',
		'/about/privacy.php' => 'Quy định',
		'/about/terms.php' => 'Điều khoản sử dụng',
	);
	$l = "/about/{$selector}.php";
	return current_link($l, $a, true);
}

function current_help($selector='faqs') {
	global $INI;
	$a = array(
		'/help/tour.php' => 'Tour ' . $INI['system']['abbreviation'],
		'/help/faqs.php' => 'FAQs',
		'/help/about.php' => 'What is ' . $INI['system']['abbreviation'],

	);
	$l = "/help/{$selector}.php";
	return current_link($l, $a, true);
}

function current_order_index($selector='index') {
	$selector = $selector ? $selector : 'index';
	if(isset($_GET['ver']) &&$_GET['ver']=='fb')
	$ver="&ver=fb";
	$a = array(
		'/order/index.php?s=index'.$ver => 'Tất cả ',
		'/order/index.php?s=unconfirm'.$ver => 'Chưa xác nhận',
		'/order/index.php?s=unpay'.$ver => 'Chưa thanh toán ',
		'/order/index.php?s=confirmed'.$ver => 'Đã xác nhận',
		'/order/index.php?s=paid'.$ver => 'Đã thanh toán',
		'/order/index.php?s=reward'.$ver => 'Đơn hàng khuyến mãi',
	);
	$l = "/order/index.php?s={$selector}";
	return current_link($l, $a, true);
}

function current_order_index_new($child=false) {
	if(isset($_GET['ver']) &&$_GET['ver']=='fb')
	$ver="&ver=fb";
	$parent_menu=array(
		'Đơn hàng bình thường'=>URL_HOME.'/order/index.php'.$ver,
		'Đơn hàng khuyến mãi' =>URL_HOME.'/order/index.php?s=reward'.$ver,
		'Tài khoản'  => URL_HOME.'/account/settings.php'.$ver,
	);
	$submenu =array(
		URL_HOME.'/order/index.php?s=index'.$ver => 'Tất cả ',
		URL_HOME.'/order/index.php?s=unconfirm'.$ver => 'Chưa xác nhận',
		URL_HOME.'/order/index.php?s=unpay'.$ver => 'Chưa thanh toán ',
		URL_HOME.'/order/index.php?s=confirmed'.$ver => 'Đã xác nhận',
		URL_HOME."/order/index.php?s=paid".$ver => "Đã thanh toán"
	);
	$default=URL_HOME."/order/index.php".$ver;
	$menu="";
	echo "<ul class='tab_ac'>";
	foreach($parent_menu as $k=>$v)
	{
		if(strcmp($v,URL_HOME.$_SERVER['REQUEST_URI'])==0)
		$menu.= "<li class=\"active\"><a href=\"{$v}\">{$k}</a></li>";
		else
		$menu.= "<li class=\"\"><a href=\"{$v}\">{$k}</a></li>";
	}
	$menu.="</ul>";
	if(strpos(URL_HOME.$_SERVER['REQUEST_URI'],'reward')===false &&$child==true)
	{
		$i=0;
		$menu.='<div class="sub_menu">';
		foreach($submenu as $k=>$v)
		{
			if($i==0)
			$menu.= "<a href=\"{$k}\" class='active'>{$v}</a>";
			else
			$menu.= "<a href=\"{$k}\">{$v}</a>";
			$i++;
		}
		$menu.="</div>";
	}
	return $menu;
}

function current_link($link, $links, $span=false) {
	$html = '';
	$span = $span ? '<span> | </span>' : '';
	foreach($links AS $l=>$n) {
		if (trim($l,'/')==trim($link,'/')) {
			$html .= "<li class=\"current\"><a href=\"{$l}\">{$n}</a>{$span}</li>";
		}
		else $html .= "<li><a href=\"{$l}\">{$n}</a>{$span}</li>";
	}
	return $html;
}

function sub_link($link, $links) {
	$html = '';
	foreach($links AS $l=>$n) {
		if (trim($l,'/')==trim($link,'/')) {
			$html .= "<li class=\"current\"><a href=\"{$l}\">{$n}</a><span></span></li>";
		}
		else $html .= "<li><a href=\"{$l}\">{$n}</a><span></span></li>";
	}
	return $html;
}
function sub_link2($link, $links) {
	$html = '';
	foreach($links AS $l=>$n) {
		if (trim($l,'/')==trim($link,'/')) {
			$html .= "<li class=\"current\"><a href=\"{$l}\"><span>{$n}</span></a></li>";
		}
		else $html .= "<li><a href=\"{$l}\"><span>{$n}</span></a></li>";
	}
	return $html;
}
function current_link_new($link, $links, $span=false) {
	$html = '';
	$span = $span ? '<span> | </span>' : '';
	foreach($links AS $l=>$n) {
		if (trim($l,'/')==trim($link,'/')) {
			$html .= "<li class=\"current\"><a href=\"{$l}\">{$n}</a>{$span}</li>";
		}
		else $html .= "<li class=\"gh\"><a href=\"{$l}\">{$n}</a>{$span}</li>";
	}
	return $html;
}
/*
function current_link2($link, $links, $span=false) {
	global $INI;
	$html = '';
	$span = $span ? '<span></span>' : '';
	foreach($links AS $l=>$n) {
		if (trim($l,'/')==trim($link,'/')) {
			$html .= "<li class=\"first\"><a id=\"index\"  href=\"{$l}\">{$n}</a>{$span}</li>";
		}
		else {
			$trimstring = trim(trim($l,'/'),'.php');
			$pos = strpos($trimstring,'/');
			$idstring = $trimstring;
			if($pos){
				$idstring = str_replace('/','_',$trimstring);
			}
			if(strpos($l,'tourist')!=false)
				$html .= "<li><a id=\"{$idstring}\" href=\"{$l}\"><img src='".$INI['system']['wwwprefix']."/static/images/new_travel.png'/>{$n}</a>{$span}</li>";
			else
				$html .= "<li><a id=\"{$idstring}\" href=\"{$l}\">{$n}</a>{$span}</li>";
		}
	}
	return $html;
}
*/
function current_link2($link, $links, $span=false) {
	global $INI;
	$html = '';
	$span = $span ? '<span></span>' : '';
	foreach($links AS $l=>$n) {
		if (trim($l,'/')==trim($link,'/')) {
			$html .= "<li class=\"first\"><a href=\"{$l}\">{$n}</a>{$span}</li>";
		}
		else {
			$trimstring = trim(trim($l,'/'),'.php');
			$pos = strpos($trimstring,'/');
			$idstring = $trimstring;
			if($pos){
				$idstring = str_replace('/','_',$trimstring);
			}
			if(strpos($l,'tourist')!=false)
				$html .= "<li class=\"travel\"><a href=\"{$l}\"><img alt='Cùng mua theo nhóm, mua chung với các hotdeal, với  giá cực rẻ mỗi ngày' src='".$INI['system']['wwwprefix']."/static/images/new_travel.png'/>{$n}</a>{$span}</li>";
			else if(strpos($l,'tonghop')!=false)
			{
				$html .= "<li class=\"travel\"><a href=\"{$l}\" target='_blank'><img alt='Cùng mua theo nhóm, mua chung với các hotdeal, với  giá cực rẻ mỗi ngày' src='".$INI['system']['wwwprefix']."/static/images/new_total.png'/>{$n}</a>{$span}</li>";
			}
			else
				$html .= "<li><a alt='Cùng mua theo nhóm, mua chung với các hotdeal, với  giá cực rẻ mỗi ngày' href=\"{$l}\">{$n}</a>{$span}</li>";
		}
	}

	return $html;
}
/* manage current */
function mcurrent_misc($selector=null) {
	$a = array(
		'/manage/misc/index.php' => 'Home',
		'/manage/misc/ask.php' => 'Hỏi - Đáp',
		'/manage/misc/feedback.php' => 'Phản hồi',
		'/manage/misc/subscribe.php' => 'Subscribe',
		'/manage/misc/invite.php' => 'Mời bạn bè',
		'/manage/misc/money.php' => 'Số tiền',
		'/manage/misc/count.php' => 'Thống kê',
		'/manage/misc/count_team.php' => 'Thống kê phát sinh',
		'/manage/misc/lottery.php' => 'Xổ Số',
		'/manage/misc/top_customer.php' => 'KH Thân Thiết',
		'/manage/bulletin/index.php' => 'Thông báo'
	);
	$l = "/manage/misc/{$selector}.php";
	return current_link($l,$a,true);
}

function mcurrent_misc_money($selector=null){
	$selector = $selector ? $selector : 'store';
	$a = array(
		'/manage/misc/money.php?s=store' => 'Offline Topup',
		'/manage/misc/money.php?s=charge' => 'Online Topup',
		'/manage/misc/money.php?s=withdraw' => 'Rút tiền',
		'/manage/misc/money.php?s=cash' => 'Tiền mặt',
		'/manage/misc/money.php?s=refund' => 'Refund',
	);
	$l = "/manage/misc/money.php?s={$selector}";
	return current_link($l, $a);
}

function mcurrent_misc_invite($selector=null){
	$selector = $selector ? $selector : 'index';
	$a = array(
		'/manage/misc/invite.php?s=index' => 'Mời bạn bè',
		'/manage/misc/invite.php?s=record' => 'Ưu đãi',
	);
	$l = "/manage/misc/invite.php?s={$selector}";
	return current_link($l, $a);
}
//comment by Vudinh on 02/02/2011
/*function mcurrent_order($selector=null) {
 $a = array(
 '/manage/order/index.php' => 'hiện tại',
 '/manage/order/pay.php' => 'đã thanh toán',
 '/manage/order/unpay.php' => 'chưa thanh toán',
 );
 $l = "/manage/order/{$selector}.php";
 return current_link($l,$a,true);
 }*/
function mcurrent_user($selector=null) {
	$a = array(
		'/manage/user/index.php' => 'Danh sách thành viên',
		'/manage/user/manager.php' => 'Danh sách admin'
	);
	$l = "/manage/user/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_team($selector=null) {
	$a = array(
		'/manage/team/index.php' => 'Đang hoạt động',
		'/manage/team/success.php' => 'Thành công',
		'/manage/team/failure.php' => 'Thất bại',
		'/manage/team/create.php' => 'Thêm',
		'/manage/team/dealinfo.php' => 'Xem Thông Tin Deal',
		'/manage/team/sort.php' => 'Sắp deal',
		'/manage/team/delivery.php' => 'Giao Nhận',
		'/manage/team/statistics.php' => 'Thống kê',
	);
	$l = "/manage/team/{$selector}.php";
	return current_link($l,$a,true);
}

function mcurrent_feedback($selector=null) {
	$a = array(
		'/manage/feedback/index.php' => 'Tất cả',
	);
	$l = "/manage/feedback/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_coupon($selector=null) {
	$a = array(
		'/manage/coupon/index.php' => 'Không dùng',
		'/manage/coupon/consume.php' => 'Sử dụng',
		'/manage/coupon/expire.php' => 'Hết hạn',
		'/manage/coupon/card.php' => 'Website chứng nhận',
		'/manage/coupon/cardcreate.php' => 'Tạo chứng nhận',
	);
	$l = "/manage/coupon/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_category($selector=null) {
	$zones = get_zones();
	$a = array();
	foreach( $zones AS $z=>$o ) {
		$a['/manage/category/index.php?zone='.$z] = $o;
	}
	$l = "/manage/category/index.php?zone={$selector}";
	return current_link($l,$a,true);
}
function mcurrent_partner($selector=null) {
	$a = array(
		'/manage/partner/index.php' => 'Danh sách đối tác',
		'/manage/partner/create.php' => 'Thêm đối tác',
		'/manage/partner/branch/index.php' => 'Danh sách chi nhánh',
		'/manage/partner/branch/create.php' => 'Thêm chi nhánh',
		'/manage/partner/forminsertmobile.php' => 'Thêm Sdt Đối Tác',
	);
	$l = "/manage/partner/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_market($selector=null) {
	$a = array(
		'/manage/market/index.php' => 'Gửi Email',
		'/manage/market/sms.php' => 'Gửi SMS nhóm',
		'/manage/market/down.php' => 'Tải User info',
	);
	$l = "/manage/market/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_market_down($selector=null) {
	$a = array(
		'/manage/market/down.php' => 'Số di động',
		'/manage/market/downemail.php' => 'Email',
		'/manage/market/downorder.php' => 'Orders',
		'/manage/market/downcoupon.php' => 'Coupons',
		'/manage/market/downuser.php' => 'User Info',
	);
	$l = "/manage/market/{$selector}.php";
	return current_link($l,$a,true);
}

function mcurrent_system($selector=null) {
	$a = array(
		'/manage/system/index.php' => 'Cơ bản',
		'/manage/system/bulletin.php' => 'Announce',
		'/manage/system/pay.php' => 'Thanh toán',
		'/manage/system/email.php' => 'Email',
		'/manage/system/sms.php' => 'SMS',
		'/manage/system/city.php' => 'City',
		'/manage/system/page.php' => 'Page',
		'/manage/system/cache.php' => 'Cache',
		'/manage/system/skin.php' => 'Skin',
		'/manage/system/template.php' => 'Template',
		'/manage/system/upgrade.php' => 'Nâng cấp',
	);
	$l = "/manage/system/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_order($selector=null) {
	$a = array(
		'/manage/order/index.php' => 'Danh sách đơn hàng',
		'/manage/order/manage_smsorder_index.php' => 'SMSpayment',
		'/manage/order/report_order.php' => 'Thống kê đơn hàng',
		'/manage/order/manage_cashorder_index.php' => 'CASHpayment',
		'/manage/order/create_notes.php' => 'Thêm ghi chú',
		'/manage/order/static_notes_index.php' => 'Danh sách ghi chú',
		'/manage/order/enterprise.php' => 'Enterprise'
		
	);
	$l = "/manage/order/{$selector}.php";
	return sub_link($l,$a);
}

function mcurrent_agent($selector=null) {
	$a = array(
		'/manage/agent/index.php' => 'Danh sách Agent',
		'/manage/agent/create.php' => 'Thêm Agent',
		//'/manage/agent/edit_commission_rate.php' => 'Sửa Lợi Nhuận - Agent',
		//'/manage/agent/edit_commission_rate_deal.php' => 'Sửa Lợi Nhuận - Deal',
		'/manage/agent/AgentCopyComission.php' => 'Sao Lưu Tỉ Lệ',

	);
	if(isset($_GET['agent_id'])) $a['/manage/agent/edit.php'] = 'Sửa thông tin agent';
	$l = "/manage/agent/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_express($selector=null) {
	$a = array(
		'/manage/express/list.php' => 'Danh sách Express',
		'/manage/express/create.php' => 'Tạo Express',
		'/manage/express/index.php' => 'Điều Phối Giao Nhận',
		'/manage/express/distribute.php' => 'Điều Phối Đơn Hàng',
		//'/manage/express/not_distribute.php' => 'Đơn hàng Độc Lập',
		'/manage/express/freeorder.php' => 'Đơn hàng Độc Lập',
		'/manage/express/viewall.php' => 'Xem',

	);
	if(isset($_GET['express_id'])) $a['/manage/express/edit.php'] = 'Sửa thông tin express';
	$l = "/manage/express/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_card($selector=null) {
	$a = array(
		'/manage/card/check.php' => 'Check',
		'/manage/card/index.php' => 'Danh sách Group',
		'/manage/card/distribute.php' => 'Điều Phối Group',
	);
	if(isset($_GET['group_id'])) $a['/manage/card/detail.php'] = 'Group Detail';
	$l = "/manage/card/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_enterprise($selector=null) {
	$a = array(
			'/manage/enterprise/list.php' => 'Danh Sách',
			'/manage/enterprise/index.php' => 'Đang chạy',
			'/manage/enterprise/expire.php' => 'Hết hạn',
			'/manage/enterprise/confirm.php' => 'Đã duyệt',
			'/manage/enterprise/pending.php' => 'Chưa duyệt',
			'/manage/enterprise/delete.php' => 'Đã xóa',
			'/manage/enterprise/typetrans.php' => 'Loại giao dịch',
			'/manage/enterprise/feedback.php' => 'Feedback',
			'/manage/enterprise/vote.php' => 'Vote',
	);
	if(isset($_GET['enterprise_id'])) $a['/manage/enterprise/history.php'] = 'History Detail';
	$l = "/manage/enterprise/{$selector}.php";
	return current_link($l,$a,true);
}
function mcurrent_promotion($selector=null) {
	$a = array(
		'/manage/promotion/advertise.php' => 'Theo Tờ rơi',
		'/manage/promotion/time_promotion.php' => 'Theo thời gian',
		'/manage/promotion/saleoff/index.php' => 'Km đặc biệt'


	);
	$l = "/manage/promotion/{$selector}.php";
		return current_link($l,$a,true);
}
function mcurrent_bulletin($selector=null) {
	$a = array(
		'/manage/bulletin/index.php' => 'Quản lý thông báo',
		'/manage/bulletin/create.php' => 'Tạo thông báo'
	);
	$l = "/manage/bulletin/{$selector}.php";
		return current_link($l,$a,true);
}

