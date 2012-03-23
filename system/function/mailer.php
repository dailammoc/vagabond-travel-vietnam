<?php
function mail_custom($emails = array (), $subject, $message) {
	global $INI;
	settype($emails, 'array');

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'UTF-8',

	);

	$from = $INI['mail']['from'];
	$to = array_shift($emails);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options, $emails);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options, $emails);
	}
}

function mail_sign($user) {
	global $INI;
	if (empty ($user))
		return true;
	$from = $INI['mail']['from'];
	$to = $user['email'];

	$vars = array (
		'user' => $user,

	);
	$message = render('mail_sign_verify', $vars);
	//$subject = 'Cám ơn bạn đã '.$INI['system']['sitename'].', please verify this Email';
	$subject = 'Thư xác nhận đăng ký thành viên gửi từ 51deal.vn';
	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_sign_id($id) {
	$user = Table :: Fetch('user', $id);
	mail_sign($user);
}

function mail_sign_email($email) {
	$user = Table :: Fetch('user', $email, 'email');
	mail_sign($user);
}

function mail_repass($user) {
	global $INI;
	if (empty ($user))
		return true;
	$from = $INI['mail']['from'];
	$to = $user['email'];

	$vars = array (
		'user' => $user,

	);
	$message = render('mail_repass', $vars);
	//$subject = $INI['system']['sitename'] . ' Reset password';
	$subject = "Thư  xác nhận yêu cầu quên mật khẩu gửi từ 51deal.vn";

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_ask($user, $content) {
	global $INI;
	if (empty ($user))
		return true;
	$from = $INI['mail']['from'];
	$to = $user['email'];

	$vars = array (
		'user' => $user,
		'content' => $content,

	);
	$message = render('mail_ask', $vars);
	//$subject = $INI['system']['sitename'] . ' Q&A';
	$subject = "Thông báo xác nhận đã nhận câu hỏi của người dùng gửi từ 51deal.vn";
	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_send_request($orderid, $content) {
	global $INI;
	$from = $INI['mail']['from'];
	$to = $INI['mail']['support'];

	$order = Table :: Fetch('order', $orderid);
	$team = Table :: Fetch('team', $order['team_id']);
	$user = Table :: Fetch('user', $order['user_id']);

	$vars = array (
		'user' => $user,
		'content' => $content,
		'order' => $order,
		'team' => $team
	);
	$message = render('mail_send_request', $vars);
	$subject = 'Yêu cầu hỗ trợ từ  ' . $user['username'];

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_send_invite($content) {
	global $INI;
	$from = $INI['mail']['from'];
	$to = $content['email'];

	$vars = array (
		'f' => $content
	);
	$message = render('mail_send_invite', $vars);
	$subject = 'Thư mời từ người sử dụng,' . $f['email'];

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_cashpayment($user, $team, $order) {
	global $INI;

	$from = $INI['mail']['from'];
	$to = $user['email'];

	$vars = array (
		'user' => $user,
		'order' => $order,
		'team' => $team
	);
	//formatMoney($order['origin']);
	$message = render('mail_cashpayment', $vars);
	$subject = 'Yêu cầu hỗ trợ từ  ' . $user['username'];

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_answ($user, $content, $id, $team) {
	global $INI;
	if (empty ($user))
		return true;
	$from = $INI['mail']['from'];
	$to = $user['email'];

	$vars = array (
		'user' => $user,
		'content' => $content,
		'id' => $id,
		'team' => $team,

	);
	$message = render('mail_answ', $vars);
	//$subject = $INI['system']['sitename'] . ' Q&A';
	$subject = "Thông báo xác nhận đã trả lời câu hỏi của người dùng gửi từ 51deal.vn";
	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_changepassok($user) {
	global $INI;
	if (empty ($user))
		return true;
	$from = $INI['mail']['from'];
	$to = $user['email'];

	$vars = array (
		'user' => $user,

	);
	$message = render('mail_changepassok', $vars);
	//$subject = $INI['system']['sitename'] . ' Reset password';
	$subject = "Thư xác nhận  đổi mật khẩu thành công gửi từ 51deal.vn";

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_send_feedback($content) {
	global $INI;
	$from = $INI['mail']['from'];
	$to = $INI['mail']['support'];
	//$to=$INI['mail']['from'];

	$vars = array (
		'f' => $content
	);
	$message = render('mail_send_feedback', $vars);
	$subject = 'Thư liên hệ từ nhà cung cấp,' . $f['company'];

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}


function mail_send_contact($content) {
	global $INI;
	$from = $INI['mail']['from'];
	$to = $INI['mail']['support'];

	$vars = array (
		'f' => $content
	);
	$message = render('mail_send_contact', $vars);
	$subject = 'Thư liên hệ từ người sử dụng,' . $f['realname'];

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_subscribe($city, $team, $partner, $subscribe) {
	global $INI;
	$week = array (
		'S',
		'M',
		'T',
		'W',
		'T',
		'F',
		'S'
	);
	$today = date('m.d.Y') . $week[date('w')];
	$vars = array (
		'today' => $today,
		'team' => $team,
		'city' => $city,
		'subscribe' => $subscribe,
		'partner' => $partner,
		'help_email' => $INI['subscribe']['helpemail'],
		'help_mobile' => $INI['subscribe']['helpphone'],
		'notice_email' => $INI['mail']['reply'],

	);
	$message = render('mail_subscribe_team', $vars);
	$mesasge = mb_convert_encoding($mesage, 'UTF-8', 'UTF-8');
	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'UTF-8',

	);
	$from = $INI['mail']['from'];
	$to = $subscribe['email'];
	$subject = $INI['system']['sitename'] . "Today's Deal: {$team['title']}";

	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_destroy($customer,$email='') {
	global $INI;
	$from = $INI['mail']['from'];
	$to = $email;

	//$vars = array('f' => $content);
	//$message = render('mail_send_contact', $vars);
	$message = "Khách hàng có email là <strong> " . $customer . " </strong>yêu cầu 51deal.vn không gửi mail deal mới hằng ngày";
	$subject = 'Thư yêu cầu hủy gửi mail mỗi ngày';

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_inform_buy_order($toAddress,$order_id, $order, $team){
	global $INI;
	$from = $INI['mail']['from'];

	$vars = array (
		'email'=>$toAddress,
		'order_id' => $order_id,
		'order' => $order,
		'team' => $team
	);
	$message = render('mail_inform_buy_order', $vars);
	//$subject = $INI['system']['sitename'] . ' Reset password';
	$subject = "Thông báo đặt hàng thành công từ 51deal.vn";

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',
	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $toAddress, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $toAddress, $subject, $message, $options);
	}
}

function mail_send_register_enterprise($data) {
	global $INI;
	if (empty ($data))
		return true;
	$from = $INI['mail']['from'];
	$to = $data['email'];
	$message = render('mail_send_register_enterprise', $vars);
	$subject = 'Thư xác nhận đăng ký Doanh nghiệp gửi từ 51deal.vn';
	$options = array (
			'contentType' => 'text/html',
			'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_sign_enterprise($data) {
	global $INI;
	if (empty ($data))
		return true;
	$from = $INI['mail']['from'];
	$to = $data['email'];

	$vars = array (
		'username' => $data['username']
	);
	$message = render('mail_signup_enterprise', $vars);
	$subject = 'Thư xác nhận đăng ký Doanh nghiệp gửi từ 51deal.vn';
	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_repass_enterprise($user) {
	global $INI;
	if (empty ($user))
		return true;
	$from = $INI['mail']['from'];
	$to = $user['email'];

	$vars = array (
		'user' => $user,

	);
	$message = render('mail_repass_enterprise', $vars);
	//$subject = $INI['system']['sitename'] . ' Reset password';
	$subject = "Thư  xác nhận yêu cầu quên mật khẩu Doanh nghiệp gửi từ 51deal.vn";

	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}

function mail_vote_enterprise($data) {
	global $INI;
	if (empty ($data))
		return true;
	$from = $INI['mail']['from'];
	$to = $data['email'];

	$vars = array (
		'data' => $data,

	);
	$message = render('mail_vote_enterprise', $vars);
	$subject = "Thư  đánh giá chất lượng doanh nghiệp gửi từ 51deal.vn";
	$options = array (
		'contentType' => 'text/html',
		'encoding' => 'utf-8',

	);
	if ($INI['mail']['mail'] == 'mail') {
		Mailer :: SendMail($from, $to, $subject, $message, $options);
	} else {
		Mailer :: SmtpMail($from, $to, $subject, $message, $options);
	}
}