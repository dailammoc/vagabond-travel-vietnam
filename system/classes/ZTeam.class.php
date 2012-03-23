<?php
class ZTeam
{
	static public function DeleteTeam($id) {
		$orders = Table::Fetch('order', array($id), 'team_id');
		foreach( $orders AS $one ) {
			if ($one['state']=='pay') return false;
			if ($order['card_id']) {
				Table::UpdateCache('card', $order['card_id'], array(
					'team_id' => 0,
					'order_id' => 0,
					'consume' => 'N',
				));
			}
			Table::Delete('order', $one['id']);
		}
		return Table::Delete('team', $id);
	}

	static public function BuyOne($order) {
		$order = Table::FetchForce('order', $order['id']);
		$team = Table::FetchForce('team', $order['team_id']);
		$plus = $team['conduser']=='Y' ? 1 : $order['quantity'];
		$team['now_number'] += $plus;
		if ( $team['max_number']>0 
				&& $team['now_number'] >= $team['max_number'] ) {
			$team['close_time'] = time();
		}
		if($team['min_number'] > 0 &&  $team['now_number'] == $team['min_number']){
			$team['updated_time'] = time();			
		}
		Table::UpdateCache('team', $team['id'], array(
			'close_time' => $team['close_time'],
			'now_number' => array( "`now_number` + {$plus}", ),
			'updated_time' => $team['updated_time'], 
		));

		/* cash flow */
		ZFlow::CreateFromOrder($order);
		/* order : send coupon ? */
		ZCoupon::CheckOrder($order);
		/* order : invite buy */
		ZInvite::CheckInvite($order);
	}
	
	static public function updateNowNumberByStatus($teamid, $statusZero){
		$team = Table::FetchForce('team',$teamid);
		$now_number = $team['now_number'];
		if($statusZero == 'success'){
			Table::UpdateCache('team',$teamid,array(
				'now_number' => $now_number + 1,
			));
		}else if($statusZero == 'canceled'){
			Table::UpdateCache('team',$teamid,array(
				'now_number' => $now_number - 1,
			));
		}
	}
	
}
?>
