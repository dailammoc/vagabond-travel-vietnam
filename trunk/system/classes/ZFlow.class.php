<?php
class ZFlow {
	static public function CreateFromOrder($order) {
		if ( $order['credit'] == 0 ) return 0;

		//update user money;
		$user = Table::Fetch('user', $order['user_id']);
		Table::UpdateCache('user', $order['user_id'], array(
					'money' => array( "money - {$order['credit']}" ),
					));

		$u = array(
				'user_id' => $order['user_id'],
				'money' => $order['credit'],
				'direction' => 'expense',
				'action' => 'buy',
				'detail_id' => $order['team_id'],
				'create_time' => time(),
				);
		$q = DB::Insert('flow', $u);
	}

	static public function CreateFromCoupon($coupon) {
		if ( $coupon['credit'] <= 0 ) return 0;

		//update user money;
		$user = Table::Fetch('user', $coupon['user_id']);
		Table::UpdateCache('user', $coupon['user_id'], array(
					'money' => array( "money + {$coupon['credit']}" ),
					));

		$u = array(
				'user_id' => $coupon['user_id'],
				'money' => $coupon['credit'],
				'direction' => 'income',
				'action' => 'coupon',
				'detail_id' => $coupon['id'],
				'create_time' => time(),
				);
		return DB::Insert('flow', $u);
	}

	static public function CreateFromRefund($order) {
		global $login_user_id;
		if ( $order['state']!='pay' || $order['origin']<=0 ) return 0;

		//update user money;
		$user = Table::Fetch('user', $order['user_id']);
		Table::UpdateCache('user', $order['user_id'], array(
					'money' => array( "money + {$order['origin']}" ),
					));

		//update order
		Table::UpdateCache('order', $order['id'], array('state'=>'unpay'));

		$u = array(
				'user_id' => $order['user_id'],
				'admin_id' => $login_user_id,
				'money' => $order['origin'],
				'direction' => 'income',
				'action' => 'refund',
				'detail_id' => $order['team_id'],
				'create_time' => time(),
				);
		return DB::Insert('flow', $u);
	}

	static public function CreateFromInvite($invite) {
		global $login_user_id;
		if ( $invite['pay']!='Y' && $INI['system']['invitecredit']<=0 ) return 0;

		//update user money;
		$user = Table::Fetch('user', $invite['user_id']);
		Table::UpdateCache('user', $invite['user_id'], array(
					'money' => array( "money + {$invite['credit']}" ),
					));

		$u = array(
				'user_id' => $invite['user_id'],
				'admin_id' => $login_user_id,
				'money' => $invite['credit'],
				'direction' => 'income',
				'action' => 'invite',
				'detail_id' => $invite['other_user_id'],
				'create_time' => $invite['buy_time'],
				);
		return DB::Insert('flow', $u);
	}
	static public function UpdateUserCredit($user_id,$money,$date)
	{
		$money=abs($money);
		DB::Update('user_credit',array(
			'user_id' => $user_id
			),array(
				'credit' => array( "credit + {$money}" ),
				'updated_time' => $date

		));
		/*begin update topup_logs*/
		$content = "Function UpdateUserCredit +".$money;
		$date_topup = date('H:i:s d-m-Y',time());
		$dataInsert = array(
			'user_id'=> $user_id,
			'amount'=> $money,
			'content'=> $content,
			'topup_by'=> 0,
			'topup_time'=> $date_topup,
		);
		DB::Insert('topup_logs', $dataInsert);
		/*end update topup_logs*/

	}
	static public function UpdateUserCreditMark($user_id,$mark,$date)
	{
		$mark=abs($mark);
		DB::Update('user_credit',array(
		'user_id' => $user_id
		),array(
		'mark' => array( "mark + {$mark}" ),
		'updated_time' => $date

		));
	}
	static public function CreateFromStore($user_id=0, $money=0) {
		global $login_user_id;
		$money = intval($money);
		if ( $money == 0 || $user_id <= 0)  return;

		//update user money;
		$user = Table::Fetch('user', $user_id);
		Table::UpdateCache('user', $user_id, array(
					'money' => array( "money + {$money}" ),
					));

		/* switch store|withdraw */
		$direction = ($money>0) ? 'income' : 'expense';
		$action = ($money>0) ? 'store' : 'withdraw';
		$money = abs($money);
		/* end swtich */

		$u = array(
				'user_id' => $user_id,
				'admin_id' => $login_user_id,
				'money' => $money,
				'direction' => $direction,
				'action' => $action,
				'detail_id' => 0,
				'create_time' => time(),
				);
		return DB::Insert('flow', $u);
	}

	static public function CreateFromCharge($money,$user_id,$time,$service='alipay'){
		global $option_service;
		if (!$money || !$user_id || !$time) return 0;
		$pay_id = "charge-{$user_id}-{$time}";
		$pay = Table::Fetch('pay', $pay_id);
		if ( $pay ) return 0;
		$order_id = ZOrder::CreateFromCharge($money,$user_id,$time,$service);
		if (!$order_id) return 0;

		//insert pay record
		$pay = array(
			'id' => $pay_id,
			'order_id' => $order_id,
			'bank' => $option_service[$service],
			'currency' => 'CNY',
			'service' => $service,
			'create_time' => $time,
		);
		DB::Insert('pay', $pay);
		//end//

		//update user money;
		$user = Table::Fetch('user', $user_id);
		Table::UpdateCache('user', $user_id, array(
					'money' => array( "money + {$money}" ),
					));

		$u = array(
				'user_id' => $user_id,
				'admin_id' => 0,
				'money' => $money,
				'direction' => 'income',
				'action' => 'charge',
				'detail_id' => $pay_id,
				'create_time' => $time,
				);
		return DB::Insert('flow', $u);
	}
}
?>